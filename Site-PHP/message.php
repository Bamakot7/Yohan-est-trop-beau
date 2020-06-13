<?php 
    session_start();
    require('PHP/entete_co.php');
    if ($_GET['lang'] == 'fr') {
        require('PHP/message_fr.php');
    } else {
        require('PHP/message_en.php');
    }
?>
    
