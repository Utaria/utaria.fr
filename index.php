<?php
header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');

define("BASE", rtrim(dirname($_SERVER["SCRIPT_NAME"]), "/"));

$title = "Préparez-vous, on arrive !";
?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!-- TU FAIS QUOI LÀ JEUNE PADAWAN ???                             -->
<!-- Tu risques de perdre la vie ici, tu sais ?                    -->
<!-- Tu touches avec les yeux et non avec le nez. Merci            -->
<!-- Après tu fais ce que tu veux avec ce code de toute manière :( -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!-- Copyright (c) 2017-2018 UTARIA             Oui, ça fait joli. -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<!DOCTYPE html>
<html>
	<head>
		<meta name="description" content="Utaria, les serveurs de bientôt ! Préparez-vous à une aventure unique !">
	    <meta name="keywords" content="minecraft,serveur minecraft,serveur,survie unique,unique,original,nouveau,survival">
	    <meta name="author" content="Utaria">
	    <meta name="dcterms.rightsHolder" content="utaria">
	    <meta name="Revisit-After" content="2 days">
	    <meta name="Rating" content="general">
	    <meta name="language" content="fr-FR" />
	    <meta name="robots" content="all" />
	    <meta charset="UTF-8">

		<title>Utaria | <?= $title ?></title>

		<meta name="viewport" content="width=device-width, initial-scale = 1, user-scalable = no">
		<meta name="twitter:card" content="summary">
	    <meta name="twitter:site" content="@Utaria_FR">
	    <meta name="twitter:title" content="Utaria, un serveur survie UNIQUE !">
	    <meta name="twitter:description" content="<?= $title ?>">
	    <meta property="og:title" content="Utaria">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="https://utaria.fr/">

	    <link rel="icon" type="image/png" href="<?= BASE ?>/img/favicon.png?v=2" />
	
		<meta name="viewport" content="width=device-width, initial-scale = 1, user-scalable = no">

		<link href="//fonts.googleapis.com/css?family=Lato:400,600" rel="stylesheet">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
		<link href="<?= BASE ?>/css/timecircles.css?v=2.1" rel="stylesheet">
		<link href="<?= BASE ?>/css/app.css?v=2.1" rel="stylesheet">
	</head>
	<body>
		<section class="content wrapper">
			<img class="logo" src="<?= BASE ?>/img/logo.png?v=2.1" alt="Logo d'Utaria">
			<span class="badge">V2</span>

            <h1><?= $title ?></h1>
            <div class="v2cooldown" data-date="2018-03-03 14:00:00"></div>
            <!-- Oui, ce coup-ci c'est bien la bonne date ! ;-) -->

		</section>

		<script type="text/javascript" src="<?= BASE ?>/js/jquery.min.js?v=2.1"></script>
		<script type="text/javascript" src="<?= BASE ?>/js/backstretch.js?v=2.1"></script>
		<script type="text/javascript" src="<?= BASE ?>/js/timecircles.js?v=2.1"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-87706617-1"></script>
        <script type="text/javascript">
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-87706617-1');
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                // Image de fond dynamique
                $.backstretch(
                    ["<?= BASE ?>/img/001.jpg","<?= BASE ?>/img/002.jpg","<?= BASE ?>/img/003.jpg"],
                    //["<?= BASE ?>/img/d1.jpg","<?= BASE ?>/img/d2.jpg","<?= BASE ?>/img/d3.jpg","<?= BASE ?>/img/d4.jpg","<?= BASE ?>/img/d5.jpg","<?= BASE ?>/img/d6.jpg"],
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

                $(window).resize(function() {
                    $(".v2cooldown").TimeCircles().rebuild();
                });

            });
        </script>

	</body>
</html>
