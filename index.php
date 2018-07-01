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

        <!-- Ca c'est pour les moteurs de recherche, prenez les infos si besoin. -->
		<meta name="viewport" content="width=device-width, initial-scale = 1, user-scalable = no">
		<meta name="twitter:card" content="summary">
	    <meta name="twitter:site" content="@Utaria_FR">
	    <meta name="twitter:title" content="Utaria, un réseau communautaire basé sur #Minecraft.">
	    <meta name="twitter:description" content="<?= $title ?>">
	    <meta property="og:title" content="Utaria">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="https://utaria.fr/">

        <!-- C'est toujours mieux avec une icône -->
	    <link rel="icon" type="image/png" href="<?= BASE ?>/img/favicon.png?v=2" />

        <!-- Indispensable pour les mobiles et tablettes -->
		<meta name="viewport" content="width=device-width, initial-scale = 1, user-scalable = no">

        <!-- On ajoute de belles polices pour faire croire que le site est beau -->
		<link href="//fonts.googleapis.com/css?family=Lato:400,600" rel="stylesheet">
        <!-- Les emojis, c'est la vie, donc on les utilise sur notre site, oui. -->
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <!-- Pour afficher correctement la vidéo -->
        <link href="<?= BASE ?>/css/vjs.css?v=01072018" rel="stylesheet">
        <!-- Maintenant j'inclue mon magnifique code, en espérant que ça fasse pas tout planter... -->
		<link href="<?= BASE ?>/css/app.css?v=01072018" rel="stylesheet">
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
			<img class="logo" src="<?= BASE ?>/img/logo.png?v=01072018" alt="Logo d'Utaria">
			<!-- <span class="badge">RIP</span> -->

            <h1>Communauté Minecraft</h1>
            <h2>Fin de NextGen <i class="em em-film_projector"></i> <i class="em em-sob"></i></h2>

            <!-- La vidéo de fin du projet NextGen :'( -->
            <video id="my-player" class="video-js vjs-default-skin">
                <source src="<?= BASE ?>/storage/video-fin.mp4" type="video/mp4">
            </video>

            <!-- <div class="v2cooldown" data-date="2018-03-03 17:00:00"></div> -->
            <!-- C'était l'heure d'ouverture de notre Survie ! :'( RIP -->

            <!-- Nos superbes réseaux, viendez on y est bien ! -->
            <div class="socials">
                <a class="discord" href="https://discord.gg/UNgPrPk" target="_blank"></a>
                <a class="twitter" href="https://twitter.com/Utaria_FR" target="_blank"></a>
                <a class="github"  href="https://github.com/Utaria" target="_blank"></a>
                <a class="fb"      href="https://facebook.com/utaria.fr/" target="_blank"></a>
            </div>

		</section>

        <!-- Plein de scripts plus ou moins utiles... -->
		<script type="text/javascript" src="<?= BASE ?>/js/jquery.min.js?v=01072018"></script>
        <script type="text/javascript" src="<?= BASE ?>/js/backstretch.js?v=01072018"></script>
        <script type="text/javascript" src="<?= BASE ?>/js/cookies-cnil.js?v=01072018"></script>
        <script type="text/javascript" src="<?= BASE ?>/js/vjs.js?v=01072018"></script>
        <script type="text/javascript" src="<?= BASE ?>/js/vjsfr.js?v=01072018"></script>
        <script type="text/javascript">
            // On lance la vidéo grâce au module "videojs"
            videojs('my-player', {
                controls: true,
                autoplay: true,
                preload: 'auto',
                loop: false,
                width: 622,
                height: 350,
                language: 'fr'
            });
        </script>

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

        <script type="text/javascript">
            $(document).ready(function() {
                // Image de fond dynamique
                $.backstretch(
                    ["<?= BASE ?>/img/004.jpg","<?= BASE ?>/img/001.jpg","<?= BASE ?>/img/005.jpg","<?= BASE ?>/img/002.jpg","<?= BASE ?>/img/006.jpg","<?= BASE ?>/img/003.jpg","<?= BASE ?>/img/007.jpg"],
                    //["<?= BASE ?>/img/d1.jpg","<?= BASE ?>/img/d2.jpg","<?= BASE ?>/img/d3.jpg","<?= BASE ?>/img/d4.jpg","<?= BASE ?>/img/d5.jpg","<?= BASE ?>/img/d6.jpg"],
                    { fade: 750, duration: 2500 }
                );
            });
        </script>

	</body>
</html>
