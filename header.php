<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/sass/normalize.css'; ?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>">
        <title>TIM</title>
        <?php //wp_head(); ?>
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
        </header>