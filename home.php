<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/style.css">
</head>
<body>
    <nav>
        <img class="logo-nav" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/logo-ag.svg">
        <div>
            <a href="#projects">projets</a>
            <a href="#aboutme">à propos</a>
            <a href="#contact">contact</a>
            <a href="">cv</a>
        </div>
    </nav>

    <section class="home">
        <a class="aboutme-container" href="#aboutme">
            <div class="aboutme-img">
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/illu-3-portfolio.png">
            </div>
            <h4 class="nav-title nav-title-aboutme">à propos<span>de moi</span></h4>
        </a>
        <div class="main-part">
            <a class="cv-container" href="">
                <div class="cv-img">
                    <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/illu-4-portfolio.png">
                </div>
                <h4 class="nav-title nav-title-cv"><span>Télécharger mon</span>CV</h4>
            </a>
            <div class="name-margin">
                <div class="name-container">
                    <h1>Agnès Guinin</h1>
                    <p>Webdesigner, Créatrice d'ambiance</p>
                </div>
                <img class="logo-opacity" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/logo-ag.svg">
                <img class="logo-responsive" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/logo-ag-white.svg">
            </div>
            <div class="nav-responsive">
                <a href="#aboutme">à propos</a>
                <div class="nav-responsive-line"></div>
                <a href="#projects">Projets</a>
                <div class="nav-responsive-line"></div>
                <a href="#contact">contact</a>
                <div class="nav-responsive-line"></div>
                <a href="">cv</a>
            </div>
            <a class="projets-container" href="#projects">
                <div class="projets-img">
                    <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/illu-1-portfolio.png">
                </div>
                <h4 class="nav-title nav-title-projets"><span>Mes</span>Projets</h4>
            </a>
        </div>
        <a class="contact-container" href="#contact">
            <div class="contact-img">
                    <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/contact-bg.png">
            </div>
            <h4 class="nav-title nav-title-contact"><span>Me</span>Contacter</h4>
        </a>
    </section>

    <section class="about-me" id="aboutme">
        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/aboutme.png" alt="">
        <div class="about-me-description">
            <h2><span>à</span> propos</h2>
            <p>
                Étudiante en webdesign à Sup'Internet sur Paris, amoureuse d'illustrations et un peu geek sur les bords, je passe beaucoup de temps entre mes livres et ma passion, le webdesign.
                <br><br>Après un bac littéraire en 2014, j'ai d'abord suivi deux ans de classe préparatoire littéraire en me spécialisant en littérature et langue anglaise, avant de m'inscrire à Sup'Internet par volonté de sortir de l'aspect théorique et de rentrer dans un apprentissage plus pratique et concret. J'y ai découvert le webdesign, avec tous les aspects de créativité, de réflexion et de partage qui le compose.
                <br><br>J'aime réaliser des interfaces claires, pratiques et accueillantes pour l'utilisateur, et répondre au mieux au besoin de mes clients.
                <br><br>Pour voir mon travail ou me contacter, n'hésitez pas à scroller plus bas !
            </p>
        </div>
    </section>

    <section class="projects-main-container" id="projects">
        <h2>Projets</h2>
        <div class="projects-container">
            <a class="projects" href="">
                <div class="project-description bck-color-6">
                    <div class='project-description-placement'>
                        <h3>Je suis un projet</h3>
                        <p>Je suis une description de projet</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/pop-up/london-devoir1.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-5">
                    <div class='project-description-placement'>
                        <h3>Je suis un projet</h3>
                        <p>Je suis une description de projet</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/projet_transversal/transversal-cropped.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-4">
                    <div class='project-description-placement'>
                        <h3>Je suis un projet</h3>
                        <p>Je suis une description de projet</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/pop-up/london-devoir1.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-3">
                    <div class='project-description-placement'>
                        <h3>Je suis un projet</h3>
                        <p>Je suis une description de projet</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/projet_transversal/transversal-cropped.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-2">
                    <div class='project-description-placement'>
                        <h3>Je suis un projet</h3>
                        <p>Je suis une description de projet</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/pop-up/london-devoir1.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-1">
                    <div class='project-description-placement'>
                        <h3>Je suis un projet</h3>
                        <p>Je suis une description de projet</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/projet_transversal/transversal-cropped.png">
            </a>
        </div>
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <form>
            Nom : <input type="text" name="nom">
            Status : <input list="statues" name="statues">
            <datalist id="statues">
                <option value="Entreprise">
                <option value="Particulier">
            </datalist>
            Nom Entreprise : <input type="text" name="nom entreprise">
            Email : <input type="email" name="email">
            Téléphone : <input type="tel" name="tel">
            Message : <input type="text" name="message">
            <input type="submit" class="submit" value="Envoyer">
        </form>
    </section>

    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.5'><\/script>".replace("HOST", location.hostname));
        //]]></script>

</body>
</html>