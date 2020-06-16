<?php
	session_start ();
	if (isset($_SESSION) && isset($_SESSION["mail"])) {
		require('PHP/entete_co.php');
	}else{
		require 'PHP/entete.php';
	}
	echo presentation_contenu;
	$bas = '-500%';
	require 'PHP/bas_page.php';
?>
