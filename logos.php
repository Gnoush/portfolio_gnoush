<?php /* Template Name: logos */ ?>
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
        <h1>Divers Logos</h1>
    </section>

    <section class="project-details-logos">
        <div>
            <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/logos/logomoi1.png" alt="">
            <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/logos/logomoi2.png" alt="">
            <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/logos/logomoi3.png" alt="">
        </div>
        <p>Logos alternatifs à mon logo actuel, mais moins adapté pour le web.</p>
        <div>
            <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/logos/minimoi1.png" alt="">
            <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/logos/minimoi2.png" alt="">
        </div>
        <p>Propositions de logo pour la marque de produit pour bébés Mini-moi. J'ai une petite préférence pour les giraffes.</p>
        <div>
            <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/logos/V-us-logo1.png" alt="">
            <img class="loading" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/logos/loading-app.png" alt="">
            
        </div>
        <p>Créations de logo pour une appli e-sport : VictoryUs. J'en ai créé le logo mais aussi le nom.</p>
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