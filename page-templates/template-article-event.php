<?php
/*
 * Template Name: 學術活動模板
 * Template Post Type: post
 */
?>

<?php get_header(); ?>
<div class="single_post event_single_post">
    <div class="banner">
        <span class="post_title"><p><?php the_title(); ?></p></span>
        <div id="circle"></div>
        <div class="banner_article_meta">
            <img class="icon-clock>" src="<?php bloginfo('template_url') ?>/images/template-singlepost-icon/icon-whiteclock.svg">
            <span class="banner_post_time"><?php the_time('Y.m.j'); ?></span>
            <!--<div class="banner_post_category"><?php //the_category(''); ?></div>-->
            <div class="post_tags tags_in_page_banner">
                <div class="post_category"><?php the_field('event_item');//the_category(''); ?></div>
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
                    <div class="_content" id="sidebar_content-category">類別&nbsp;:&nbsp;<?php the_field('event_item'); ?></div>
                    <p class="_content">活動日期&nbsp;:&nbsp;<?php the_field('event_date'); ?></p>
                    <p class="_content">活動時間&nbsp;:&nbsp;<?php the_field('event_time_start'); ?><?php echo "~";?><?php the_field('event_time_end');?></p>
                    <?php
                    $sdgs = get_field('sdg');
                    if( $sdgs ): ?>
                        <ul>
                            <?php foreach( $sdgs as $sdg ): ?>
                                <li><?php echo $sdg; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <?php if( get_field('event_item') == '讀書會' ): ?>
                <?php if( have_rows('study_group_info')): ?>
                    <?php while( have_rows('study_group_info') ): the_row(); ?>
                        <div class="sidebar_block" id="study_group_info">
                            <div class="sidebar_content">
                                <p class="_content">導讀人&nbsp;:<?php the_sub_field('leader'); ?></p>
                                <p class="_content">導讀書籍&nbsp;:&nbsp;<?php the_sub_field('book'); ?></p>
                                <p class="_content">作者&nbsp;:&nbsp;<?php the_sub_field('author'); ?></p>
                                <p class="_content">原文作者&nbsp;:&nbsp;<?php the_sub_field('origin_author'); ?></p>
                                <p class="_content">譯者&nbsp;:&nbsp;<?php the_sub_field('translator'); ?></p>
                                <p class="_content">出版社&nbsp;:&nbsp;<?php the_sub_field('publisher'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
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
            <span>下則活動</span>
            <span id="next_news_title_eg">Next</span>
        </div>
        <div class="the_next3_block the_next3_event">
            <?php
                global $post;
                $myposts = get_posts( array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'category_name' => 'event',
                    'category__not_in' => array(14),
                    'orderby' => 'date',
                    'posts_per_page' => 2
                    ) 
                );
                if ( $myposts ) :?>
                    <?php
                        $counter = 0;
                        foreach ( $myposts as $post ) :
                            $counter = $counter + 1;
                            setup_postdata( $post );
                    ?>
                    <div class="event-cards-mask">
                        <div class="event-main-margin">
                            <div class="event-main-slide-upper">
                                <div class="event-img-container"><img src="<?php bloginfo('template_url') ?>/images/icon/pic-seminar.svg"></div>
                                <div class="event-info">
                                    <div class="event-date-title">
                                        <img src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg"">
                                        <span class="event-date-words">Date</span>
                                    </div>
                                    <div class="event-date"><?php the_field('event_date');?> </div>
                                    <!--<div class="event-categories"><?php //the_category(''); ?></div>
                                    <div class="event-location"><?php //the_field('event_location'); ?></div>-->
                                    <div class="hp_event_tag">
                                        <div class="post_category"><?php the_field('event_item');//the_category(''); ?></div>
                                        <div class="event-location"><?php the_field('event_location'); ?></div>
                                    </div>
                                    <?php
                                            $sdgs = get_field('sdg');
                                            if( $sdgs ): ?>
                                                <ul class="sdg-tag ">
                                                        <?php foreach( $sdgs as $sdg ): ?>
                                                            <li><?php echo $sdg; ?></li>
                                                        <?php endforeach; ?>
                                                </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="event-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                            <div class="event-intro"><?php the_field('excerpt'); ?><?php echo "..."?></div>
                        </div>
                    </div>
                    <?php endforeach; wp_reset_postdata();?>
                <?php endif; ?>
        </div>
    </div>
    <?php get_template_part( 'template-parts/backtoTOP','whiteText');?>    
</div>
<?php get_footer(); ?>