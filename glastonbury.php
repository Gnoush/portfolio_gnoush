<?php /* Template Name: glastonbury */ ?>
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
        <h1>Glastonbury Festival</h1>
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/glastonbury/mockup-glastonbury.png" alt="">
        <p>
           Glastonbury ne faisant pas de festival en 2018, moi et plusieurs designers avons imaginé notre propre campagne publicitaire, en nous inspirant du mouvement psychédélique des années 70.
        </p>
    </section>

    <section class="project-details">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/glastonbury/affiche-glastonbury.png" alt="">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/glastonbury/flyer-mockup.png" alt="">
        <img class="glastonbury-shadow" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/glastonbury/banner-glastonbury.png" alt="">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets-details/glastonbury/interactive-concept-mockup.png" alt="">
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