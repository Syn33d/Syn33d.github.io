
<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
}
include_once("$racine/modele/bordereaux.php");
include_once "$racine/modele/profil.php";
include_once("$racine/vue/header.php");
include_once("$racine/vue/entete.html");

 if(!isset($_SESSION)){
    session_start();
}
verifSession();//voir controleurPrincipale.php
$demandeur=getDemandeurAD($_SESSION['numD']);

					if(isset($_POST['valider'])){
						$value1=getNbrLinesByNumDemandeurAD($_SESSION['numD']);
						$value2=$_COOKIE['count1'];
						if($value1>=$value2){
							$count1=$value1;
						}else{
							$count1=$value2;
						}
						deleteByNumDemandeurAD($_SESSION['numD']);
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
									insertLineForNumDemandeurAD($_SESSION['numD'],${'date'.$i},${'motif'.$i},${'trajet'.$i},${'coutT'.$i},${'kmParcourus'.$i},${'peages'.$i},${'repas'.$i},${'hbgm'.$i});
							}
						}
					}
				include_once("$racine/vue/bordereauSoumis.php");
				include_once("$racine/vue/pied.html");
				
					
		?>