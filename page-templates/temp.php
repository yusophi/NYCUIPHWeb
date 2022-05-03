<div class="news_block">
        <?php 
            $cat_slug = 'a1-normal_news';
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' =>  $cat_slug,
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