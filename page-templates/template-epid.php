<?php
/*
 * Template Name: epid
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>
<div class="pro_page">
    <div class="upper_instruction">
        <div id="division_circle">
            <div class="black_circle1 black_circle"></div>
            <div class="black_circle2 black_circle"></div>
        </div>
        <div id="title">
            <?php if($locale == "zh_TW"):?>
            <div id="ch_title">流行病學組</div>
            <div id="en_title">Division of Epidemiology</div>
            <?php else: ?>
            <div id="en_title">Division of Epidemiology</div>
            <?php endif; ?>
        </div>
        <div id="instruction">
            <div class="instru_img_container"><img id="instru_img" src="<?php bloginfo('template_url') ?>/images/page_pro_division/epid_key_vision.png"></div>
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
            <div class="column_1_ls">
                <?php $elective1 = get_field('elective_1');
                    $elective2 = get_field('elective_2');
                ?>
                <div class="ls_logo">選修<br>課程</div>
                <div class="ls_content_container">
                    <div class="ls_title"><?php echo $elective1['class_title']; ?></div>
                    <div class="ls_lr_content">
                        <div class="ls_content elective_class1">
                            <?php echo $elective1['course_name']; ?>
                        </div>
                    </div>
                    <div class="ls_hr"></div>
                    <div class="ls_title"><?php echo $elective2['class_title']; ?></div>
                    <?php
                        $subclass1 = $elective2['subclass_1'];
                        $subclass2 = $elective2['subclass_2'];
                        $subclass3 = $elective2['subclass_3'];
                        $subclass4 = $elective2['subclass_4'];
                    ?>
                    <div class="ls_lr_content">
                        <div class="ls_content subclass">
                            <span class="ls_sub_title"><?php echo $subclass1['subclass_name']; ?></span>
                            <?php echo $subclass1['course_name']; ?>
                            <span class="ls_sub_title"><?php echo $subclass2['subclass_name']; ?></span>
                            <?php echo $subclass2['course_name']; ?>
                        </div>
                        <div class="ls_content subclass">
                            <span class="ls_sub_title"><?php echo $subclass3['subclass_name']; ?></span>
                            <?php echo $subclass3['course_name']; ?>
                            <span class="ls_sub_title"><?php echo $subclass4['subclass_name']; ?></span>
                            <?php echo $subclass4['course_name']; ?>
                        </div>
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
        <!-- 領域師資code -->
        <?php
            if($locale == "zh_TW"){
                $prof_categories = get_categories(array(
                    'parent' => 25, /*27, 25*/
                    'orderby' => 'slug',
                    'hide_empty' => false,
                    'order'   => 'ASC'
                ) );
            }else{
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
                if($locale == "zh_TW"){$double_cats = '1-epidemiology+' . $prof_category->slug;}
                else{$double_cats = '1-epidemiology-en+' . $prof_category->slug;}
                
                //echo $double_cats;
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
                    'posts_per_page' => -1
                    );
                $the_query = new WP_Query($args);
                if($the_query->have_posts()):
                ?>
                    <?php while ($the_query->have_posts()) :
                            $the_query->the_post(); ?>
                        <?php get_template_part('template-parts/post_member_card'); ?>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); 
                    $double_cats = '1-epidemiology+';
                ?>
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
            <div class="tgh_title margin_top">近五年流病組碩士班校友流向</div>
            <div class="img_container layerd">
                <?php echo wp_get_attachment_image( get_field('alumni_jobs')); ?>
            </div>
        </div>
    </div>
    <?php get_template_part( 'template-parts/backtoTOP');?>
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/pro_division.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>    

<?php get_footer(); ?>