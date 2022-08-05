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
                    <?php if($locale == "zh_TW"):?>
                    <p class="sidebar_title_ch">採訪</p>
                    <?php endif; ?>
                </div>  
                <div class="sidebar_content">
                    <p class="_content"><?php the_field('interview'); ?></p>
                </div>
            </div>
            <div class="sidebar_block" id="author">
                <div class="sidebar_title">
                    <p class="sidebar_title_en">Author</p>
                    <?php if($locale == "zh_TW"):?>
                    <p class="sidebar_title_ch">撰文</p>
                    <?php endif; ?>
                </div>  
                <div class="sidebar_content">
                    <p class="_content"><?php the_field('author'); ?></p>
                </div>
            </div>
            <div class="sidebar_block" id="share">
                <div class="sidebar_title">
                    <p class="sidebar_title_en">Share</p>
                    <?php if($locale == "zh_TW"):?>
                    <p class="sidebar_title_ch">分享</p>
                    <?php endif; ?>
                </div>  
                <div class="sidebar_content">
                </div>
            </div>
        </div>
    </div>
    <!-- ******** -->
    
    <div class="next_news">
    <?php if($locale == "zh_TW"): ?>
        <div class="next_news_title">
            <span>下則專訪</span>
            <span id="next_news_title_eg">Next</span>
        </div>
        <?php else: ?>
        <div class="next_news_title">
            <span>Next</span>
        </div>
        <?php endif; ?>
        
        <div class="the_next3_block the_next3_interview">
        <?php
            $post_object = get_queried_object();
            $terms = wp_get_post_terms( $post_object->ID, 'category', array( 'fields' => 'ids' ) ); // Set fields to get only term ID's to make this more effient
            $args = array(
                'cat' => $terms[0],
                'posts_per_page' => 2,
                'no_found_rows' => true,   // Get 5 poss and bail. Make our query more effiecient, speed up
                'suppress_filters' => true,  // We don't want any filters to alter this query
                'date_query' => array(
                    array(
                        'before' => $post_object->post_date,  // Get posts after the current post, use current post post_date
                        'inclusive' => false, // Don't include the current post in the query
                    )
                    ),
                'order' => 'DSEC',
                'post_status' => 'publish'
            );
            $myposts = new WP_Query( $args );
            if(!$myposts){
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => $terms[0],
                    'orderby' => 'date',
                    'order' => 'DSEC',
                    'paged' => $paged,
                    'posts_per_page' => 2,
                );
                $myposts = new WP_Query( $args );
            }?>
                <?php
                     while ($myposts->have_posts()) :
                         $myposts->the_post();
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
                <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
    <?php get_template_part( 'template-parts/backtoTOP','whiteText');?>    
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>
<?php get_footer(); ?>