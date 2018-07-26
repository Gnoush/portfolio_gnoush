<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Agnès Guinin">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <img class="logo-nav" src="./img/logo-ag.svg">
        <div>
            <a href="">projets</a>
            <a href="">à propos</a>
            <a href="">contact</a>
            <a href="">cv</a>
        </div>
    </nav>

    <section class="home">
        <a class="apropos-container" href="#aboutme">
            <img src="">
            <h4 class="nav-title">à propos<span>de moi</span></h4>
        </a>
        <div class="main-part">
            <a class="cv-container" href="">
                <img src="">
                <h4 class="nav-title"><span>Télécharger mon</span>CV</h4>
            </a>
            <div>
                <img class="logo-opacity" src="">
                <div class="name-container">
                    <h1>Agnès Guinin</h1>
                    <p>Webdesigner, Créatrice d'ambiance</p>
                </div>
            </div>
            <a class="projets-container" href="#projects">
                <img src="">
                <h4 class="nav-title"><span>Mes</span>Projets</h4>
            </a>
        </div>
        <a class="contact-container" href="#contact">
            <img src="">
            <h4 class="nav-title"><span>Me</span>Contacter</h4>
        </a>
    </section>

    <section class="about-me" id="aboutme">
        <div>
            <img src="" alt="">
        </div>
        <div class="about-me-description">
            <h2>à propos <span>de moi</span></h2>
            <p>blablabla description</p>
        </div>
    </section>

    <section class="projects-main-container" id="projects">
        <h2>Projets</h2>
        <div class="projects-container">
            <a class="projects" href="">
                <div class="project-description">
                    <h3>Je suis un projet</h3>
                    <p>Je suis une description de projet</p>
                </div>
                <div class="img-shadow-container">
                    <img src="">
                </div>
            </a>
            <a class="projects" href="">
                <div class="project-description">
                    <h3>Je suis un projet</h3>
                    <p>Je suis une description de projet</p>
                </div>
                <div class="img-shadow-container">
                    <img src="">
                </div>
            </a>
        </div>
    </section>

    <form id="contact">
        <h2>Contact</h2>
        <input>
    </form>

    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.5'><\/script>".replace("HOST", location.hostname));
        //]]></script>

</body>
</html>