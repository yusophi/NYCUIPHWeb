<?php
/*
 * Template Name: about-purposeANDgoal
 */
?>
<?php $locale = get_locale();?>
<div class="information-block IPH-purposeANDgoal">
    <div class="info-title">
        <?php if($locale == "zh_TW"): ?>
        <span class="ch-title">成立宗旨與教育目標</span>
        <?php else: ?>
        <span class="en_title">Purpose and Goal</span>
        <?php endif; ?>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s2</div>
    </div>  
    <div class="block-content">
        <div class="texts">
            <div class="texts-title">
                <div>
                    <?php if($locale == 'zh_TW'){
                        echo "一、成立宗旨";
                    }else{
                        echo "I. Founding Mission";
                    }
                    ?>
                </div>
                <?php the_field('purpose') ?>
            </div>
            <div class="texts-title">
                <div>
                    <?php if($locale == 'zh_TW'){
                        echo "二、教育目標";
                    }else{
                        echo "II. Educational Objectives";
                    }
                    ?>
                </div>
                <?php the_field('goals') ?>
            </div>
        </div>
        <div class="image"><img src="<?php bloginfo('template_url')?>/images/page_about/icon-s2.svg"></div>
    </div>
</div>