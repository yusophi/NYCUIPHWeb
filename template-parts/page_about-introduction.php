<?php
/*
 * Template Name: about-introduction
 */
?>

<div class="information-block IPH-introduction">
    <div class="info-title">
        <span class="ch-title">公共衛生研究所</span>
        <span class="en-title">Institute of Public Health</span>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s1</div>
    </div>  
    <div class="block-content">
        <div class="texts"><?php the_field('iph_introduction') ?></div>
        <div class="image"><img src="<?php bloginfo('template_url')?>/images/page_about/img-intro.png"></div>
    </div>  
</div>