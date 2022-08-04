<?php
/*
 * Template Name: law
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>
<div class="pro_page">
    <div class="upper_instruction">
        <div class="black_circle1 black_circle"></div>
        <div class="black_circle2 black_circle"></div>
        <div id="title">
            <?php if($locale == "zh_TW"):?>
            <div id="ch_title">健康政策與法律組</div>
            <div id="en_title">Division of Policy and Law</div>
            <?php else: ?>
            <div id="en_title">Division of Policy and Law</div>
            <?php endif; ?>
        </div>
        <div id="instruction">
            <div class="instru_img_container"><img id="instru_img" src="<?php bloginfo('template_url') ?>/images/page_pro_division/law_key_vision.png"></div>
            <div id="instru_content"><?php the_field('division_intro');?></div>
        </div>
    </div>
    <div id="divider"></div>
    <div id="divider_components">
        <div class="small_black_circle"></div>
        <div class="down_arrow"></div>
        <div class="section_indicator">s0</div>
    </div>
    <div class="pro_buttons">
        <div id="pro_classes_btn" class="pro_btn animation1_btn checked">領域課程</div>
        <div id="pro_teachers_btn" class="pro_btn animation1_btn">領域師資</div>
        <div id="pro_thoughts_btn" class="pro_btn animation1_btn">校友的話</div>
    </div>
    <div id="changing_content"></div>
    <?php get_template_part( 'template-parts/backtoTOP');?>
</div>

<div class="data invisible">
    <div id="classes_data">
        <div class="ls_segment changing_animation">
            <div class="std_clss">
                <div class="std_cls">碩士班</div>
                <div class="std_cls">博士班</div>
            </div>
            <div class="bubbles">
                <img src="<?php bloginfo('template_url') ?>/images/page_pro_division/bubble_right.png">
                <img src="<?php bloginfo('template_url') ?>/images/page_pro_division/bubble_left.png">
            </div>
            <div class="column_2_ls">
                <div class="ls_logo">必修<br>課程</div>
                <div class="ls_content_container">
                    <div class="ls_content">
                        <?php the_field('master_required'); ?>
                    </div>
                </div>
                <div class="ls_content_container">
                    <div class="ls_content">
                        <?php the_field('phd_required'); ?>
                    </div>
                </div>
            </div>
            <div class="column_2_ls" id="law_required_ls">
            <?php 
                $elective1 = get_field('elective_1');
                $elective2 = get_field('elective_2');?>

                <div class="ls_logo">選修<br>課程</div>
                <div class="ls_content_container">
                    <?php
                        $e1_class1 = $elective1['class_1'];
                        $e2_class2 = $elective1['class_2'];
                        $e3_class3 = $elective1['class_3'];
                    ?>
                    <div class="ls_content electives">
                        <div class="ls_title"><?php echo $e1_class1['class_title']; ?></div>
                        <?php echo $e1_class1['course_name']; ?>
                        <?php if($e1_class1['note']):?>
                            <div class="ls_notes"><?php echo $e1_class1['note']; ?></div>
                        <?php endif; ?>

                        <?php if($e2_class2['note']):?>
                        <div class="ls_title"><?php echo $e2_class2['class_title']; ?></div>
                        <?php echo $e2_class2['course_name']; ?>
                            <div class="ls_notes"><?php echo $e2_class2['note']; ?></div>
                        <?php endif; ?>

                        <div class="ls_title"><?php echo $e3_class3['class_title']; ?></div>
                        <?php echo $e3_class3['course_name']; ?>
                        <?php if($e3_class3['note']):?>
                            <div class="ls_notes btm_margined"><?php echo $e3_class3['note']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="ls_content_container">
                    <?php
                        $e2_class1 = $elective2['class_1'];
                        $e2_class2 = $elective2['class_2'];
                    ?>
                    <div class="ls_content electives btm_padding">
                        <div class="ls_title"><?php echo $e2_class1['class_title']; ?></div>
                        <?php echo $e2_class1['course_name']; ?>
                        <?php if($e2_class1['note']):?>
                            <div class="ls_notes"><?php echo $e2_class1['note']; ?></div>
                        <?php endif; ?>

                        <div class="ls_title"><?php echo $e2_class2['class_title']; ?></div>
                        <?php echo $e2_class2['course_name']; ?>
                        <?php if($e2_class2['note']):?>
                            <div class="ls_notes"><?php echo $e2_class2['note']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="ls_instru">
                <div class="info_img_container"><img src="<?php bloginfo('template_url') ?>/images/page_pro_division/info.png"></div>
                <div class="ls_instru_text">
                    <?php the_field('note');?>   
                </div>
            </div>
        </div>
    </div>
    <div id="teachers_data">
    <?php
        if($locale == "zh_TW"){
            $prof_categories = get_categories(array(
            'parent' => 25, /*27, 25*/
            'orderby' => 'slug',
            'hide_empty' => false,
            'order'   => 'ASC'
            ) );
        }
        else{
            $prof_categories = get_categories(array(
                'parent' => 120, /*114, 120 */
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'ASC'
            ) );
        }
    ?>
        <div class="staff_block">
        <?php foreach($prof_categories as $prof_category) : ?>
            <?php
                if($locale == "zh_TW"){$double_cats = '2-health_policy+' . $prof_category->slug;}
                else{$double_cats = '2-healthpolicyandlaw	+' . $prof_category->slug;}
                
                $args = array(
                        'post_type' => 'Staff',
                        'category_name' => $double_cats,
                        'post_status' => 'publish',
                        'meta_query' => array(
                            'relation' => 'AND',
                            'admin' => array(
                                'key' => 'admin_for_sorting',
                                'compare' => 'EXISTS',
                            ),
                            'prof' => array(
                                'key' => 'prof_class_for_sorting',
                                'compare' => 'EXISTS',
                            ), 
                        ),
                        'orderby' => array( 
                            'admin' => 'ASC',
                            'prof' => 'ASC',
                        ),
                        'posts_per_page' => -1);
                $the_query = new WP_Query($args);
                if($the_query->have_posts()):
            ?>
            <?php 
                while ($the_query->have_posts()) :
                        $the_query->the_post(); ?>
                    <?php get_template_part('template-parts/post_member_card'); ?>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata();
            $double_cats = '2-health_policy+'; ?>
        <?php endforeach; ?>
        </div>
    </div>
    <div id="thoughts_data">
        <div class="tgh_segment changing_animation">
            <?php
                $alumni_data = get_field('alumni');
                $count = 1;
                while($count < 4 ):
            ?>
                <?php
                    $name = "group_" . $count; 
                    $group_data = $alumni_data[$name];
                    if($group_data):
                ?>
                    <div class="tgh_group">
                        <div class="tgh_title"><?php echo $group_data['title']; ?></div>
                        <div class="tgh_passage">
                            <?php echo $group_data['content']; ?>
                        </div>
                    </div>
                <?php $count = $count + 1; ?>
                <?php else: ?>
                    <?php break;?>
                <?php endif; ?>
            <?php endwhile; ?>
            <div class="tgh_title margin_top">
                近五年政法組碩士班校友流向
            </div>
            <div class="img_container layerd">
                <?php echo wp_get_attachment_image( get_field('alumni_jobs')); ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/pro_division.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>

<?php get_footer(); ?>