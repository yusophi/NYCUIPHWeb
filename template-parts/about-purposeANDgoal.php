<?php
/*
 * Template Name: about-purposeANDgoal
 */
?>

<div class="information-block IPH-purposeANDgoal">
<div class="info-title">
        <span class="ch-title">成立宗旨與教育目標</span>
        <span class="en_title">Purpose and Goal</span>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s2</div>
    </div>  
    <div class="block-content">
        <div class="texts">
            <div class="texts-title"><div>一、成立宗旨</div><?php the_field('purpose') ?></div>
            <div class="texts-title"><div>二、教育目標</div><?php the_field('goals') ?></div>
        </div>
        <div class="image"><img src="<?php bloginfo('template_url')?>/images/page_about/icon-s2.svg"></div>
    </div>

</div>