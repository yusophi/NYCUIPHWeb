<?php
    $year = get_field('year');
    $name = get_field('name');
    $degree = get_field('degree');
    $advisor = get_field('advisors');
    $paper = get_field('paper');
?>

<ol class="tr web-tr">
    <li class="align-left tdata-group1"><?php echo $year;?></li>
    <li class="align-left tdata-group2"><?php echo $name;?></li>
    <li class="align-left tdata-group3"><?php echo $degree;?></li>
    <li class="align-left tdata-group4"><?php echo $advisor;?></li>
    <li class="align-left tdata-group5"><?php echo $paper;?></li>
</ol>

<ol class="tr mobile-tr">
    <div class="mobile-tdata-wrapper">
        <li class="align-left tdata-group1"><?php echo $year;?></li>
        <li class="align-left tdata-group2"><?php echo $name;?></li>
        <li class="align-left tdata-group3"><?php echo $degree;?></li>
        <li class="align-left tdata-group4"><?php echo $advisor;?></li>
    </div>
    <div class="mobile-tdata-wrapper">
        <!--<li class="align-left item-5">論文名稱&nbsp;|&nbsp;</li>-->
        <li class="align-left tdata-group5"><?php echo $paper;?></li>
    </div>
</ol>
