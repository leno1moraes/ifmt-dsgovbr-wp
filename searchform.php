<form role="search" method="get" id="searchform" class="searchform" action="<?php home_url( '/' ); ?>">
    <div class="br-input has-icon">
        <label for="searchbox">Texto da pesquisa</label>
        <input id="searchbox" type="text" value="<?php get_search_query(); ?>" name="s" id="s" placeholder="O que você procura?" />
        <button class="br-button circle small" type="submit" aria-label="Pesquisar"><i class="fas fa-search" aria-hidden="true"></i></button>
    </div>
    <button class="br-button circle search-close ml-1" type="button" aria-label="Fechar Busca" data-dismiss="search"><i class="fas fa-times" aria-hidden="true"></i></button>
</form>
