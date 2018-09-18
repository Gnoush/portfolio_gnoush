<?php /* Template Name: tritus */ ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
</head>
<body>
    <header>
            <a class="logo-home" href="<?php echo esc_url( home_url('/') ); ?>">
                <img class="logo-projects" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/logo-ag.svg">
                <div class="nav-name">
                    <h3>Agnès Guinin</h3>
                    <p>Webdesigner</p>
                </div>
            </a>
            <a href="" class="far fa-paper-plane contact-cta">
                Contact
            </a>
    </header>

    <section class="direction">
        <a href="" class="fas fa-angle-left"></a>
        <a href="" class="fas fa-angle-right"></a>
    </section>

    <section class="project-name">
        <h1>Projet Tritus</h1>
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/tritus/tritus-mockup.png" alt="">
        <p class="description">
            A travers un site internet, son application mobile et sa poubelle connectée, Tritus encourage le recyclage de bouteille tout en récompensant l'utilisateur !
            <br><br>Comment ça marche ? L'utilisateur va jeter ses bouteilles dans une poubelle Tritus, chaque bouteille recyclé se transformera en points que l'utilisateur pourra utiliser pour obtenir des bons de réductions ou bons d'achats dans différents commerces partenaires du projet Tritus.
        </p>
    </section>

    <section class="project-details">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/tritus/accueil-connecté-desktop.png" alt="">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/tritus/devenir-partnenaire-desktop.png" alt="">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/tritus/noustablette.png" alt="">
    </section>

    <section class="direction">
        <a href="" class="fas fa-angle-left"></a>
        <a href="" class="fas fa-angle-right"></a>
    </section>

    <footer>
        <div class="footer-line"></div>
        <p>copyright Agnès Guinin ©</p>
    </footer>

    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.5'><\/script>".replace("HOST", location.hostname));
        //]]></script>
</body>
</html>