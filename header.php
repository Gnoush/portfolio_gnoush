<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css"
          integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css"
          integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
</head>
<body>

<script type="text/javascript">
    /**
     * Store the Current Template Displayed
     *
     * @type {string}
     */
    var currentTemplate = "<?php echo substr(get_page_template_slug(), 0, -4); ?>";
</script>

<header>
    <a class="logo-home" href="<?php echo esc_url(home_url('/')); ?>">
        <img class="logo-projects" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/logo-ag.svg">
        <div class="nav-name">
            <h3>Agnès Guinin</h3>
            <p>Webdesigner</p>
        </div>
    </a>
    <a href="<?php echo get_site_url() . "#contact"; ?>" class="contact-cta">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/paper-plane-solid.svg">
        <span>Contact</span>
    </a>
</header>

<section class="direction">
    <a class="arrow-icon-container arrow-project-nav-left" href=""><img class=""
                                                                        src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/angle-left-solid.svg"></a>
    <a class="arrow-icon-container arrow-project-nav-right" href=""><img
                src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/angle-right-solid.svg"></a>
</section>