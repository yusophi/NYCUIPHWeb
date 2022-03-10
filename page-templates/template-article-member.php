<?php
/*
 * Template Name: 師資陣容
 * Template Post Type: Staff
 */
?>

<?php get_header(); ?>
<div class="article_member_container">
    <?php
    $regular_staff = get_field('regular_staff');
    if( $regular_staff): ?>
    <div class="article_content">
        <div class="left">
            <div class="member_picture">
                <?php echo wp_get_attachment_image( $regular_staff['picture'], 'full'); ?>
            </div>
            <div class="block-deco short">
                <div class="deco-dot"></div>
                <div class="deco-section">s1</div>
            </div>
            <div class="staff_name">
                <p><?php echo $regular_staff['name']; ?><span><?php echo $regular_staff['title']; ?></span></p>
                <p class="staff_en_name"><?php echo $regular_staff['en_name']; ?></p>
            </div>
            <div class="contact">
                <p>電子郵件&nbsp;:&nbsp;<span><?php echo $regular_staff['email_address'];?></span></p>
                <p>連絡電話&nbsp;:&nbsp;<span><?php echo $regular_staff['phone'];?></span></p>
            </div>
            <div class="block-deco short"></div>
        </div> 
        <div class="right">
            <div class="right_block">
                <p class="right_block_title">關於我</p>
                <p><?php echo $regular_staff['about_me'];?></p>
            </div>
            <div class="right_block">
                <p class="right_block_title">學歷</p>
                <p><?php echo $regular_staff['education'];?></p>
            </div><div class="right_block">
                <p class="right_block_title">經歷</p>
                <p><?php echo $regular_staff['experience'];?></p>
            </div><div class="right_block">
                <p class="right_block_title">學術專長</p>
                <p><?php echo $regular_staff['academic_expertise'];?></p>
            </div>
            <div class="block-deco">
                <div class="deco-dot"></div>
                <div class="deco-arrow"></div>
                <div class="deco-section">s2</div>
            </div>
            <div class="right_block">
                <p class="right_block_title">教師個人CV</p>
                <a class="CV_link" href="<?php echo esc_url($regular_staff['CV']);?>" target="_blank">[連結]</a>
            </div>
            <div class="right_block works">
                <p class="right_block_title">代表著作</p>
                <p><?php echo $regular_staff['works'];?></p>
            </div>
            <div class="right_block">
                <p class="right_block_title">公衛所指導學生論文</p>
                <p><?php echo $regular_staff['guide_essay'];?></p>
            </div>
        </div>  
    </div>
    <?php endif; ?>
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<?php get_footer(); ?>
