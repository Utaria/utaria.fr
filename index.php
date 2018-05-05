<?php
//header('HTTP/1.1 503 Service Temporarily Unavailable');
//header('Status: 503 Service Temporarily Unavailable');

define("BASE", rtrim(dirname($_SERVER["SCRIPT_NAME"]), "/"));

$title = "Les projets Minecraft du futur !";
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
		<meta name="description" content="Utaria, une communauté... et des projets Minecraft incroyables et inédits !">
	    <meta name="keywords" content="minecraft,serveur minecraft,serveur,faction unique,futur,faction du futur,unique,original,nouveau,faction">
	    <meta name="author" content="Utaria">
	    <meta name="dcterms.rightsHolder" content="utaria">
	    <meta name="Revisit-After" content="2 days">
	    <meta name="Rating" content="general">
	    <meta name="language" content="fr-FR" />
	    <meta name="robots" content="all" />
	    <meta charset="UTF-8">

		<title><?= $title ?> - Utaria</title>

		<meta name="viewport" content="width=device-width, initial-scale = 1, user-scalable = no">
		<meta name="twitter:card" content="summary">
	    <meta name="twitter:site" content="@Utaria_FR">
	    <meta name="twitter:title" content="Utaria, un réseau communautaire basé sur #Minecraft.">
	    <meta name="twitter:description" content="<?= $title ?>">
	    <meta property="og:title" content="Utaria">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="https://utaria.fr/">

	    <link rel="icon" type="image/png" href="<?= BASE ?>/img/favicon.png?v=2" />

		<meta name="viewport" content="width=device-width, initial-scale = 1, user-scalable = no">

		<link href="//fonts.googleapis.com/css?family=Lato:400,600" rel="stylesheet">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
		<link href="<?= BASE ?>/css/timecircles.css?v=05052018" rel="stylesheet">
		<link href="<?= BASE ?>/css/app.css?v=05052018" rel="stylesheet">
	</head>
	<body>
        <!-- Bannière d'acceptation/rejet des cookies (miam) (Règlementation CNIL) -->
        <div id="cookies-eu-banner" style="display: none;">
            En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies par Google Analytics pour réaliser des statistiques de visites.
            <a href="./en-savoir-plus.html" id="cookies-eu-more" style="display:none">En savoir plus</a>
            <button id="cookies-eu-reject">Je refuse</button>
            <button id="cookies-eu-accept">J'accepte</button>
        </div>

		<section class="content wrapper">
			<img class="logo" src="<?= BASE ?>/img/logo.png?v=05052018" alt="Logo d'Utaria">
			<!-- <span class="badge">V3</span> -->

            <h1>Communauté Minecraft</h1>
            <h2>On cherche à faire du nouveau !</h2>

            <div class="button-ip-container">
                <div class="button-ip-top">
                    Le faction du futur !
                </div>
                <button data-clipboard-text="nextgen.utaria.fr" onclick="animationBoutonIp(event)" class="button-ip">
                    <span class="ip">nextgen.utaria.fr</span>
                    <span class="copied">Ip copiée !</span>
                </button>
            </div>

            <!-- <div class="v2cooldown" data-date="2018-03-03 17:00:00"></div> -->
            <!-- C'était l'heure d'ouverture de notre Survie ! :'( RIP -->

            <div class="socials">
                <a class="discord" href="https://discord.gg/UNgPrPk" target="_blank"></a>
                <a class="twitter" href="https://twitter.com/Utaria_FR" target="_blank"></a>
                <a class="github"  href="https://github.com/Utaria" target="_blank"></a>
                <a class="fb"      href="https://facebook.com/utaria.fr/" target="_blank"></a>
            </div>

		</section>

		<script type="text/javascript" src="<?= BASE ?>/js/jquery.min.js?v=05052018"></script>
        <script type="text/javascript" src="<?= BASE ?>/js/backstretch.js?v=05052018"></script>
        <script type="text/javascript" src="<?= BASE ?>/js/cookies-cnil.js?v=05052018"></script>
		<script type="text/javascript" src="<?= BASE ?>/js/timecircles.js?v=05052018"></script>

        <!-- Grâce à ce petit code, on peut savoir qui vient sur notre site :) -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-87706617-1"></script>
        <script type="text/javascript">
            new CookiesEuBanner(function() {
                window.dataLayer = window.dataLayer || [];
                function gtag() {
                    dataLayer.push(arguments);
                }

                gtag('js', new Date());
                gtag('config', 'UA-87706617-1');
            }, true);
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                // Image de fond dynamique
                $.backstretch(
                    ["<?= BASE ?>/img/004.jpg","<?= BASE ?>/img/001.jpg","<?= BASE ?>/img/005.jpg","<?= BASE ?>/img/002.jpg","<?= BASE ?>/img/006.jpg","<?= BASE ?>/img/003.jpg","<?= BASE ?>/img/007.jpg"],
                    //["<?= BASE ?>/img/d1.jpg","<?= BASE ?>/img/d2.jpg","<?= BASE ?>/img/d3.jpg","<?= BASE ?>/img/d4.jpg","<?= BASE ?>/img/d5.jpg","<?= BASE ?>/img/d6.jpg"],
                    { fade: 750, duration: 2500 }
                );

                // Démarrage du timer (cooldown)
                /*
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
                */

                // Bouton de copie de l'adresse IP !
                new ClipboardJS('.button-ip');
            });

            // Animation de copie de l'IP
            var canClick = true;
            function animationBoutonIp(event) {
                var target = event.target || event.srcElement || event.delegateTarget;
                if (target == null || !canClick) return;

                if (target.tagName === "SPAN")
                    target = target.parentNode;

                target.classList.add("clicked");
                canClick = false;

                setTimeout(function() {
                    target.classList.remove("clicked");
                    canClick = true;
                }, 3000);
            }
        </script>

	</body>
</html>
