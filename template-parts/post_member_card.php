<?php
    $picture = get_field('picture');
    $title =  get_field('prof_class'); $name = get_field('name');
    $edu = get_field('h_edu'); $exp = get_field('academic_expertise'); $link = ""; $CV = "";
?>
<div class="member_card">
    <div class="member_picture">
        <?php echo wp_get_attachment_image( $picture, 'member_picture'); ?>
    </div>

    <?php //if( $link ): ?>
        <!--<a class="name" href="<?php //echo esc_url( $link ); ?>" target="_blank"><?php //echo $name; ?><span class="title"><?php //echo $title; ?></span></a>
    <?php //elseif( $CV ): ?>
        <a class="name" href="<?php //echo esc_url( $CV ); ?>" target="_blank"><?php //echo $name; ?><span class="title"><?php //echo $title; ?></span></a>-->
    <?php //else: ?>
    <a class="name" href="<?php the_permalink(); ?>"><?= $name; ?><span class="title"><?= $title; ?></span></a>
    <?php //endif; ?>

    <div class="education">
        <p>學歷｜</p>
        <p><?php echo $edu;?></p>
    </div>
    <div class="expertise">
        <p>專長領域｜</p>
        <p><?php echo $exp;?></p>
    </div>
</div>