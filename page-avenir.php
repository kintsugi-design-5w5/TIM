<?php
    get_header();
?>
 <main>
        <!-- <div class="feed-avenir">
            <div class="lesmasks-avenir">
                <div class="conteneur-mask"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">Perspective</a><div class="mask-avenir"><div class="images-avenir" id="img-avenir-droite"></div></div></div>
                <div class="conteneur-mask"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">Perspective</a><div class="mask-avenir"><div class="images-avenir" id="img-avenir-milieu"></div></div></div>
                <div class="conteneur-mask"><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">Perspective</a><div class="mask-avenir"><div class="images-avenir" id="img-avenir-gauche"></div></div></div>
            </div>
        </div> -->
        <div id="hero"></div>
        <div class="avenir-sections"><a href="<?php echo home_url('/emplois'); ?>"><h1>Emplois</h1></a></div>
        <div class="avenir-sections"><a href="<?php echo home_url('/universités'); ?>"><h1>Universités</h1></a></div>
        <div class="avenir-sections"><a href="<?php echo home_url('/stages'); ?>"><h1>Stages</h1></a></div>
    </main>
<?php get_footer();?>
</html>