<?php
/*
 * Template Name: about
 */
?>

<?php get_header(); ?>

<?php $locale = get_locale();?>
<div class="page_about">
    <div class="page-about-banner">
        <div class="video-module-container">
            <div class="video-module banr_left">
                <span class="bk_num">01.</span> 
                <img class="icon_aboutus_2 img-left" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-2.svg">
                <div class="video_title"> <?php the_field('video_title1') ?></div>    
                <div class="bt-watchmore animation1_btn" id="hp-watchmore-1">watch
                    <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                    <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
                </div>
                <div id="overlay1"  class="overlay">
                    <div class="overlay_content">
                            <img class="closebtn" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg">
                            <div class="video_content"><?php the_field('video1') ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner about_banner">
            <?php if($locale == 'zh_TW'):?>
            <span class="page_name">系所簡介<br></span>
            <?php else: ?>
            <span class="page_name" id="eg">About</span>
            <?php endif; ?>
            <div class="circle"></div>
        </div>
        <div class="video-module-container">
            <div class="video-module banr_right">
                <span class="bk_num">02.</span> 
                <img class="icon_aboutus_2 img-right" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-3.svg">
                <div class="video_title"> <?php the_field('video_title2') ?></div>   

                <div class="bt-watchmore animation1_btn" id="hp-watchmore-2">watch
                    <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                    <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
                </div>
                
                <div id="overlay2"  class="overlay">
                    <div class="overlay_content">
                            <img class="closebtn" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg">
                            <div class="video_content"><?php the_field('video2') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/about','introduction');?>
    <?php get_template_part('template-parts/about','purposeANDgoal');?>
    <?php get_template_part('template-parts/about','subject_Intro');?>
    <?php get_template_part('template-parts/about','past_supervisor');?>
    <?php get_template_part( 'template-parts/backtoTOP');?>  
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/show_video.js"></script>
</div>
<?php get_footer(); ?>
