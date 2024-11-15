<?php
    get_header();
?>
<main>
<?php echo do_shortcode('
       [hero title="Projets"
       video_url="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Hero3.mp4"
       images="
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Epreuve_Finale_img7.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Carriere_Nicolas_SouffleCourt_img4.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/OrientExpress_img1.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Leger_Maelle_Checo_img1.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Triptyque_img9.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Ducharme_Vanier_Guillaume_animation3D_img1.webp, 
       https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Xavier_Vehicule3D_img2.webp
       "]
       '); ?>
    <?php get_search_form(); ?>
    <?php echo do_shortcode('[boutons_filtre_categorie]');?>
</main>



<!--
    <section class="feed projets-apercus">
        <div class="colonne-proj">
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
        </div>
        <div class="colonne-proj">
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
            <div class="thumbnail-projet">
                <p>yo</p>
            </div>
        </div>
    </section>
-->
<?php get_footer();?>
</html>
