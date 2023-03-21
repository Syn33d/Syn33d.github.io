<?php

    function getAdherentOfNumDemandeur($idDemandeur){
        $res = $bd->prepare("SELECT * FROM adherent where numDemandeur=?");
        $res->execute([$idDemandeur]);
        return $res->fetch();
    }
?>