<?php
/*
 * Template Name: events
 */
?>

<?php get_header(); ?>
<div class="page_events">
    <div class="banner">
        <span class="page_name" >學術活動<br></span>
        <span class="page_name" id="eg">Events</span>
        <div class="circle"></div>
    </div>
    <?php $categories = get_categories(array(
            'parent' => 10,
            'orderby' => 'slug',
            'order'   => 'ASC'
        ) ); ?>
    <div class="select_bar_container">
        <ul class="cat-list">
            <li>
                <a class="cat-list_item cat_active" href="#!"  data-type="post" data-slug="event">
                    <span class="cat-list_item_dot"></span>
                    <span class="cat-list_item_name">所有活動</span>
                </a>
            </li>
            <?php foreach($categories as $category) : ?>
                <li>
                    <a class="cat-list_item" href="#!" data-type="post"  data-slug="<?= $category->slug; ?>">
                        <span class="cat-list_item_dot"></span>    
                        <span class="cat-list_item_name"><?= $category->name; ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!--<div class="class_selector">
        <label class="select_container" id="selection_studies">讀書會
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container" id="selection_speech">學術演講
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <div id="SDG_container">
            <select id="SDG_selector">
                <option>SDG1</option>
                <option>SDG2</option>
                <option>SDG3</option>
                <option>SDG4</option>
                <option>SDG5</option>
                <option>SDG6</option>
                <option>SDG7</option>
            </select>
        </div>
    </div>-->

    <div class="post_block">
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'event',
                'orderby' => 'date',
                'paged' => $paged,
                'posts_per_page' => 15
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
                <?php endwhile; ?>
            </div>
        <?php endif; wp_reset_postdata(); ?>
    </div>

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
    </div>

    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>

<script>
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<?php get_footer(); ?>
