<form class="recherche flex" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <!-- Champ de saisie de recherche -->
    <input data-icone="edit" type="text" class="recherche__input" placeholder="Rechercher..." value="<?php the_search_query(); ?>" name="s">
    <!-- Bouton de soumission de recherche -->
    <button data-icone="search" class="recherche__button flex" type="submit">
        <span class="material-symbols-outlined">search</span>
    </button>
</form>
