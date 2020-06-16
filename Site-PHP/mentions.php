<?php
	session_start ();
	if (isset($_SESSION) && isset($_SESSION["mail"])) {
		require('PHP/entete_co.php');
	}else{
		require 'PHP/entete.php';
	}
	echo mentions_contenu;
	$bas = '-400%';
	require 'PHP/bas_page.php';
?>
