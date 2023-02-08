<?php $locale = get_locale(); ?>

<div class="article-preview-pic">
    <a href="<?php the_permalink(); ?>">
    <?php $post_thumbnail = get_field('post_thumbnail'); 
        if ($post_thumbnail) : ?>
        <?php //the_post_thumbnail('post-thumb'); ?>
        <?php echo wp_get_attachment_image( $post_thumbnail, 'post-thumb'); ?>
    <?php else: ?>
        <img src="<?php bloginfo('template_url') ?>\images\page_news\news-preview-pic.webp">
    <?php endif; ?>
    </a>
</div>
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
    <div class="excerpt"> <?php $excerpt = get_field('excerpt'); ?>
        <?php 
            if($excerpt){
                echo $excerpt . "...";
            }
            else{
                echo "詳見內文...";
            }
        ?>
    </div>
</div>
<div class="clearfix"></div>