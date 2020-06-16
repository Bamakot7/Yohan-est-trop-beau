<?php
if (!isset($_GET["lang"])) {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($lang != 'fr')
        $lang = 'en';
    header("Location:".$_SERVER['PHP_SELF']."?lang=$lang");
}

if ($_GET["lang"] === "fr") {
	require_once "contenu/contenu_fr.php";
} else {
	require_once "contenu/contenu_en.php";
}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="accueil.css">
	<meta charset="utf-8">
	<title><?php echo basename($_SERVER['PHP_SELF']); ?></title>
</head>
<body>
		<img src="image/diapo/chateauface.png" class="fondchateau">
		<div class="BarreNavig">
				<div class="Rubrique"><?php echo gestionCompte; ?></div>
				<div class="Rubrique"><?php echo deco; ?></div>

				<div class=" Rubrique">
					<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?lang=fr">
					<img src="image/france.jpg" class="france">
				</a>
				</div>

				<div class="Rubrique">
					<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?lang=en">
					<img src="image/uk.png" class="anglais">
				</a>
				</div>

			  </div>
