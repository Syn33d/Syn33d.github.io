<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "connexion.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["bordereauRL"] = "bordereauRL.php";
    $lesActions["bordereauAD"] = "bordereauAD.php";
    $lesActions["bordereauSoumisRL"] = "bordereauSoumisRL.php";
    $lesActions["bordereauSoumisAD"] = "bordereauSoumisAD.php";
    $lesActions["accueil"] = "accueilUser.php";
    $lesActions["accueilBordereau"] = "accueilBordereau.php";
    $lesActions["modifBordereauRL"] = "modifBordereauRL.php";
    $lesActions["modifBordereauAD"] = "modifBordereauAD.php";
    $lesActions["envoieBorderaux"] = "envoieBorderaux.php";
    $lesActions["disconnect"] = "disconnect.php";
    $lesActions["modification"] = "modification.php";
    $lesActions["recuperation"] = "recuperation.php"; 
    $lesActions["profil"] = "profil.php"; 
    $lesActions["transfert"] ="transfertBordereau.php"; 
     $lesActions["transfertValide"] ="transfertValide.php"; 

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

function verifSession(){
    //vérifie la session de l'utilisateur et redirige vers la page de connexion le cas échéant
    if(!isset($_SESSION['numD'])){
        header("Location: ./?action=connexion");
        exit();
    }else{
        return true;
    }
}

?>