<div class="student_paper">
    <?php $years = get_categories(array(
                'taxonomy' => 'papers_cat',
                'parent' => 31, /* 40,31 */
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'DSEC'
            ) );
          $divisions = get_categories(array(
                'taxonomy' => 'papers_cat',
                'parent' => 33, /* 41, 33 */
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'ASC'
            ) );
    ?>
    <div class="select_bar_container">
        <input type="hidden" id="filters-year" value="" />
        <input type="hidden" id="filters-division" value="" />
        <div class="cat-list_container _font20">
            <p>年份｜</p>
            <ul class="cat-list" id="cat_year">
                <?php foreach($years as $year) : ?>
                    <li>
                        <a class="<?= "cat-list_item " . $year->slug; ?>" href="#!" data-filter-type="year" data-type="papers" data-slug="<?= $year->slug; ?>">
                            <span class="cat-list_item_dot"></span>    
                            <span class="cat-list_item_name _font18"><?= $year->name; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="cat-list_container">
            <p>領域｜</p>
            <ul class="cat-list" id="cat_division">
                <?php foreach($divisions as $division) : ?>
                    <li>
                        <a class="<?= "cat-list_item " . $division->slug; ?>" href="#!" data-filter-type="division" data-type="papers" data-slug="<?= $division->slug; ?>">
                            <span class="cat-list_item_dot"></span>    
                            <span class="cat-list_item_name"><?= $division->name; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    
    <div class="request_form">
        <img id="search_svg" src="<?php bloginfo('template_url')?>/images/page_student/search.svg">
        <input type="text" name="s" placeholder="可用研究生姓名、指導老師、論文關鍵字進行搜尋" id="keyword" class="input_search">
        <?php //wp_nonce_field( 'get_paper_search', 'paper_search_nonce' ); ?>
        <button id="search_btn">
            <img src="<?php bloginfo('template_url')?>/images/page_student/search_arrow.svg">
        </button>
    </div>
    
    <div class="block_papers"> 
        <div id="search_hint">
            <p>請填入欲查詢之關鍵字，如研究生姓名、指導老師、論文關鍵字，系統將協助您列出相關資料。</p>
        </div>
    </div>
</div>