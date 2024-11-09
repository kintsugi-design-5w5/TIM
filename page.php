<?php
    get_header();
?>
<main>
    <section>
        <a href="<?php echo esc_url( wp_get_referer() ); ?>" class="texte-retour">Retour</a>
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