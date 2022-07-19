<?php
/*
 * Template Name: 師資陣容
 * Template Post Type: Staff
 */
?>

<?php get_header(); ?>
<div class="article_member_container">
    <?php
        $picture = get_field('picture');
        $title =  get_field('prof_class'); $name = get_field('name'); $en_name = get_field('en_name');
        $email = get_field('email'); $phone = get_field('phone'); $abuot_me = get_field('aboutME');
        $edu = get_field('educations'); $experience = get_field('experience'); 
        $academy= get_field('academic_expertise'); $link = ""; $CV = get_field('CV');
        $works = get_field('works'); $guide_essay = get_field('guide_essay');
    ?>
    <div class="article_content">
        <div class="left">
            <div class="member_picture">
                <?php echo wp_get_attachment_image( $picture, 'member_picture1'); ?>
            </div>
            <div class="block-deco short">
                <div class="deco-dot"></div>
                <div class="deco-section">s1</div>
            </div>
            <div class="staff_name">
                <p><?php echo $name; ?><span><?php echo $title; ?></span></p>
                <p class="staff_en_name"><?php echo $en_name; ?></p>
            </div>
            <div class="contact">
                <p><span>電子郵件&nbsp;:&nbsp;</span><span><?php echo $email;?></span></p>
                <p><span>連絡電話&nbsp;:&nbsp;</span><span><?php echo $phone;?></span></p>
            </div>
            <?php if( $CV ): ?>
            <a class="staff_CV" href="<?php echo esc_url($CV);?>" target="_blank">教師個人CV
            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
            <?php endif; ?>
            <div class="block-deco short"></div>
        </div> 
        <div class="right">
            <?php if( $abuot_me ): ?>
            <div class="right_block">
                <p class="right_block_title">關於我</p>
                <p><?php echo $abuot_me; ?></p>
            </div>
            <?php endif; ?>

            <?php if( $edu ): ?>
            <div class="right_block">
                <p class="right_block_title">學歷</p>
                <p><?php echo $edu; ?></p>
            </div>
            <?php endif; ?>
            
            <?php if( $experience ): ?>
            <div class="right_block">
                <p class="right_block_title">經歷</p>
                <p><?php echo $experience; ?></p>
            </div>
            <?php endif; ?>
            
            <?php if( $academy ): ?>
            <div class="right_block">
                <p class="right_block_title">學術專長</p>
                <p><?php echo $academy; ?></p>
            </div>
            <?php endif; ?>

            <div class="block-deco">
                <div class="deco-dot"></div>
                <div class="deco-arrow"></div>
                <div class="deco-section">s2</div>
            </div>

            <?php if( $works ): ?>
            <div class="right_block works">
                <p class="right_block_title">代表著作</p>
                <p><?php echo $works; ?></p>
            </div>
            <?php endif; ?>

            <?php if( $guide_essay ): ?>
            <div class="right_block">
                <p class="right_block_title">公衛所指導學生論文</p>
                <p><?php echo $guide_essay; ?></p>
            </div>
            <?php endif; ?>
        </div>  
    </div>
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>    
<?php get_footer(); ?>
