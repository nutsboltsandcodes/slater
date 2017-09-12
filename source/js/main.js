jQuery(function($) { // DOM is now ready and jQuery's $ alias sandboxed

	feather.replace(); //feathericon init

	/*
	* Show and Hide functionality for the secondary header menu
	*/
	function toggleSecondaryMenu() {
		var menuCont = $('.secondary-menu');
		var toggle = $('.secondaryMenuToggle');
		toggle.on('click', function() {
			menuCont.addClass('secondary-menu--vis');
			toggle.toggleClass('secondaryMenuToggle-toggled')
		});
	}
	toggleSecondaryMenu();

	function toggleMobileMenu() {
		var menuCont 	= $('.mobileMenu');
		var toggle 		= $('.mobileMenuToggle');
		var close			= $('.mobileMenuClose');
		toggle.on('click', function() {
			menuCont.toggleClass('mobileMenu--vis');
		});
		close.on('click', function() {
			menuCont.toggleClass('mobileMenu--vis');
		});
	}

	toggleMobileMenu();

});




/*
function headerOnScroll() {

	//Define viewport variables
	var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth;	

	// checking the condition
	if (x >= 800 && document.documentElement.scrollTop >= 400) {
		document.getElementsByClassName('top-nav__container')[0].style.background = "rgba(21, 67, 96, .9)";
	} else if (x >= 800 && document.documentElement.scrollTop < 400 ) { 
		//Set transparent if scroll is less than four hundred and screen is larger than 600 pixels
		document.getElementsByClassName('top-nav__container')[0].style.background = "transparent";
	} else if (x >= 600 && document.documentElement.scrollTop < 75 ) { 
		//Set transparent if scroll is less than four hundred and screen is larger than 600 pixels
		document.getElementsByClassName('top-nav__container')[0].style.background = "transparent";
	} else if (x < 800 && x >= 600 && document.documentElement.scrollTop >= 75 ) { 
		//Set transparent if scroll is less than four hundred and screen is larger than 600 pixels
		document.getElementsByClassName('top-nav__container')[0].style.background = "rgba(21, 67, 96, .9)";
	} else if (x < 800 && x >= 600 && document.documentElement.scrollTop < 75 ) { 
		//Set transparent if scroll is less than four hundred and screen is larger than 600 pixels
		document.getElementsByClassName('top-nav__container')[0].style.background = "transparent";
	} else {
		//Set solid is smaller than 600 pixels
		document.getElementsByClassName('top-nav__container')[0].style.background = "rgba(21, 67, 96, 1)";
	}
}
*/