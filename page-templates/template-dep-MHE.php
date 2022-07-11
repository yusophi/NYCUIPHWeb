<?php
/*
 * Template Name: dep-mhe
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>
<div class="dep_ph_page">
    <div class="dep_info">
        <div class="dep_title">
            <?php if($locale == "zh_TW"): ?>
            <div>醫學人文暨教育學科</div>
            <div class="dep_en_title">Department of Medical Humanities and Education</div>
            <?php else: ?>
            <div class="dep_en_title">Department of Medical Humanities and Education</div>
            <?php endif; ?>
        </div>
        <div class="dep_circle"></div>
    </div>
    <div class="dep_hr"></div>
    <div class="dep_title top_margined_s">簡介<br><br></div>
    <div class="dep_passage">
        <?php echo get_field('intro')?>
        <div class="img_container"><img src="<?php echo get_field('intro_image')?>"></div>
    </div>
    <div class="dep_title top_margined">醫學系「醫學人文與社會」課程設計及特色<br><br></div>
    <div class="dep_passage">
        <?php echo get_field('intro_curriculum')?>
    </div>
    <div class="dep_table">
        <div class="table_heads">
            <span>年級</span>
            <span>課程名稱</span>
            <span>學分數</span>
            <span>選別</span>
        </div>
        <div class="table_hr"></div>

        <?php $curriculum = get_field('curriculum')?>
        <?php if($curriculum) :?>
            <?php 
                $count = 1;
                while($count <= 10): ?>
                    <?php 
                        $name = "course_group_" . $count;
                        $group_data = $curriculum[$name];
                        $grade = $group_data['grade'];
                        $course_name = $group_data['course_name'];
                        $credit = $group_data['credit'];
                        $type = $group_data['type'];
                    ?>
                    <?php if($course_name): ?>
                        <div class="table_row">
                            <div><?php echo $grade?></div>
                            <div><?php echo $course_name?></div>
                            <div><?php echo $credit?></div>
                            <div><?php echo $type?></div>
                        </div>
                        <div class="table_hr"></div>
                    <?php endif;
                        $count = $count + 1;
                    ?>
                <?php endwhile;?>
        <?php endif;?>
    </div>
    <div class="dep_passage top_margined_s">
        <?php echo get_field('text_curriculum_0')?>
    </div>
    <div class="dep_title_s">
        <br>
        <?php echo get_field('text_curriculum_1_title')?>
        <br><br>
    </div>
    <div class="dep_passage">
        <?php echo get_field('text_curriculum_1')?>
        <?php if(get_field('image_curriculum_1')):?>
            <div class="img_container"><img src="<?php echo get_field('image_curriculum_1')?>"></div>
        <?php endif;?>
        <?php if(get_field('text_curriculum_1_img_instru')):?>
            <div class="img_instru"><?php echo get_field('text_curriculum_1_img_instru')?></div>
        <?php endif;?>
    </div>
    <div class="dep_title_s top_margined">
        <?php echo get_field('text_curriculum_2_title')?>
        <br><br>
    </div>
    <div class="dep_passage">
        <?php echo get_field('text_curriculum_2')?>
        <?php if(get_field('image_curriculum_2')):?>
            <div class="img_container"><img src="<?php echo get_field('image_curriculum_2')?>"></div>
        <?php endif;?>
        <?php if(get_field('text_curriculum_2_img_instru')):?>
            <div class="img_instru"><?php echo get_field('text_curriculum_2_img_instru')?></div>
        <?php endif;?>
    </div>
    <div class="dep_title_s top_margined">
        <?php echo get_field('text_curriculum_3_title')?>
        <br><br>
    </div>
    <div class="dep_passage">
        <?php echo get_field('text_curriculum_3')?>
        <?php if(get_field('image_curriculum_3')):?>
            <div class="img_container"><img src="<?php echo get_field('image_curriculum_3')?>"></div>
        <?php endif;?>
        <?php if(get_field('text_curriculum_3_img_instru')):?>
            <div class="img_instru"><?php echo get_field('text_curriculum_3_img_instru')?></div>
        <?php endif;?>

        <?php if(get_field('video_img')):?>
            <div class="img_container_s"><img src="<?php echo get_field('video_img')?>"></div>
            <div class="mhe_video_title"><?php echo get_field('video_title')?></div>
            <div class="bt-watchmore animation1_btn">
                <div class="bt-text">watch</div>
                <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
            </div>
        <?php endif;?>
    </div>

    <div class="dep_title top_margined">歷年課表</div>
    <div class="dep_table">
        <div class="table_hr"></div>

        <?php $curriculum_over_years = get_field('curriculum_over_years')?>
        <?php if($curriculum_over_years):?>
            <?php 
                $count = 1;
                while($count <= 10):
                    $name = "year_group_" . $count;
                    $group_data = $curriculum_over_years[$name];
                    $year = $group_data['year'];
                    $file_1 = $group_data['file_1'];
                    $file_2 = $group_data['file_2']; ?>

                    <?php if($year):?>
                        <div class="curri_table_row">
                            <?php if($file_2):?>
                                <a href="<?php echo $file_2?>"><?php echo $year."學年度第二學期大學部課程"?>
                                    &nbsp;&nbsp;
                                    <img src="<?php bloginfo('template_url')?>\images\page_curriculum\icon_download.svg">&emsp;
                                </a>
                            <?php endif?>
                            <?php if($file_1):?>
                                <a href="<?php echo $file_1?>"><?php echo $year."學年度第一學期大學部課程"?>
                                    &nbsp;&nbsp;
                                    <img src="<?php bloginfo('template_url')?>\images\page_curriculum\icon_download.svg">&emsp;
                                </a>
                            <?php endif?>
                        </div>
                        <div class="table_hr"></div>
                    <?php endif; $count = $count + 1;?>

                <?php endwhile;?>
            <?php endif;?>

    </div>
</div>


<?php get_template_part('template-parts/backtoTOP'); ?>
<?php get_footer(); ?>