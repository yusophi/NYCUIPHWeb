<?php
/*
 * Template Name: current_student
 */
?>

<?php get_header(); ?>
<div class="page_Student">
    <div class="banner student_banner">
        <span class="page_name" >學生園地<br></span>
        <span class="page_name" id="eg">Current Student</span>
        <div class="circle"></div>
    </div>
    <div class="subpage_buttons">
        <a class="subpage_btn" id="btn-application" href="<?php echo site_url(); ?>/applications/"><p class="_font20">各類申請</p></a>
        <a class="subpage_btn" id="btn-scholar" href="<?php echo site_url(); ?>/scholarships/"><p class="_font20">獎助學金</p></a>
        <a class="subpage_btn" id="btn-honor" href="<?php echo site_url(); ?>/honor/"><p class="_font20">榮譽榜單</p></a>
        <a class="subpage_btn" id="btn-papers" href="<?php echo site_url(); ?>/past_papers/"><p class="_font20">歷屆論文</p></a>
    </div>
    <?php
        global $rand; 
        if(is_page('applications')):?>
            <?php get_template_part('template-parts/student','applications');?>
            <script type='text/javascript' nonce="<?php echo $rand; ?>">
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[1].className += " animation1_btn";
                animation_btn[2].className += " animation1_btn";
                animation_btn[3].className += " animation1_btn";
            </script>
        <?php elseif(is_page('scholarships')):?>
            <?php get_template_part('template-parts/student','scholarships');?>
            <script type='text/javascript' nonce="<?php echo $rand; ?>">
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[0].className += " animation1_btn";
                animation_btn[2].className += " animation1_btn";
                animation_btn[3].className += " animation1_btn";
            </script>
        <?php elseif(is_page('honor')):?>
            <?php get_template_part('template-parts/student','honor');?>
            <script type='text/javascript' nonce="<?php echo $rand; ?>">
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[0].className += " animation1_btn";
                animation_btn[1].className += " animation1_btn";
                animation_btn[3].className += " animation1_btn";
            </script>
        <?php elseif(is_page('past_papers')):?>
            <?php get_template_part('template-parts/student','past_papers');?>
            <script type='text/javascript' nonce="<?php echo $rand; ?>">
                var animation_btn = document.getElementsByClassName("subpage_btn");
                animation_btn[0].className += " animation1_btn";
                animation_btn[1].className += " animation1_btn";
                animation_btn[2].className += " animation1_btn";
            </script>
        <?php endif;?>
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>
<?php get_footer(); ?>
