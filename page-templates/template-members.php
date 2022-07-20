<?php
/*
 * Template Name: member
 */
?>
<?php get_header(); ?>
<?php $locale = get_locale();?>
<div class="page_member">
    <div class="banner">
        <?php if($locale == "zh_TW"):?>
        <span class="page_name" >系所成員<br></span>
        <span class="page_name" id="eg">Members</span>
        <?php else: ?>
        <span class="page_name" id="page_name-en">Members</span>
        <?php endif; ?>
        <div class="circle"></div>
    </div>
    <?php 
        if($locale == "zh_TW"){
            $areas_categories = get_categories(array(
                'parent' => 33, /*21*/
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'ASC'
            ) );

            $prof_categories = get_categories(array(
                    'parent' => 27, /*25*/
                    'orderby' => 'slug',
                    'hide_empty' => false,
                    'order'   => 'ASC'
                ) );
        }else{
            $areas_categories = get_categories(array(
                'parent' => 112,
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'ASC'
            ) );
            $prof_categories = get_categories(array(
                'parent' => 120,
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'ASC'
            ) );
        }
    ?>
    <div class="select_bar_container">
        <input type="hidden" id="filters-field" value="" />
        <input type="hidden" id="filters-title" value="" />
        <div class="cat-list_container">
            <?php if($locale == "zh_TW"):?>
            <p>領域&#124;</p>
            <?php else: ?>
            <p>Division&#124;</p>
            <?php endif; ?>
            <ul class="cat-list" id="cat_area">
                <?php foreach($areas_categories as $area_category) : ?>
                    <li>
                        <a class="<?= "cat-list_item " . $area_category->slug; ?>" href="#!" data-filter-type="field" data-type="Staff" data-slug="<?= $area_category->slug; ?>">
                            <span class="cat-list_item_dot"></span>    
                            <span class="cat-list_item_name"><?= $area_category->name; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="cat-list_container">
            <?php if($locale == "zh_TW"):?>
            <p>職稱&#124;</p>
            <?php else: ?>
            <p>Position&#124;</p>
            <?php endif; ?>
            <ul class="cat-list" id="cat_prof">
                <?php foreach($prof_categories as $prof_category) : ?>
                    <li>
                        <a class="<?= "cat-list_item " . $prof_category->slug; ?>" href="#!" data-filter-type="title" data-type="Staff" data-slug="<?= $prof_category->slug; ?>">
                            <span class="cat-list_item_dot"></span>    
                            <span class="cat-list_item_name"><?= $prof_category->name; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php
        $args = array(
                'post_type' => 'Staff',
                'category_name' => '1-regular',
                'post_status' => 'publish',
                /*'meta_key'   => 'admin_for_sorting',
                'orderby'    => 'meta_value_num',
                'order'      => 'ASC'*/
                'meta_query' => array(
                    'relation' => 'AND',
                    'admin' => array(
                        'key' => 'admin_for_sorting',
                        'compare' => 'EXISTS',
                    ),
                    'prof' => array(
                        'key' => 'prof_class_for_sorting',
                        'compare' => 'EXISTS',
                    ), 
                ),
                'orderby' => array( 
                    'admin' => 'ASC',
                    'prof' => 'ASC',
                ),
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):
    ?>
        <div class="post_block">
            <?php
            $counter = 0;
            while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $counter = $counter + 1;?>
                    <?php
                        $picture = get_field('picture');
                        $title =  get_field('prof_class'); $name = get_field('name');
                        $edu = get_field('h_edu'); $exp = get_field('academic_expertise'); $link = ""; $CV = "";
                    ?>
                    <div class="member_card">
                        <div class="member_picture">
                            <?php echo wp_get_attachment_image( $picture, 'member_picture'); ?>
                        </div>
                        <?php if ($locale == "zh_TW"): ?>
                        <a class="name" href="<?php the_permalink(); ?>"><?= $name; ?><span class="title"><?= $title; ?></span></a>
                        <?php else: ?>
                            <a class="en_name_link" href="<?php the_permalink(); ?>">
                                <span class="en_title"><?= $title; ?></span>
                                <span class="en_name"><?= $name; ?></span>
                            </a>
                        <?php endif; ?>

                        <div class="education <?php if($locale == "en_US"){echo "en-education";}?>">
                            <p><?php if($locale == "zh_TW"){echo "學歷"; }else{echo "Education";}?>&nbsp;|</p>
                            <p><?php echo $edu;?></p>
                        </div>
                        <div class="expertise <?php if($locale == "en_US"){echo "en-expertise";}?>">
                            <p><?php if($locale == "zh_TW"){echo "專長領域"; }else{echo "Professional Specialty";} ?>&nbsp;|</p>
                            <p><?php echo $exp;?></p>
                        </div>
                    </div>
            <?php endwhile; ?> 
        </div>
    <?php endif;
        wp_reset_postdata(); 
    ?>
    <?php get_template_part( 'template-parts/backtoTOP');?> 
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>
<?php get_footer();?>