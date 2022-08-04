<?php
/*
 * Template Name: 最新消息模板
 * Template Post Type: post
 */
?>
<?php get_header(); ?>

<div class="single_post">
    <div class="banner">
        <div class="post_title">
            <p><?php the_title(); ?></p>
            <div id="circle"></div>
        </div>
        <div class="banner_article_meta">
            <img class="icon-clock" src="<?php bloginfo('template_url') ?>/images/template-singlepost-icon/icon-whiteclock.svg">
            <span class="banner_post_time"><?php the_time('Y.m.j'); ?></span>
            <div class="banner_post_tags">
                <div class="post_category">
                    <?php $new_cat = get_field('news_item');
                        if($locale == "en_US" && $new_cat == "公告"){
                            echo "General";
                        }
                        else{
                            echo $new_cat;
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
                        <?php if($locale == "en_US"){
                            echo "Category : ";
                            if($new_cat == "公告"){
                                echo "General";
                            }
                            else{
                                echo $new_cat;
                            }
                        }
                        else{
                            echo "類別 : " . $new_cat;
                        }?> 
                    </div>
                    <p class="_content">
                    <?php if($locale == "en_US"){
                            echo "Date : ";
                        }
                        else{
                            echo "發布日期 : " ;
                        }
                        the_time('Y.m.j');?> 
                    </p>
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
            <span>下則新聞</span>
            <span id="next_news_title_eg">Next</span>
        </div>
        <?php else: ?>
        <div class="next_news_title">
            <span>Next</span>
        </div>
        <?php endif; ?>

        <div class="the_next3_block">
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
                'posts_per_page' => 3,
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
            //var_dump( $myposts->posts );
            if(!$myposts){
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'cat' => $terms[0],
                    'orderby' => 'date',
                    'order' => 'DSEC',
                    'posts_per_page' => 3,
                );
                $myposts = new WP_Query( $args );
            }?>
                <?php
                    $counter = 0;
                    while ($myposts->have_posts()) :
                        $myposts->the_post();
                        $counter = $counter + 1;
                ?>
                    <div class="article-content whiteText num-<?php echo $counter ?>">
                        <div class="post_counter <?php echo $counter ?>"><?php echo "0" . $counter . "." ?>&nbsp;&nbsp;</div>
                        <div class="post_icon tmp_arti_news">
                            <img src="<?php bloginfo('template_url') ?>/images/page_news/icon-white-newspaper.svg">
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
                            <img class="icon-clock" src="<?php bloginfo('template_url') ?>/images/icon/icon-clock-white.svg">
                            <span class="post_time"><?php the_time('Y.m.j'); ?></span>
                        </div>
                        <div class="post_tags">
                            <div class="post_category">
                                <?php if($locale == "en_US" && $new_cat == "公告"){
                                    echo "General";
                                }
                                else{
                                    echo $new_cat;
                                }?> 
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
                        <div class="article-passage">
                            <div class="article-excerpt_bottom_line"></div>
                            <div class="article-title">
                                <a href="<?php the_permalink(); ?>"><?php $mb_strlen = mb_strlen(get_the_title()) ; $strlen = strlen(get_the_title());
                                if($locale == "en_US"){
                                    if($mb_strlen >= 50){
                                            echo mb_substr(get_the_title(), 0, 48) . "...";
                                    }
                                    else{
                                            echo the_title();
                                    }
                                }
                                else{if($mb_strlen == $strlen){
                                    /*there is no mandarin*/
                                    if($mb_strlen >= 50){
                                            echo mb_substr(get_the_title(), 0, 48) . "...";
                                    }
                                    else{
                                            echo the_title();
                                    }
                                }
                                else{ 
                                    /* in mandarin */
                                    if($mb_strlen >= 30){
                                            echo mb_substr(get_the_title(), 0, 28) . "...";
                                    }
                                    else{
                                            echo the_title();
                                    }
                                } }
                                ?>
                                </a>
                            </div>
                            <div class="article-title_bottom_line"></div>
                            <div class="excerpt" id="<?php echo $counter ?>"> <?php the_field('excerpt'); ?><?php echo "..." ?> </div>
                            <div class="article-excerpt_bottom_line"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <?php endwhile; wp_reset_postdata();?>
        </div>
    </div>
    <?php get_template_part('template-parts/backtoTOP', 'whiteText'); ?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>
<?php get_footer(); ?>