<?php
    session_start();
    session_destroy();
    header("location:../accueil.php?lang=".$_GET["lang"]);
?>