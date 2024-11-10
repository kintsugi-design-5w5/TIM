<?php
// Récupère les valeurs passées comme variables
$video_url = isset($args['video_url']) ? $args['video_url'] : '';
$title = isset($args['title']) ? $args['title'] : ''; // Titre H1
$images = isset($args['images']) ? $args['images'] : []; // Tableau d'images supplémentaires
?>

<div id="hero">
    <div class="titre">
        <?php if ($title): ?>
            <h1><?php echo wp_kses_post($title); ?></h1>
        <?php endif; ?>
    </div>
    
    <?php if ($video_url): ?>
        <video src="<?php echo esc_url($video_url); ?>" autoplay loop muted playsinline></video>
    <?php endif; ?>

    <?php foreach ($images as $index => $img): ?>
        <img src="<?php echo esc_url($img); ?>" alt="Additional Image" class="hero-images image-<?php echo $index + 1; ?>">
    <?php endforeach; ?>
</div>
