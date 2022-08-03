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
                'parent' => 8, /* 10, 8, 379 */
                'orderby' => 'slug',
                'order'   => 'ASC'
                ) );
        }else{
            $categories = get_categories(array(
                'parent' => 91, /* 108, 525*/
                'orderby' => 'slug',
                'order'   => 'ASC'
            ) );
        } 
        ?>
    <div class="select_bar_container">
        <input type="hidden" id="filters-event" value="" />
        <ul class="cat-list">
            <li>
                <a class="cat-list_item event <?php if(is_page('events')||is_page('events-en')){echo "cat_active";}?>"
                    <?php 
                        $page_name = "events";
                        if($locale == "en_US"){ $page_name = "events-en"; }
                        $href_url = get_site_url() . "/" . $page_name . "/#anchor";?>
                        href="<?php echo $href_url;?>"
                        data-filter-type="event" data-type="post" data-slug="event">
                    <span class="cat-list_item_dot"></span>
                    <?php if($locale == "zh_TW"):?>
                    <span class="cat-list_item_name">所有活動</span>
                    <?php else: ?>
                    <span class="cat-list_item_name">All</span>
                    <?php endif; ?>
                </a>
            </li>
            <?php
                if($locale == "zh_TW"){$page_name = ['seminars', 'study_group'];}
                else{
                    $page_name = ['seminars-en', 'study_group-en'];
                }
                             
                $count = 0; 
                foreach ($categories as $category) : ?>
                <li>
                    <a class="<?= "cat-list_item " . $category->slug; ?>" href="<?php echo site_url() . "/". $page_name[$count] . "/#anchor"; ?>" data-filter-type="event" data-type="post"  data-slug="<?= $category->slug; ?>">
                        <span class="cat-list_item_dot"></span>    
                        <span class="cat-list_item_name"><?= $category->name; ?></span>
                    </a>
                </li>
                <?php $count = $count + 1; ?> 
            <?php endforeach; ?>
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
            <?php 
                $cat_name = "1-academy_lectures";
                if($locale =="en_US"){$cat_name = '1-seminar'; }
            ?>
        <?php elseif(is_page('study_group')|| is_page('study_group-en')): ?>
            <script type='text/javascript' nonce="<?php echo $rand; ?>">
                var cat_list_item = document.getElementsByClassName("cat-list_item");
                cat_list_item[2].className += " cat_active";
            </script>
            <?php  
                $cat_name = "2-study_group";
                if($locale =="en_US"){$cat_name = '2-study_group-en	'; }
            ?>
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
                <?php get_template_part('template-parts/post_events_card'); ?>
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
