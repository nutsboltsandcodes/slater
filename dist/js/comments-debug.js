window.onload = function onLoad() {
	commentsToggle();
}

function commentsToggle() {

	var nav 		= document.getElementById('comments__inner-container'),
			toggle 	= document.getElementById('comments-toggle'),
			icon 		= document.getElementById('comments__title-toggle');

	toggle.onclick = function() {
		if ( nav.className === "comments__inner-container" ) {
			nav.className += " comments__inner-container--toggled";
			icon.style.transform = "rotateX(180deg)";
			} else {
			nav.className = "comments__inner-container";
			icon.style.transform = "rotateX(0deg)";
		}
	}
}