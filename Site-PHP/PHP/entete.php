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
		<img src="image/chateaufontaine.jpg" class="fondchateau">
		<div class="BarreNavig">
				<div class=" Rubrique">
					<a href="AccueilFr.html"><?php echo accueil; ?></a>
				</div>
					<div class=" Rubrique">
					<?php echo menu; ?>
						<div class="contenu">
							<div><?php echo preparer_entete; ?> </a> </div>
							<div><?php echo mecenat_entete; ?></div>
              <div><?php echo avis_entete; ?></div>
						</div>
					</div>
          <div class=" Rubrique">
					<?php echo notreProjet; ?>
						<div class="contenu">
							<div><?php echo presentation_entete; ?></div>
							<div><?php echo description_entete; ?></div>
						</div>
					</div>
					<div class=" Rubrique">
					<?php echo quisommesnous_entete; ?>
				</div>

				<div class="Rubrique"><?php echo connexion_entete; ?></div>
				<div class="Rubrique"><?php echo inscription_entete; ?></div>

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
