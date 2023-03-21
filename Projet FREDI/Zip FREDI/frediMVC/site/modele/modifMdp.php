<?php
    $newMdp = $_POST["newMdpCon"];
    $mailRecup = $_POST["MailRecup"];
    
    function modifMdp(){
        $stmt = $bd->prepare("INSERT INTO demandeur (mdp) VALUE ('?') WHERE adresseMail = ?");
        $stmt->bindValue(1, $newMdp);
        $stmt->bindValue(2, $mailRecup);
        $stmt->execute();
        $resultat->fetchAll();
    }
?>