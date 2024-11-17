<?php
    get_header(); // Inclut l'en-tête du thème WordPress
?>
<main>
    <?php 
        echo do_shortcode('
            [hero title="Projets"
            video_url="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Hero3.mp4"
            images="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Epreuve_Finale_img7.webp, 
            https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Carriere_Nicolas_SouffleCourt_img4.webp, 
            https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/OrientExpress_img1.webp, 
            https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Leger_Maelle_Checo_img1.webp, 
            https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Triptyque_img9.webp, 
            https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Ducharme_Vanier_Guillaume_animation3D_img1.webp, 
            https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Xavier_Vehicule3D_img2.webp"]
        ');
    ?>
    <div class="div-searchform flex">
        <?php get_search_form(); // Affiche le formulaire de recherche WordPress ?>
    </div>
    <?php echo do_shortcode('[boutons_filtre_categorie]'); // Exécute le shortcode pour afficher des boutons de filtre ?>
</main>
<?php get_footer(); // Inclut le pied de page du thème WordPress ?>
</html>
