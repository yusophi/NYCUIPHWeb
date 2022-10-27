<?php
/*
 * Template Name: 學術活動模板
 * Template Post Type: post
 */
?>

<?php get_header(); ?>
<div class="single_post event_single_post">
    <div class="banner">
        <span class="post_title">
            <p><?php the_title(); ?></p>
            <div id="circle"></div>
        </span>
        <div class="banner_article_meta">
            <img class="icon-clock" src="<?php bloginfo('template_url') ?>/images/template-singlepost-icon/icon-whiteclock.svg">
            <span class="banner_post_time"><?php the_time('Y.m.j'); ?></span>
            <div class="banner_post_tags">
                <div class="post_category">
                    <?php $event_cat = get_field('event_item');
                        if($locale == "en_US"){
                            if($event_cat == "學術演講"){
                                echo "Seminar";
                            }elseif($event_cat == "讀書會"){
                                echo "Study group";                                
                            }
                        }
                        else{
                            echo $event_cat;
                        }
                    ?>
                </div>
                <?php
                $sdgs = get_field('sdg');
                if ($sdgs) : ?>
                    <ul class="sdg-tag">
                        <?php foreach ($sdgs as $sdg) : ?>
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
                    <?php if($locale == "zh_TW"):?>
                    <p class="sidebar_title_ch">相關資訊</p>
                    <?php endif; ?>
                </div>
                <div class="sidebar_content">
                    <div class="_content" id="sidebar_content-category">
                        <?php  $event_cat = get_field('event_item');
                        if($locale == "en_US"){
                            echo "Category : ";
                            if($event_cat == "學術演講"){
                                echo "Seminar";
                            }elseif($event_cat == "讀書會"){
                                echo "Study group";                                
                            }
                        }
                        else{
                            echo "類別 : " . $event_cat;
                        }?> 
                    </div>
                    <div class="_content">
                        <span><?php if($locale == "zh_TW"){echo "活動日期";}else{echo "Date";}?>&nbsp;:&nbsp;</span>
                        <span><?php the_field('event_date'); ?></span>
                    </div>
                    <div class="_content">
                        <span><?php if($locale == "zh_TW"){echo "活動時間";}else{echo "Time";}?>&nbsp;:&nbsp;</span>
                        <span><?php the_field('event_time_start'); ?><?php echo "~"; ?><?php the_field('event_time_end'); ?></span>
                    </div>
                    <?php
                    $sdgs = get_field('sdg');
                    if ($sdgs) : ?>
                        <ul>
                            <?php foreach ($sdgs as $sdg) : ?>
                                <li><?php echo $sdg; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <?php if (get_field('event_item') == '讀書會') : ?>
                <?php if (have_rows('study_group_info')) : ?>
                    <?php while (have_rows('study_group_info')) : the_row(); ?>
                        <div class="sidebar_block" id="study_group_info">
                            <div class="sidebar_content">
                                <p class="_content">導讀人&nbsp;:<?php the_sub_field('leader'); ?></p>
                                <p class="_content">導讀書籍&nbsp;:&nbsp;<?php the_sub_field('book'); ?></p>
                                <p class="_content">作者&nbsp;:&nbsp;<?php the_sub_field('author'); ?></p>
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
                    <?php if($locale == "zh_TW"):?>
                    <p class="sidebar_title_ch">編輯</p>
                    <?php endif; ?>
                </div>
                <div class="sidebar_content">
                    <p class="_content"><?php
                        global $post;
                        $author_id = $post->post_author;
                        echo get_the_author_meta('display_name', $author_id); ?></p>
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
            <span>下則活動</span>
            <span id="next_news_title_eg">Next</span>
        </div>
        <?php else: ?>
        <div class="next_news_title">
            <span>Next</span>
        </div>
        <?php endif; ?>
        <div class="the_next3_block the_next3_event">
            <?php
            $post_object = get_queried_object();
            /*echo $post_object->post_date;
            echo gettype($post_object->post_date);
            echo '<br>';
            echo $post_object->ID;*/
            $terms = wp_get_post_terms( $post_object->ID, 'category', array( 'fields' => 'ids' ) ); // Set fields to get only term ID's to make this more effient
            //print_r( $terms );
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
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'DSEC',
                'post_status' => 'publish'
            );
            $myposts = new WP_Query( $args );
            if(!$myposts){
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => $terms[0],
                    'meta_key' => 'event_date',
                    'orderby' => 'meta_value_num',
                    'order' => 'DSEC',
                    'paged' => $paged,
                    'posts_per_page' => 2,
                );
                $myposts = new WP_Query( $args );
            }?>
                <?php
                $counter = 0;
                while ($myposts->have_posts()) :
                        $myposts->the_post();
                ?>
                    <div class="event-cards-mask">
                        <div class="event-main-margin">
                            <div class="event-main-slide-upper">
                                <div class="event-img-container"><img src="<?php bloginfo('template_url') ?>/images/icon/pic-seminar.svg"></div>
                                <div class="event-info">
                                    <div class="event-date-title">
                                        <img src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                                        <span class="event-date-words">Date</span>
                                    </div>
                                    <div class="event-date"><?php the_field('event_date'); ?> </div>
                                    <div class="sm-event-pic"><img src="<?php bloginfo('template_url')?>/images/icon/pic-seminar.svg"></div>
                                    <div class="hp_event_tag">
                                        <div class="post_category"> 
                                            <?php $event_cat = get_field('event_item');
                                                if($locale == "en_US"){
                                                    if($event_cat == "學術演講"){
                                                        echo "Seminar";
                                                    }elseif($event_cat == "讀書會"){
                                                        echo "Study group";                                
                                                    }
                                                }
                                                else{
                                                echo $event_cat;
                                                }
                                            ?>          
                                        </div>
                                        <div class="event-location"><?php the_field('event_location'); ?></div>
                                    </div>
                                    <?php
                                    $sdgs = get_field('sdg');
                                    if ($sdgs) : ?>
                                        <ul class="sdg-tag ">
                                            <?php foreach ($sdgs as $sdg) : ?>
                                                <li><?php echo $sdg; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="event-name">
                                <a href="<?php the_permalink(); ?>"><?php 
                                    $mb_strlen = mb_strlen(get_the_title()) ; $strlen = strlen(get_the_title());
                                    if($locale == "en_US"){
                                          /*there is no mandarin*/
                                          if($mb_strlen >= 70){
                                                echo mb_substr(get_the_title(), 0, 67) . "...";
                                          }
                                          else{
                                                echo the_title();
                                          }
                                    }else{
                                    if($mb_strlen == $strlen){
                                          /*there is no mandarin*/
                                          if($mb_strlen >= 70){
                                                echo mb_substr(get_the_title(), 0, 67) . "...";
                                          }
                                          else{
                                                echo the_title();
                                          }
                                    }
                                    else{ 
                                          /* in mandarin */
                                          if($mb_strlen >= 40){
                                                echo mb_substr(get_the_title(), 0, 38) . "...";
                                          }
                                          else{
                                                echo the_title();
                                          }
                                    } } 
                                ?>
                                </a>
                            </div>
                            <div class="event-intro"><?php the_field('excerpt'); ?><?php echo "..." ?></div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
    <?php get_template_part('template-parts/backtoTOP', 'whiteText'); ?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>
<?php get_footer(); ?>