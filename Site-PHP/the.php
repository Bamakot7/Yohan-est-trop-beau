<?php 
	if (isset($_SESSION["mail"])) {
		require('PHP/entete_co.php');
	}else{
		require 'PHP/entete.php'; 
	}
	$bas = '-400%';
	echo the_contenu; 
	require 'PHP/bas_page.php'; 
?>
