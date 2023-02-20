<?php $locale = get_locale();?>
<div class="student_honor">
    <div class="honor_block">
        <div class="honor_block_title">
            <span class="_font40">發表獲獎</span>
            <a class="more_btn web-button" onclick="show('honor_block1','tr')">
                <img class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <?php if($locale == "zh_TW"): ?>    
                        <span class="more_btn_text _font18">展開</span>
                    <?php else: ?>
                        <span class="more_btn_text _font18">more</span>
                    <?php endif; ?>
                </div>
            </a>
            <a class="mobile-button">
                <input type="checkbox" id="switch" onclick="show('honor_block1','tr')"/>
                <label for="switch"></label>    
            </a>
        </div>
        <ul class="table">
            <li class="thead fontstyle-thead">
                <ol class="thead-tr">
                    <li class="align-left">姓名</li>
                    <li class="align-left">獎項</li>
                </ol>
            </li>
            <li class="tbody" id="honor_block1">
            <?php $honor1 = get_field('honor_content1');?>
            <?php $more_honor1 = get_field('more_honor_content1');?>

            <?php if($honor1): ?>
                <?php 
                    $count = 1;
                    while($count < 11 ):?>
                        <?php
                            $name = "group_content" . $count; 
                            $group_data = $honor1[$name];
                            $student_name = $group_data['name'];
                            $honor_title = $group_data['honor'];
                        ?>
                        <?php if( $student_name and $honor_title):?>
                            <ol class="tr">
                                <li class="align-left tdata-group1"><?php echo $student_name;?></li>
                                <li class="align-left tdata-group2"><?php echo $honor_title;?></li>
                            </ol>
                            <?php  $count =  $count + 1; ?>
                        <?php else: break;?>
                        <?php endif; ?>
                    <?php endwhile; ?>
            <?php endif; ?>
            <?php if($more_honor1): ?>
                <?php 
                    $count = 11;
                    while($count < 21 ):?>
                        <?php
                            $name = "group_content" . $count; 
                            $group_data = $more_honor1[$name];
                            $student_name = $group_data['name'];
                            $honor_title = $group_data['honor'];
                        ?>
                        <?php if( $student_name and $honor_title):?>
                            <ol class="tr">
                                <li class="align-left tdata-group1"><?php echo $student_name;?></li>
                                <li class="align-left tdata-group2"><?php echo $honor_title;?></li>
                            </ol>
                        <?php $count =  $count + 1;?>
                        <?php else: break;?>
                        <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </li>
        </ul>
    </div>
    <div class="honor_block">
        <div class="honor_block_title">
            <span class="_font40">會議獎助</span>
            <a class="more_btn web-button" onclick="show('honor_block2','tr')">
                <img class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <?php if($locale == "zh_TW"): ?>    
                    <span class="more_btn_text _font18">展開</span>
                    <?php else: ?>
                    <span class="more_btn_text _font18">more</span>
                    <?php endif; ?>
                </div>
            </a>
            <a class="mobile-button">
                <input type="checkbox" id="switch" onclick="show('honor_block2','tr')"/>
                <label for="switch"></label>    
            </a>
        </div>
        <ul class="table">
            <li class="thead fontstyle-thead">
                <ol class="thead-tr">
                    <li class="align-left">姓名</li>
                    <li class="align-left">獎項</li>
                </ol>
            </li>
            <li class="tbody" id="honor_block2">
            <?php $honor = get_field('honor_content2');?>
            <?php $more_honor = get_field('more_honor_content2');?>

            <?php if($honor): ?>
                <?php 
                    $count = 1;
                    while($count < 11 ):?>
                        <?php
                            $name = "group_content" . $count; 
                            $group_data = $honor[$name];
                            $student_name = $group_data['name'];
                            $honor_title = $group_data['honor'];
                        ?>
                        <?php if( $student_name and $honor_title):?>
                            <ol class="tr">
                                <li class="align-left tdata-group1"><?php echo $student_name;?></li>
                                <li class="align-left tdata-group2"><?php echo $honor_title;?></li>
                            </ol>
                            <?php  $count =  $count + 1; ?>
                        <?php else: break;?>
                        <?php endif; ?>
                    <?php endwhile; ?>
            <?php endif; ?>
            <?php if($more_honor): ?>
                <?php 
                    $count = 11;
                    while($count < 21 ):?>
                        <?php
                            $name = "group_content" . $count; 
                            $group_data = $more_honor[$name];
                            $student_name = $group_data['name'];
                            $honor_title = $group_data['honor'];
                        ?>
                        <?php if( $student_name and $honor_title):?>
                            <ol class="tr">
                                <li class="align-left tdata-group1"><?php echo $student_name;?></li>
                                <li class="align-left tdata-group2"><?php echo $honor_title;?></li>
                            </ol>
                        <?php $count =  $count + 1;?>
                        <?php else: break;?>
                        <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </li>
        </ul>
    </div>
    <div class="honor_block">
        <div class="honor_block_title">
            <span class="_font40">公費留學</span>
            <a class="more_btn web-button" onclick="show('honor_block3','tr')">
                <img class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <?php if($locale == "zh_TW"): ?>    
                    <span class="more_btn_text _font18">展開</span>
                    <?php else: ?>
                    <span class="more_btn_text _font18">more</span>
                    <?php endif; ?>
                </div>
            </a>
            <a class="mobile-button">
                <input type="checkbox" id="switch" onclick="show('honor_block3','tr')"/>
                <label for="switch"></label>    
            </a>
        </div>
        <ul class="table">
            <li class="thead fontstyle-thead">
                <ol class="thead-tr">
                    <li class="align-left">姓名</li>
                    <li class="align-left">獎項</li>
                </ol>
            </li>
            <li class="tbody" id="honor_block3">
            <?php $honor = get_field('honor_content3');?>
            <?php $more_honor = get_field('more_honor_content3');?>

            <?php if($honor): ?>
                <?php 
                    $count = 1;
                    while($count < 11 ):?>
                        <?php
                            $name = "group_content" . $count; 
                            $group_data = $honor[$name];
                            $student_name = $group_data['name'];
                            $honor_title = $group_data['honor'];
                        ?>
                        <?php if( $student_name and $honor_title):?>
                            <ol class="tr">
                                <li class="align-left tdata-group1"><?php echo $student_name;?></li>
                                <li class="align-left tdata-group2"><?php echo $honor_title;?></li>
                            </ol>
                            <?php  $count =  $count + 1; ?>
                        <?php else: break;?>
                        <?php endif; ?>
                    <?php endwhile; ?>
            <?php endif; ?>
            <?php if($more_honor): ?>
                <?php 
                    $count = 11;
                    while($count < 21 ):?>
                        <?php
                            $name = "group_content" . $count; 
                            $group_data = $more_honor[$name];
                            $student_name = $group_data['name'];
                            $honor_title = $group_data['honor'];
                        ?>
                        <?php if( $student_name and $honor_title):?>
                            <ol class="tr">
                                <li class="align-left tdata-group1"><?php echo $student_name;?></li>
                                <li class="align-left tdata-group2"><?php echo $honor_title;?></li>
                            </ol>
                        <?php $count =  $count + 1;?>
                        <?php else: break;?>
                        <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </li>
        </ul>
    </div>
    <div class="honor_block">
        <div class="honor_block_title">
            <span class="_font40">公職考試</span>
            <a class="more_btn web-button" onclick="show('honor_block4','tr')">
                <img class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <?php if($locale == "zh_TW"): ?>    
                    <span class="more_btn_text _font18">展開</span>
                    <?php else: ?>
                    <span class="more_btn_text _font18">more</span>
                    <?php endif; ?>
                </div>
            </a>
            <a class="mobile-button">
                <input type="checkbox" id="switch" onclick="show('honor_block4','tr')"/>
                <label for="switch"></label>    
            </a>
        </div>
        <ul class="table">
            <li class="thead fontstyle-thead">
                <ol class="thead-tr">
                    <li class="align-left">姓名</li>
                    <li class="align-left">獎項</li>
                </ol>
            </li>
            <li class="tbody" id="honor_block4">
            <?php $honor = get_field('honor_content4');?>
            <?php $more_honor = get_field('more_honor_content4');?>

            <?php if($honor): ?>
                <?php 
                    $count = 1;
                    while($count < 11 ):?>
                        <?php
                            $name = "group_content" . $count; 
                            $group_data = $honor[$name];
                            $student_name = $group_data['name'];
                            $honor_title = $group_data['honor'];
                        ?>
                        <?php if( $student_name and $honor_title):?>
                            <ol class="tr">
                                <li class="align-left tdata-group1"><?php echo $student_name;?></li>
                                <li class="align-left tdata-group2"><?php echo $honor_title;?></li>
                            </ol>
                            <?php  $count =  $count + 1; ?>
                        <?php else: break;?>
                        <?php endif; ?>
                    <?php endwhile; ?>
            <?php endif; ?>
            <?php if($more_honor): ?>
                <?php 
                    $count = 11;
                    while($count < 21 ):?>
                        <?php
                            $name = "group_content" . $count; 
                            $group_data = $more_honor[$name];
                            $student_name = $group_data['name'];
                            $honor_title = $group_data['honor'];
                        ?>
                        <?php if( $student_name and $honor_title):?>
                            <ol class="tr">
                                <li class="align-left tdata-group1"><?php echo $student_name;?></li>
                                <li class="align-left tdata-group2"><?php echo $honor_title;?></li>
                            </ol>
                        <?php $count =  $count + 1;?>
                        <?php else: break;?>
                        <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </li>
        </ul>
    </div>
    <div class="honor_block">
        <div class="honor_block_title">
            <span class="_font40">其他</span>
            <a class="more_btn web-button" onclick="show('honor_block5','tr')">
                <img class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <?php if($locale == "zh_TW"): ?>    
                    <span class="more_btn_text _font18">展開</span>
                    <?php else: ?>
                    <span class="more_btn_text _font18">more</span>
                    <?php endif; ?>
                </div>
            </a>
            <a class="mobile-button">
                <input type="checkbox" id="switch" onclick="show('honor_block5','tr')"/>
                <label for="switch"></label>    
            </a>
        </div>
        <ul class="table">
            <li class="thead fontstyle-thead">
                <ol class="thead-tr">
                    <li class="align-left">姓名</li>
                    <li class="align-left">獎項</li>
                </ol>
            </li>
            <li class="tbody" id="honor_block5">
            <?php $honor = get_field('honor_content5');?>
            <?php $more_honor = get_field('more_honor_content5');?>

            <?php if($honor): ?>
                <?php 
                    $count = 1;
                    while($count < 11 ):?>
                        <?php
                            $name = "group_content" . $count; 
                            $group_data = $honor[$name];
                            $student_name = $group_data['name'];
                            $honor_title = $group_data['honor'];
                        ?>
                        <?php if( $student_name and $honor_title):?>
                            <ol class="tr">
                                <li class="align-left tdata-group1"><?php echo $student_name;?></li>
                                <li class="align-left tdata-group2"><?php echo $honor_title;?></li>
                            </ol>
                            <?php  $count =  $count + 1; ?>
                        <?php else: break;?>
                        <?php endif; ?>
                    <?php endwhile; ?>
            <?php endif; ?>
            <?php if($more_honor): ?>
                <?php 
                    $count = 11;
                    while($count < 21 ):?>
                        <?php
                            $name = "group_content" . $count; 
                            $group_data = $more_honor[$name];
                            $student_name = $group_data['name'];
                            $honor_title = $group_data['honor'];
                        ?>
                        <?php if( $student_name and $honor_title):?>
                            <ol class="tr">
                                <li class="align-left tdata-group1"><?php echo $student_name;?></li>
                                <li class="align-left tdata-group2"><?php echo $honor_title;?></li>
                            </ol>
                        <?php $count =  $count + 1;?>
                        <?php else: break;?>
                        <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </li>
        </ul>
    </div>
</div>
<?php global $rand; ?>
<script type='text/javascript' nonce="<?php echo $rand; ?>">
    const tbody = document.getElementsByClassName("tbody");
    for (var i = 0; i < tbody.length; i++){
        var table_rows = tbody[i].getElementsByClassName("tr");
        var table_rows_len = table_rows.length;

        if (table_rows_len > 0){
            if(table_rows_len - 3 >= 0){
                for(var j = 0; j < 3; j++){
                    table_rows[j].className += " shown";   
                }
            }
            else{
                for(var j = 0; j < table_rows_len; j++){
                    table_rows[j].className += " shown";   
                }
            }
        }
    }
</script>