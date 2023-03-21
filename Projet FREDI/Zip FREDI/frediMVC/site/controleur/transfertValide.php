<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
}
 if(!isset($_SESSION)){
 	session_start();
 }
verifSession();//voir controleurPrincipale.php

 			include_once "$racine/modele/bordereaux.php";

 			$nom=$_SESSION['nomD'];
			$prenom = $_SESSION['prenomD'];
			$modeCo=$_SESSION['modeCO'];

			include_once "$racine/vue/entete.html";
			include_once "$racine/vue/header.php";

			if($_SESSION['transfert']==1 || $_SESSION['ouvert']==0){
				include_once("$racine/vue/accueilUtilisateur.php");
			}else{
				include_once "$racine/vue/transfertValide.php";
			}

			if(isset($_POST['transfertNonValide'])){
				header("Location: ./?action=accueil");
			}

			if(isset($_POST['transfertValide'])){
				if($modeCo==0){
					$transfert=transfertRL($_SESSION['numD']);
				}
				else{
					$transfert=transfertAD($_SESSION['numD']);	
				}
				header("Location: ./?action=accueil");
			}
			include_once "$racine/vue/pied.html";

?>