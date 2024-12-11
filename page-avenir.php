<?php
get_header(); // Inclut l'en-tête du site
?>
<main>
    <!-- Exécution du shortcode 'hero' avec des paramètres personnalisés -->
    <?php echo do_shortcode('
       [hero title="Avenir"
       video_url="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Hero4.mp4"
       images="
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Photos_Site_Web_TIM_img2-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Photos_Site_Web_TIM_img4-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Photos_Site_Web_TIM_img3-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Photos_Site_Web_TIM_img1-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Photos_Site_Web_TIM_img5-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Photos_Site_Web_TIM_img6-scaled.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Photos_Site_Web_TIM_img7-scaled.webp
       "]
    '); ?>

    <!-- Section Feed Avenir -->
    <div class="feed-avenir">
        <div class="lesmasks-avenir">

            <!-- Lien vers la page Emplois -->
            <a class="conteneur-mask" onclick="transitionToPage('<?php echo home_url('/emplois'); ?>')">
                <h3 class="ombre-texte">Emplois</h3>
                <div class="mask-avenir">
                    <div class="images-avenir lazy" id="img-avenir-droite"></div> <!-- Image associée à Emplois -->
                </div>
            </a>

            <!-- Lien vers la page Universités -->
            <a class="conteneur-mask" onclick="transitionToPage('<?php echo home_url('/universites'); ?>')">
                <h3 class="ombre-texte">Universités</h3>
                <div class="mask-avenir">
                    <div class="images-avenir lazy" id="img-avenir-milieu"></div> <!-- Image associée à Universités -->
                </div>
            </a>

            <!-- Lien vers la page Stages -->
            <a class="conteneur-mask" onclick="transitionToPage('<?php echo home_url('/stages'); ?>')">
                <h3 class="ombre-texte">Stages</h3>
                <div class="mask-avenir">
                    <div class="images-avenir lazy" id="img-avenir-gauche"></div> <!-- Image associée à Stages -->
                </div>
            </a>

        </div>
    </div>
</main>

<?php get_footer(); ?> <!-- Inclut le pied de page du site -->

<!-- Chargement du script JavaScript 'cercle-avenir.js' -->
<script src="<?php echo get_template_directory_uri() . '/js/cercle-avenir.js'; ?>"></script>

</html>