<?php
	if (isset($_SESSION["mail"])) {
		require('PHP/entete_co.php');
	}else{
		require 'PHP/entete.php'; 
	}
	echo prepare_contenu;
	$bas = '-400%';
	require 'PHP/bas_page.php';
 ?>
