<?php
/*
 * Template Name: member
 */
?>
<?php get_header(); ?>
<div class="page_member">
    <div class="banner">
        <span class="page_name" >系所成員<br></span>
        <span class="page_name" id="eg">Members</span>
        <div class="circle"></div>
    </div>
    <?php $areas_categories = get_categories(array(
                'parent' => 21,
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'ASC'
            ) );
          $prof_categories = get_categories(array(
                'parent' => 25,
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'ASC'
            ) );
    ?>
    <div class="select_bar_container">
        <input type="hidden" id="filters-field" value="" />
        <input type="hidden" id="filters-title" value="" />
        <div class="cat-list_container">
            <p>領域｜</p>
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
            <p>職稱｜</p>
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

<!--    <div class="class_selector">
        <span>職稱｜</span>
        <label class="select_container" id="selection_studies">專任教師
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container" id="selection_speech">合聘教師
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container" id="selection_speech">兼任教師
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container" id="selection_speech">醫學人文教師
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container" id="selection_speech">系所主管
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
    </div>-->
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
        //echo $the_query->max_num_pages;
        if($the_query->have_posts()):
    ?>
        <div class="post_block">
            <?php
            $counter = 0;
            while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $counter = $counter + 1;?>
                    <?php
                        /*$regular_staff = get_field('regular_staff');
                        $co_staff = get_field('co_staff');
                        $co_staff = get_field('co_staff');
                        $concurrent_staff = get_field('concurrent_staff');
                        $medical_staff = get_field('medical_staff');*/
                        
                        $picture = get_field('picture');
                        $title =  get_field('prof_class'); $name = get_field('name');
                        $edu = get_field('h_edu'); $exp = get_field('academic_expertise'); $link = ""; $CV = "";
                    ?>
                    <?php /*if( $regular_staff): 
                        $picture = $regular_staff['picture'];
                        $name = $regular_staff['name'];
                        $title = $regular_staff['title'];
                        $edu = $regular_staff['h_education'];
                        $exp = $regular_staff['academic_expertise'];*/
                    ?>
                    <?php /*elseif( $co_staff): 
                        $picture = $co_staff['picture'];
                        $name = $co_staff['name'];
                        $title = $co_staff['title'];
                        $edu = $co_staff['h_education'];
                        $exp = $co_staff['academic_expertise'];
                        if( $co_staff['link'] ){
                            $link = $co_staff['link'];
                        }
                        elseif($co_staff['CV']){
                            $link = $co_staff['CV'];
                        }*/
                    ?>
                    <?php /*elseif( $concurrent_staff): 
                        $picture = $concurrent_staff['picture'];
                        $name = $concurrent_staff['name'];
                        $title = $concurrent_staff['title'];
                        $edu = $concurrent_staff['h_education'];
                        $exp = $concurrent_staff['academic_expertise'];
                        if( $concurrent_staff['link'] ){
                            $link = $concurrent_staff['link'];
                        }
                        elseif($concurrent_staff['CV']){
                            $link = $concurrent_staff['CV'];
                        }*/
                    ?>
                     <?php /*elseif( $medical_staff): 
                        $picture = $medical_staff['picture'];
                        $name = $medical_staff['name'];
                        $title = $medical_staff['title'];
                        $edu = $medical_staff['h_education'];
                        $exp = $medical_staff['academic_expertise'];
                        if( $medical_staff['link'] ){
                            $link = $medical_staff['link'];
                        }
                        elseif($medical_staff['CV']){
                            $link = $medical_staff['CV'];
                        }*/
                    ?>
                    <?php //endif; ?>
                    <div class="member_card">
                        <div class="member_picture">
                            <?php echo wp_get_attachment_image( $picture, 'member_picture'); ?>
                        </div>

                        <?php //if( $link ): ?>
                            <!--<a class="name" href="<?php //echo esc_url( $link ); ?>" target="_blank"><?php //echo $name; ?><span class="title"><?php //echo $title; ?></span></a>
                        <?php //elseif( $CV ): ?>
                            <a class="name" href="<?php //echo esc_url( $CV ); ?>" target="_blank"><?php //echo $name; ?><span class="title"><?php //echo $title; ?></span></a>-->
                        <?php //else: ?>
                        <a class="name" href="<?php the_permalink(); ?>"><?= $name; ?><span class="title"><?= $title; ?></span></a>
                        <?php //endif; ?>

                        <div class="education">
                            <p>學歷｜</p>
                            <p><?php echo $edu;?></p>
                        </div>
                        <div class="expertise">
                            <p>專長領域｜</p>
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
<?php get_footer();?>