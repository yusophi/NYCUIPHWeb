<div class="student_paper">
    <?php $years = get_categories(array(
                'taxonomy' => 'papers_cat',
                'parent' => 31,
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'DSEC'
            ) );
          $divisions = get_categories(array(
                'taxonomy' => 'papers_cat',
                'parent' => 33,
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'ASC'
            ) );
    ?>
    <div class="select_bar_container">
        <input type="hidden" id="filters-year" value="" />
        <input type="hidden" id="filters-division" value="" />
        <div class="cat-list_container">
            <p>年份｜</p>
            <ul class="cat-list" id="cat_year">
                <?php foreach($years as $year) : ?>
                    <li>
                        <a class="<?= "cat-list_item " . $year->slug; ?>" href="#!" data-filter-type="year" data-type="papers" data-slug="<?= $year->slug; ?>">
                            <span class="cat-list_item_dot"></span>    
                            <span class="cat-list_item_name"><?= $year->name; ?></span>
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
    
    <form class="request_form" action="/" method="get" autocomplete="off">
        <img id="search_svg" src="<?php bloginfo('template_url')?>/images/page_student/search.svg">
        <input type="text" name="s" placeholder="搜尋歷屆學位論文" id="keyword" class="input_search" style="outline: none;">
        <button id="search_btn">
            <img src="<?php bloginfo('template_url')?>/images/page_student/search_arrow.svg">
        </button>
    </form>
    
    <div class="block_papers"> 
        <div id="search_hint">
            <p>填入欲查詢之學位論文關鍵字或類籤，系統將協助您列出相關資料。</p>
        </div>
       <!-- the result from ajax request in paper_filter.js-->
       <?php 
           /*$args = array(
                'post_type' => 'papers',
                'post_status' => 'publish',
                's' => '陳瓊梅',
                'orderby' => 'meta_value_num',
                'meta_key' => 'year',
                'order' => 'DESC',
            );
            $arr_posts = new WP_Query($args);
            if($arr_posts->have_posts()):*/
        ?>
            <!--<div class="block_paper_posts">-->
                    <?php
                    /*while ($arr_posts->have_posts()) :
                            $arr_posts->the_post();*/
                    ?>
                        <?php
                           /* $year = get_field('year');
                            $name = get_field('name');
                            $degree = get_field('degree');
                            $advisor = get_field('advisors');
                            $paper = get_field('paper');*/
                        ?>
                        <!--<div class="row_paper">
                            <span class="year _font22"><?php //echo $year;?></span>
                            <span class="name _font22"><?php //echo $name;?></span>
                            <span class="degree _font22"><?php //echo $degree;?></span>
                            <span class="advisor _font22"><?php //echo $advisor;?></span>
                            <span class="paper _font22"><?php //echo $paper;?></span>
                            <?php //the_title(); ?>
                        </div>-->
                    <?php //endwhile;?>
            <!--</div>-->
            <?php //endif; wp_reset_postdata(); ?>
    </div>
</div>