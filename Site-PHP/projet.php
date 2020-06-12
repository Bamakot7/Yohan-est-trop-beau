<?php
	if (isset($_SESSION) && isset($_SESSION["mail"])) {
		require('PHP/entete_co.php');
	}else{
		require 'PHP/entete.php'; 
	}
	echo projet_contenu; 
	$bas = '-420%';  
	require 'PHP/bas_page.php'; 
?>
