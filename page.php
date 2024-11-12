<?php
get_header();
?>
<main>
    <section>
        <div class="btn-retour">
            <img src="https://s2.svgbox.net/hero-outline.svg?ic=arrow-left&color=ebebeb" width="18" height="18" />
            <a href="https://gftnth00.mywhc.ca/tim43/avenir/" class="texte-retour">Retour</a>
        </div>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                //the_title();
                the_content();
            }
        }
        ?>
    </section>
</main>
<?php get_footer(); ?>

</html>