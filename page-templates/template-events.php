<?php
/*
 * Template Name: events
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>

<div class="page_events">
    <div class="banner">
        <?php if($locale == "zh_TW"):?>
        <span class="page_name" >學術活動<br></span>
        <span class="page_name" id="eg">Events</span>
        <?php else: ?>
        <span class="page_name" id="page_name-en">Events</span>
        <?php endif; ?>
        <div class="circle"></div>
    </div>
    <?php 
        if($locale == "zh_TW"){
            $categories = get_categories(array(
                'parent' => 10, /* 10, 8 */
                'orderby' => 'slug',
                'order'   => 'ASC'
                ) );
        }else{
            $categories = get_categories(array(
                'parent' => 108, /* 108*/
                'orderby' => 'slug',
                'order'   => 'ASC'
            ) );
        } 
        ?>
    <div class="select_bar_container">
        <input type="hidden" id="filters-event" value="" />
        <ul class="cat-list">
            <?php if($locale == "zh_TW"):?>
            <li>
                <a class="cat-list_item event <?php if(is_page('events')){echo "cat_active";}?>" href="<?php echo site_url() . "/events\/#anchor";?>"  data-filter-type="event" data-type="post" data-slug="event">
                    <span class="cat-list_item_dot"></span>
                    <span class="cat-list_item_name">所有活動</span>
                </a>
            </li>
            <?php
                $page_name = ['seminars', 'study_group'];                
                $count = 0; 
                foreach ($categories as $category) : ?>
                <li>
                    <a class="<?= "cat-list_item " . $category->slug; ?>" href="<?php echo site_url() . "/events\/" . $page_name[$count] . "/#anchor"; ?>" data-filter-type="event" data-type="post"  data-slug="<?= $category->slug; ?>">
                        <span class="cat-list_item_dot"></span>    
                        <span class="cat-list_item_name"><?= $category->name; ?></span>
                    </a>
                </li>
                <?php $count = $count + 1; ?> 
            <?php endforeach; ?>
            <?php else: /*en_version*/?>
                <?php 
                    $page_name = ['seminars-en'];
                    foreach($categories as $category) : ?>
                <li>
                    <a class="<?= "cat-list_item cat_active " . $category->slug; ?>" href="<?php echo site_url() . "/events\/" . $page_name[0] . "/#anchor"; ?>" data-filter-type="event" data-type="post"  data-slug="<?= $category->slug; ?>">
                        <span class="cat-list_item_dot"></span>    
                        <span class="cat-list_item_name"><?= $category->name; ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <?php
        $cat_name = 'event';
        global $rand;
        if(is_page('seminars') || is_page('seminars-en')):?>
            <script type='text/javascript' nonce="<?php echo $rand; ?>">
                var cat_list_item = document.getElementsByClassName("cat-list_item");
                cat_list_item[1].className += " cat_active";
            </script>
            <?php $cat_name = '1-academy_lectures';?>
        <?php elseif(is_page('study_group')): ?>
            <script type='text/javascript' nonce="<?php echo $rand; ?>">
                var cat_list_item = document.getElementsByClassName("cat-list_item");
                cat_list_item[2].className += " cat_active";
            </script>
            <?php $cat_name = '2-study_group';?>
        <?php endif; ?>
    <div id="anchor"></div>
    <div class="post_block" id="event_post">
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => $cat_name,
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'DSEC',
                'paged' => $paged,
                'posts_per_page' => 15,
            );
            $arr_posts = new WP_Query($args);
            if ($arr_posts->have_posts()) :
        ?>

            <div class="event-cards">
                <?php
                $counter = 0;
                while ($arr_posts->have_posts()) :
                    $arr_posts->the_post();
                    $counter = $counter + 1;
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
                                <div class="event-date"><?php the_field('event_date');?> </div>
                                <div class="hp_event_tag">
                                    <div class="post_category"><?php the_field('event_item');?></div>
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
                            <a href="<?php the_permalink(); ?>">
                            <?php $mb_strlen = mb_strlen(get_the_title()) ; $strlen = strlen(get_the_title());
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
                                } } ?>
                            </a>
                        </div>
                        <div class="event-intro"><?php the_field('excerpt'); ?><?php echo "..." ?></div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php if ($counter == 5) : ?>
                <div class="event-space"></div>
            <?php endif; ?>
            </div>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>

    <div class="pagination">
        <?PHP
        $big = 999999999; // need an unlikely integer
        $args = array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?page=%#%',
            'total' => $arr_posts->max_num_pages,
            'current' => max(1, get_query_var('paged')),
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
    </div>
    <?php get_template_part('template-parts/backtoTOP'); ?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>
<?php get_footer(); ?>
