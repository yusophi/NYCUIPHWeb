<?php
/*
 * Template Name: 師資陣容
 * Template Post Type: Staff
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>

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
                <?php echo wp_get_attachment_image( $picture, 'large'); ?>
            </div>
            <div class="block-deco short">
                <div class="deco-dot"></div>
                <div class="deco-section">s1</div>
            </div>
            <div class="staff_name">
                <?php if ($locale == "zh_TW"): ?>
                    <p><?php echo $name; ?><span><?php echo $title; ?></span></p>
                <?php else: ?>
                    <p id="en_staff_name">
                        <span><?php echo $title; ?></span>
                        <span><?php echo $name; ?></span>
                    </p>
                <?php endif; ?>
                <?php if( $en_name ): ?><p class="staff_en_name"><?php echo $en_name; ?></p> <?php endif; ?>
            </div>
            <div class="contact">
                <p><span><?php if($locale == "zh_TW"){echo "電子郵件"; }else{echo "Mail"; } ?>&nbsp;:&nbsp;</span><span><?php echo $email;?></span></p>
                <p><span><?php if($locale == "zh_TW"){echo "連絡電話"; }else{echo "Tel"; } ?>&nbsp;:&nbsp;</span><span><?php echo $phone;?></span></p>
            </div>
            <?php if( $CV ): ?>
            <a class="staff_CV" href="<?php echo esc_url($CV);?>" target="_blank"><?php if($locale == "zh_TW"){echo "教師個人CV"; }else{echo "CV"; } ?>
            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
            <?php endif; ?>
            <div class="block-deco short"></div>
        </div> 
        <div class="right">
            <?php if( $abuot_me ): ?>
            <div class="<?php if($locale == "zh_TW"){echo "right_block";}else{echo "en_right_block"; } ?>">
                <span class="right_block_title"><?php if($locale == "zh_TW"){echo "關於我"; }else{echo "About me"; } ?></span>
                <div class="right_block_content"><?php echo $abuot_me; ?></div>
            </div>
            <?php endif; ?>

            <?php if( $edu ): ?>
            <div class="<?php if($locale == "zh_TW"){echo "right_block";}else{echo "en_right_block"; } ?>">
                <span class="right_block_title"><?php if($locale == "zh_TW"){echo "學歷"; }else{echo "Education"; } ?></span>
                <div class="right_block_content"><?php echo $edu; ?></div>
            </div>
            <?php endif; ?>
            
            <?php if( $experience ): ?>
            <div class="<?php if($locale == "zh_TW"){echo "right_block";}else{echo "en_right_block"; } ?>">
                <span class="right_block_title"><?php if($locale == "zh_TW"){echo "經歷"; }else{echo "Experience"; } ?></span>
                <div class="right_block_content"><?php echo $experience; ?></div>
            </div>
            <?php endif; ?>
            
            <?php if( $academy ): ?>
            <div class="<?php if($locale == "zh_TW"){echo "right_block";}else{echo "en_right_block"; } ?>">
                <span class="right_block_title"><?php if($locale == "zh_TW"){echo "學術專長"; }else{echo "Professional Specialty"; } ?></span>
                <div class="right_block_content"><?php echo $academy; ?></div>
            </div>
            <?php endif; ?>

            <div class="block-deco">
                <div class="deco-dot"></div>
                <div class="deco-arrow"></div>
                <div class="deco-section">s2</div>
            </div>

            <?php if( $works ): ?>
            <div class="<?php if($locale == "zh_TW"){echo "right_block";}else{echo "en_right_block"; } ?>">
                <span class="right_block_title"><?php if($locale == "zh_TW"){echo "代表著作"; }else{echo "Selected Publication"; } ?></span>
                <div class="right_block_content works"><?php echo $works; ?></div>
            </div>
            <?php endif; ?>

            <?php if( $guide_essay ): ?>
            <div class="<?php if($locale == "zh_TW"){echo "right_block";}else{echo "en_right_block"; } ?>">
                <span class="right_block_title"><?php if($locale == "zh_TW"){echo "公衛所指導學生論文"; }else{echo "Selected Advisee Thesis"; } ?></span>
                <div class="right_block_content"><?php echo $guide_essay; ?></div>
            </div>
            <?php endif; ?>
        </div>  
    </div>
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>    
<?php get_footer(); ?>
