<?php
    $year = get_field('year');
    $name = get_field('name');
    $degree = get_field('degree');
    $advisor = get_field('advisors');
    $paper = get_field('paper');
?>
<div class="row_paper">
    <span class="year"><?php echo $year;?></span>
    <span class="name"><?php echo $name;?></span>
    <span class="degree"><?php echo $degree;?></span>
    <span class="advisor"><?php echo $advisor;?></span>
    <span class="paper"><?php echo $paper;?></span>
</div>