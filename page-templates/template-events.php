<?php
/*
 * Template Name: events
 */
?>

<?php get_header(); ?>
<div class="page_News">
    <div class="banner">
        <span class="page_name" id="zh">學術活動<br></span>
        <span class="page_name" id="eg">Events</span>
        <div id="circle"></div>
    </div>
    <div class="class_selector">
        <label class="select_container" id="selection_studies">讀書會
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container" id="selection_speech">學術演講
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <div id="SDG_container">
            <select id="SDG_selector">
                <option>SDG1</option>
                <option>SDG2</option>
                <option>SDG3</option>
                <option>SDG4</option>
                <option>SDG5</option>
                <option>SDG6</option>
                <option>SDG7</option>
            </select>
        </div>
    </div>

    <div class="events_block">
        <?php //query the recent 6 posts
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'events',
            'category__not_in' => array(14),
            'orderby' => 'date',
            'paged' => $paged,
            'posts_per_page' => 15
        );

        $arr_posts = new WP_Query($args);
        if ($arr_posts->have_posts()) :
        ?>

            <div class="news-article">
                <?php
                $counter = 0;
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
                    $counter = $counter + 1;
                ?>
                    <div class="article-content num-<?php echo $counter ?>">
                        <div class="article-padding">
                            <div class="event-main-margin">
                                <div class="event-main-slide-upper">
                                    <div class="event-img-container"><img src="<?php bloginfo('template_url') ?>/images/icon/pic-seminar.svg"></div>
                                    <div class="event-info">
                                        <div class="event-date-title">
                                            <img src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                                            <span class="event-date-words">Date</span>
                                        </div>
                                        <div class="event-date"><?php the_time('Y.m.j'); ?></div>
                                        <div class="event-tags">
                                            <span class="event-tag-mask"><?php the_category(' , '); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-name"><?php the_title(); ?></div>
                                <div class="event-intro"><?php the_excerpt(); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        <?php endif;
        wp_reset_postdata(); ?>

    </div>
    <!--<div class="news_block" id="new_bkg"></div>-->

    <div class="pagination">
        <!--<img class="icon-paging prev_page" src="<?php bloginfo('template_url') ?>/images/page_news/prev_page.svg">-->

        <?PHP
        $big = 999999999; // need an unlikely integer
        $args = array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?page=%#%',
            'total' => $arr_posts->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'show_all' => false,
            'end_size' => 3,
            'mid_size' => 2,
            'prev_next' => True,
            'prev_text' => __('<'),
            'next_text' => __('>'),
            'type' => 'list',
        );
        echo paginate_links($args);
        ?>

        <!--<img class="icon-paging next_page" src="<?php //bloginfo('template_url') 
                                                    ?>/images/page_news/next_page.svg">-->

    </div>
    <div class="deco_waves" id="footer_wave">
        <img class="wave" src="<?php bloginfo('template_url') ?>/images/icon/footer_wave.svg">
    </div>
    <div class="block-title" id="back_to_top" onclick="topFunction()">
        <img class="icon" src="<?php bloginfo('template_url') ?>/images/icon/back_to_top.svg">
        <span class="en-title">back to top</span>
    </div>
    <?php get_footer(); ?>

</div>
<script>
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>