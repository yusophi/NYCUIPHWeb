<?php
/*
 * Template Name: about-past_supervisor
 */
?>

<div class="information-block IPH-past-supervisors">
    <div class="info-title">
        <span class="ch-title">歷屆主管</span>
        <span class="en-title">Past-Supervisors</span>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s4</div>
    </div>  
    <div class="block-content supervisor">
        <div class="supervisor-title">
            <span class="unit-title">公共衛生研究所</span>
            <span class="super-title">歷屆所長</span>
        </div>
        <div class="texts"><?php the_field('past-supervisor1') ?></div>
    </div>
    <div class="block-content supervisor">
        <div class="supervisor-title">
            <span class="unit-title">公共衛生學科</span>
            <span class="super-title">歷屆主任</span>
        </div>
        <div class="texts"><?php the_field('past-supervisor2') ?></div>
    </div>
    <div class="block-content supervisor">
        <div class="supervisor-title">
            <span class="unit-title">醫學人文暨教育學科</span>
            <span class="super-title">歷屆主任</span>
        </div>
        <div class="texts"><?php the_field('past-supervisor3') ?></div>
    </div>
</div>
