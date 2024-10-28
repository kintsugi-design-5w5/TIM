<?php
    get_header();
?>
 <main>
     <div id="hero"></div>
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