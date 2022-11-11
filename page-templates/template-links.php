<?php
/*
 * Template Name: links
 */
?>

<?php get_header(); ?>

<div class="links_page">
    <div class="links_title">
        <div class="ch_links_title">相關資源</div>
        <div class="en_links_title">Links</div>
    </div>
    <div class="dec_dot"></div>
    <?php get_template_part('template-parts/links','content');?>
    <?php get_template_part('template-parts/backtoTOP-whiteText'); ?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/links.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>
<?php get_footer(); ?>