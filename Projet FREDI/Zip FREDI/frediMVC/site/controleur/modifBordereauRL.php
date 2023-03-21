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
		if(empty($_SESSION['msg'])){
			$msg="";
		}else{
			$msg=$_SESSION['msg'];
		}
		$nom=$_SESSION['nomD'];
		$prenom = $_SESSION['prenomD'];

		$data=getAllDataByNumDemandeurRL($_SESSION['numD']);
		$count=getNbrLinesByNumDemandeurRL($_SESSION['numD']);
		$count2=getNbrOfAd($_SESSION['numD']);
		if($count2==0){
			$ligue['rue']="";
			$ligue['ville']="";
			$ligue['cp']="";
		}
		$year=getCurrYear();
		$date=getCurrDate();
		$demandeur=getDemandeurRL($_SESSION['numD']);
		$adherent=getAdByNumD($_SESSION['numD']);
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

					for($i=0;$i<$count2;$i++){
						${'nomAdhrt'.$i}=$adherent[$i]['nom'];
						${'prenomAdhrt'.$i}=$adherent[$i]['prenom'];
						${'licenceAdhrt'.$i}=$adherent[$i]['numeroLicence'];
						${'ligue'.$i}=$adherent[$i]['numero'];
						$ligue=getLigueByNum($ligue0);
					}

	

		if($_SESSION['transfert']==1 || $_SESSION['ouvert']==0){
			include_once("$racine/vue/accueilUtilisateur.php");
		}else{			
		include_once("$racine/vue/lireBordereauRepresentant.php");
		}
		include_once("$racine/vue/pied.html");




?>