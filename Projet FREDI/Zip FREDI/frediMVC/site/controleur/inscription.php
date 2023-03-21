<?php
	if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
	}
	include "$racine/modele/inscription.php";
	$sub = false;
	if(isset($_POST['subinscription'])){
		$numLigue = $_POST['idligue'];
		$mail = $_POST['mail'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$rue = $_POST['rueAddr'];
		$cp = $_POST['cpAddr'];
		$ville = $_POST['villeAddr'];
		$date = $_POST['datenaiss'];
		$mdp = $_POST['mdp'];
		$numLicence = $_POST['numLicence'];
		$modeIns=0;
		if(isset($_POST['ca'])){
			$modeIns = 1;
		}
		if($modeIns == 0){	
			$resultInscription = newDemandeur($mail,$nom,$prenom,$date,$rue,$cp,$ville,$mdp);
			$sub = true;
		}else{
			$resultInscription = newAdhrentDemandeur($numLigue,$numLicence,$mail,$date,$nom,$prenom,$rue,$cp,$ville,$mdp);
			$sub = true;
		}
	}
	$msgerr = "";
	$msgres = "";
	if($sub && !$resultInscription){
		$msgerr = errorInsMsg("Une erreur lors de la procédure a été détectée, vérifiez le numero de ligue, s'il est bon, le mail saisi est peut-être déjà utilisé.");
	}else if($sub && $resultInscription){
		$msgres = resInsMsg("Inscription réussi avec succès, pour vous connectez cliquez <a href='?action=connexion'>ici</a>");
	}
	$titre = 'Inscription';
	include "$racine/vue/entete.html";
	include "$racine/vue/inscription.php";
	include "$racine/vue/pied.html";
?>