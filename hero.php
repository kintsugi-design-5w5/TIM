<?php
// Récupère les valeurs passées comme variables (si elles existent dans $args)
$video_url = isset($args['video_url']) ? $args['video_url'] : ''; // URL de la vidéo
$title = isset($args['title']) ? $args['title'] : ''; // Titre (H1)
$images = isset($args['images']) ? $args['images'] : []; // Tableau d'images supplémentaires
?>

<div id="hero"> <!-- Section hero principale -->
    <div class="titre"> <!-- Bloc du titre -->
        <?php if ($title): ?> <!-- Si un titre est passé en argument -->
            <h1><?php echo wp_kses_post($title); ?></h1> <!-- Affichage du titre avec une sécurité d'échappement des caractères -->
        <?php endif; ?>
    </div>

    <?php if ($video_url): ?> <!-- Si une URL de vidéo est passée -->
        <!-- Affichage de la vidéo -->
        <video src="<?php echo esc_url($video_url); ?>" autoplay loop muted playsinline></video> 
        <!-- Attributs : 
            - autoplay : la vidéo démarre automatiquement
            - loop : la vidéo est lue en boucle
            - muted : la vidéo est muette par défaut
            - playsinline : permet de jouer la vidéo en ligne, sans basculer en plein écran sur mobile
        -->
    <?php endif; ?>

    <!-- Affichage des images supplémentaires -->
    <?php foreach ($images as $index => $img): ?>
        <!-- Pour chaque image dans le tableau $images -->
        <img src="<?php echo esc_url($img); ?>" alt="Additional Image" class="hero-images image-<?php echo $index + 1; ?>">
        <!-- Les images sont affichées avec une classe dynamique pour identifier l'image par son index -->
    <?php endforeach; ?>

    <div class="fondu"></div> <!-- Un élément fondu (probablement pour des effets visuels ou des superpositions) -->
</div>
