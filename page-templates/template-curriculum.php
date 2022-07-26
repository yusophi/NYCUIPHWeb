<?php
/*
 * Template Name: curriculum_mapping
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>
<div class="page_Curriculum">
    <div class="banner curriculum_banner">
        <?php if($locale == "zh_TW"): ?>
        <span class="page_name" >課程規劃<br></span>
        <span class="page_name" id="eg">Academics</span>
        <?php else: ?>
        <span class="page_name" id="page_name-en">Academics</span>
        <?php endif; ?>
        <div class="circle"></div>
    </div>
    <div class="subpage_buttons"> 
        <?php if($locale == "zh_TW"): ?>
        <a class="subpage_btn" id="btn-arch" href="<?php echo site_url(); ?>/course_architecture/"><p class="_font20">修課架構</p></a>
        <a class="subpage_btn" id="btn-degree" href="<?php echo site_url(); ?>/degree_regulation/"><p class="_font20">修業規定</p></a>
        <a class="subpage_btn" id="btn-course" href="<?php echo site_url(); ?>/course_schedule/"><p class="_font20">學期課表</p></a>
        <?php else: ?>
        <a class="subpage_btn" id="btn-degree" href="<?php echo site_url(); ?>/degree_regulation-en/"><p class="_font20">Regulation</p></a>
        <a class="subpage_btn" id="btn-course" href="<?php echo site_url(); ?>/course_schedule-en/"><p class="_font20">Timetable</p></a>
        <?php endif; ?>
    </div>
        <?php
        if(is_page('course_architecture')):?>
            <?php get_template_part('template-parts/curriculum','arch');?>
            <script type='text/javascript'>
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[1].className += " animation1_btn";
                animation_btn[2].className += " animation1_btn";
            </script>
        <?php elseif(is_page('degree_regulation') || is_page('degree_regulation-en')):?>
            <?php get_template_part('template-parts/curriculum','degree_regulation');?>
            <?php if($locale == "zh_TW"): ?>
            <script type='text/javascript'>
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[0].className += " animation1_btn";
                animation_btn[2].className += " animation1_btn";
            </script>
            <?php else: ?>
            <script type='text/javascript'>
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[1].className += " animation1_btn";
            </script>
            <?php endif; ?>
        <?php elseif(is_page('course_schedule') || is_page('course_schedule-en')):?>
            <?php get_template_part('template-parts/curriculum','course_schedule');?>
            <?php if($locale == "zh_TW"): ?>
            <script type='text/javascript'>
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[0].className += " animation1_btn";
                animation_btn[1].className += " animation1_btn";
            </script>
            <?php else: ?>
            <script type='text/javascript'>
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[0].className += " animation1_btn";
            </script>
            <?php endif; ?>
        <?php endif;?>
    
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>    
<?php get_footer(); ?>
