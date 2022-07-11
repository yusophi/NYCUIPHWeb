<?php
/*
 * Template Name: news
 */
?>
<?php get_header(); ?>
<?php $locale = get_locale();?>
<div class="page_News">
    <div class="banner">
        <?php if($locale == "zh_TW"):?>
        <span class="page_name" >最新消息<br></span>
        <?php else: ?>
        <span class="page_name" id="eg">News</span>
        <?php endif; ?>
        <div class="circle"></div>
    </div>
    <?php 
        if($locale == "zh_TW"){
            $categories = get_categories(array(
                'parent' => 6,
                'orderby' => 'slug',
                'order'   => 'ASC'
                ) );
        }else{
            $categories = get_categories(array(
                'parent' => 93,
                'orderby' => 'slug',
                'order'   => 'ASC'
            ) );
        }
    ?>
    <div class="select_bar_container">
        <input type="hidden" id="filters-news" value="" />
        <ul class="cat-list">
            <li>
                <a class="cat-list_item news cat_active" href="#!" data-filter-type="news" data-type="post" data-slug="news">
                    <span class="cat-list_item_dot"></span>
                    <?php if($locale == "zh_TW"):?>
                    <span class="cat-list_item_name">總覽</span>
                    <?php else: ?>
                    <span class="cat-list_item_name">All</span>
                    <?php endif; ?>
                </a>
            </li>
            <?php foreach($categories as $category) : ?>
                <li>
                    <a class="<?= "cat-list_item " . $category->slug; ?>" href="#!" data-filter-type="news" data-type="post" data-slug="<?= $category->slug; ?>">
                        <span class="cat-list_item_dot"></span>    
                        <span class="cat-list_item_name"><?= $category->name; ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
   
    <div class="post_block">
        <?php 
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'news',
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
                                echo "0" . $counter . ".";} ?><!--&nbsp;&nbsp;-->
                    </div>
                    <div class="post_icon">
                        <img src="<?php bloginfo('template_url') ?>/images/icon/icon-newspaper.svg">
                        <div>
                            <p class="post_icon_hover_dots"></p>
                            <p class="post_icon_hover_dots"></p>
                            <p class="post_icon_hover_dots"></p>
                        </div>
                    </div>
                    <div class="border-anim">
                            <div class="inner-box"></div>
                    </div>
                    <div class="article-meta">
                        <img class="icon-clock>" src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                        <span class="post_time"><?php the_time('Y.m.j'); ?></span>
                    </div>
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
                    <!--div class="article-title"><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></div>-->
                    <div class="article-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <div class="article-title_bottom_line"></div>
                    </div>
                    <div class="excerpt" id="<?php echo $counter ?>"> <?php the_field('excerpt'); ?><?php echo "..."?> </div>
                    <div class="clearfix"></div>
                </div>
            <?php endwhile; ?>
        </div>
       
        <?php endif; wp_reset_postdata(); ?>
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
    </div>

    
    
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<?php get_footer(); ?>