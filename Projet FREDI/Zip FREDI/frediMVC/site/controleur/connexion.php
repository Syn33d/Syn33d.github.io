<?php
	if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
	}

	if(!isset($_SESSION)){
    	session_start();
    	$mail = "";
		$mdp = "";
		$modeCo=0;
		$msgerr="";

		include_once "$racine/modele/connexion.php";

		include_once("$racine/modele/bordereaux.php");
		$date=getCurrDate();
		$year=getCurrYear();
		$dateOuverture=$year[0].'-01-01';//A changer,mettre le 15
		$dateFermeture=$year[0].'-12-24';
		$siteOuvert=null;
		if($date[0]>=$dateOuverture && $date[0]<=$dateFermeture){
			$siteOuvert=true;
		}else{
			$siteOuvert=false;
		}

		$_SESSION['ouvert']=$siteOuvert;

		if(isset($_POST['Valideur'])){
			$mail = $_POST['mail'];
			$mdp = $_POST['mdp'];
			if(isset($_POST['ca'])){
				$modeCo=1;
			}else{
				$modeCo=0;
			}
			connect($mail,$mdp,$modeCo);
			$_SESSION['modeCO']=$modeCo;
		}

			$titre = "FREDI - Connexion";
			include_once "$racine/vue/entete.html";
			include_once "$racine/vue/connexion.php";
			include_once "$racine/vue/pied.html";
		
		if(isConnect()){
			header("Location: ./?action=accueil");
			exit();
		}else{
			$msgerr = errorConMsg("Une erreur lors de la procédure à été détecté, vérifiez le mail et le mot passe, si vous êtes un adhérent cochez la case prévue a cette effet");
		}

	}
	
?>