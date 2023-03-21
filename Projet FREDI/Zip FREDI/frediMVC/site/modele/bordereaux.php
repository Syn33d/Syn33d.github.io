<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include_once "$racine/modele/bd.inc.php"; //pour une connexion à la base de données

    include_once "$racine/modele/inscription.php";

    function getNbrLinesByNumDemandeurRL($numDemandeur){
        $db = connexionPDO();
        $req = $db->prepare("
            SELECT numDemandeur
            FROM ligne_frais_representant_legal
            WHERE numDemandeur=?;
            ");
        $req->execute([$numDemandeur]);
        return $req->rowCount();
    }

    function getNbrLinesByNumDemandeurAD($numLicence){
        $db = connexionPDO();
        $req = $db->prepare("
            SELECT numeroLicence
            FROM ligne_frais_adherent
            WHERE numeroLicence=?;
            ");
        $req->execute([$numLicence]);
        return $req->rowCount();
    }

    function getAllDataByNumDemandeurRL($numDemandeur){
        $db = connexionPDO();
        $req = $db->prepare("SELECT numDemandeur,dateL,motif,trajet,coutTrajet,km,coutPeage,coutRepas,coutHebergement
                            FROM ligne_frais_representant_legal
                            WHERE numDemandeur=?
                            ;");
        $req->execute([$numDemandeur]);

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        return $resultat;
        }

        function getAllDataByNumDemandeurAD($numLicence){
            $db = connexionPDO();
            $req = $db->prepare("SELECT numeroLicence,dateL,motif,trajet,coutTrajet,km,coutPeage,coutRepas,coutHebergement
                                FROM ligne_frais_adherent
                                WHERE numeroLicence=?
                                ;");
            $req->execute([$numLicence]);

            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            while ($ligne) {
                $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
            }
            return $resultat;
        }

        function getLigueByNum($numLigue){
             $db = connexionPDO();
            $req = $db->prepare("SELECT rue,ville,cp
                                FROM ligue
                                WHERE numero=?
                                ;");
            $req->execute([$numLigue]);
            return $req->fetch();
        }

        function getLigueAD($numLicence){
             $db = connexionPDO();
            $req = $db->prepare("SELECT numero
                                FROM adherent
                                WHERE numeroLicence=?
                                ;");
            $req->execute([$numLicence]);
            return $req->fetch();
        }

        function deleteByNumDemandeurRL($numDemandeur){
            $db = connexionPDO();
            $req = $db->prepare("DELETE FROM ligne_frais_representant_legal WHERE numDemandeur=?;");
            $req->execute([$numDemandeur]);
            return $req->fetchAll();
        }

         function deleteByNumDemandeurAD($numLicence){
            $db = connexionPDO();
            $req = $db->prepare("DELETE FROM ligne_frais_adherent WHERE numeroLicence=?;");
            $req->execute([$numLicence]);
            return $req->fetch();
        }

    function insertLineForNumDemandeurRL($numDemandeur,$date,$motif,$trajet,$coutTrajet,$km,$coutPeage,$coutRepas,$coutHebergement){
        $db = connexionPDO();
        $req = $db->prepare("
            INSERT INTO ligne_frais_representant_legal(numDemandeur,dateL,motif,numLigne,trajet,coutTrajet,km,coutPeage,coutRepas,coutHebergement)
            VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,?);
        ");
        $numLigne=getNbrLinesByNumDemandeurRL($numDemandeur);
        $req->execute([$numDemandeur,$date,$motif,$numLigne,$trajet,$coutTrajet,$km,$coutPeage,$coutRepas,$coutHebergement]);
        return $req->fetch();
    }

     function insertLineForNumDemandeurAD($numLicence,$date,$motif,$trajet,$coutTrajet,$km,$coutPeage,$coutRepas,$coutHebergement){
        $db = connexionPDO();
        $req = $db->prepare("
            INSERT INTO ligne_frais_adherent(numeroLicence,dateL,motif,numLigne,trajet,coutTrajet,km,coutPeage,coutRepas,coutHebergement)
            VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,?);
        ");
        $numLigne=getNbrLinesByNumDemandeurAD($numLicence);
        $req->execute([$numLicence,$date,$motif,$numLigne,$trajet,$coutTrajet,$km,$coutPeage,$coutRepas,$coutHebergement]);
        return $req->fetch();
    }

    function newAdherent($numLicence,$nom,$prenom,$numLigue){
        $db=connexionPDO();
        if(ligueIsExist($numLigue)){
            $sql1 = "INSERT INTO adherent VALUES (?,?,?,?);";
            $req = $db->prepare($sql1);
            $req->execute([$numLicence,$prenom,$nom,$numLigue]);
            $req->fetch();
            return true;
        }else{
            return false;
        }
    }

     function addAdToRL($numD,$numLicence){
        $db=connexionPDO();
            $sql1 = "INSERT INTO lier VALUES (?,?);";
            $req = $db->prepare($sql1);
            $req->execute([$numLicence,$numD]);
            return $req->fetch();
    }

     function deleteLien($numDemandeur){
            $db = connexionPDO();
            $req = $db->prepare("DELETE FROM lier WHERE numDemandeur=?;");
            $req->execute([$numDemandeur]);
            return $req->fetchAll();
        }

    function deleteAD($numDemandeur){
            $db = connexionPDO();
                $req2 = $db->prepare("DELETE FROM adherent WHERE numeroLicence IN ( SELECT numeroLicence FROM lier WHERE numDemandeur=?);");
                $req2->execute([$numDemandeur]);
                return $req2->fetchAll();
    }

    function getCurrYear(){
        $db = connexionPDO();
        $req = $db->prepare("SELECT YEAR(NOW());");
        $req->execute();
        return $req->fetch();
    }

    function getCurrDate(){
        $db = connexionPDO();
        $req = $db->prepare("SELECT DATE(NOW());");
        $req->execute();
        return $req->fetch();
    }


    function getAdByNumD($numD){
        $db = connexionPDO();
        $resultat=null;
        $req = $db->prepare("SELECT a.numeroLicence,nom,prenom,numero 
                            FROM lier l
                            JOIN adherent a
                            ON l.numeroLicence=a.numeroLicence
                            WHERE numDemandeur=?");
        $req->execute([$numD]);
        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
        return $resultat;
    }

    function getNbrOfAd($numDemandeur){
        $db = connexionPDO();
        $req = $db->prepare("SELECT l.numeroLicence 
                            FROM lier l
                            JOIN adherent a
                            ON l.numeroLicence=a.numeroLicence
                            WHERE numDemandeur=?
            ");
        $req->execute([$numDemandeur]);
        return $req->rowCount();
    }


       function transfertRL($numD){
        $db = connexionPDO();
        $req = $db->prepare("UPDATE demandeur_representant_legal SET transfert=1 WHERE numDemandeur=?;");
        $req->execute([$numD]);
        return $req->fetch();
    }

    function transfertAD($numD){
        $db = connexionPDO();
        $req = $db->prepare("UPDATE adherent_demandeur SET transfert=1 WHERE numeroLicence=?;");
        $req->execute([$numD]);
        return $req->fetch();
    }


       
    


?>