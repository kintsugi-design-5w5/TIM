<form class="recherche flex" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" class="recherche__input" placeholder="Rechercher..." value="<?php the_search_query(); ?>" name="s">
        <button class="recherche__button flex" type="submit">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </button>
</form>