<?php
    $year = get_field('year');
    $name = get_field('name');
    $degree = get_field('degree');
    $advisor = get_field('advisors');
    $paper = get_field('paper');
?>
<div class="row_paper">
    <span class="year _font22"><?php echo $year;?></span>
    <span class="name _font22"><?php echo $name;?></span>
    <span class="degree _font22"><?php echo $degree;?></span>
    <span class="advisor _font22"><?php echo $advisor;?></span>
    <span class="paper _font22"><?php echo $paper;?></span>
</div>