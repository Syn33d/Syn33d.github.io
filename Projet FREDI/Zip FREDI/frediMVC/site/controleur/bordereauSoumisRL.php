
<?php

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
}
include_once("$racine/modele/bordereaux.php");	
include_once("$racine/modele/inscription.php");	
include_once("$racine/vue/header.php");
include_once("$racine/vue/entete.html");

 if(!isset($_SESSION)){
    session_start();
}
verifSession();//voir controleurPrincipale.php
$msg='';

					if(isset($_POST['valider'])){
						$value1=getNbrLinesByNumDemandeurRL($_SESSION['numD']);
						$value2=$_COOKIE['count1'];
						if($value1>=$value2){
							$count1=$value1;
						}else{
							$count1=$value2;
						}
						deleteByNumDemandeurRL($_SESSION['numD']);
						for($i=1;$i<=$count1;$i++){
							if(isset($_POST["date$i"])){
								${'date'.$i}=$_POST["date$i"];
								${'motif'.$i}=$_POST["motif$i"];
								${'trajet'.$i}=$_POST["trajet$i"];
								${'kmParcourus'.$i}=$_POST["kmParcourus$i"];
								${'coutT'.$i}=$_POST["coutT$i"];
								${'peages'.$i}=$_POST["peages$i"];
								${'repas'.$i}=$_POST["repas$i"];
								${'hbgm'.$i}=$_POST["hbgm$i"];
								insertLineForNumDemandeurRL($_SESSION['numD'],${'date'.$i},${'motif'.$i},${'trajet'.$i},${'coutT'.$i},${'kmParcourus'.$i},${'peages'.$i},${'repas'.$i},${'hbgm'.$i});
							}
						}
							$value3=getNbrOfAd($_SESSION['numD']);
							$value4=$_COOKIE['count2'];
							if($value3>=$value4){
								$count2=$value3;
							}else{
								$count2=$value4;
							}

							$nbr=getNbrOfAd($_SESSION['numD']);
							if($nbr>=1){
								deleteAD($_SESSION['numD']);
								deleteLien($_SESSION['numD']);
							}

							for($i=1;$i<=$count2;$i++){
								if(isset($_POST["nomAdhrt$i"])){
									${'nomAdhrt'.$i}=$_POST["nomAdhrt$i"];
									${'prenomAdhrt'.$i}=$_POST["prenomAdhrt$i"];
									${'licenceAdhrt'.$i}=$_POST["licenceAdhrt$i"];
									${'ligue'.$i}=$_POST["ligue$i"];
									if(ligueIsExist(${'ligue'.$i})){
										newAdherent(${'licenceAdhrt'.$i},${'nomAdhrt'.$i},${'prenomAdhrt'.$i},${'ligue'.$i});
										addAdToRL($_SESSION['numD'],${'licenceAdhrt'.$i});
									}else{
										$msg="Les adhérents n'ont pas pu être ajouté car, le numéro de ligue entré n'existe pas";
									}
								}	
							}
					}
					$_SESSION['msg']=$msg;
					include_once("$racine/vue/bordereauSoumis.php");
					include_once("$racine/vue/pied.html");
				
					
		?>