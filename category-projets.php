<?php
    get_header();
?>
<main>
<?php echo do_shortcode('
       [hero title="Projets"
       video_url="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Hero3.mp4"
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
