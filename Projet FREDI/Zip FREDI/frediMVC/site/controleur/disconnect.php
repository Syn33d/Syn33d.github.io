<?php
	if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
	}

	include_once "$racine/modele/connexion.php";

	disconnect();

	header("Location: ./?action=connexion");
	exit();

?>