<?php
    get_header(); // Inclut le fichier d'en-tête du thème
?>
<main>
    <!-- Section principale avec un "hero" pour la première impression -->
    <div id="hero">
        <h1>Creativité + Programmation = TIM</h1>
    </div>

    <!-- Section de présentation avec plusieurs blocs d'information -->
    <section class="feed presentation">
        <!-- Bloc de présentation du programme TIM -->
        <div class="presentation-tim">
            <div class="img-projet">
                <img src="<?php echo get_template_directory_uri() . '/images/image.png'; ?>" alt="" />
            </div>
            <div class="infos">
                <p>
                    La technique d'intégration multimédia (TIM) du Collège de Maisonneuve forme des spécialistes en conception, développement et intégration de contenus numériques interactifs. Les diplômés maîtrisent la création d’expériences utilisateur engageantes sur des plateformes variées, incluant sites web, jeux vidéo et autres plateformes numériques. Le programme encourage une approche interdisciplinaire, où créativité et logique se rencontrent pour répondre aux besoins d’un marché en constante évolution.
                </p>
            </div>
        </div>
        
        <!-- Bloc pour une charte graphique ou autre élément visuel -->
        <div class="presentation-charte">
            <div class="charte-rond">Charte</div>
        </div>
        
        <!-- Bloc d'information supplémentaire -->
        <div class="presentation-info">
            <div class="img-projet">
                <img src="<?php echo get_template_directory_uri() . '/images/image.png'; ?>" alt="" />
            </div>
            <div class="infos">
                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
            </div>
        </div>

        <!-- Bloc d'information avec inversion de l'ordre des éléments pour la variété visuelle -->
        <div class="presentation-info">
            <div class="infos">
                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
            </div>
            <div class="img-projet">
                <img src="<?php echo get_template_directory_uri() . '/images/image.png'; ?>" alt="" />
            </div>
        </div>
    </section>

    <!-- Section présentant les axes de cours -->
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

    <!-- Section dédiée aux vidéos de projet -->
    <section class="feed-projet video">Vidéo</section>

    <!-- Section pour chaque projet avec effet de parallaxe et éléments cliquables -->
    <section class="feed-projet" id="projet1">
        <div class="projet-paint">
            <div class="info-projet">
                <div class="titre-projet">
                    <h1>Anachonique</h1>
                </div>
                <div class="img-parralax cliquable" data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" id="projet1"></div>
                <div class="titre-projet">
                    <h1>3D</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="feed-projet" id="projet2">
        <div class="projet-paint">
            <div class="info-projet">
                <div class="titre-projet">
                    <h1>Nicolas</h1>
                </div>
                <div class="img-parralax cliquable" data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" id="projet2"></div>
                <div class="titre-projet">
                    <h1>3D</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="feed-projet" id="projet3">
        <div class="projet-paint">
            <div class="info-projet">
                <div class="titre-projet">
                    <h1>Nom Projet</h1>
                </div>
                <div class="img-parralax cliquable" data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" id="projet3"></div>
                <div class="titre-projet">
                    <h1>Web</h1>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> <!-- Inclut le fichier de pied de page du thème -->

<!-- Inclusion des scripts JS pour des fonctionnalités supplémentaires (commentés pour l'instant) -->
<!-- 
<script src="js/curseur.js"></script>
<script src="js/boutons.js"></script>
<script src="js/barre-navigation-scroll.js"></script>
<script src="js/grained.min.js"></script>
<script src="js/grain.js"></script> 
-->
</html>
