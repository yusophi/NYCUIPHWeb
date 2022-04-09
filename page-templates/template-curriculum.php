<?php
/*
 * Template Name: curriculum_mapping
 */
?>

<?php get_header(); ?>
<div class="page_Curriculum">
    <div class="banner curriculum_banner">
        <span class="page_name" >課程規劃<br></span>
        <span class="page_name" id="eg">Curriculum Mapping</span>
        <div class="circle"></div>
    </div>
    <div class="subpage_buttons">
        <a class="subpage_btn" id="btn-arch" href="<?php echo site_url(); ?>/course_architecture/"><p class="_font18">修課架構</p></a>
        <a class="subpage_btn" id="btn-degree" href="<?php echo site_url(); ?>/degree_regulation/"><p class="_font18">修業規定</p></a>
        <a class="subpage_btn" id="btn-course" href="<?php echo site_url(); ?>/course_schedule/"><p class="_font18">學期課表</p></a>
    </div>
    <?php
        if(is_page('course_architecture')):?>
            <?php get_template_part('template-parts/curriculum','arch');?>
            <script>
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[1].className += " animation1_btn";
                animation_btn[2].className += " animation1_btn";
            </script>
        <?php elseif(is_page('degree_regulation')):?>
            <?php get_template_part('template-parts/curriculum','degree_regulation');?>
            <script>
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[0].className += " animation1_btn";
                animation_btn[2].className += " animation1_btn";
            </script>
        <?php elseif(is_page('course_schedule')):?>
            <?php get_template_part('template-parts/curriculum','course_schedule');?>
            <script>
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[0].className += " animation1_btn";
                animation_btn[1].className += " animation1_btn";
            </script>
        <?php endif;?>
    
    <?php get_template_part( 'template-parts/backtoTOP');?>    

</div>
<?php get_footer(); ?>
