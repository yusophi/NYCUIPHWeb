<?php
/*
 * Template Name: about-past_supervisor
 */
?>
<?php $locale = get_locale();?>
<div class="information-block IPH-past-supervisors">
    <div class="info-title">
        <?php if($locale == "zh_TW"): ?>
        <span class="ch-title">歷屆主管</span>
        <?php else: ?>
        <span class="en_title">Past-Supervisors</span>
        <?php endif; ?>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s4</div>
    </div>  
    <div class="block-content supervisor">
        <div class="supervisor-title">
            <?php if($locale == "zh_TW"):?>
            <span class="unit-title">公共衛生研究所</span>
            <span class="super-title">歷屆所長</span>
            <?php else: ?>
            <span class="en-supervisor-title">Chairpersons of Institute of Public Health in the past</span>
            <?php endif; ?>
        </div>
        <div class="<?php if($locale == "en_US"){ echo "en_text"; }else{echo "texts";};?>"><?php the_field('past-supervisor1') ?></div>
    </div>
    <div class="block-content supervisor">
        <div class="supervisor-title">
            <?php if($locale == "zh_TW"):?>
            <span class="unit-title">公共衛生學科</span>
            <span class="super-title">歷屆主任</span>
            <?php else: ?>
            <span class="en-supervisor-title">Department Head of Department of Public Health in the past</span>
            <?php endif; ?>
        </div>
        <div class="<?php if($locale == "en_US"){ echo "en_text"; }else{echo "texts";};?>"><?php the_field('past-supervisor2') ?></div>
    </div>
    <div class="block-content supervisor">
        <div class="supervisor-title">
            <?php if($locale == "zh_TW"):?>
            <span class="unit-title">醫學人文暨教育學科</span>
            <span class="super-title">歷屆主任</span>
            <?php else: ?>
            <span class="en-supervisor-title">Department Head of Department of Medical Humanities & Education in the past</span>
            <?php endif; ?>
        </div>
        <div class="<?php if($locale == "en_US"){ echo "en_text"; }else{echo "texts";};?>"><?php the_field('past-supervisor3') ?></div>
    </div>
</div>
