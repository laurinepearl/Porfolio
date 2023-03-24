<?php
include("../PDO/requete_contact.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../CSS/Contact.css" />
     <link rel="stylesheet" href="../CSS/reset.css">
     <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
     <title> Portfolio Ferreira Laurine</title>
</head>
<body>

<header>
      <?php
      include("../PDO/header.php");
      ?>
</header>

<section class="formulaire">
      <?php
        if (isset($_GET["message"]))
        {
          echo("<p class= 'message'>"."Votre message a été envoyé avec succès. Je vous répondrai dans les plus brefs délais.". "</p>\n");
        }

        if (isset($_GET["erreur"]))
        {
          echo($_SESSION["erreur"]);
        }
      ?>

        <h3>Contactez-moi</h3>
          <form class="contact" action="contact_action.php" method="POST">
                <input type="text" name="name"  placeholder="Votre Nom" required>
                <input type="email" name="email"  placeholder="Votre Email" required>
                <textarea name="message" placeholder= "Votre Message" required></textarea>
                <button type="submit"> Envoyer </button>
          </form>
</section>

 <section class="droite">
     <h3> Me joindre :</h3>
     <img src="<?php echo($img_1); ?>">

    <article>
     <span><i class="fas fa-envelope"></i></span>
        <a class="link" href="mailto:a@gmail.com">laurine.ferreira29@gmail.com</a>
     <span  ><i class="fas fa-phone-alt"></i></span>
        <a class="link" href="tel:0699999999"> 06.99.99.99.99</a>   
    </article>
</section>

 <a class="remonter" href="#"> <i class="fas fa-chevron-up"></i> </a>

<footer>
    <?php
    include("../PDO/footer.php");
    ?>
</footer>
  
<script type="text/javascript" src="../JS/JS.js"></script>
</body>
</html>


