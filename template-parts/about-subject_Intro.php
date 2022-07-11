<?php
/*
 * Template Name: about-subject_Intro
 */
?>
<?php $locale = get_locale();?>
<div class="information-block subject-introduction">
    <div class="info-title">
        <?php if($locale == "zh_TW"): ?>
        <span class="ch-title">公共衛生暨醫學人文學科</span>
        <?php else: ?>
        <span class="en_title">Institute of Public Health</span>
        <?php endif; ?>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s3</div>
    </div>  
    <div class="block-content">
        <div class="texts"><?php the_field('subject-intro') ?></div>
        <div class="image"><img src="<?php bloginfo('template_url')?>/images/page_about/icon-s3.svg"></div>
    </div> 
</div>