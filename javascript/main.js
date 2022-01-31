const navbar = document.querySelector('.navbar');
const burger = document.querySelector('.burger');
const body_navbar = document.querySelector(".navbar__links");

// Nécessaire pour faire la transition lors de la première
//  ouverture et permet de résoudre l'apparition de la croix
//  du menu burger par la même occasion.
body_navbar.style.display = "flex";

burger.addEventListener('click', ()=> {
    navbar.classList.toggle('show-nav');
})

const word = "login";
let keys = [];

window.addEventListener("keypress", (event) =>
{

  // On enregistre chaque touche dans un tableau (keys).
  keys.push(event.key);

  // On vérifie la taille du tableau avec celle du mot clé.
  if (keys.length >= word.length)
  {
    // Si le tableau contient le mot clé, alors on redirige
    //  vers le back office.
    if (keys.join("") == word)
    {
      window.location.href = "../BO/choixtable.html"
    }

    // Sinon, on vide le tableau (recommence à zéro).
    keys = [];
  }
});