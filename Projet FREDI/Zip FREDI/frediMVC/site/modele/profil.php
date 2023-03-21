<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include_once "$racine/modele/bd.inc.php";

    include_once "$racine/modele/inscription.php";


    function getDemandeurRL($numDemandeur){
        $db=connexionPDO();
        $sql="SELECT *
            FROM demandeur_representant_legal
            WHERE numDemandeur=?;";
        $req = $db->prepare($sql);
        $req->execute([$numDemandeur]);
        return $req->fetch();
    }

    function getDemandeurAD($numLicence){
        $db=connexionPDO();
        $sql="SELECT *
            FROM adherent_demandeur ad
            JOIN adherent a
            ON a.numeroLicence=ad.numeroLicence
            WHERE a.numeroLicence=?;";
        $req = $db->prepare($sql);
        $req->execute([$numLicence]);
        return $req->fetch();
    }

     function deleteAdDemandeur($numLicence){
            $db = connexionPDO();
                $req1 = $db->prepare("DELETE FROM adherent_demandeur WHERE numeroLicence=?;");
                $req2 = $db->prepare("DELETE FROM adherent WHERE numeroLicence=?;");
                $req1->execute([$numLicence]);
                $req2->execute([$numLicence]);
                $req1->fetchAll();
                return $req2->fetchAll();
    }


    function sauvegardeInfosDemandeur($newMail,$nom,$prenom,$rue,$cp,$ville,$datenaiss,$mdp){
        $db=connexionPDO();
        $ancienMail = $_SESSION["mailD"]; 
        $nom = maj($nom);
        $prenom = maj($prenom);
        $num=$_SESSION['numD'];
        if($ancienMail == $newMail || mailIsUinique($newMail)){
            $req = $db->prepare(
            "UPDATE demandeur_representant_legal SET adresseMail=?,nom=?,prenom=?,dateNaiss=?,rue=?,cp=?,ville=?,mdp=? WHERE numDemandeur=?;");
            $req->execute([$newMail,$nom,$prenom,$datenaiss,$rue,$cp,$ville,$mdp,$num]);
            $req->fetch();

            $_SESSION['mailD'] = $newMail;
            $_SESSION['nomD'] = $nom;
            $_SESSION['prenomD'] = $prenom;
            return true;
        }else{
           return false;
       }
    }


    function sauvegardeInfosAdherentDemandeur($idLigue,$numLicence,$newMail,$nom,$prenom,$rue,$cp,$ville,$datenaiss,$mdp){
        $db=connexionPDO();
        $ancienMail = $_SESSION["mailD"]; 
        $ancienNumLicence = $_SESSION["numD"];
        $nom = maj($nom);
        $prenom = maj($prenom);
        if($ancienMail == $newMail || mailIsUinique($newMail)){
            if(ligueIsExist($idLigue)==true){
                if($ancienNumLicence == $numLicence || licenceIsUnique($numLicence)){
                    $d=deleteAdDemandeur($ancienNumLicence);

                    $req1=$db->prepare("INSERT INTO adherent VALUES (?,?,?,?);");
                    $req1->execute([$numLicence,$prenom,$nom,$idLigue]);
                    $req1->fetch();
        
                    $req2=$db->prepare("INSERT INTO adherent_demandeur(numeroLicence,adresseMail,dateNaiss,rue,ville,cp,mdp) VALUES  (?,?,?,?,?,?,?);");
                    $req2->execute([$numLicence,$newMail,$datenaiss,$rue,$ville,$cp,$mdp]);
                    $req2->fetch();

                    $_SESSION['numD']=$numLicence;
                    $_SESSION['mailD'] = $newMail;
                    $_SESSION['nomD'] = $nom;
                    $_SESSION['prenomD'] = $prenom;
                    return true;    
                }else{
                    return false;
                }
            }
                
        }   
    }

    function resMsg($msg){
        return '<p style="color:blue"><b>'.$msg.'</b></p>';
    }
?>