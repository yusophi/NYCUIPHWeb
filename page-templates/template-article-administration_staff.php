<?php
/*
 * Template Name: 行政助教
 * Template Post Type: Staff
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>

<div class="article_member_container">
    <?php
        $picture = get_field('staff_photo'); $self_intro = get_field('self_introduction'); 
        $name = get_field('staff_name'); 
        $email = get_field('email'); $phone = get_field('phone_number');
        $work_group =  get_field('work_group');
    ?>
    <div class="article_content">
        <div class="left">
            <div class="member_picture">
                <?php echo wp_get_attachment_image( $picture, 'large'); ?>
            </div>
        </div> 
        <div class="right">
            <div class="staff_name">
                <?php if ($locale == "zh_TW"): ?>
                    <p><?php echo $name; ?><span><?php echo $work_group; ?></span></p>
                <?php else: ?>
                    <p id="en_staff_name">
                        <span><?php echo $name; ?></span>
                        <span><?php echo $work_group; ?></span>
                    </p>
                <?php endif; ?>
            </div>
            <div class="contact">
                <p><span><?php if($locale == "zh_TW"){echo "電子郵件"; }else{echo "Mail"; } ?>&nbsp;:&nbsp;</span><span><?php echo $email;?></span></p>
                <p><span><?php if($locale == "zh_TW"){echo "連絡電話"; }else{echo "Tel"; } ?>&nbsp;:&nbsp;</span><span><?php echo $phone;?></span></p>
            </div>  
            <div class="block-deco short"></div>
            <?php if( $self_intro ): ?>
            <div class="<?php if($locale == "zh_TW"){echo "right_block";}else{echo "en_right_block"; } ?>">
                <span class="right_block_title"><?php if($locale == "zh_TW"){echo "關於我"; }else{echo "About me"; } ?></span>
                <div class="right_block_content"><?php echo $self_intro; ?></div>
            </div>
            <?php endif; ?>
        </div>  
    </div>
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>    
<?php get_footer(); ?>
