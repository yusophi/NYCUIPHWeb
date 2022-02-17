<?php
/*
 * Template Name: admission
 */
?>

<?php get_header(); ?>

<div class="page_admission">
    <div class="banner">
        <span class="page_name" id="zh">招生訊息<br></span>
        <span class="page_name" id="eg">Admission Information</span>
        <div id="circle"></div>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s1</div>
    </div>
    <div calss="scetion1">
        <div class="s1-content">
            <div class="content">
                <span>教育目標之內容與特色</span>
                <div><?php the_field('edu_goals')?>
            </div>
            <div class="content career">
                <span>未來就業發展</span>
                <div><?php the_field('career') ?></div>
            </div>
        </div>

        <div class="s1-deco-img">
            <img src="<?php bloginfo('template_url')?>/images/page_admission/icon-s1-1.svg">
            <img src="<?php bloginfo('template_url')?>/images/page_admission/icon-s1-2.svg">
            <img src="<?php bloginfo('template_url')?>/images/page_admission/icon-s1-3.svg">
        </div>
    </div>  
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<?php get_footer(); ?>