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
        <span class="page_name" id="eg">News</span>
        <?php else: ?>
        <span class="page_name" id="page_name-en">News</span>
        <?php endif; ?>
        <div class="circle"></div>
    </div>
    <?php 
        if($locale == "zh_TW"){
            $categories = get_categories(array(
                'parent' => 2, /*6, 2*/
                'orderby' => 'slug',
                'order'   => 'ASC'
                ) );
        }else{
            $categories = get_categories(array(
                'parent' => 93, /*93, 132 */
                'orderby' => 'slug',
                'order'   => 'ASC'
            ) );
        }
    ?>
    <div class="select_bar_container">
        <input type="hidden" id="filters-news" value="" />
        <ul class="cat-list">
            <li>
                <a class="cat-list_item news <?php if(is_page('news')||is_page('news-en')){echo "cat_active";}?>" 
                    <?php $page_name = "news";
                        if($locale == "en_US"){ $page_name = "news-en"; }
                        $href_url = get_site_url() . "/" . $page_name . "/#anchor";?>
                        href="<?php echo $href_url;?>"    
                    data-filter-type="news" data-type="post" data-slug="news">
                    <span class="cat-list_item_dot"></span>
                    <?php if($locale == "zh_TW"):?>
                    <span class="cat-list_item_name">總覽</span>
                    <?php else: ?>
                    <span class="cat-list_item_name">All</span>
                    <?php endif; ?>
                </a>
            </li>
            <?php 
                if($locale == "zh_TW"){$page_name = ['announcement', 'scholarship', 'covid19'];}else{
                    $page_name = ['announcement-en', 'covid19-en'];
                }
                $count = 0;
                foreach($categories as $category) : ?>
                <li>
                    <a class="<?= "cat-list_item " . $category->slug; ?>" href="<?php echo site_url() . "/" . $page_name[$count] . "/#anchor"; ?>" data-filter-type="news" data-type="post" data-slug="<?= $category->slug; ?>">
                        <span class="cat-list_item_dot"></span>    
                        <span class="cat-list_item_name"><?= $category->name; ?></span>
                    </a>
                </li>
                <?php $count = $count + 1;?>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
        $cat_name = 'news';
        global $rand;
        if(is_page('announcement') || is_page('announcement-en')):?>
            <script type='text/javascript' nonce="<?php echo $rand; ?>">
                var cat_list_item = document.getElementsByClassName("cat-list_item");
                cat_list_item[1].className += " cat_active";
            </script>
            <?php $cat_name = '1-normal_news';?>
            <?php if($locale == "en_US"){$cat_name = '1-announcement';}?>
        <?php elseif(is_page('scholarship')): ?>
            <script type='text/javascript' nonce="<?php echo $rand; ?>">
                var cat_list_item = document.getElementsByClassName("cat-list_item");
                cat_list_item[2].className += " cat_active";
            </script>
            <?php $cat_name = '2-scholarship';?>
        <?php elseif(is_page('covid19') || is_page('covid19-en')): ?>
            <script type='text/javascript' nonce="<?php echo $rand; ?>">
                var cat_list_item = document.getElementsByClassName("cat-list_item");
                cat_list_item[3].className += " cat_active";
            </script>
            <?php $cat_name = '3-covid-19_news';?>
            <?php if($locale == "en_US"){$cat_name = '2-covid19';}?>
        <?php endif; ?>
    <div id="anchor"></div>
    <div class="post_block" id="news_post">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => $cat_name,
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
                    <div class="post_counter">
                    <?php if($counter >= 10){
                                echo $counter . ".";
                            }else{
                                echo "0" . $counter . ".";} ?>
                    </div>
                    <?php get_template_part('template-parts/post_news_card'); ?>
                </div>
            <?php endwhile; ?>
        </div>
       
        <?php endif; wp_reset_postdata(); ?>
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
    </div>
    <?php get_template_part('template-parts/backtoTOP'); ?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>
<?php get_footer(); ?>