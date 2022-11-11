<?php
/*
 * Template Name: administration_staff
 */
?>
<?php get_header(); ?>
<?php $locale = get_locale();?>
<div class="page_member">
    <div class="banner">
        <?php if($locale == "zh_TW"):?>
        <span class="page_name" >行政助教<br></span>
        <span class="page_name" id="eg">Administraion Staff</span>
        <?php else: ?>
        <span class="page_name" id="page_name-en">Administraion Staff</span>
        <?php endif; ?>
        <div class="circle"></div>
    </div>
    <?php
       if($locale == "en_US"){
            $args = array(
            'post_type' => 'Staff', 
            'post_status' => 'publish',
            'category_name' => 'staff-en', 
            'orderby'=>'date',
            'order'=>'ASC');
        }
        else{
            $args = array(
            'post_type' => 'Staff', 
            'post_status' => 'publish',
            'category_name' => 'staff', 
            'orderby'=>'date',
            'order'=>'ASC');
        }
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
                        $picture = get_field('staff_photo'); 
                        $work_group =  get_field('work_group'); $name = get_field('staff_name');
                    ?>
                    <div class="member_card">
                        <a class="staff_picture" href="<?php the_permalink(); ?>">
                            <?php echo wp_get_attachment_image( $picture, 'large' ); ?>
                        </a>
                        <?php if ($locale == "zh_TW"): ?>
                        <a class="name staff-name" href="<?php the_permalink(); ?>">
                            <span><?= $name; ?></span>
                            <span class="work_group"><?= $work_group; ?></span>
                        </a>
                        <?php else: ?>
                            <a class="en_name_link" href="<?php the_permalink(); ?>">
                                <span class="en_title"><?= $work_group; ?></span>
                                <span class="en_name"><?= $name; ?></span>
                            </a>
                        <?php endif; ?>
                        <div class="education">
                            <p><?php if($locale == "zh_TW"){echo "電話"; }else{echo "TEL";}?>&nbsp;|</p>
                            <p><?php the_field('phone_number');?></p>
                        </div>
                        <div class="expertise">
                            <p><?php if($locale == "zh_TW"){echo "信箱"; }else{echo "Mail";} ?>&nbsp;|</p>
                            <p><?php the_field('email');?></p>
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