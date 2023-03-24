   
        <nav class="navbar">

          <p class="navbar__logo"> LAURINE</p>
          
          <ul class="navbar__links">
           <li class="navbar__link"><a href="accueil.php?lang=<?php echo($lang); ?>"><?php echo $home [$lang]; ?></a></li>
           <li class="navbar__link"><a href="Aproposdemoi.php?lang=<?php echo($lang); ?>"> <?php echo $aboutme [$lang]; ?></a></li>
           <li class="navbar__link"><a href="Realisations.php?lang=<?php echo($lang); ?>"> <?php echo $realisations [$lang]; ?></a></li>
           <li class="navbar__link"><a href="contact.php?lang=<?php echo($lang); ?>"> <?php echo $contact [$lang]; ?></a></li>
          </ul>
          <details>
                <summary><?php echo $langue [$lang]; ?></summary>
                <ul>
                    <li > <a class="langue" href="?lang=fr">Français</a></li>
                    <li > <a class="langue" href="?lang=en">English</a></li>
                </ul>
            </details>
          

            <button class="burger">
           <span class="bar"></span>
         </button>
          
        </nav>
    