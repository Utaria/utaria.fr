<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Utaria, les serveurs de demain ! Marre du survie classique de Minecraft ? Venez tester notre survie UNIQUE sur mc.utaria.fr !">
    <meta name="keywords" content="minecraft,serveur minecraft,serveur,survie unique,unique,original,nouveau,survival">
    <meta name="author" content="Utaria">
    <meta name="dcterms.rightsHolder" content="utaria">
    <meta name="Revisit-After" content="2 days">
    <meta name="Rating" content="general">
    <meta name="language" content="fr-FR" />
    <meta name="robots" content="all" />
    <meta charset="UTF-8">

    <title>Utaria | Serveur Minecraft innovant</title>

    <meta name="viewport" content="width=device-width, initial-scale = 1, user-scalable = no">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Utaria_FR">
    <meta name="twitter:title" content="Utaria, les serveurs de demain !">
    <meta name="twitter:description" content="Utaria, un serveur Minecraft innovant.">
    <meta property="og:title" content="Utaria">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://utaria.fr/">

    <link rel="icon" type="image/png" href="<?= $Html->srcImg("favicon.png") ?>" />

    <?= $Html->css("https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,700") ?>
    <?= $Html->css("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css") ?>
    <?= $Html->css("style") ?>
    <?= $Html->css("blog") ?>
</head>
<body>
    <header class="header">
        <section class="upper">
            <div class="wrap-inner">
                <div class="logo">
                   <?= $Html->link("", $Html->img("logo.png")) ?>
                </div>
                <div class="players">
                    <span class="online">En ligne.</span> <span>13/50</span> joueurs connectés
                </div>
                <nav class="navigation-header">
                    <a href="<?= $Html->href("voter") ?>" class="btn btn-secondary" title="Voter pour nous"><i class="fa fa-thumbs-up"></i>Voter</a>
                    <a href="//boutique.utaria.fr" class="btn btn-primary" title="La boutique d'Utaria"><i class="fa fa-star"></i>Boutique</a>
                </nav>
            </div>
        </section>

        <section class="lower">
            <div class="wrap-inner">
                <div class="ip-container ip-copy" title="Clique pour copier l'IP !" data-clipboard-text="mc.utaria.fr">
                    IP du serveur: <span>mc.utaria.fr</span>
                </div>
                <nav class="sub-nav">
                    <a href="<?= $Html->href("blog") ?>" title="Notre blog">Blog</a>
                    <a title="Statistiques du serveur" class="sub">Statistiques <i class="fa fa-caret-down"></i></a>
                    <a href="<?= $Html->href("partenaires") ?>" title="Partenaires du serveur">Partenaires</a>
                    <a href="<?= $Html->href("suggestions") ?>" title="Suggestions">Suggestions</a>
                    <a title="Informations du serveur" class="sub">Information <i class="fa fa-caret-down"></i></a>
                    <a href="<?= $Html->href("guide") ?>" title="Notre guide">Guide</a>
                </nav>
            </div>
        </section>
    </header>

    <?= $content_for_layout; ?>

    <footer class="footer">
        <div class="wrap-inner">
            <div class="row row-3">
                <div class="container-description">
                    <?= $Html->img("logo.png") ?>
                    <p>
                        Utaria est un serveur Minecraft non affilié a Mojang.
                        <br>
                        Ouvert depuis le 16 décembre 2016, notre but est
                        <br>
                        de vous proposer du contenu inédit et original.
                    </p>
                </div>



                <div class="container-socialnetwork">
                    <a href="https://www.facebook.com/utaria.fr/" target="_blank" class="social-network facebook">
                        <?= $Html->img("icons/facebook.png") ?>
                    </a>
                    <a href="https://twitter.com/Utaria_FR" target="_blank" class="social-network twitter">
                        <?= $Html->img("icons/twitter.png") ?>
                    </a>
                    <a href="mailto:contact@utaria.fr" class="social-network contact">
                        <?= $Html->img("icons/contact.png") ?>
                    </a>
                </div>
            </div>



            <div class="row row-3">
                <ul class="container-pagination">
                    <li><?= $Html->link("blog", "Suivre notre avancement") ?></li>
                    <li><?= $Html->link("voter", "Votez pour nous") ?></li>
                    <li><?= $Html->link("jouer", "nous rejoindre") ?></li>
                    <li><a href="#">Statistiques</a></li>
                    <li><a href="#">Nous contacter</a></li>
                </ul>
            </div>

            <div class="row row-3">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Futaria.fr%2F&tabs=timeline&width=385&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="385" height="250" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>

        <div class="wrap-inner">
            <div class="container-link">
                <?= $Html->link("a-propos/conditions", "Conditions générales d'utilisation") ?>
                <?= $Html->link("a-propos/reglement", "Règlement") ?>
                <?= $Html->link("a-propos/cgv", "Conditions de vente") ?>
            </div>
        </div>

    </footer>

    <?= $Html->js("particle") ?>
    <?= $Html->js("scroll") ?>
    <?= $Html->js("clipboard") ?>
    <?= $Html->js("copy") ?>
</body>
</html>