<?php
define("BASE", rtrim(dirname(dirname($_SERVER["SCRIPT_NAME"])), "/"));
?>
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

    <title>Utaria | Règlements des serveurs</title>

    <meta name="viewport" content="width=device-width, initial-scale = 1, user-scalable = no">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Utaria_FR">
    <meta name="twitter:title" content="Utaria, un serveur survie UNIQUE !">
    <meta name="twitter:description" content="Règlements des serveurs">
    <meta property="og:title" content="Utaria">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://utaria.fr/">

    <link rel="icon" type="image/png" href="<?= BASE ?>/img/favicon.png?v=2" />

    <meta name="viewport" content="width=device-width, initial-scale = 1, user-scalable = no">

    <link href="//fonts.googleapis.com/css?family=Lato:400,600" rel="stylesheet">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link href="<?= BASE ?>/css/app.css?v=2.2" rel="stylesheet">

    <style type="text/css">
        body, html {
            width: 100%;
            height: 100%;
            background: #071521;
        }
        body:before {
            display: none;
        }
        section.content:before {
            display: none;
        }
        section.content {
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            margin: 0;
        }
        section.content span.badge {
            position: relative;
            left: 190px;
            top: -70px;
            margin: 0 auto;
            width: 50px;
            height: 30px;
        }
        p {
            display: block;
            position: relative;
            margin: 15px auto;
            color: white;
            padding: 0 15px;
            max-width: 960px;
            font-family: "Lato", sans-serif;
            font-size: 1.2em;
            text-align: center;
        }

        a.r {
           text-decoration: none;
        }

        .reglement {
            display: block;
            position: relative;
            width: 960px;
            border: 2px solid #AAA;
            border-radius: 5px;
            margin: 15px auto;
            padding: 15px 30px;
            text-align: left;

            color: #EEE;
            font-family: "Lato", sans-serif;
            font-size: 1.5em;

            transition: all ease-in-out .2s;
        }

        .reglement:hover {
            cursor: pointer;
            background: #AAA;
            color: #111;
        }

        a.backlink {
            display: block;
            position: relative;
            color: #2980b9;
            text-decoration: none;
            font-family: "Lato", sans-serif;
            font-size: 1.1em;
            padding: 15px 0;
        }

        a.backlink:hover {
            text-decoration: underline;
        }

        @media (max-width: 960px) {
            .reglement, p {
                width: calc(100% - 20px);
                margin-left: 10px;
                margin-right: 10px;
            }
        }
    </style>
</head>
<body>

<section class="content wrapper">
    <img class="logo" src="<?= BASE ?>/img/logo.png?v=2.2" alt="Logo d'Utaria">
    <span class="badge">V2</span>

    <h1>Règlements de nos serveurs</h1>
    <p>Les présents règlements sont considérés comme lus et acceptés par tous les utilisateurs utilisant un des services de UTARIA​. Dès lors de la connexion à un de nos services, en cas de non-respect d’une des règles précisées dans ces documents, une sanction sera appliquée au fautif.</p>

    <br /><br />

    <a class="r" href="<?= BASE ?>/storage/Reglement.pdf" target="_blank">
        <div class="reglement">
            Règlement Général des serveurs
        </div>
    </a>
    <a class="r" href="<?= BASE ?>/storage/Reglement-PVP.pdf" target="_blank">
        <div class="reglement">
            Règlement PVP du serveur Survie
        </div>
    </a>

    <a class="backlink" href="<?= BASE ?>">Retourner à la page d'accueil</a>
</section>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-87706617-1"></script>
<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-87706617-1');
</script>
</body>
</html>
