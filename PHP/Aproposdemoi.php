<?php
include("../PDO/requete_aproposdemoi.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../CSS/Aproposdemoi.css" />
     <link rel="stylesheet" href="../CSS/reset.css">
     <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
     <title> Portfolio Ferreira Laurine</title>
    
</head>
<body>

<header>
    <?php
    include("../PDO/header.php");
    ?>

    
        <h1 > <?php echo $aboutme_2 [$lang]; ?> </h1>
            <div class= "drop1"> </div>
            <div class= "drop2"> </div>
        <h2><?php echo $PCED [$lang]; ?></h2>
 

</header>

<section>
            <article class="article1">
            <div class= "drop"> </div> 
                <h2><span> 01</span>  <?php echo $passion [$lang]; ?></h2>  
                    <article class="dessin">  
                        <h4>  <?php echo $dessin [$lang]; ?></h4>
                        <img id="show" src="../image/fille_1" alt="Dessin visage" onclick="next();" />
                    </article>

                    <article class="photo">                
                        <h4> <?php echo $photo [$lang]; ?></h4>
                        <img id="show_2" src="../image/st_jean_criques_du_rouvier" alt="Paysage de la cote d'azur" onclick="next_2();" />
                    </article>
                        
                    <article class="mytho">
                        <h4>  <?php echo $mytho [$lang]; ?></h4>
                        <img id="show_3" src="../image/livre_viking" alt="livre de la mythologie" onclick="next_3();" />
                    </article>                                  
            </article>
 </section> 

 <section>

    <article class="article2">
        <div class= "drop"> </div> 
            <h2><span> 02</span> <?php echo  $competence [$lang]; ?></h2>
            
                <ul class="colonne_1">
                    <li class="colonne_3">
                        <p>HTML</p>
                        <img class="jauge" src="<?php echo($jauge_html); ?>" alt="jauge"/>
                    </li>
                    <li class="colonne_3">
                        <p>CSS</p>
                        <img class="jauge2" src="<?php echo($jauge_css); ?>" alt="jauge"/>
                    </li>
                   
                    <li class="colonne_3">
                        <p>JAVASCRIPT, PHP</p>
                        <img class="jauge4" src="<?php echo($jauge_js); ?>" alt="jauge"/>  
                    </li>      
                                     
                </ul>

                <ul class="colonne_2">
                    <li class="colonne_3">
                        <p>GANTT</p>
                        <img class="jauge5" src="<?php echo($jauge_gantt); ?>" alt="jauge"/>             
                    </li>
                    <li class="colonne_3">
                        <p>MYSQL</p>
                        <img class="jauge6" src="<?php echo($jauge_adobe); ?>" alt="jauge"/>         
                    </li>
                    <li class="colonne_3">
                        <p>ILLUSTRATOR, PHOTOSHOP</p>
                        <img class="jauge7" src="<?php echo($jauge_adobe); ?>" alt="jauge"/>
                    </li> 

                </ul>
        </article>
 </section>


<section>

    <article>
    <div class= "drop"> </div> 
        <h2><span>03 </span><?php echo $experience [$lang]; ?></h2>

        <ul class="box">
            <li class="emploi" onclick="update($lang)"> <?php echo $contrat_cdd [$lang]; ?>
                 <ul>
                    <li class="entreprise" >Jennyfer<span class="lieu"> - Nice -</span> <span class= "date">2020/2021</span>
                      
                    <ul>
                        <?php
                                foreach ($J_missions as $key => $value) {
                                   echo ("<li class= 'mission'>" . $value[$lang] . "</li>\n");
                                }
                        ?>
                    </ul>
                        
                    </li>
                 </ul>
                </li>
                <li class="emploi"> <?php echo $contrat_stage [$lang]; ?>
                 <ul>
                     <li class="entreprise" > Jennyfer<span class="lieu"> - Nice - </span> <span class= "date">2018/2020 </span></li>
                 </ul>
                </li>

                 <li class="emploi"> <?php echo $contrat_summer [$lang]; ?>
                 <ul>
                     <li class="entreprise"> Tally Weilj<span class="lieu"> - Nice - </span> <span class= "date"> 2019/2019 </span></li>
                 </ul>
                </li>
            </ul>
    </article>
 </section>   
 
<section>  

    <article>
    <div class= "drop"> </div> 
        <h2> <span> 04</span>  <?php echo $diplome [$lang]; ?></h2>

         <ul class="box">  
            <li class= "ecole"> <?php echo $carlone [$lang]; ?>
                <ul>
                    <li class ="diplome"> <?php echo $lp [$lang]; ?> <span class= "date"> - 2021/2022 </span> 
                    <ul>
                        <?php
                                foreach ($lp_mission as $key => $value) {
                                   echo ("<li class= 'mission'>" . $value[$lang] . "</li>\n");
                                }
                        ?>
                    </ul>
                    </li>
                </ul>
            </li>
            <li class= "ecole"> <?php echo $lyceeA [$lang]; ?>
                <ul>
                    <li class ="diplome"><?php echo $bts [$lang]; ?> <span class= "date"> - 2018/2020 </span>
                    <ul>
                    <?php
                                foreach ($bts_mission as $key => $value) {
                                   echo ("<li class= 'mission'>" . $value[$lang] . "</li>\n");
                                }
                        ?>
                    </ul>
                    </li>
                </ul>
            </li>
            <li class= "ecole"> <?php echo $lyceeG [$lang]; ?>
                <ul>
                <li class ="diplome"><?php echo $bac [$lang]; ?> <span class= "date"> - 2015/2018 </span> </li> 
                </ul>
            </li>
         </ul>
    </article>   
</section>  


<a class="remonter" href="#"> <i class="fas fa-chevron-up"></i> </a>

<footer>
    <?php
    include("../PDO/footer.php");
    ?>
</footer>
  
<script type="text/javascript" src="../JS/JS.js"></script>
<script type="text/javascript" src="../JS/Aproposdemoi.js"></script>
</body>
</html>