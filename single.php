<?php
get_header();
?>

    <main>
      <section id="hero">
        <h1>Vidéo/images</h1>
      </section>

      <section class="section__projet">
        <div class="info__projet flex">
          <div class="titre__projet flex">
            <div class="btn-retour">
              <img
                src="https://s2.svgbox.net/hero-outline.svg?ic=arrow-left&color=000"
                width="18"
                height="18"
              />
              <a href="#" class="texte-retour">Retour</a>
            </div>
            <h1 class="annule-marge">Nom du projet</h1>
            <h5 class="auteur_info">Auteur du projet</h5>
          </div>
          <div class="description__projet flex">
            <div class="entete-description__projet flex">
              <h1 class="annule-marge">Description</h1>
              <h4>Cours de web</h4>
              <div class="logiciel-projet flex">
                <img class="logiciels" src="<?php echo get_template_directory_uri() . '/images/image.png'; ?>" alt="" />
                <img class="logiciels" src="<?php echo get_template_directory_uri() . '/images/image.png'; ?>" alt="" />
                <img class="logiciels" src="<?php echo get_template_directory_uri() . '/images/image.png'; ?>" alt="" />
              </div>
            </div>
            <p class="texte-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
              perferendis asperiores dolorum enim quisquam voluptates at nobis
              culpa doloribus distinctio.
            </p>
          </div>
        </div>

        <div class="images-projets flex">
          <div class="projet-image"> <!-- Image 1 --> </div>
          <div class="projet-image"> <!-- Image 2 --> </div>
          <div class="projet-image"> <!-- Image 3 --> </div>
          <div class="projet-image"> <!-- Image 3 --> </div>
          <div class="projet-image"> <!-- Image 3 --> </div>
          <div class="projet-image"> <!-- Image 3 --> </div>

          <!-- <div class="ligne1">
            <img class="screenshots-projet" src="images/image.png" alt="" />
            <img class="screenshots-projet" src="images/image.png" alt="" />
          </div>
          <div class="ligne2">
            <img
              class="screenshots-projet imgGrandEspace"
              src="images/image.png"
              alt=""
            />
          </div>
          <div class="ligne3">
            <img class="screenshots-projet" src="images/image.png" alt="" />
            <img class="screenshots-projet" src="images/image.png" alt="" />
          </div>
          <div class="lign4">
            <img
              class="screenshots-projet imgGrandEspace"
              src="images/image.png"
              alt=""
            />
          </div>
          <div class="ligne5">
            <img
              class="screenshots-projet imgGrandEspace"
              src="images/image.png"
              alt=""
            />
          </div>  -->
        </div>
      </section>
    </main>

    <!-- Section popup réseaux sociaux -->
    <!-- <div class="popup">
      <img
        class="btn_x"
        src="https://s2.svgbox.net/materialui.svg?ic=close&color=fff"
        width="32"
        height="32"
      />
      <div class="contenu-popup">
        <h1>Nom de la personne</h1>
        <ul class="reseaux-sociaux__popup">
          <li>
            <a href="#"><img src="images/LogoTim.png" alt="Twitter" /></a>
          </li>
          <li>
            <a href="#"><img src="images/LogoTim.png" alt="Instagram" /></a>
          </li>
          <li>
            <a href="#"><img src="images/LogoTim.png" alt="LinkedIn" /></a>
          </li>
        </ul>
      </div>
    </div>

  <?php get_footer();?>
  <!-- <script src="js/popup.js"></script> -->
</html>
