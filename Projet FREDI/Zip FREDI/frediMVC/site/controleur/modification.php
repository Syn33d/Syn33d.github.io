<?php
	if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    	$racine="..";
	}

	include "$racine/vue/header.php";
    include "$racine/vue/modifMdp.html";
	include "$racine/vue/pied.html";
?>