<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../CSS/Contact.css" />
     <link rel="stylesheet" href="../CSS/reset.css">
     <title> Portfolio Ferreira Laurine</title>
    
</head>

<?php
    function verifInfo($info, $length)
    {
        // On rend affichable les caractères HTML.
        $info = htmlentities($info);

        // On supprime les espaces blanc dans la chaîne.
        $info = trim($info);

        // On vérifie la taille de la chaîne de caractères et
        //  on vérifie si la chaîne contient uniquement des
        //  caractères alphabétiques.
        if (strlen($info) > $length && ctype_print($info))
        {
            return true;
        }

        return false;
    }

    include("../PDO/PDO.inc.php");

    // On créé une session.
    session_start();
    
    // On vérifie les informations.
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = trim($_POST["message"]);

    if (!verifInfo($name, 2))
    {
        $_SESSION["erreur"] =("<p class= 'message'>". "Votre nom est invalide ! Il doit faire 2 caractères minimum sans caractères spéciaux.". "</p>\n");

        header("Location: contact.php?erreur=1");
        exit();
    }
    
    if (!verifInfo($email, 8))
    {
        $_SESSION["erreur"] = ("<p class= 'message'>"."Votre adresse e-mail est invalide ! Il doit faire 8 caractères minimum sans caractères spéciaux.". "</p>\n");

        header("Location: contact.php?erreur=1");
        exit();
    }

    // On ajoute le message dans la base de données.
    addFormMessage(getPDO(), $name, $email, $message);

    // On fait la redirection.
    header("Location: contact.php?message=1");
    exit();
?>