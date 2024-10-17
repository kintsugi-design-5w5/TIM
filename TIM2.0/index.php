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
            <div id="hero">
                <h1>Creativité + Programmation = TIM</h1>
            </div>
        </header>
        <main>
            <section class="feed presentation">
                <div class="presentation-tim">
                    <div class="img-projet">Img</div>
                    <div class="infos">
                        <p>
                            La Technique d’Intégration Multimédia (TIM) est l’endroit idéal offrant la possibilité aux étudiants de savoir les nouvelles
                            technologies de l’industrie comme : la programmation des jeux, du montage vidéo, de la modélisation et animation 3D, de la
                            création de sites web, de l’expérimentation en réalité virtuelle (VR), etc.
                        </p>
                    </div>
                </div>
                <div class="presentation-charte">
                    <div class="charte-rond">Charte</div>
                </div>
                <div class="presentation-info">
                    <div class="img-projet">Img</div>
                    <div class="infos">
                        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    </div>
                </div>
                <div class="presentation-info">
                    <div class="infos">
                        <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    </div>
                    <div class="img-projet">Img</div>
                </div>
            </section>
            <section class="feed axes">
                <div class="axes-cours">
                    <div>Jeux video</div>
                    <div>3D</div>
                    <div>Design</div>
                    <div>Animation</div>
                    <div>Img</div>
                    <div>Img</div>
                </div>
            </section>
            <section class="feed-projet video">Vidéo</section>
            <section class="feed-projet">
                <div class="info-projet">
                    <h1>Nom Projet</h1>
                    <div class="img-parralax"></div>
                    <h1>Categorie</h1>
                </div>
            </section>
            <section class="feed-projet">
                <div class="info-projet">
                    <h1>Nom Projet</h1>
                    <div class="img-parralax"></div>
                    <h1>Categorie</h1>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer-sections">
                <div class="footer-bloc">
                    <h2>Adresse</h2>
                    <a href="#"> 3800 R. Sherbrooke E, Montréal, QC H1X 2A2</a>
                </div>
                <div class="footer-bloc">
                    <h2>Navigation</h2>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Cours</a></li>
                        <li><a href="#">Projets</a></li>
                        <li><a href="#">Avenir</a></li>
                    </ul>
                </div>
                <div class="footer-bloc">
                    <h2>Liens</h2>
                    <ul>
                        <li><a href="#">Maisonneuve</a></li>
                        <li><a href="#">CÉTIM</a></li>
                        <li><a href="#">Calendrier scolaire</a></li>
                        <li><a href="#">Galerie de jeux</a></li>
                    </ul>
                </div>
                <div class="footer-bloc">
                    <a href="#"><img src="images/LogoTim.png" alt="" /></a>
                </div>
            </div>
            <div class="footer-sociaux">
                <a href="#"><img src="images/LogoTim.png" alt="" /></a>
                <a href="#"><img src="images/LogoTim.png" alt="" /></a>
                <a href="#"><img src="images/LogoTim.png" alt="" /></a>
                <a href="#"><img src="images/LogoTim.png" alt="" /></a>
            </div>
            <div class="footer-droits">
                <p>© 2024 Tous droits réservés</p>
            </div>
        </footer>
    </body>
    <script src="<?php echo get_template_directory_uri() . '/js/menu-burger.js'; ?>"> </script>
    <script src="<?php echo get_template_directory_uri() . '/js/barre-navigation-scroll.js'; ?>"></script>
</html>
