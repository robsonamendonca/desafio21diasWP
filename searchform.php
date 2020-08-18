<div id="BuscaOverlay" class="overlay">
    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
    <div class="overlay-content">
        <form action="<?php echo home_url( '/' ); ?>">
            <input type="text" placeholder="Pesquisar..." value="<?php 
echo get_search_query() ?>" name="s" required>
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<button class="openBtn" onclick="openSearch()"><i class="fa fa-search"></i></button>