<?php /* Template Name: wonderball */ ?>
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
        <h1>Wonderball</h1>
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/wonderball/wonderball_mockup.png" alt="">
        <p>Une ambiance sombre, des personnages bien ficelés, Wonderball est une BD policière situé à San Francisco. J'ai essayé de restituer l'atmosphère dans ce site promotionnel.</p>
    </section>

    <section class="project-details">
            <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/wonderball/wonderball-mobile.png" alt="">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/wonderball/accueil_wonderball.png" alt="">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/wonderball/albums.png" alt="">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/wonderball/fiche-tome-1.png" alt="">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/wonderball/page-actu.png" alt="">
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