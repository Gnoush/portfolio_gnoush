<!DOCTYPE html>
<html>
<head>
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
            <a href="CV-agnes-guinin.pdf" download="cv_agnes_guinin">cv</a>
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
            <a class="cv-container" href="CV-agnes-guinin.pdf" download="cv_agnes_guinin">
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
                <a href="CV-agnes-guinin.pdf" download="cv_agnes_guinin">cv</a>
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
        <img class="about-me-img-responsive" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/aboutme-responsive.png" alt="">
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
                        <h3>Glastonbury Festival</h3>
                        <p>Édition 2018</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/affiche-glastonbury.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-5">
                    <div class='project-description-placement'>
                        <h3>City Hunter : <br> Découvre ta ville !</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/pub-city-hunter.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-4">
                    <div class='project-description-placement'>
                        <h3>Wonderball</h3>
                        <p>Une BD bien sombre au coeur de San Francisco !</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/accueil_wonderball.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-3">
                    <div class='project-description-placement'>
                        <h3>Illustrations diverses</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/bckg-responsive.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-2">
                    <div class='project-description-placement'>
                        <h3>Divers Logos</h3>
                        <p>Victory us, logos perso, Mini-moi</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/alternativ-logo.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-1">
                    <div class='project-description-placement'>
                        <h3>Joyeux Noël !</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/carte-noel.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-6">
                    <div class='project-description-placement'>
                        <h3>Call me Melidrama</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/Melidrama.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-5">
                    <div class='project-description-placement'>
                        <h3>Popups n°2</h3>
                        <p>Chaussures et série Netflix (Outlander)</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/perso-série-outlander.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-4">
                    <div class='project-description-placement'>
                        <h3>Projets de 3IE</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/w4tchme.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-3">
                    <div class='project-description-placement'>
                        <h3>Présentation de 3IE</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/sketchnote_3IE.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-2">
                    <div class='project-description-placement'>
                        <h3>Harry, Ron et Hermione</h3>
                        <p>Always</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/HP_vecto.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-1">
                    <div class='project-description-placement'>
                        <h3>Chez Momo : <br> épicerie huppé</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/momo.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-6">
                    <div class='project-description-placement'>
                        <h3>Stay in Shape : <br> projet fitness</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/logo-sis.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-5">
                    <div class='project-description-placement'>
                        <h3>Aimez vos oreilles</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/dumbo_ipod.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-4">
                    <div class='project-description-placement'>
                        <h3>Poisson, Arts graphiques, hérisson et chapeaux</h3>
                        <p>affiche</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/FISH.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-3">
                    <div class='project-description-placement'>
                        <h3>Fibre</h3>
                        <p>Collection naturelle et urbaine</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/fibre_v1.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-2">
                    <div class='project-description-placement'>
                        <h3>Queen of hearts</h3>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/mockup-cartes.png">
            </a>
            <a class="projects" href="">
                <div class="project-description bck-color-1">
                    <div class='project-description-placement'>
                        <h3>Popups</h3>
                        <p>Pub pour le Palace Theater, choix de forfait et achat de téléphone</p>
                    </div>
                </div>
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/img/projets/london-devoir1.png">
            </a>
            <a class="projects" href="">
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

    <footer>
        <div class="footer-line"></div>
        <p>copyright Agnès Guinin ©</p>
    </footer>

    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.5'><\/script>".replace("HOST", location.hostname));
        //]]></script>

</body>
</html>