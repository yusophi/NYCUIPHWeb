<?php
/*
 * Template Name: dep-ph
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>
<div class="dep_ph_page">
    <div class="dep_info">
        <div class="dep_title">
            <?php if($locale == "zh_TW"): ?>
            <div>公共衛生學科</div>
            <div class="dep_en_title">Department of Public Health</div>
            <?php else: ?>
            <div>Department of Public Health</div>
            <?php endif; ?>
        </div>
        <div class="dep_circle"></div>
    </div>
    <div class="dep_hr"></div>
    <div class="dep_title top_margined_s"><?php if($locale == "zh_TW"){echo "簡介";}else{echo "Introduction";}?><br><br></div>
    <div class="dep_passage"><?php the_field('dep_ph_intro'); ?></div>
    <div class="dep_title top_margined"><?php if($locale == "zh_TW"){echo "課程設計";}else{echo "Content of Course";}?><br><br></div>
    <div class="dep_table">
        <ul class="table">
            <?php if($locale == "zh_TW"): ?>
            <li class="thead">
                <ol class="tr">
                    <li class="align-left">學系</li>
                    <li class="align-left">課程名稱</li>
                    <li class="align-center">學分數</li>
                    <li class="align-center">選別</li>
                </ol>
            </li>
            <?php else: ?>
            <li class="thead">
                <ol class="tr">
                    <li class="align-left">Department</li>
                    <li class="align-left">Course title</li>
                    <li class="align-center">Credit</li>
                    <li class="align-center">Compulsory/ Elective</li>
                </ol>
            </li>
            <?php endif; ?>
            <li class="tbody">
        <?php $curriculum = get_field('curriculum')?>
        <?php if($curriculum) :?>
            <?php 
                $count = 1;
                while($count <= 20): ?>
                    <?php 
                        $name = "course_group_" . $count;
                        $group_data = $curriculum[$name];
                        $dep = $group_data['dep'];
                        $course_name = $group_data['course_name'];
                        $credit = $group_data['credit'];
                        $type = $group_data['type'];
                    ?>
                    <?php if($course_name): ?>
                        <ol class="tr">
                            <li class="align-left"><?php echo $dep; ?></li>
                            <li class="align-left"><?php echo $course_name; ?></li>
                            <li class="align-center"><?php echo $credit; ?></li>
                            <li class="align-center"><?php echo $type; ?></li>
                        </ol>
                    <?php endif;
                        $count = $count + 1;
                    ?>
                <?php endwhile;?>
        <?php endif;?>
            </li>
        </ul>
    </div>
</div>
<?php get_template_part('template-parts/backtoTOP'); ?>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>    
<?php get_footer(); ?>