<?php
    $picture = get_field('picture');
    $title =  get_field('prof_class'); $name = get_field('name');
    $edu = get_field('h_edu'); $exp = get_field('academic_expertise'); $link = ""; $CV = "";
?>
<div class="member_card">
    <div class="member_picture">
        <?php echo wp_get_attachment_image( $picture, 'member_picture'); ?>
    </div>
    <?php if ($locale == "zh_TW"): ?>
    <a class="name" href="<?php the_permalink(); ?>"><?= $name; ?><span class="title"><?= $title; ?></span></a>
    <?php else: ?>
        <a class="en_name_link" href="<?php the_permalink(); ?>">
            <span class="en_title"><?= $title; ?></span>
            <span class="en_name"><?= $name; ?></span>
        </a>
    <?php endif; ?>

    <div class="education <?php if($locale == "en_US"){echo "en-education";}?>">
        <p><?php if($locale == "zh_TW"){echo "學歷"; }else{echo "Education";}?>&nbsp;|</p>
        <p><?php echo $edu;?></p>
    </div>
    <div class="expertise <?php if($locale == "en_US"){echo "en-expertise";}?>">
        <p><?php if($locale == "zh_TW"){echo "專長領域"; }else{echo "Professional Specialty";} ?>&nbsp;|</p>
        <p><?php echo $exp;?></p>
    </div>
</div>