<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/sass/normalize.css'; ?>"> <!-- Normalisation des styles de base pour tous les navigateurs -->
        
        <!-- Préchargement des ressources pour une meilleure performance -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        
        <!-- Chargement des polices Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

        <link rel="icon" href="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/LogoTim_Icone.webp">
        
        <title>TIM | Technique d'Intégration Multimédia</title> <!-- Titre de la page, affiché dans l'onglet du navigateur -->
        
        <?php wp_head(); ?> <!-- Fonction de WordPress pour inclure des éléments supplémentaires (styles, scripts, etc.) -->
    </head>
    <body id="corps">

        <!-- Curseur personnalisé -->
        <div id="curseur-personnalise">
            <span id="icone-curseur" class="material-symbols-outlined cache"></span>
        </div>

        <!-- Fond animé ou effet grain (probablement géré par CSS ou JS) -->
        <div id="grain"></div>

        <!-- En-tête de la page avec le menu de navigation -->
        <header>
            <nav>
                <div class="chargement">
                    <div class="spinner">
                        <div class="barre-anim"></div>
                        <div class="barre-anim"></div>
                        <div class="barre-anim"></div>
                        <div class="barre-anim"></div>
                        <div class="barre-anim"></div>
                    </div>
                </div>
                <div class="barre-navigation">
                    <!-- Logo cliquable -->
                    <a data-icone="east" class="logo" onclick="transitionToPage('<?php echo home_url(); ?>')">
                        <img src="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/TIM_Logo.webp" alt="logo du TIM" />
                    </a>

                    <!-- Case à cocher pour le menu burger (visible uniquement sur mobile) -->
                    <input type="checkbox" name="burger-box" id="burger" />

                    <!-- Menu principal -->
                    <div class="menu-principal-container">
                        <ul>
                            <li><a class="mon-bouton" data-icone="east" onclick="transitionToPage('<?php echo home_url(); ?>')">Accueil</a></li>
                            <li><a class="mon-bouton" data-icone="east" onclick="transitionToPage('<?php echo home_url('/category/cours'); ?>')">Cours</a></li>
                            <li><a class="mon-bouton" data-icone="east" onclick="transitionToPage('<?php echo home_url('/category/projets'); ?>')">Projets</a></li>
                            <li><a class="mon-bouton" data-icone="east" onclick="transitionToPage('<?php echo home_url('/avenir'); ?>')">Avenir</a></li>
                        </ul>
                    </div>

                    <!-- Menu burger pour les petits écrans -->
                    <label for="burger">
                        <svg class="burger burgerTourne cliquable" data-icone="west" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                            <path class="ligne top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                            <path class="ligne middle" d="m 70,50 h -40" />
                            <path class="ligne bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                        </svg>
                    </label>

                    <!-- Effet visuel de flou, probablement activé sur le menu burger -->
                    <div class="flou"></div>
                </div>
            </nav>
        </header>
