<?php 
	if (isset($_SESSION["mail"])) {
		require('PHP/entete_co.php');
	}else{
		require 'PHP/entete.php'; 
	}
	echo mecenat_contenu;
	$bas = '-300%';  
	require 'PHP/bas_page.php'; 
?>
