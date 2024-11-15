<?php
    get_header();
?>
 <main>
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
         <div class="feed-avenir">
            <div class="lesmasks-avenir">

                <a class="conteneur-mask" href="<?php echo home_url('/emplois'); ?>">
                    <h3>Emplois</h3>
                    <div class="mask-avenir">
                        <div class="images-avenir" id="img-avenir-droite"></div>
                    </div>
                </a>

                <a class="conteneur-mask"  href="<?php echo home_url('/universites'); ?>">
                    <h3>Universités</h3>
                    <div class="mask-avenir">
                        <div class="images-avenir" id="img-avenir-milieu"></div>
                    </div>
                </a>

                <a class="conteneur-mask" href="<?php echo home_url('/stages'); ?>">
                    <h3>Stages</h3>
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