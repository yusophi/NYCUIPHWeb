<?php
/*
 * Template Name: 純文字
 * Template Post Type: post
 */
?>

<link href="css/singlepost.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<?php get_header(); ?>
<div class="single_post">
    <div class="banner">
        <span class="post_title"><p><?php the_title(); ?></p></span>
        <div id="circle"></div>
        <div class="article_meta">
            <img class="icon-clock>" src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
            <span class="post_time"><?php the_time('Y.m.j'); ?></span>
            <div class="post_category"><?php the_category(' , '); ?></div>
        </div>      
    </div>
    <div class="article">
        <?php the_content(); ?>
    </div>
    <div class="sidebar"></div>
</div>
<?php //get_footer(); ?>
