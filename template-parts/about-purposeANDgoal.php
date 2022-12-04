<?php
/*
 * Template Name: about-purposeANDgoal
 */
?>
<?php $locale = get_locale(); ?>
<div class="information-block IPH-purposeANDgoal">
    <div class="info-title">
        <?php if ($locale == "zh_TW") : ?>
            <span class="ch-title">成立宗旨與教育目標</span>
        <?php else : ?>
            <span class="en_title">Purpose and Goal</span>
        <?php endif; ?>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s2</div>
    </div>
    <div class="block-content">
        <div class="<?php if ($locale == "en_US") {
                        echo "en_text";
                    } else {
                        echo "texts";
                    }; ?>">
            <div class="texts-title">
                <div>
                    <?php if ($locale == 'zh_TW') {
                        echo "一、成立宗旨";
                    } else {
                        echo "I. Founding Mission";
                    }
                    ?>
                </div>
                <?php the_field('purpose') ?>
            </div>
            <div class="texts-title">
                <div>
                    <?php if ($locale == 'zh_TW') {
                        echo "二、教育目標";
                    } else {
                        echo "II. Educational Objectives";
                    }
                    ?>
                </div>
                <?php the_field('goals') ?>
            </div>
        </div>
        <div class="image"><img src="<?php bloginfo('template_url') ?>/images/page_about/icon-s2-v3.png"></div>
        <div class="about-card">
            <div class="card-title">陽明大學公共衛生研究所招生宣傳短片</div>
            <div class="card-img"><img class="icon_aboutus_2 img-left" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-3.svg"></div>
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