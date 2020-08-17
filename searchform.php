<div class="conteudo-pesquisa">
    <form role="search" method="get" class="formulario-pesquisa" action="<?php 
		echo home_url( '/' ); ?>">
        <input type="search" class="input-pesquisa" placeholder="Pesquisar..." value="<?php 
		echo get_search_query() ?>" name="s" required />
        <button type="submit"><i class="fa fa-search"></i></button>

    </form>
</div>