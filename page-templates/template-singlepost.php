<?php
/*
 * Template Name: 純文字
 * Template Post Type: post
 */
?>
<?php get_header(); ?>
<link href="css/singlepost.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">


<div class="single_post">
    <div class="banner">
        <span class="post_title"><p><?php the_title(); ?></p></span>
        <div id="circle"></div>
        <div class="banner_article_meta">
            <img class="icon-clock>" src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
            <span class="banner_post_time"><?php the_time('Y.m.j'); ?></span>
            <div class="banner_post_category"><?php the_category(' , '); ?></div>
        </div>      
    </div>
    <div class="single_post_info">
        <div class="article">
            <?php the_field('content'); ?>
        </div>
        <div class="sidebar">
            <div class="sidebar_block" id="info">
                <div class="sidebar_title">
                    <p class="sidebar_title_en">Info</p>
                    <p class="sidebar_title_ch">相關資訊</p>
                </div>  
                <div class="sidebar_content">
                    <p class="_content">類別:<?php the_category(','); ?></p>
                    <p class="_content">發布日期:<?php the_time('Y.m.j'); ?></p>
                </div>
            </div>
            <div class="sidebar_block" id="author">
                <div class="sidebar_title">
                    <p class="sidebar_title_en">Editor</p>
                    <p class="sidebar_title_ch">編輯</p>
                </div>  
                <div class="sidebar_content">
                    <p class="_content"><?php 
                    global $post;
                    $author_id = $post->post_author; 
                    echo get_the_author_meta( 'display_name', $author_id ); ?></p>
                </div>
            </div>
            <div class="sidebar_block" id="share">
                <div class="sidebar_title">
                    <p class="sidebar_title_en">Share</p>
                    <p class="sidebar_title_ch">分享</p>
                </div>  
                <div class="sidebar_content">
                </div>
            </div>
        </div>
    </div>
    <!-- ******** -->
    
    <div class="next_news">
        <div class="next_news_title">
            <span>下則新聞</span>
            <span id="next_news_title_eg">Next</span>
            
        </div>
        <div class="the_next3_news">
            <?php
                global $post;
                $myposts = get_posts( array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'news',
                    'category__not_in' => array(14),
                    'orderby' => 'date',
                    'posts_per_page' => 3
                    ) 
                );
                if ( $myposts ) :
            ?>
                    <?php
                        $counter = 0;
                        foreach ( $myposts as $post ) :
                            $counter = $counter + 1;
                            setup_postdata( $post );
                    ?>
                    <!--<div> <?php //echo the_title() ?></div>-->
                        <div class="article-content num-<?php echo $counter ?>">
                            <div class="post_counter <?php echo $counter ?>"><?php echo "0" . $counter . "." ?>&nbsp;&nbsp;</div>
                            <div class="border-anim"></div>
                            <img class="thumbnail_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-newspaper-new.svg">
                            <img class="thumbnail_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-news-more.svg">
                            <div class="article-meta">
                                <img class="icon-clock>" src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                                <span class="post_time"><?php the_time('Y.m.j'); ?></span>
                                <span class="post_category"><?php the_category(' , '); ?></span>
                            </div>
                            <div class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                            <div class="excerpt" id="<?php echo $counter ?>"> <?php the_field('excerpt'); ?> </div>
                        </div>
                    <?php endforeach; wp_reset_postdata();?>
                <?php endif; ?>
        </div>
    </div>

    <div class="deco_waves" id="footer_wave">
        <img class="wave" src="<?php bloginfo('template_url')?>/images/icon/footer_wave.svg">
    </div>
    <div class="back_to_top" onclick="topFunction()">
            <img class="icon" src="<?php bloginfo('template_url')?>/images/icon/back_to_top.svg">
            <span class="en-title">back to top</span>
    </div>

    <?php get_footer(); ?>
    <script>
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    
</div>
