<?php
	session_start ();
	if (isset($_SESSION) && isset($_SESSION["mail"])) {
		require('PHP/entete_co.php');
	}else{
		require 'PHP/entete.php';
	}
	echo accueil_contenu;
	$bas = '-200%'; 
 	require 'PHP/bas_page.php';
?>
