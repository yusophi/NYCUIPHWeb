<?php
/*
 * Template Name: footer-announcement
 */
?>
<?php get_header(); ?>
<div id="content_wrapper">
    <div id="content">
        <div id="page_title">
            <?php the_title(); ?>
        </div>
        <?php $cotent = get_field('content');
        if($cotent):?>
        <div class="article">
            <?php echo $cotent; ?>
        </div>
    <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
