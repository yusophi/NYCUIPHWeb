<?php
/*
 * Template Name: about-subject_Intro
 */
?>
<?php $locale = get_locale();?>
<div class="information-block subject-introduction">
    <div class="info-title">
        <?php if($locale == "zh_TW"): ?>
        <span class="ch-title">「公共衛生學科」、「醫學人文暨教育學科」</span>
        <?php else: ?>
        <span class="en_title">Department of Public Health、Department of Medical Humanities & Education/ School of medicine</span>
        <?php endif; ?>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s3</div>
    </div>  
    <div class="block-content subject-intro">
        <div class="<?php if($locale == "en_US"){ echo "en_text"; }else{echo "texts";};?>"><?php the_field('subject-intro') ?></div>
        <div class="image"><img src="<?php bloginfo('template_url')?>/images/page_about/icon-s3.svg"></div>
    </div> 
</div>