<?php
function getPDO() {
    $credentials = fopen("../config.csv", "r");

    if ($credentials)
    {
        // On vérifie si le fichier de configuration existe.
        $credentials = fgetcsv($credentials);
    }

    $host = $credentials[0];    // Adresse de la base de données (par défaut : "localhost")
    $db   = $credentials[1];    // Nom de la base de données (par défaut : "porfolio_2")
    $user = $credentials[2];    // Identifiant de connexion (par défaut : "root")
    $pass = $credentials[3];    // Mot de passe de connexion (par défaut : "")
    $charset = $credentials[4]; // Encodage des caractères (par défaut : "utf8")
    $port = $credentials[5];    // Port de connexion (par défaut : "3306" sur MySQL et "3307" sur MariaDB)
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function menu ($pdo, $lang, $id) {
    $resultat = $pdo -> query ("SELECT $lang FROM `menu` WHERE id_menu =$id");
    $resultat = $resultat ->fetch();  


    return $resultat;
}


function accueil ($pdo, $lang, $id) {
    $resultat = $pdo -> query ("SELECT $lang FROM `accueil` WHERE id_accueil =$id");
    $resultat = $resultat ->fetch(); 

   
    return $resultat;  
}


function APM ($pdo, $lang, $id) {
    $resultat = $pdo -> query ("SELECT $lang FROM `aproposdemoi` WHERE id_aproposmoi =$id");
    $resultat = $resultat ->fetch(); 

   
    return $resultat;  
}




function contrat($pdo, $lang, $id) {
    $resultat = $pdo-> query ("SELECT $lang FROM `contrat` WHERE id_contrat=$id");
    $resultat = $resultat ->fetch();

    return $resultat;
}


function experiencexmissions ($pdo, $lang) {
    $resultat = $pdo-> query ("SELECT $lang FROM `missionxexperience` WHERE experience_id=1");
    $resultat = $resultat ->fetchAll();   

    return $resultat;
} 


function ecole ($pdo, $lang, $id) {
    $resultat = $pdo-> query ("SELECT $lang FROM `ecole` WHERE id_ecole =$id");
    $resultat = $resultat ->fetch();   

    return $resultat;


}

function diplome ($pdo, $lang, $id) {
    $resultat = $pdo-> query ("SELECT $lang FROM `diplome` WHERE id_diplome =$id");
    $resultat = $resultat ->fetch();   

    return $resultat;


}

function diplomexmissions ($pdo, $lang) {
    $resultat = $pdo-> query ("SELECT $lang FROM `missionxdiplome` WHERE diplome_id=1");
    $resultat = $resultat ->fetchAll();   

    return $resultat;
}

function diplomexmissions_2 ($pdo, $lang) {
    $resultat = $pdo-> query ("SELECT $lang FROM `missionxdiplome` WHERE diplome_id=2");
    $resultat = $resultat ->fetchAll();   

    return $resultat;
}

function img ($pdo, $id) {
    // On écrit la requête SQL sans ses paramètres.
    $query = $pdo-> prepare ("SELECT `images` FROM `image` WHERE `id_image` = ?");

    // On ajoute les paramètres à la requête.
    $resultat = $query->execute([$id]);

    // On récupère les résultats.
    $resultat = $query->fetch();   

    return $resultat["images"];
}

function addFormMessage($pdo, $name, $email, $message)
{
    // On écrit la requête SQL sans ses paramètres.
    // "NULL" représente la date actuelle.
    $query = $pdo-> prepare ("INSERT INTO `reception` (`nom`, `email`, `message`) VALUES (?, ?, ?)");

    // On exécute la requête.
    $query->execute([$name, $email, $message]);
}


	// 1- On récupère le login et le mot de passe du formulaire !
    // 3- On fait une requête à la base de données avec le login fournis.
function checkLogin($pdo, $login)
{
    $resultat = $pdo->query ("SELECT * FROM `connexion` WHERE `id_login`= '$login'");
    $resultat = $resultat->fetch();

    return $resultat;
}
?>