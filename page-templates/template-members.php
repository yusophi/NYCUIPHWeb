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
    <div class="class_selector">
        <!--<span>職稱｜</span>-->
        <label class="select_container" id="selection_studies">專任教師
            <input type="radio" checked="checked" name="radio">
            <span class="checkmark"></span>
        </label>
        <label class="select_container" id="selection_speech">合聘教師
            <input type="radio" name="radio">
            <span class="checkmark"></span>
        </label>
    </div>
    <?php
        $args = array(
                'post_type' => 'Staff', 
                'post_status' => 'publish',
                'category__not_in' => array(16)
        );
        $the_query = new WP_Query($args);
        //echo $the_query->max_num_pages;
        if($the_query->have_posts()):
    ?>
        <div class="member_block">
            <?php
            $counter = 0;
            while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $counter = $counter + 1;?>
                    <?php
                    $regular_staff = get_field('regular_staff');
                    if( $regular_staff): ?>
                        <div class="member_card">
                            <div class="member_picture">
                                <?php echo wp_get_attachment_image( $regular_staff['picture'], 'full'); ?>
                            </div>
                            <a class="name" href="<?php the_permalink(); ?>"><?php echo $regular_staff['name']; ?><span class="title"><?php echo $regular_staff['title']; ?></span></a>
                            <div class="education">
                                <p>學歷｜</p>
                                <p><?php echo $regular_staff['h_education'];?></p>
                            </div>
                            <div class="expertise">
                                <p>專長領域｜</p>
                                <p><?php echo $regular_staff['academic_expertise'];?></p>
                            </div>
                        </div>
                    <?php endif; ?>
            <?php endwhile; ?> 
        </div>
    <?php endif;
        wp_reset_postdata(); 
    ?>
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<?php get_footer();?>