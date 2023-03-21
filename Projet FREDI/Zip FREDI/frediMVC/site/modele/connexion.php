<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include_once "$racine/modele/bd.inc.php";
    
    function connect($mail,$mdp,$modeCO){
        $db = connexionPDO();
        if($modeCO == 0){
            $req = $db->prepare(
            "SELECT adresseMail,numDemandeur AS id,nom,prenom
            FROM demandeur_representant_legal
            WHERE adresseMail=?
            AND mdp=?;");
        }
        
        if($modeCO == 1){
            $req = $db->prepare(
            "SELECT adresseMail,ad.numeroLicence AS id,nom,prenom
            FROM adherent_demandeur ad
            JOIN adherent a
            ON ad.numeroLicence=a.numeroLicence
            WHERE adresseMail=?
            AND mdp=?;");
        }
        $req->execute([$mail,$mdp]);
        

        $cnt = $req->rowCount();
        if($cnt == 1){
            $res = $req->fetch();

            $_SESSION['mailD'] = $res['adresseMail'];
            $_SESSION['numD'] = $res['id'];
            $_SESSION['nomD'] = $res['nom'];
            $_SESSION['prenomD'] = $res['prenom'];
            $_SESSION['modeCO'] =[$modeCO];
            return true;
        }else{
            return false;
        }
    }

    function isConnect(){
        if(isset($_SESSION['numD'])){
            return true;    
        }else{
            return false;
        }
    }

    function disconnect(){
        /*
        unset($_SESSION['mailD']);
        unset($_SESSION['numD']);
        unset($_SESSION['nomD']);
        unset($_SESSION['prenomD']);
        unset($_SESSION['modeCO']);
        unset($_SESSION['transfert']);*/
        session_unset(); 
   }

    function errorConMsg($msg){
        return '<p style="color:red"><b>'.$msg.'</b></p>';
    }
?>