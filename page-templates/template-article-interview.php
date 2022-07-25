<?php
/*
 * Template Name: 人物專訪模板
 * Template Post Type: post
 */
?>

<?php get_header(); ?>

<div class="single_post">
    <div class="banner">
        <div class="interview-picture pic_in_article-interview">
            <?php echo wp_get_attachment_image( get_field('alumni_picture'), 'hp-interview-img-thumb'); ?>
        </div>
        <span class="post_title interview_title"><p><?php the_title(); ?></p></span>
        <div class="interview-circle"></div>
        <div class="banner_article_meta">
            <img class="icon-clock" src="<?php bloginfo('template_url') ?>/images/template-singlepost-icon/icon-whiteclock.svg">
            <span class="banner_post_time"><?php the_time('Y.m.j'); ?></span>
        </div>      
    </div>
    <div class="single_post_info">
        <div class="article">
            <?php the_field('interview_content'); ?>
        </div>
        <div class="sidebar">
            <div class="sidebar_block" id="info">
                <div class="sidebar_title">
                    <p class="sidebar_title_en">Interview</p>
                    <p class="sidebar_title_ch">採訪</p>
                </div>  
                <div class="sidebar_content">
                    <p class="_content"><?php the_field('interview'); ?></p>
                </div>
            </div>
            <div class="sidebar_block" id="author">
                <div class="sidebar_title">
                    <p class="sidebar_title_en">Author</p>
                    <p class="sidebar_title_ch">撰文</p>
                </div>  
                <div class="sidebar_content">
                    <p class="_content"><?php the_field('author'); ?></p>
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
            <span>下則專訪</span>
            <span id="next_news_title_eg">Next</span>
        </div>
        <div class="the_next3_block the_next3_interview">
            <?php
                global $post;
                $myposts = get_posts( array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'interviews',
                    'orderby' => 'date',
                    'posts_per_page' => 2
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
                    <div class="interview-slide">
                        <div class="interview-picture">
                            <?php echo wp_get_attachment_image( get_field('alumni_picture'), 'hp-interview-img-thumb'); ?>
                        </div>      
                        <div class="interview-text-content">
                            <a class="interview-title" href="<?php the_permalink(); ?>"><?php the_field('interview-class'); ?> <?php echo "─"?> <?php the_field('alumni_name'); ?></a>
                            <span class="interview-excerpt"><?php the_field('interview-excerpt'); ?><?php echo "...";?></span>
                        </div>
                    </div>
                    <?php endforeach; wp_reset_postdata();?>
                <?php endif; ?>
        </div>
    </div>

    <?php get_template_part( 'template-parts/backtoTOP','whiteText');?>    
</div>
<?php get_footer(); ?>