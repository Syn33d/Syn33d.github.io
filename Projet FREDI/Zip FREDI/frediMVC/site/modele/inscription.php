<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include_once "$racine/modele/bd.inc.php";

    function rndINT(){
        return random_int(0,300000);//genère un nombre aléatoire entre 0 et 300 000 
    }

    function ligueIsExist($idLigue){
        $db=connexionPDO();
        $sql="SELECT *
            FROM ligue
            WHERE numero=?;";
        $req = $db->prepare($sql);
        $req->execute([$idLigue]);
        $cnt = $req->rowCount();
        if($cnt == 0){
            return false;
        }else{
            return true;
        }
    }

    function licenceIsUnique($numLicence){//pour s'assurer qu'une licence est unique sur la base
        $db=connexionPDO();
        $req = $db->prepare(//on vérifie sur table demandeur_representant_legal
                "SELECT numeroLicence 
                FROM adherent
                WHERE numeroLicence=?
                LIMIT 1;"
            );
    
        $req2 = $db->prepare(//on vérifie sur table demandeur_representant_legal
            "SELECT numeroLicence 
            FROM adherent_demandeur
            WHERE numeroLicence=?
            LIMIT 1;"
        );
        $req->execute([$numLicence]);
        $req2->execute([$numLicence]);

        if($req->rowCount() == 0 && $req2->rowCount() == 0){
            return true;
        }else{
            return false;
        }
    }

    function getNewId(){
        $db=connexionPDO();
        $id = rndINT();
        $sql = "SELECT *
                FROM demandeur_representant_legal
                WHERE numDemandeur=?;";
        $req = $db->prepare($sql);
        $req->execute([$id]);
        while($req->rowCount() != 0){//pour verifier que l'id est unique on réitère la bloucle tant qu'il y a doublon
            $id = rndINT();
            $req = $db->prepare($sql);
            $req->execute([$id]);
        }
        return $id;
    }

    function mailIsUinique($mail){//pour s'assur q'une adresse mail est unique sur la base
        $db=connexionPDO();
        $req = $db->prepare(//on vérifie sur table demandeur_representant_legal
                "SELECT * 
                FROM demandeur_representant_legal
                WHERE adresseMail=?
                LIMIT 1;"
            );
        $req2 = $db->prepare(//on vérifie sur table adherent_demandeur
                "SELECT * 
                FROM adherent_demandeur
                WHERE adresseMail=?
                LIMIT 1;"
            );
        $req->execute([$mail]);
        $req2->execute([$mail]);

        if($req->rowCount() == 0 && $req2->rowCount() == 0){
            return true;
        }else{
            return false;
        }
    }

    function maj($str){//le str sera passer sous forme Mmmm
        $str = strtolower($str);
        $str = ucfirst($str);
        return $str;
    }

    function newDemandeur($mail,$nom,$prenom,$date,$rue,$cp,$ville,$mdp){
        $db=connexionPDO();
        $nom = maj($nom);
        $prenom = maj($prenom);
        $transfert=0;
        if(mailIsUinique($mail)){//on vérifier que le mail est unique sur la base
            $req = $db->prepare(
                "INSERT INTO demandeur_representant_legal
                VALUES (?,?,?,?,?,?,?,?,?,?);"
            );
            $req->execute([getNewId(),$mail,$nom,$prenom,$date,$rue,$cp,$ville,$mdp,$transfert]);//il manque la date de naissance pour un demandeur represantant légal
       
            return true;
        }else{
            return false;
        }
    }

    function newAdhrentDemandeur($numLigue,$numLicence,$mail,$dateNaiss,$nom,$prenom,$rue,$cp,$ville,$mdp){
        $db=connexionPDO();
        $nom = maj($nom);
        $prenom = maj($prenom);
        $transfert=0;
        if(mailIsUinique($mail) && ligueIsExist($numLigue)){//on vérifier que le mail est unique sur la base
            $sql1 = "INSERT INTO adherent
                    VALUES (?,?,?,?);";
            $sql2 = "INSERT INTO adherent_demandeur
                    VALUES (?,?,?,?,?,?,?,?);";

            $req = $db->prepare($sql1);
            $req->execute([$numLicence,$prenom,$nom,$numLigue]);

            $req = $db->prepare($sql2);
            $req->execute([$numLicence,$mail,$dateNaiss,$rue,$ville,$cp,$mdp,$transfert]);
            return true;    
        }else{
            return false;
        }
    }

    function resInsMsg($msg){
        return '<p style="color:blue"><b>'.$msg.'</b></p>';
    }

    function errorInsMsg($msg){
        return '<p style="color:red"><b>'.$msg.'</b></p>';
    }
?>