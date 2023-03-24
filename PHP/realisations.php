<?php
include("../PDO/requete_realisations.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../CSS/Realisations.css" />
     <link rel="stylesheet" href="../CSS/reset.css">
     <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
     <title> Portfolio Ferreira Laurine</title>
</head>
<body>
<header>
     <?php
     include("../PDO/header.php");
     ?>
   
    <h1> <?php echo $realisations [$lang]; ?> </h1>
          <div class= "drop1"> </div>
          <div class= "drop2"> </div>
     <h2>Illustrator, Photoshop.</h2>

</header>

 <section> 
     <article>
       <div class= "drop"> </div>
          <h2> <span> 01</span>  ILLUSTRATOR</h2>
         
          <img src="<?php echo($ecriture); ?>" class="illustrator" >  
          <img src="<?php echo($perroquet); ?>" class="illustrator" >  
          <img src="<?php echo($plantes); ?>" class="illustrator" >  
     </article>  
</section>

 <section> 
     <article>
       <div class= "drop"> </div> 
         <h2> <span> 02</span> PHOTOSHOP</h2>
           <p> passer la souris sur les images</p> 
            <div class="pieton"> </div>
            <div class="reine"> </div>
           <p> composition</p> 
            <div class="composition"> </div>
            <div class="composition_2"> </div>
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