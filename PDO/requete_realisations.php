<?php
include("../PDO/PDO.inc.php");
if (!isset( $_GET["lang"])) {
    $_GET["lang"] = 'FR';
}
$lang = $_GET["lang"];

$pdo=getPDO();

// MENU
$langue = accueil ($pdo, $lang, 7);
$home = menu ($pdo, $lang, 1);
$aboutme = menu ($pdo, $lang, 2);
$realisations = menu ($pdo, $lang, 3);
$contact = menu ($pdo, $lang, 4);

// IMAGES
$ecriture= img ($pdo,7);
$perroquet= img ($pdo,8);
$plantes= img ($pdo,9);
?>