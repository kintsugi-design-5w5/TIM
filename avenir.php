<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="sass/normalize.css" />
        <link rel="stylesheet" href="style.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet" />
        <title>TIM</title>
    </head>
<body>
    <header>
        <nav>
            <div class="barre-navigation">
                <a class="logo" href="#hero"><img src="images/LogoTim.png" alt="logo du TIM" /></a>
                <input type="checkbox" name="burger-box" id="burger" />
                <div class="menu">
                    <ul>
                        <li>Accueil</li>
                        <li>Cours</li>
                        <li>Projets</li>
                        <li>Avenir</li>
                    </ul>
                </div>
                <label for="burger">
                    <div class="burger">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </label>
                <div class="flou"></div>
            </div>
        </nav>
        <div id="hero">
            <h1>Creativité + Programmation = TIM</h1>
        </div>
    </header>
    <main>
        <div class="feed-avenir">
            <div class="lesmasks-avenir">
                <!-- <div class="conteneur-hover-mask"><div class="conteneur-mask"><p>Perspective</p><div class="mask-avenir"><img src="images/image.png" alt="tour-effeil"></div></div></div>
                <div class="conteneur-hover-mask"><div class="conteneur-mask"><p href="">Perspective</p><div class="mask-avenir"><img src="images/touEffeilNuit.jpg" alt="tour-effeil-nuit"></div></div></div>
                <div class="conteneur-hover-mask"><div class="conteneur-mask"><p href="">Perspective</p><div class="mask-avenir"><img src="images/images2.jpg" alt="tour-effeil"></div></div></div> -->
                <div class="conteneur-mask"><p>Perspective</p><div class="mask-avenir"><img src="images/image.png" alt="tour-effeil"></div></div>
                <div class="conteneur-mask"><p>Perspective</p><div class="mask-avenir"><img src="images/touEffeilNuit.jpg" alt="tour-effeil-nuit"></div></div>
                <div class="conteneur-mask"><p>Perspective</p><div class="mask-avenir"><img src="images/images2.jpg" alt="tour-effeil"></div></div>
            </div>
        </div>
    </main>
</body>
<script src="js/barre-navigation-scroll.js"></script>
<script src="js/cercle-avenir.js"></script>
<script src="<?php echo get_template_directory_uri() . '/js/menu-burger.js'; ?>"> </script>
<script src="<?php echo get_template_directory_uri() . '/js/barre-navigation-scroll.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/cercle-avenir.js'; ?>"></script>
</html>