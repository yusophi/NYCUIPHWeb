<?php $locale = get_locale(); ?>

<div class="article-preview-pic"><img src="<?php bloginfo('template_url') ?>\images\page_news\news-preview-pic.webp"></div>
<div class="article-title">
    <a href="<?php the_permalink(); ?>">
        <?php $mb_strlen = mb_strlen(get_the_title());
        $strlen = strlen(get_the_title());
        if ($locale == "en_US") {
            if ($mb_strlen >= 50) {
                echo mb_substr(get_the_title(), 0, 48) . "...";
            } else {
                echo the_title();
            }
        } else {
            if ($mb_strlen == $strlen) {
                /*there is no mandarin*/
                if ($mb_strlen >= 50) {
                    echo mb_substr(get_the_title(), 0, 48) . "...";
                } else {
                    echo the_title();
                }
            } else {
                /* in mandarin */
                if ($mb_strlen >= 30) {
                    echo mb_substr(get_the_title(), 0, 28) . "...";
                } else {
                    echo the_title();
                }
            }
        } ?>
    </a>
</div>
<div class="article-attr">
    <div class="article-meta">
        <img class="icon-clock" src="<?php bloginfo('template_url'); ?>/images/icon/icon-clock.svg">
        <span class="post_time"><?php the_time('Y.m.j'); ?></span>
    </div>
    <div class="post_tags">
        <div class="post_category">
            <?php $new_cat = get_field('news_item');
            if ($locale == "en_US" && $new_cat == "公告") {
                echo "General";
            } else {
                echo $new_cat;
            }
            ?>
        </div>
        <?php
        $sdgs = get_field('sdg');
        if ($sdgs) : ?>
            <ul class="post-sdg-tag">
                <?php foreach ($sdgs as $sdg) : ?>
                    <li><?php echo $sdg; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>
<div class="article-passage">
    <div class="article-title_bottom_line"></div>
    <div class="excerpt"> <?php the_field('excerpt'); ?><?php echo "..." ?> </div>
    <div class="article-excerpt_bottom_line"></div>
</div>
<div class="clearfix"></div>