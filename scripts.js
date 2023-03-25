function toggleMenu()
{
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
}

toggleMenu();