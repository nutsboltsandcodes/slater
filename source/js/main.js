window.onload = function checkScroll() {
	headerOnScroll();
	comments();
	nav();
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


function nav() {

	var toggle 	= document.getElementById('top-nav__toggle'), 
			nav 		= document.getElementsByTagName('nav')[0];

	toggle.onclick = function() {
		nav.style.visibility = "visible";
		nav.style.display 	 = "block";
		toggle.style.backgroundImage	= 'url("./dist/css/menu_close.png")';
	}
}

var comments_toggle = document.getElementById('comments__outer-container'),
		comments_inner = document.getElementById('comments__inner-container'), 
		comments_arrow	= document.getElementById('comments__title-toggle');

comments_toggle.onclick = function() {
		comments_inner.style.display = "block";
		comments_inner.style.visibility = "visible";
		comments_arrow.style.transform = "rotateX(180deg)";
		comments_toggle.setAttribute('id', 'comments__toggled');
}

function comments() {

	var comments__toggled = document.getElementById('comments__toggled');

	if ( comments__toggled != null) {
		comments__toggled.onclick = function() {
			comments_inner.style.display = "none";
			comments_inner.style.visibility = "hidden";
			comments_toggle.setAttribute('id', 'comments__outer-container');
		}
	}	else {
		
		var comments_toggle = document.getElementById('comments__outer-container'),
		comments_inner = document.getElementById('comments__inner-container'), 
		comments_arrow	= document.getElementById('comments__title-toggle');

		comments_toggle.onclick = function() {
			comments_inner.style.display = "block";
			comments_inner.style.visibility = "visible";
			comments_arrow.style.transform = "rotateX(180deg)";
			comments_toggle.setAttribute('id', 'comments__toggled');
		}

	}
}
 
