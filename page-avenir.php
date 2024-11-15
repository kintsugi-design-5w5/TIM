<?php
    get_header();
?>
 <main>
     <?php echo do_shortcode('
       [hero title="Avenir"
       video_url="https://gftnth00.mywhc.ca/tim43/wp-content/uploads/2024/11/Hero4.mp4"
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
         <div class="feed-avenir">
            <div class="lesmasks-avenir">

                <a class="conteneur-mask" href="<?php echo home_url('/emplois'); ?>">
                    <h3 class="ombre-texte">Emplois</h3>
                    <div class="mask-avenir">
                        <div class="images-avenir" id="img-avenir-droite"></div>
                    </div>
                </a>

                <a class="conteneur-mask"  href="<?php echo home_url('/universites'); ?>">
                    <h3 class="ombre-texte">Universités</h3>
                    <div class="mask-avenir">
                        <div class="images-avenir" id="img-avenir-milieu"></div>
                    </div>
                </a>

                <a class="conteneur-mask" href="<?php echo home_url('/stages'); ?>">
                    <h3 class="ombre-texte">Stages</h3>
                    <div class="mask-avenir">
                        <div class="images-avenir" id="img-avenir-gauche"></div>
                    </div>
                </a>
                
            </div>
        </div>
        <!-- <div class="avenir-sections"><a href="<?php echo home_url('/emplois'); ?>"><h1>Emplois</h1></a></div>
        <div class="avenir-sections"><a href="<?php echo home_url('/universites'); ?>"><h1>Universités</h1></a></div>
        <div class="avenir-sections"><a href="<?php echo home_url('/stages'); ?>"><h1>Stages</h1></a></div> -->
    </main>
<?php get_footer();?>
</html>