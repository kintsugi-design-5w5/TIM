<?php
    get_header();
?>
<main>
    <section>
        <!-- <div class="btn-retour">
            <img
              src="https://s2.svgbox.net/hero-outline.svg?ic=arrow-left&color=ebebeb"
              width="18"
              height="18"
            />
            <a href="<?php echo esc_url( wp_get_referer() ); ?>" class="texte-retour">Retour</a>
        </div> -->
        <a href="<?php echo esc_url( wp_get_referer() ); ?>" class="btn-retour"><span class="material-symbols-outlined">west</span><span class="texte-retour">Retour</span></a>
        
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    //the_title();
                    the_content();
                }
            }
        ?>
    </section>
</main>
<?php get_footer();?>
</html>