<section class="direction">
    <a href="" class="fas fa-angle-left  arrow-project-nav-left"></a>
    <a href="" class="fas fa-angle-right  arrow-project-nav-right"></a>
</section>

<footer>
    <div class="footer-line"></div>
    <p>copyright Agnès Guinin ©</p>
</footer>

<script type="text/javascript" src="<?php echo get_bloginfo('stylesheet_directory') ?>/script.min.js"></script>
<script type="text/javascript">
    //Shamelessly stole data returned from php

    /**
     * Store the Current theme's path
     *
     * @type {string}
     */
    var stylesheetDirectory = "<?php echo get_bloginfo('stylesheet_directory') ?>";

    var permalink = "<?php echo get_site_url();?>";
</script>
<script type="text/javascript">

    /**
     *
     * @type {number}
     */
    var loc = projectKeys.indexOf(projects[currentTemplate].templateName);

    initProjectDisplay();
</script>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.5'><\/script>".replace("HOST", location.hostname));
    //]]></script>
</body>
</html>