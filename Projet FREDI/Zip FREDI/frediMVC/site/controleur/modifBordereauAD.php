<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
}	
		include_once("$racine/modele/bordereaux.php");
		include_once("$racine/modele/profil.php");

		include_once("$racine/vue/header.php");
		include_once("$racine/vue/entete.html");
		if(!isset($_SESSION)){
    		session_start();
		}
		
verifSession();//voir controleurPrincipale.php

		$nom=$_SESSION['nomD'];
		$prenom = $_SESSION['prenomD'];

		$data=getAllDataByNumDemandeurAD($_SESSION['numD']);
		$count= getNbrLinesByNumDemandeurAD($_SESSION['numD']);
		$year=getCurrYear();
		$date=getCurrDate();
		$demandeur=getDemandeurAD($_SESSION['numD']);
		$numLigue=getLigueAd($_SESSION['numD']);
		$ligue=getLigueByNum($numLigue[0]);
		$_SESSION['setMttTotalDons']=0;

					for($i=0;$i<$count;$i++){
						${'date'.$i}=$data[$i]['dateL'];
						${'motif'.$i}=$data[$i]['motif'];
						${'trajet'.$i}=$data[$i]['trajet'];
						${'kmParcourus'.$i}=$data[$i]['km'];
						${'coutT'.$i}=$data[$i]['coutTrajet'];
						${'peages'.$i}=$data[$i]['coutPeage'];
						${'repas'.$i}=$data[$i]['coutRepas'];
						${'hbgm'.$i}=$data[$i]['coutHebergement'];
						${'total'.$i}=${'coutT'.$i}+${'peages'.$i}+${'repas'.$i}+${'hbgm'.$i};
						$_SESSION['setMttTotalDons']=$_SESSION['setMttTotalDons']+${'total'.$i};
					}

					$mttTotalDons=$_SESSION['setMttTotalDons'];

					
		if($_SESSION['transfert']==1 || $_SESSION['ouvert']==0){
			include_once("$racine/vue/accueilUtilisateur.php");
		}else{		
			include_once("$racine/vue/lireBordereauAD.php");
		}
		include_once("$racine/vue/pied.html");




?>