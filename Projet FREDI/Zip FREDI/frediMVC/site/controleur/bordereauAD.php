<?php


if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
}	
 if(!isset($_SESSION)){
        session_start();
}
		verifSession();//voir controleurPrincipale.php
		include_once("$racine/modele/bordereaux.php");
		include_once("$racine/modele/profil.php");

		$nom=$_SESSION['nomD'];
		$prenom = $_SESSION['prenomD'];
 		$demandeur=getDemandeurRL($_SESSION['numD']);
		
		$year=getCurrYear();
		$date=getCurrDate();
		$demandeur=getDemandeurAD($_SESSION['numD']);
		$numLigue=getLigueAd($_SESSION['numD']);
		$ligue=getLigueByNum($numLigue[0]);

		include_once("$racine/vue/entete.html");
		include_once("$racine/vue/header.php");
		if($_SESSION['transfert']==1 || $_SESSION['ouvert']==0){
			include_once("$racine/vue/accueilUtilisateur.php");
		}else{	
			include_once("$racine/vue/bordereauAdherent.php");
		}
		include_once("$racine/vue/pied.html");
?>