<?php
include("../PDO/PDO.inc.php");
include("../BO/include/_session.php");
include("../BO/include/_connexion.php");

if (!isset( $_GET["lang"])) {
    $_GET["lang"] = 'FR';
}
$lang = $_GET["lang"];

$pdo=getPDO();

// MENU
$home = menu ($pdo, $lang, 1);
$aboutme = menu ($pdo, $lang, 2);
$realisations = menu ($pdo, $lang, 3);
$contact = menu ($pdo, $lang, 4);

// BLOC_GAUCHE
$bonjour = accueil($pdo, $lang, 1);
$laurine = accueil ($pdo, $lang, 2);
$etudiante = accueil ($pdo, $lang, 3);
$CV = accueil ($pdo, $lang, 4);

// DESCRIPTION
$moi_titre = accueil ($pdo, $lang, 6);
$moi_description = accueil ($pdo, $lang, 5);

$langue = accueil ($pdo, $lang, 7);

// IMAGES
$img_1= img ($pdo, 1);


unset($_SESSION['login']);
?>