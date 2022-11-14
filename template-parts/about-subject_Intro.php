<?php
/*
 * Template Name: about-subject_Intro
 */
?>
<?php $locale = get_locale(); ?>
<div class="information-block subject-introduction">
    <div class="info-title">
        <?php if ($locale == "zh_TW") : ?>
            <span class="ch-title">「公共衛生學科」、「醫學人文暨教育學科」</span>
        <?php else : ?>
            <span class="en_title">Department of Public Health、Department of Medical Humanities & Education/ School of medicine</span>
        <?php endif; ?>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s3</div>
    </div>
    <div class="block-content subject-intro">
        <div class="<?php if ($locale == "en_US") {
                        echo "en_text";
                    } else {
                        echo "texts";
                    }; ?>"><?php the_field('subject-intro') ?></div>
        <div class="image"><img src="<?php bloginfo('template_url') ?>/images/page_about/icon-s3.svg"></div>
        <div class="about-card">
            <div class="card-title">陽明大學醫學系-醫學人文必修你該知道的事</div>
            <div class="card-img"><img class="icon_aboutus_2 img-left" src="<?php bloginfo('template_url') ?>/images/icon/icon-aboutus-2.svg"></div>
            <div class="card-readmore">
                <div class="bt-watchmore animation1_btn" id="hp-watchmore-1">watch
                    <img class="watch_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-watch_blue.svg">
                    <div class="hover-part"><img class="watch_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-watch_yellow.svg"></div>
                </div>
                <div id="overlay1" class="overlay">
                    <div class="overlay_content">
                        <img class="closebtn" src="<?php bloginfo('template_url') ?>/images/icon/ESC.svg">
                        <div class="video_content"><?php the_field('video1') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>