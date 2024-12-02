<?php
get_header(); // Inclut le fichier d'en-tête du thème
?>
<main>
    <?php echo do_shortcode('
       [hero title="Lorsque la <span>créativité</span> rencontre la programmation"
       video_url="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Hero1.mp4"
       images="
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Leger_Maelle_Checo_img5.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Triptyque_img4.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroAccueil_img2-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroAccueil_img4-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/NicolasCarriere_Vehicule_image7.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroAccueil_img3-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/HeroAccueil_img1.webp
       "]
       '); ?>

    <!-- Section de présentation avec plusieurs blocs d'information -->
    <section class="feed presentation ignore-grain">
        <!-- Bloc de présentation du programme TIM -->
        <div class="presentation-tim ignore-grain">
            <div class="img-projet ignore-grain">
                <img src="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/TIM_image1.webp"
                    alt="Photo des locaux du TIM" />
            </div>
            <div class="infos">
                <p>
                    La technique d'intégration multimédia (TIM) du Collège de Maisonneuve forme des spécialistes en
                    conception, développement et intégration de contenus numériques interactifs. Les diplômés maîtrisent
                    la création d’expériences utilisateur engageantes sur des plateformes variées, incluant sites web,
                    jeux vidéo et autres plateformes numériques. Le programme encourage une approche interdisciplinaire,
                    où créativité et logique se rencontrent pour répondre aux besoins d’un marché en constante
                    évolution. </p>
            </div>
        </div>
    </section>
    <!-- Section dédiée aux vidéos de projet -->
    <section class="proj-video">
<<<<<<< HEAD
            <video autoplay loop muted playsinline>
                <source src="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Accueil_video2.webm" type="video/webm">
                Votre navigateur ne supporte pas les vidéos HTML5.
            </video>
=======
        <video autoplay loop muted playsinline>
            <source src="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/video_projets_accueil_vid1.webm"
                type="video/webm">
            Votre navigateur ne supporte pas les vidéos HTML5.
        </video>
>>>>>>> 8dff19956c1914117cb7dfd8138a86f490fde439
    </section>
    <section class="feed presentation">
        <!-- Bloc d'information supplémentaire -->
        <div class="presentation-info">
            <div class="img-projet">
                <img src="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/VieEtudiante_image1.webp"
                    alt="Photo de la vie étudiante" />
            </div>
            <div class="infos">
                <h1>Une vie étudiante <span class="fonte-alt">dynamique</span></h1>
            </div>
        </div>

        <!-- Bloc d'information avec inversion de l'ordre des éléments pour la variété visuelle -->
        <div class="presentation-info">
            <div class="infos">
                <h1>Une équipe de professeurs <span class="fonte-alt">passionnés</span></h1>
            </div>
            <div class="img-projet">
                <img src="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/ProfesseursTIM_image1-scaled.jpg"
                    alt="Photo des professeurs" />
            </div>
        </div>

        <!-- Bloc pour une charte graphique ou autre élément visuel -->
        <div class="presentation-charte">
            <h1>Statistiques de placement 2022 en TIM</h1>
            <div class="charte-design">
                <!-- Graphiquw numéro 1 -->
                <div class="graphique" data-percentage="64" data-format="pourcentage">
                    <div class="cercle-arriere">
                        <div class="cercle-avant">
                            <h3 class="nombre-pourcentage"></h3>
                        </div>
                    </div>
                    <h3 class="info-graphique">Emploi lié à la formation</h3>
                    <svg class="svg-charte-progression" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px"
                        height="160px">
                        <defs>
                            <linearGradient id="CouleurGradient">
                                <stop offset="0%" stop-color="#007bff" />
                                <stop offset="100%" stop-color="#004997" />
                            </linearGradient>
                        </defs>
                        <circle cx="150" cy="150" r="130" stroke-linecap="round" />
                    </svg>
                </div>
                <!-- Graphique numéro 2 -->
                <div class="graphique" data-percentage="86" data-format="pourcentage">
                    <div class="cercle-arriere">
                        <div class="cercle-avant">
                            <h3 class="nombre-pourcentage"></h3>
                        </div>
                    </div>
                    <h3 class="info-graphique">Études liés à la formation</h3>
                    <svg class="svg-charte-progression" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px"
                        height="160px">
                        <defs>
                            <linearGradient id="CouleurGradient">
                                <stop offset="0%" stop-color="#007bff" />
                                <stop offset="100%" stop-color="#004997" />
                            </linearGradient>
                        </defs>
                        <circle cx="150" cy="150" r="130" stroke-linecap="round" />
                    </svg>
                </div>
                <!-- Graphique numéro 3 -->
                <div class="graphique" data-percentage="22.81" data-format="dollars">
                    <div class="cercle-arriere">
                        <div class="cercle-avant">
                            <h3 class="nombre-pourcentage"></h3>
                        </div>
                    </div>
                    <h3 class="info-graphique">Salaire moyen</h3>
                    <svg class="svg-charte-progression" class="svg-charte-progression"
                        xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                        <defs>
                            <linearGradient id="CouleurGradient">
                                <stop offset="0%" stop-color="#007bff" />
                                <stop offset="100%" stop-color="#004997" />
                            </linearGradient>
                        </defs>
                        <circle cx="150" cy="150" r="130" stroke-linecap="round" />
                    </svg>
                </div>
                <!-- Graphique numéro 4 -->
                <div class="graphique" data-percentage="58" data-format="pourcentage">
                    <div class="cercle-arriere">
                        <div class="cercle-avant">
                            <h3 class="nombre-pourcentage"></h3>
                        </div>
                    </div>
                    <h3 class="info-graphique">En emploi</h3>
                    <svg class="svg-charte-progression" xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px"
                        height="160px">
                        <defs>
                            <linearGradient id="CouleurGradient">
                                <stop offset="0%" stop-color="#007bff" />
                                <stop offset="100%" stop-color="#004997" />
                            </linearGradient>
                        </defs>
                        <circle cx="150" cy="150" r="130" stroke-linecap="round" />
                    </svg>
                </div>
            </div>

        </div>
    </section>

    <!-- Section présentant les axes de cours -->
    <section class="feed axes">
        <h1>Spécifications</h1>
        <div class="axes-cours">
            <div class="filtre-couleur">
                <h3 class="ombre-texte">Jeux video</h3>
                <div class="boite_cours jeu-video"> </div>
                <div>
<<<<<<< HEAD
                    <a data-icone="east" class="btn_proj cat_7" href="<?php echo home_url('/category/projets'); ?>"> <h4>Projets</h4></a>
                    <a data-icone="east" class="btn_cours cat_7"href="<?php echo home_url('/category/cours'); ?>"> <h4>Cours</h4></a>
=======
                    <a data-icone="east" class="btn_proj cat_7" href="<?php echo home_url('/category/projets'); ?>">
                        <h4>Projets</h4>
                    </a>
                    <a data-icone="east" class="btn_cours cat_7" href="<?php echo home_url('/category/cours'); ?>">
                        <h4>Cours</h4>
                    </a>
>>>>>>> 8dff19956c1914117cb7dfd8138a86f490fde439
                </div>
            </div>
            <div class="filtre-couleur">
                <h3 class="ombre-texte">3D</h3>
                <div class="boite_cours cat_4 troisd"></div>
                <div>
<<<<<<< HEAD
                    <a data-icone="east" class="btn_proj cat_7" href="<?php echo home_url('/category/projets'); ?>"> <h4>Projets</h4></a>
                    <a data-icone="east" class="btn_cours cat_7"href="<?php echo home_url('/category/cours'); ?>"> <h4>Cours</h4></a>
=======
                    <a data-icone="east" class="btn_proj cat_7" href="<?php echo home_url('/category/projets'); ?>">
                        <h4>Projets</h4>
                    </a>
                    <a data-icone="east" class="btn_cours cat_7" href="<?php echo home_url('/category/cours'); ?>">
                        <h4>Cours</h4>
                    </a>
>>>>>>> 8dff19956c1914117cb7dfd8138a86f490fde439
                </div>
            </div>
            <div class="filtre-couleur">
                <h3 class="ombre-texte">Web</h3>
                <div class="boite_cours web"></div>
                <div>
<<<<<<< HEAD
                    <a data-icone="east" class="btn_proj cat_9" href="<?php echo home_url('/category/projets'); ?>"> <h4>Projets</h4></a>
                    <a data-icone="east" class="btn_cours cat_9"href="<?php echo home_url('/category/cours'); ?>"> <h4>Cours</h4></a>
=======
                    <a data-icone="east" class="btn_proj cat_9" href="<?php echo home_url('/category/projets'); ?>">
                        <h4>Projets</h4>
                    </a>
                    <a data-icone="east" class="btn_cours cat_9" href="<?php echo home_url('/category/cours'); ?>">
                        <h4>Cours</h4>
                    </a>
>>>>>>> 8dff19956c1914117cb7dfd8138a86f490fde439
                </div>
            </div>
            <div class="filtre-couleur">
                <h3 class="ombre-texte">Imagerie</h3>
                <div class="boite_cours imagerie"></div>
                <div>
<<<<<<< HEAD
                    <a data-icone="east" class="btn_proj cat_6" href="<?php echo home_url('/category/projets'); ?>"> <h4>Projets</h4></a>
                    <a data-icone="east" class="btn_cours cat_6"href="<?php echo home_url('/category/cours'); ?>"> <h4>Cours</h4></a>
=======
                    <a data-icone="east" class="btn_proj cat_6" href="<?php echo home_url('/category/projets'); ?>">
                        <h4>Projets</h4>
                    </a>
                    <a data-icone="east" class="btn_cours cat_6" href="<?php echo home_url('/category/cours'); ?>">
                        <h4>Cours</h4>
                    </a>
>>>>>>> 8dff19956c1914117cb7dfd8138a86f490fde439
                </div>
            </div>
            <div class="filtre-couleur">
                <h3 class="ombre-texte">Vidéo</h3>
                <div class="boite_cours video"></div>
                <div>
<<<<<<< HEAD
                    <a data-icone="east" class="btn_proj cat_8" href="<?php echo home_url('/category/projets'); ?>"> <h4>Projets</h4></a>
                    <a data-icone="east" class="btn_cours cat_8"href="<?php echo home_url('/category/cours'); ?>"> <h4>Cours</h4></a>
=======
                    <a data-icone="east" class="btn_proj cat_8" href="<?php echo home_url('/category/projets'); ?>">
                        <h4>Projets</h4>
                    </a>
                    <a data-icone="east" class="btn_cours cat_8" href="<?php echo home_url('/category/cours'); ?>">
                        <h4>Cours</h4>
                    </a>
>>>>>>> 8dff19956c1914117cb7dfd8138a86f490fde439
                </div>
            </div>
            <div class="filtre-couleur">
                <h3 class="ombre-texte">Autre</h3>
                <div class="boite_cours autre"></div>
                <div>
<<<<<<< HEAD
                    <a data-icone="east" class="btn_proj cat_5" href="<?php echo home_url('/category/projets'); ?>"> <h4>Projets</h4></a>
                    <a data-icone="east" class="btn_cours cat_5"href="<?php echo home_url('/category/cours'); ?>"> <h4>Cours</h4></a>
=======
                    <a data-icone="east" class="btn_proj cat_5" href="<?php echo home_url('/category/projets'); ?>">
                        <h4>Projets</h4>
                    </a>
                    <a data-icone="east" class="btn_cours cat_5" href="<?php echo home_url('/category/cours'); ?>">
                        <h4>Cours</h4>
                    </a>
>>>>>>> 8dff19956c1914117cb7dfd8138a86f490fde439
                </div>
            </div>
        </div>
    </section>
    <!-- Section dédiée aux 3 projets populaires -->
    <?php if (have_posts()): ?>
        <?php $project_count = 1; // Compteur pour l'ID dynamique ?>
        <?php while (have_posts()):
            the_post(); ?>
            <section class="feed-projet degrade-projets"
                style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
                <div class="projet-paint" id="projet<?php echo $project_count; ?>">
                    <div class="info-projet">
                        <div class="titre-projet">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="img-parralax cliquable" data-icone="visibility"
                            style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
                        </a>


                        <div class="titre-projet">
                            <h1>
                                <?php
                                // Récupère la catégorie parent "Filtres"
                                $parent_category = get_category_by_slug('filtres'); // Remplace 'filtres' par le slug de la catégorie "Filtres"
                        
                                // Vérifie si la catégorie existe
                                if ($parent_category) {
                                    // Récupère les catégories de l'article actuel
                                    $categories = get_the_category();

                                    // Filtre les sous-catégories de "Filtres" associées à cet article
                                    $child_category = null;
                                    foreach ($categories as $category) {
                                        if ($category->parent == $parent_category->term_id) {
                                            $child_category = $category;
                                            break; // Prend la première sous-catégorie trouvée
                                        }
                                    }

                                    // Affiche la sous-catégorie, si elle existe
                                    if ($child_category) {
                                        echo esc_html($child_category->name);
                                    } else {
                                        echo 'Aucune sous-catégorie trouvée pour cet article.';
                                    }
                                } else {
                                    echo 'Catégorie "Filtres" introuvable.';
                                }
                                ?>
                            </h1>
                        </div>

                    </div>
                </div>
            </section>
            <?php $project_count++; ?>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Aucun projet trouvé.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?> <!-- Inclut le fichier de pied de page du thème -->
<!-- <script src="<?php echo get_template_directory_uri() . '/js/effet-video.js'; ?>"></script> -->
<script src="<?php echo get_template_directory_uri() . '/js/appel-filtre.js'; ?>"></script>

<!-- Inclusion des scripts JS pour des fonctionnalités supplémentaires (commentés pour l'instant) -->
<!-- 
<script src="js/curseur.js"></script>
<script src="js/boutons.js"></script>
<script src="js/barre-navigation-scroll.js"></script>
<script src="js/grained.min.js"></script>
<script src="js/grain.js"></script> 
-->

</html>