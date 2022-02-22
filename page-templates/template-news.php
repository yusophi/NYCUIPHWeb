<?php
/*
 * Template Name: news
 */
?>

<?php get_header(); ?>

<div class="page_News">
    <div class="banner">
        <span class="page_name" id="zh">最新消息<br></span>
        <span class="page_name" id="eg">News</span>
        <div class="circle"></div>
    </div>
    <div class="class_selector">
        <label class="select_container" id="selection_all">總覽
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container" id="selection_general">公告
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

        <select class="sdg-dropdown" name="event-dropdown"> 
            <option value=""><?php echo esc_attr_e( 'SDG', 'textdomain' ); ?></option> 
            <?php 
            $categories = get_categories( array( 'child_of' => 25 ) ); 
            foreach ( $categories as $category ) {
                printf( '<option value="%1$s">%2$s</option>',
                    esc_attr( '/category/archives/' . $category->category_nicename ),
                    esc_html( $category->cat_name )
                    //esc_html( $category->category_count )
                );
            }
            ?>
        </select>
        <!--<ul>
            <?php 
                /*$categories = get_terms( array(
                    'taxonomy' => 'category',
                    'orderby'    => 'name',
                    'include' => '20,21,22,23,24',
                    'hide_empty' => 0,
                ) );
                if ( ! empty( $categories ) && ! is_wp_error( $categories ) ){
                    foreach ( $categories as $category ) {
                        echo $category->name;
                    }
                }*/
            ?> 
        </ul>-->

    </div>

    <div class="news_block">
        <?php 
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
                            }else{
                                echo "0" . $counter . ".";} ?>&nbsp;&nbsp;
                    </div>
                    <img class="thumbnail_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-newspaper-new.svg">
                    <img class="thumbnail_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-news-more.svg">
                    <div class="border-anim">
                            <div class="inner-box"></div>
                    </div>
                    <div class="article-meta">
                            <img class="icon-clock>" src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                            <span class="post_time"><?php the_time('Y.m.j'); ?></span>
                            <!--<div class="post_category"><?php //the_category(''); ?></div>
                            <span><?php //the_tags('', ' , ', ''); 
                                        ?></span>-->
                    </div>
                    <!--<div class="post_category"><?php //the_category(''); ?></div>-->
                    <div class="post_tags">
                        <div class="post_category"><?php the_field('news_item');//the_category(''); ?></div>
                        <?php
                        $sdgs = get_field('sdg');
                        if( $sdgs ): ?>
                            <ul class="sdg-tag">
                                    <?php foreach( $sdgs as $sdg ): ?>
                                        <li><?php echo $sdg; ?></li>
                                    <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="excerpt" id="<?php echo $counter ?>"> <?php the_field('excerpt');?><?php echo "..."?> </div>
                    <div class="clearfix"></div>
                </div>
            <?php endwhile; ?>
        </div>
       
        <?php endif; wp_reset_postdata(); ?>

    </div>
    <!--<div class="news_block" id="new_bkg"></div>-->

    <div class="pagination">
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
                ?>
        <!--<img class="icon-paging prev_page" src="<?php// bloginfo('template_url') ?>/images/page_news/prev_page.svg">-->
        <!--<img class="icon-paging next_page" src="<?php //bloginfo('template_url') ?>/images/page_news/next_page.svg">-->
        
    </div>
    
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>

<script>
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
</script>
<?php get_footer(); ?>