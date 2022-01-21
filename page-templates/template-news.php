<?php
/*
 * Template Name: news
 */
?>

<?php get_header(); ?>
<link href="css/news.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<div class="page_News">
    <div class="banner">
        <span class="page_name" id="zh">最新消息<br></span>
        <span class="page_name" id="eg">News</span>
        <div id="circle"></div>
    </div>
    <div class="class_selector">
        <label class="select_container" id="selection_all">全部
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container" id="selection_general">一般公告
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container">公衛所新聞
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container">獎學金
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container" id="selection_covid19">covid-19
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
    </div>

    <div class="news_block">
        <?php //query the recent 6 posts
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'news',
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
                        <div class="post_counter <?php echo $counter ?>">
                            <?php if($counter >= 10){
                                echo $counter . ".";
                            }
                                else
                                {echo "0" . $counter . ".";} ?>&nbsp;&nbsp;
                        </div>
                        <img class="thumbnail_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-newspaper-new.svg">
                        <img class="thumbnail_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-news-more.svg">
                        <div class="border-anim">
                                <div class="inner-box"></div>
                        </div>
                        <div class="article-meta">
                            <img class="icon-clock>" src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                            <span class="post_time"><?php the_time('Y.m.j'); ?></span>
                            <span class="post_category"><?php the_category(' , '); ?></span>
                            <!--<span><?php //the_tags('', ' , ', ''); 
                                        ?></span>-->
                        </div>
                        <div class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="excerpt" id="<?php echo $counter ?>"> <?php the_excerpt(); ?> </div>
                        <div class="clearfix"></div>
                </div>
            <?php endwhile; ?>
        </div>
       
        <?php endif; wp_reset_postdata(); ?>

    </div>
    <!--<div class="news_block" id="new_bkg"></div>-->

    <div class="pagination">
                <ul>
                    <?PHP
                        $big = 999999999; // need an unlikely integer
                        $args = array(
                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format' => '?page=%#%',
                            'total' => $arr_posts->max_num_pages,
                            'current' => max( 1, get_query_var( 'paged') ),
                            'show_all' => false,
                            'end_size' => 3,
                            'mid_size' => 2,
                            'prev_next' => True,
                            'prev_text' => __('<'),
                            'next_text' => __('>'),
                            'type' => 'list',
                            );
                        echo paginate_links($args);
                        echo $arr_posts->max_num_pages
                    ?>
                </ul>
    </div>
    <div class="deco_waves" id="footer_wave">
        <img class="wave" src="<?php bloginfo('template_url')?>/images/icon/footer_wave.svg">
    </div>
    <div class="block-title" id="back_to_top" onclick="topFunction()">
            <img class="icon" src="<?php bloginfo('template_url')?>/images/icon/back_to_top.svg">
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
