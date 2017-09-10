$(document).ready(function() {
	// Image de fond dynamique
	$.backstretch(
		["img/001.jpg","img/002.jpg","img/003.jpg"],
		{ fade: 750, duration: 2500 }
	);

	// Démarrage du timer (cooldown)
	$(".v2cooldown").TimeCircles({
	    animation: "tricks",
	    bg_width: 0,
	    fg_width: 0.01,
	    circle_bg_color: "rgba(255,255,255,0)",
	    circle_bg_fill_color: "rgba(255,255,255,0.1)",
	    count_past_zero: false,
	    time: {
	        "Days": {
	            "text": "Jours",
	            "color": "#ffffff",
	            "show": true
	        },
	        "Hours": {
	            "text": "Heures",
	            "color": "#ffffff",
	            "show": true
	        },
	        "Minutes": {
	            "text": "Minutes",
	            "color": "#ffffff",
	            "show": true
	        },
	        "Seconds": {
	            "text": "Secondes",
	            "color": "#ffffff",
	            "show": true
	        }
	    }
	});

});