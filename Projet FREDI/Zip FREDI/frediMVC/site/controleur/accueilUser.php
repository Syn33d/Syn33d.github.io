<?php
	if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
	}

	 if(!isset($_SESSION)){
        session_start();
		verifSession();
        include_once "$racine/modele/connexion.php";
        include_once "$racine/modele/bordereaux.php";
        include_once "$racine/modele/profil.php";
		$year=getCurrYear();
		if(isConnect()){

			$modeCo=$_SESSION['modeCO'];
			if($modeCo==0){
				$demandeur=getDemandeurRL($_SESSION['numD']);
				$transfert=$demandeur['transfert'];
				$_SESSION['transfert']=$transfert;
			}else{
				$demandeur=getDemandeurAD($_SESSION['numD']);
				$transfert=$demandeur['transfert'];
				$_SESSION['transfert']=$transfert;
			}
			include_once "$racine/vue/entete.html";
			include_once "$racine/vue/header.php";
			include_once "$racine/vue/accueilUtilisateur.php";
			include_once "$racine/vue/pied.html";
		}else{
			header("Location: ./?action=connexion");
	}

    }


?>