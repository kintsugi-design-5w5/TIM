<?php
    get_header(); // Inclut le fichier d'en-tête du thème
?>
<main>
    <?php echo do_shortcode('
       [hero title="Lorsque la <span>créativité</span> rencontre la programmation"
       video_url="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Hero1.mp4"
       images="
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image1.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image2.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image3.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image4.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image1.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image2.png, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Achernar_image4.png
       "]
       '); ?>

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

    <!-- Section dédiée aux 3 projets populaires -->
    <?php if ( have_posts() ) : ?>
    <?php $project_count = 1; // Compteur pour l'ID dynamique ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <section class="feed-projet" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
            <div class="projet-paint" id="projet<?php echo $project_count; ?>">
                <div class="info-projet">
                    <div class="titre-projet">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <a
                        href="<?php the_permalink(); ?>"
                        class="img-parralax cliquable" 
                        data-icone="<?php echo get_template_directory_uri() . '/images/LogoTim.png'; ?>" 
                        style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
                    </a>


                    <div class="titre-projet">
                        <h1><?= get_field('cours'); ?></h1> <!-- Affiche les catégories du projet -->
                    </div>
                </div>
            </div>
        </section>
        <?php $project_count++; ?>
    <?php endwhile; ?>
    <?php else : ?>
        <p>Aucun projet trouvé.</p>
    <?php endif; ?>
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
