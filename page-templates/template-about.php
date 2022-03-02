<?php
/*
 * Template Name: about
 */
?>

<?php get_header(); ?>

<div class="page_about">

    <div class="page-about-banner">
        <div class="video-module-container">
            <div class="video-module left">
                <span class="bk_num">01.</span> 
                <img class="icon_aboutus_2 img-left" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-2.svg">
                <div class="video_title"> <?php the_field('video_title1') ?></div>    
                <div class="bt-watchmore bt-left">
                    <a class="watchmore">watch</a>
                    <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                    <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
                </div>
                <!--<div id="overlay1"  class="overlay" onclick="off(1)">
                    <div class="overlay_content">
                            <img class="closebtn" onclick="off(1)" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg">
                            <div class="video_content"><?php the_field('video1') ?></div>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="about_banner">
            <span class="page-name" >系所簡介<br></span>
            <span class="page-name" >About</span>
            <!--<div class="circle"></div>-->
        </div>
        <div class="video-module-container">
            <div class="video-module right">
                <span class="bk_num">02.</span> 
                <img class="icon_aboutus_2 img-right" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-3.svg">
                <div class="video_title"> <?php the_field('video_title2') ?></div>    
                <div class="bt-watchmore bt-right">
                    <a class="watchmore">watch</a>
                    <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                    <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
                </div>
                    <!--<div id="overlay1"  class="overlay" onclick="off(1)">
                        <div class="overlay_content">
                                <img class="closebtn" onclick="off(1)" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg">
                                <div class="video_content"><?php the_field('video2') ?></div>
                        </div>
                    </div>-->
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
