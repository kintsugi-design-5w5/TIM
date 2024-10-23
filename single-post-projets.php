<?php
    get_header();
?>
    <main>
      <section class="entete">
        <h1>Vidéo/images</h1>
      </section>
      <!-- Section des informations du projet -->
      <section class="section__projet">
        <div class="info__projet">
          <div class="titre__projet">
            <div class="btn-retour">
              <img
                src="https://s2.svgbox.net/hero-outline.svg?ic=arrow-left&color=000"
                width="18"
                height="18"
              />
              <a href="#" class="texte-retour">Retour</a>
            </div>
            <h1>Nom du projet</h1>
            <h5 class="auteur_info">Auteur du projet</h5>
          </div>
          <div class="description__projet">
            <div class="entete-description__projet">
              <h1>Description</h1>
              <h3>Cours de web</h3>
              <div class="logiciel-projet">
                <img class="logiciels" src="images/LogoTim.png" alt="" />
                <img class="logiciels" src="images/LogoTim.png" alt="" />
                <img class="logiciels" src="images/LogoTim.png" alt="" />
              </div>
            </div>
            <p class="texte-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
              perferendis asperiores dolorum enim quisquam voluptates at nobis
              culpa doloribus distinctio.
            </p>
          </div>
        </div>

        <div class="images-projets">
          <div class="ligne1">
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
          </div>
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
    </div> -->

  <?php get_footer();?>
  <script src="js/popup.js"></script>
</html>
