<?php
include("../PDO/requete_accueil.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../CSS/Accueil.css" />
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
   

     <section class="section1">
          <article>
           <p> <?php echo $bonjour [$lang]; ?> </p>
           <h1> <?php echo $laurine [$lang]; ?></h1> 
           <h3> <?php echo $etudiante [$lang];  ?> </h3>
          </article>
          <article>
               <a href="../Laurine_Ferreira_cv.docx">
               <button class="second" 
                       type="button">
                       <p> <?php echo $CV [$lang];  ?> </p>
               </button>
               </a>
          </article>
     </section>

     <section class="illustration">    
          <div>
           <img src="../adobe/Illustrator/illustration_accueil" class="illustrator" >  
          </div>
     </section>
      
     <section class="section2">
          <img src="<?php echo($img_1); ?>">
          <div class="border"></div>
      <article>
          <h4>  <?php echo $moi_titre [$lang];  ?></h4>
           <p><?php echo $moi_description [$lang];  ?></p>
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