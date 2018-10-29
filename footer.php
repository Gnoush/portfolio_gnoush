<section class="direction">
    <a class="arrow-icon-container arrow-project-nav-left" href=""><img class=""
                                                                        src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/angle-left-solid.svg"></a>
    <a class="arrow-icon-container arrow-project-nav-right" href=""><img
                src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/angle-right-solid.svg"></a>
</section>

<footer>
    <div class="footer-line"></div>
    <p>copyright Agnès Guinin ©</p>
</footer>

<script type="text/javascript">
    //Shamelessly steal data returned from php

    /**
     * Store the Current theme's path
     *
     * @type {string}
     */
    const stylesheetDirectory = "<?php echo get_bloginfo('stylesheet_directory') ?>";

    /**
     * Store the current permalink
     *
     * @type {string}
     */
    const permalink = "<?php echo get_site_url();?>";

    /**
     * Store the Current Template Displayed
     *
     * @type {string}
     */
    var currentTemplate = "<?php echo substr(get_page_template_slug(), 0, -4); ?>";
</script>

<script type="text/javascript" src="<?php echo get_bloginfo('stylesheet_directory') ?>/script.min.js"></script>
</body>
</html>