<?php
/*
 * Template Name: bios
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale(); ?>
<div class="pro_page">
    <div class="upper_instruction">
        <div id="title">
            <?php if ($locale == "zh_TW") : ?>
                <div id="ch_title">生物統計<br>與資料科學組 </div>
                <div id="en_title">Division of Biostatistics <br>and Data Science</div>
            <?php else : ?>
                <div id="en_title">Division of Biostatistics <br>and Data Science</div>
            <?php endif; ?>
        </div>
        <div id="division_circle">
            <div><img class="black_circle" src="<?php bloginfo('template_url') ?>/images/page_pro_division/dec_dot.webp"></div>
        </div>
        <div id="instruction">
            <div class="instru_img_container"><img id="instru_img" src="<?php bloginfo('template_url') ?>/images/page_pro_division/bios_key_vision.png"></div>
            <div id="instru_content"><?php the_field('division_intro'); ?></div>
        </div>
    </div>
    <div id="divider"></div>
    <div id="divider_components">
        <div class="small_black_circle"></div>
        <div class="down_arrow">
            <img src="<?php bloginfo('template_url') ?>/images/page_pro_division/down_arrow.webp">
        </div>
        <div class="section_indicator">s0</div>
    </div>
    <div class="pro_buttons">
        <div id="pro_classes_btn" class="pro_btn animation1_btn checked">領域課程</div>
        <div id="pro_teachers_btn" class="pro_btn animation1_btn">領域師資</div>
        <div id="pro_thoughts_btn" class="pro_btn animation1_btn">校友的話</div>
    </div>
    <div id="changing_content"></div>
    <?php get_template_part('template-parts/backtoTOP'); ?>
</div>

<div class="data invisible">
    <div id="classes_data">
        <div class="ls_segment changing_animation">
            <div id="required">
                <div class="course-table" id="master">
                    <div class="std_cls">碩士班</div>
                    <img class="bubble" src="<?php bloginfo('template_url') ?>/images/page_pro_division/bubble_right.png">
                    <div class="content-container">
                        <div class="ls_logo">必修<br>課程</div>
                        <div class="ls_content_container">
                            <div class="ls_content">
                                <?php the_field('master_required'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-table" id="phd">
                    <div class="std_cls">博士班</div>
                    <img class="bubble" src="<?php bloginfo('template_url') ?>/images/page_pro_division/bubble_left.png">
                    <div class="content-container">
                        <div class="ls_logo">必修<br>課程</div>
                        <div class="ls_content_container">
                            <div class="ls_content">
                                <?php the_field('phd_required'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="selected">
                <div class="course-table">
                    <?php $elective1 = get_field('elective_1'); ?>
                    <div class="content-container">
                        <div class="ls_logo">選修<br>課程</div>
                        <div class="ls_content_container">
                            <div class="ls_title"><?php echo $elective1['class_title']; ?></div>
                            <div class="ls_lr_content bios_component">
                                <div class="ls_content">
                                    <?php echo $elective1['course_name']; ?>
                                </div>
                            </div>
                            <div class="ls_hr"></div>
                            <div class="ls_remark"><?php echo $elective1['note']; ?></div>
                            <div class="ls_hr btm_margined"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ls_instru">
                <div class="info_img_container"><img src="<?php bloginfo('template_url') ?>/images/page_pro_division/info.png"></div>
                <div class="ls_instru_text">
                    <?php the_field('note'); ?>
                </div>
            </div>
        </div>
    </div>
    <div id="teachers_data">
        <div class="staff_block">
            <?php
            $cat_name = '3-biostatistic';
            if ($locale == "en_US") {
                $cat_name = '3-biostatisticsanddatascience';
            }

            $args = array(
                'post_type' => 'Staff',
                'category_name' => $cat_name,
                'post_status' => 'publish',
                'meta_query' => array(
                    'relation' => 'AND',
                    'admin' => array(
                        'key' => 'admin_for_sorting',
                        'compare' => 'EXISTS'
                    ),
                    'prof' => array(
                        'key' => 'prof_class_for_sorting',
                        'compare' => 'EXISTS'
                    ),
                    'prof_cat' => array(
                        'key' => 'prof_cat_for_sorting',
                        'compare' => 'EXISTS'
                    )
                ),
                'orderby' => array(
                    'admin' => 'ASC',
                    'prof_cat' => 'ASC',
                    'prof' => 'ASC'
                ),
                'posts_per_page' => -1
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
                <?php
                while ($the_query->have_posts()) :
                    $the_query->the_post(); ?>
                    <?php get_template_part('template-parts/post_member_card'); ?>
                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
    <div id="thoughts_data">
        <div class="tgh_segment changing_animation">
            <?php
            $alumni_data = get_field('alumni');
            $count = 1;
            while ($count < 4) :
            ?>
                <?php
                $name = "group_" . $count;
                $group_data = $alumni_data[$name];
                if ($group_data) :
                ?>
                    <div class="tgh_group">
                        <div class="tgh_title"><?php echo $group_data['title']; ?></div>
                        <div class="tgh_passage">
                            <?php echo $group_data['content']; ?>
                        </div>
                    </div>
                    <?php $count = $count + 1; ?>
                <?php else : ?>
                    <?php break; ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <div class="tgh_title margin_top">近五年統資組碩士班校友流向</div>
            <div class="img_container layerd">
                <?php echo wp_get_attachment_image(get_field('alumni_jobs')); ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/pro_division.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>
<?php get_footer(); ?>