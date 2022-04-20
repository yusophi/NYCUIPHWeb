<?php
/*
 * Template Name: about
 */
?>

<?php get_header(); ?>

<div class="page_about">

    <div class="page-about-banner">
        <div class="video-module-container">
            <div class="video-module banr_left">
                <span class="bk_num">01.</span> 
                <img class="icon_aboutus_2 img-left" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-2.svg">
                <div class="video_title"> <?php the_field('video_title1') ?></div>    
                <div class="bt-watchmore animation1_btn" id="bt-left" onclick="on(1)">watch
                    <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                    <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
                </div>
                <div id="overlay1"  class="overlay" onclick="off(1)">
                    <div class="overlay_content">
                            <img class="closebtn" onclick="off(1)" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg">
                            <div class="video_content"><?php the_field('video1') ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner about_banner">
            <span class="page_name">系所簡介<br></span>
            <span class="page_name" id="eg">About</span>
            <div class="circle"></div>
        </div>
        <div class="video-module-container">
            <div class="video-module banr_right">
                <span class="bk_num">02.</span> 
                <img class="icon_aboutus_2 img-right" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-3.svg">
                <div class="video_title"> <?php the_field('video_title2') ?></div>   

                <div class="bt-watchmore animation1_btn" id="bt-right" onclick="on(2)">watch
                    <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                    <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
                </div>
                
                <div id="overlay1"  class="overlay" onclick="off(2)">
                    <div class="overlay_content">
                            <img class="closebtn" onclick="off(2)" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg">
                            <div class="video_content"><?php the_field('video2') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/page_about','introduction');?>
    <?php get_template_part('template-parts/page_about','purposeANDgoal');?>
    <?php get_template_part('template-parts/page_about','subject_Intro');?>
    <?php get_template_part('template-parts/page_about','past_supervisor');?>
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<?php get_footer(); ?>
