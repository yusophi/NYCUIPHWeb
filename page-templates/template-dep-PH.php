<?php
/*
 * Template Name: dep-ph
 */
?>

<?php get_header(); ?>

<div class="dep_ph_page">
    <div class="dep_info">
        <div class="dep_title">
            <div>公共衛生學科</div>
            <div class="dep_en_title">Department of Public Health</div>
        </div>
        <div class="dep_circle"></div>
    </div>
    <div class="dep_hr"></div>
    <div class="dep_title top_margined_s">簡介<br><br></div>
    <div class="dep_passage">
        公共衛生學科之前身為社會醫學科，於民國66年成立，負責全校大學部公共衛生相關課程教學業務。本學科規劃之「公共衛生」領域課程著重分析影響人口健康的因素和社會環境問題，包括新科技、制度、社會變遷相關的健康照護議題，探索醫療人員與社會環境之間的關聯與角色。課程規劃旨在加強醫學生所必須的社會科學訓練，協助醫學生培養勝任臨床醫師所需之，有關照護脈絡（context of care）的知識、技能和認知的能力，培養關懷弱勢及相關的健康照護議題的能力，透過小班教學，擴大選課機會，鼓勵學生參與，強化學生解決問題的能力，符合現代學生需要的人文、倫理與醫德教育。
    </div>
    <div class="dep_title top_margined">課程設計<br><br></div>
    <div class="dep_table">
        <div class="table_heads">
            <span>學系</span>
            <span>課程名稱</span>
            <span>學分數</span>
            <span>選別</span>
        </div>
        <div class="table_hr"></div>

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
                        <div class="table_row">
                            <div><?php echo $dep?></div>
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
</div>


<?php get_template_part('template-parts/backtoTOP'); ?>
<?php get_footer(); ?>