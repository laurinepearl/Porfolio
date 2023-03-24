<?php
include("../PDO/PDO.inc.php");
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

// TITRE
$aboutme_2 = APM ($pdo, $lang, 1);
$PCED = APM ($pdo, $lang, 2);
$passion = APM ($pdo, $lang, 3);
$competence = APM ($pdo, $lang, 4);
$experience = APM ($pdo, $lang, 5);
$diplome= APM ($pdo, $lang, 6);
$dessin= APM ($pdo, $lang, 7);
$photo= APM ($pdo, $lang, 8);
$mytho= APM ($pdo, $lang, 9);
// CONTRAT
$contrat_cdd= contrat($pdo, $lang, 1);
$contrat_stage= contrat($pdo, $lang, 2);
$contrat_summer= contrat($pdo, $lang, 3);

// EXPERIENCE_MISSION
$J_missions= experiencexmissions ($pdo, $lang);


// ECOLE
$carlone = ecole ($pdo, $lang, 1);
$lyceeA = ecole ($pdo, $lang, 2);
$lyceeG = ecole ($pdo, $lang, 3);

// DIPLOME
$lp = diplome ($pdo, $lang, 1);
$bts = diplome ($pdo, $lang, 2);
$bac = diplome ($pdo, $lang, 3);

// DIPLOME_MISSION
$lp_mission= diplomexmissions ($pdo, $lang);
$bts_mission = diplomexmissions_2 ($pdo, $lang);



$langue = accueil ($pdo, $lang, 7);

// IMAGES
$jauge_html= img ($pdo,2);
$jauge_css= img ($pdo,3);
$jauge_js= img ($pdo,4);
$jauge_gantt= img ($pdo,5);
$jauge_adobe= img ($pdo,6);
?>