const navbar = document.querySelector( ".navbar" );
const burger = document.querySelector( ".burger" );

burger.addEventListener( "click", ( _event ) =>
{
	navbar.classList.toggle( "show-nav" );
} );

// bonus
const navbarLinks = document.querySelectorAll( ".navbar a" );

navbarLinks.forEach( link =>
{
	link.addEventListener( "click", ( _event ) =>
	{
		navbar.classList.toggle( "show-nav" );
	} );
} );

let currentIndex = 0;
const slidesToShow = 3; // Modifier le nombre d'images affichées à la fois

function showSlide(index) {
  const track = document.getElementById("carouselTrack");
  const slides = document.querySelectorAll(".carousel-slide");

  if (index < 0) {
    index = slides.length - 1;
  } else if (index >= slides.length) {
    index = 0;
  }

  const translationValue = -index * (100 / slides.length) + "%";
  track.style.transform = "translateX(" + translationValue + ")";
  currentIndex = index;
}

function prevSlide() {
  showSlide(currentIndex - slidesToShow);
}

function nextSlide() {
  showSlide(currentIndex + slidesToShow);
}

 // Bouton de retour en haut de la page
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollToTopBtn").style.display = "block";
    } else {
        document.getElementById("scrollToTopBtn").style.display = "none";
    }
}

document.getElementById("scrollToTopBtn").addEventListener("click", function() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
});
