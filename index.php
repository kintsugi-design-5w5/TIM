<?php
    get_header();
?>
<main>
    <div id="hero">
        <h1>Creativité + Programmation = TIM</h1>
    </div>
    <section class="feed presentation">
        <div class="presentation-tim">
            <div class="img-projet"><img src="<?php echo get_template_directory_uri() . '/images/image.png';?>" alt="" /></div>
            <div class="infos">
                <p>
                    La Technique d’Intégration Multimédia (TIM) est l’endroit idéal offrant la possibilité aux étudiants de savoir les
                    nouvelles technologies de l’industrie comme : la programmation des jeux, du montage vidéo, de la modélisation et animation
                    3D, de la création de sites web, de l’expérimentation en réalité virtuelle (VR), etc.
                </p>
            </div>
        </div>
        <div class="presentation-charte">
            <div class="charte-rond">Charte</div>
        </div>
        <div class="presentation-info">
            <div class="img-projet"><img src="<?php echo get_template_directory_uri() . '/images/image.png';?>" alt="" /></div>
            <div class="infos">
                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
            </div>
        </div>
        <div class="presentation-info">
            <div class="infos">
                <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h1>
            </div>
            <div class="img-projet"><img src="<?php echo get_template_directory_uri() . '/images/image.png';?>" alt="" /></div>
        </div>
    </section>
    <section class="feed axes">
        <div class="axes-cours">
            <div>Jeux video</div>
            <div>3D</div>
            <div>Design</div>
            <div>Animation</div>
            <div>Img</div>
            <div>Img</div>
        </div>
    </section>
    <section class="feed-projet video">Vidéo</section>
    <section class="feed-projet" id="projet1">
        <div class="projet-paint">
            <div class="info-projet">
                <div class="titre-projet">
                    <h1>Anachonique</h1>
                </div>
                <div class="img-parralax cliquable" data-icone="images/LogoTim.png" id="projet1"></div>
                <div class="titre-projet">
                    <h1>3D</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="feed-projet" id="projet2">
        <div class="projet-paint">
            <div class="info-projet">
                <div class="titre-projet">
                    <h1>Nicolas</h1>
                </div>
                <div class="img-parralax cliquable" data-icone="images/LogoTim.png" id="projet2"></div>
                <div class="titre-projet">
                    <h1>3D</h1>
                <div></div>
            </div>
        </div>
    </section>
    <section class="feed-projet" id="projet3">
        <div class="projet-paint">
            <div class="info-projet">
                <div class="titre-projet">
                    <h1>Nom Projet</h1>
                </div>
                <div class="img-parralax cliquable" data-icone="images/LogoTim.png" id="projet3"></div>
                <div class="titre-projet">
                    <h1>Web</h1>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>

</body>
    <script src="<?php echo get_template_directory_uri() . '/js/curseur.js';?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/boutons.js';?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/barre-navigation-scroll.js';?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/grained.min.js';?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/grain.js';?>"></script>
    <!-- <script src="js/curseur.js"></script>
    <script src="js/boutons.js"></script>
    <script src="js/barre-navigation-scroll.js"></script>
    <script src="js/grained.min.js"></script>
    <script src="js/grain.js"></script> -->
</html>