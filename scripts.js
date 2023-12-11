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
  showSlide(currentIndex - 1);
}

function nextSlide() {
  showSlide(currentIndex + 1);
}
