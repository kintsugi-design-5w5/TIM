<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/sass/normalize.css'; ?>">
        
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <title>TIM</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- Curseur personnalisé -->
        <div class="cliquable cache" data-icone="images/LogoTim.png">Recherche</div>
        <div class="cliquable cache" data-icone="chemin/vers/click.png">Cliquer</div>
        <div class="cliquable cache" data-icone="chemin/vers/secure.png">Sécurisé</div>

        <div id="curseur-personnalise">
            <img id="icone-curseur" class="cache" alt="Icône de curseur">
        </div>

        <div id="grain"></div>
        <header>
            <nav>
                <div class="barre-navigation">
                    <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/LogoTim.png';?>" alt="logo du TIM" /></a>
                    <input type="checkbox" name="burger-box" id="burger" />
                    
                    <div class="menu-principal-container">
                        <ul>
                            <li><a class="mon-bouton cliquable" data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" href="<?php echo home_url(); ?>">Accueil</a></li>
                            <li><a class="mon-bouton cliquable" data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" href="<?php echo home_url('/category/cours'); ?>">Cours</a></li>
                            <li><a class="mon-bouton cliquable" data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" href="<?php echo home_url('/category/projets'); ?>">Projets</a></li>
                            <li><a class="mon-bouton cliquable" data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" href="<?php echo home_url('/avenir'); ?>">Avenir</a></li>
                        </ul>
                    </div>

                    <?php //wp_nav_menu(['list_item_class'  => 'mon-bouton']); ?>
                    <label for="burger">
                        <!-- <div class="burger cliquable" data-icone="images/LogoTim.png">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div> -->
                        <svg class="burger burgerTourne cliquable" data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png';?>" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                            <path
                                  class="ligne top"
                                  d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                            <path
                                  class="ligne middle"
                                  d="m 70,50 h -40" />
                            <path
                                  class="ligne bottom"
                                  d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                          </svg>
                    </label>
                    <div class="flou"></div>
                </div>
            </nav>
        </header>