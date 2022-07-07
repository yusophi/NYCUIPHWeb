<form role="search" method="get" id="search_request_form" action="<?php echo home_url( '/' ); ?>">
    <img id="search_svg" alt="放大鏡" src="<?php bloginfo('template_url')?>/images/header/site_search/search.svg">
    <input type="text" value="" name="s" class="site_search_input" id="site_search_keyword" placeholder="全站搜尋"/>
    <input type="submit" id="searchsubmit"/>
    <?php wp_nonce_field( 'get_site_search', 'site_search_nonce' ); ?>
    <button id="yellow_search_btn" type="button">
        <img alt="搜尋按鈕" src="<?php bloginfo('template_url')?>/images/header/site_search/yellow_arrow.svg">
    </button>
</form>