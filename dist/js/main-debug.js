window.onload = function onLoad() {
	headerOnScroll();
	mobileMenu();
}

window.onresize = function refreshHeader() {
	headerOnScroll();
}

window.onscroll = function() {
	headerOnScroll();
};

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

/* 
* Add or remove a class to the navigation menu on click
*/

function mobileMenu() {

	var nav 		= document.getElementsByTagName('nav')[0],
			toggle 	= document.getElementById('top-nav__toggle');

	toggle.onclick = function() {
		if ( nav.className === "top-nav__nav" ) {
			nav.className += " top-nav__nav-vis";
			toggle.style.backgroundImage = 'url("' + templateDir + '/dist/css/minified/menu_close.png")';
		} else {
			nav.className = "top-nav__nav";
			toggle.style.backgroundImage = 'url("' + templateDir + '/dist/css/minified/menu-toggle.png")';
		}
	}
}