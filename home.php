<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
</head>
<body>
    <nav>
        <img class="logo-nav" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/logo-ag.svg">
        <div class="nav-elements">
            <a href="#projects">projets</a>
            <a href="#aboutme">à propos</a>
            <a href="#contact">contact</a>
            <a href="<?php echo get_bloginfo('stylesheet_directory'); ?>/CV-agnes-guinin.pdf" download="cv_agnes_guinin">cv</a>
            <div class="network">
                <a class="fab fa-behance" href="https://www.behance.net/agnesguini6480"></a>
                <a class="fab fa-linkedin-in" href="https://www.linkedin.com/in/agn%C3%A8s-guinin-01b819127/"></a>
                <a class="fab fa-twitter" href="https://twitter.com/AgnesGuinin"></a>
            </div>
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
            <a class="cv-container" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/CV-agnes-guinin.pdf" download="cv_agnes_guinin">
                <div class="cv-img">
                    <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/illu-cv.png">
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
                <a href="<?php echo get_bloginfo('stylesheet_directory'); ?>CV-agnes-guinin.pdf" download="cv_agnes_guinin">cv</a>
                <div class="network-responsive">
                    <a class="fab fa-behance" href="https://www.behance.net/agnesguini6480"></a>
                    <a class="fab fa-linkedin-in" href="https://www.linkedin.com/in/agn%C3%A8s-guinin-01b819127/"></a>
                    <a class="fab fa-twitter" href="https://twitter.com/AgnesGuinin"></a>
                </div>
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
        <img class="about-me-img" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/aboutme.png" alt="">
        <div class="about-me-img-responsive-image-wrapper">
            <img class="about-me-img-responsive" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/aboutme-responsive.png" alt="">
        </div>
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
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Glastonbury' ) ); ?>">
                <div class="project-description bck-color-6">
                    <div class='project-description-placement'>
                        <h3>Glastonbury Festival</h3>
                        <p>Édition 2018</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/affiche-glastonbury.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'City Hunter' ) ); ?>">
                <div class="project-description bck-color-5">
                    <div class='project-description-placement'>
                        <h3>City Hunter : <br> Découvre ta ville !</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/pub-city-hunter.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Wonderball' ) ); ?>">
                <div class="project-description bck-color-4">
                    <div class='project-description-placement'>
                        <h3>Wonderball</h3>
                        <p>Une BD bien sombre au coeur de San Francisco !</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/accueil_wonderball.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Illustrations' ) ); ?>">
                <div class="project-description bck-color-3">
                    <div class='project-description-placement'>
                        <h3>Illustrations diverses</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/bckg-responsive.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Logos' ) ); ?>">
                <div class="project-description bck-color-2">
                    <div class='project-description-placement'>
                        <h3>Divers Logos</h3>
                        <p>Victory us, logos perso, Mini-moi</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/alternativ-logo.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Noel' ) ); ?>">
                <div class="project-description bck-color-1">
                    <div class='project-description-placement'>
                        <h3>Joyeux Noël !</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/carte-noel.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Melidrama' ) ); ?>">
                <div class="project-description bck-color-6">
                    <div class='project-description-placement'>
                        <h3>Call me Melidrama</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/Melidrama.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Popups 2' ) ); ?>">
                <div class="project-description bck-color-5">
                    <div class='project-description-placement'>
                        <h3>Popups n°2</h3>
                        <p>Chaussures et série Netflix (Outlander)</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/perso-série-outlander.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Projets 3IE' ) ); ?>">
                <div class="project-description bck-color-4">
                    <div class='project-description-placement'>
                        <h3>Projets de 3IE</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/w4tchme.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( '3IE sketches' ) ); ?>">
                <div class="project-description bck-color-3">
                    <div class='project-description-placement'>
                        <h3>Présentation de 3IE</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/sketchnote_3IE.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Harry Potter' ) ); ?>">
                <div class="project-description bck-color-2">
                    <div class='project-description-placement'>
                        <h3>Harry, Ron et Hermione</h3>
                        <p>Always</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/HP_vecto.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Momo' ) ); ?>">
                <div class="project-description bck-color-1">
                    <div class='project-description-placement'>
                        <h3>Chez Momo : <br> épicerie huppé</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/momo.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Stay Shape' ) ); ?>">
                <div class="project-description bck-color-6">
                    <div class='project-description-placement'>
                        <h3>Stay in Shape : <br> projet fitness</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/logo-sis.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Dumbo' ) ); ?>">
                <div class="project-description bck-color-5">
                    <div class='project-description-placement'>
                        <h3>Aimez vos oreilles</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/dumbo_ipod.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Vector' ) ); ?>">
                <div class="project-description bck-color-4">
                    <div class='project-description-placement'>
                        <h3>Poisson, Arts graphiques, hérisson et chapeaux</h3>
                        <p>affiche</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/FISH.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Fibre' ) ); ?>">
                <div class="project-description bck-color-3">
                    <div class='project-description-placement'>
                        <h3>Fibre</h3>
                        <p>Collection naturelle et urbaine</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/fibre_v1.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Queen of Hearts' ) ); ?>">
                <div class="project-description bck-color-2">
                    <div class='project-description-placement'>
                        <h3>Queen of hearts</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/mockup-cartes.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Popups' ) ); ?>">
                <div class="project-description bck-color-1">
                    <div class='project-description-placement'>
                        <h3>Popups</h3>
                        <p>Pub pour le Palace Theater, choix de forfait et achat de téléphone</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/london-devoir1.png">
            </a>
            <a class="projects" href="<?php echo get_permalink( get_page_by_title( 'Tritus' ) ); ?>">
                <div class="project-description bck-color-6">
                    <div class='project-description-placement'>
                        <h3>Tritus : <br>projet de recyclage</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/transversal-cropped.png">
            </a>
        </div>
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <form method="post">
            Nom : <input type="text" name="name" value="<?php if (array_key_exists("name", $_POST)) { echo esc_attr($_POST["name"]); } else { echo null; } ?>">
            Status : <input list="statues" name="status" value="<?php if (array_key_exists("status", $_POST)) { echo esc_attr($_POST["status"]); } else { echo null; } ?>">
            <datalist id="statues">
                <option value="Entreprise">
                <option value="Particulier">
            </datalist>
            Nom Entreprise : <input type="text" name="companyName" value="<?php if (array_key_exists("companyName", $_POST)) { echo esc_attr($_POST["companyName"]); } else { echo null; } ?>">
            Email : <input type="email" name="email" value="<?php if (array_key_exists("email", $_POST)) { echo esc_attr($_POST["email"]); } else { echo null; } ?>">
            Téléphone : <input type="tel" name="phone" value="<?php if (array_key_exists("phone", $_POST)) { echo esc_attr($_POST["phone"]); } else { echo null; } ?>">
            Message : <textarea name="message" >
                <?php if (array_key_exists("message", $_POST)) { echo esc_attr($_POST["message"]); } else { echo null; } ?>
            </textarea>
            <input type="hidden" name="submitted" value="1">
        </form>
        <button id="contact_submit_action" class="submit">Envoyer</button>
    </section>

    <footer>
        <div class="footer-line"></div>
        <p>copyright Agnès Guinin ©</p>
    </footer>

    <script type="text/javascript">
        //Shamelessly stole data returned from php

        /**
         * Store the Current theme's path
         *
         * @type {string}
         */
        var stylesheetDirectory = "<?php echo get_bloginfo('stylesheet_directory') ?>";
        console.log(stylesheetDirectory);
    </script>

    <script type="text/javascript" src="<?php echo get_bloginfo('stylesheet_directory') ?>/script.min.js"></script>

    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.5'><\/script>".replace("HOST", location.hostname));
        //]]></script>

</body>
</html>