<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
}

	 if(!isset($_SESSION)){
        session_start();
	}
	verifSession();//voir controleurPrincipale.php
	include_once("$racine/modele/bordereaux.php");
	$nom=$_SESSION['nomD'];
	$prenom = $_SESSION['prenomD'];
	$modeCo=$_SESSION['modeCO'];
	if($modeCo==0){
		$ligne=getNbrLinesByNumDemandeurRL($_SESSION['numD']);
	}else{
		$ligne=getNbrLinesByNumDemandeurAD($_SESSION['numD']);
	}
	
	include_once("$racine/modele/bordereaux.php");
	include_once("$racine/vue/entete.html");
	include_once("$racine/vue/header.php");
	if($_SESSION['transfert']==1 || $_SESSION['ouvert']==0){
		include_once("$racine/vue/accueilUtilisateur.php");
	}else{
		include_once("$racine/vue/accueilBordereau.php");
	}
	
	include_once("$racine/vue/pied.html");	
?>