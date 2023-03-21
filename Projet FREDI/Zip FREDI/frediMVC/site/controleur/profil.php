<?php
	
	if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
	}
	//voir controleurPrincipale.php
	 if(!isset($_SESSION)){
        session_start(); 
		verifSession();
	
	include_once "$racine/modele/profil.php";


	$modeCo=$_SESSION['modeCO'];
	$sub = false;
	$nom=$_SESSION['nomD'];
	$prenom = $_SESSION['prenomD'];
	
	if(isset($_POST['modification'])){
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$newMail = $_POST["mail"];
		$mailConfirme = $_POST["mailc"];
		$mdp = $_POST["mdp"];
		$datenaiss = $_POST["datenaiss"];
		$rue = $_POST["rueAddr"];
		$cp = $_POST["cpAddr"];
		$ville = $_POST["villeAddr"];
		$mdp = $_POST["mdp"];
		if($modeCo==0){	
			$resultModifProfil = sauvegardeInfosDemandeur($newMail,$nom,$prenom,$rue,$cp,$ville,$datenaiss,$mdp);
			$sub = true;
		}
		if($modeCo==1){
			$numLicence = $_POST["numLicence"];
			$idLigue = $_POST["idLigue"];
			$resultModifProfil = sauvegardeInfosAdherentDemandeur($idLigue,$numLicence,$newMail,$nom,$prenom,$rue,$cp,$ville,$datenaiss,$mdp);
			$sub = true;
		}
	}

	$msgerr = "";
	$msgres = "";
	if($sub && !$resultModifProfil){
		$msgerr = errorInsMsg("Une erreur lors de la procédure a été détecté, vérifiez le numero de ligue, s'il est bon le mail saisi est peut-être déjà utilisé.");
	}else if($sub && $resultModifProfil){
		$msgres = resMsg("Modifications enregistrer avec succès.");
	}
	
	$titre='Profil';

	include("$racine/vue/entete.html");
	include("$racine/vue/header.php");

    if($modeCo==0){
    	$demandeur=getDemandeurRL($_SESSION['numD']);
    	if($_SESSION['transfert']==1 || $_SESSION['ouvert']==0){
		include_once("$racine/vue/accueilUtilisateur.php");
		}else{
        include "$racine/vue/profilRepresentantLegal.php";
    	}
    }else{
    	$demandeur=getDemandeurAD($_SESSION['numD']);
    	if($_SESSION['transfert']==1 || $_SESSION['ouvert']==0){
			include_once("$racine/vue/accueilUtilisateur.php");
		}else{
        include "$racine/vue/profilAdherentDemandeur.php";
    	}
    }
	include "$racine/vue/pied.html";
	}

?>