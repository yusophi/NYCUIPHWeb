<div class="student_honor">
    <div class="honor_block">
        <div class="honor_block_title">
            <span class="_font40">發表獲獎</span>
            <a class="more_btn web-button" onclick="showing_more('honor_block1','honor_rows')">
                <div id="more_web_ver">
                    <img  class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                    <div class="more_btn_hover">
                        <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                        <span class="more_btn_text _font18">展開</span>
                    </div>  
                </div>
                <div id="more_mobile_ver">
                    <img  class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                    <div class="more_btn_hover">
                    </div>  
                </div>
            </a>
            <a class="mobile-button">
                <input type="checkbox" id="switch" onclick="showing_more('honor_block1','honor_rows')"/>
                <label for="switch"></label>    
            </a>
        </div>
        <div class="item_titles">
            <span class="name_col">姓名</span>
            <span>獎項</span>
        </div>
        <div class="whole_honor_table" id="honor_block1">
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
                            <div class="honor_rows">
                                <span class="name _font22"><?php echo $student_name;?></span>
                                <span class="honor_title _font22"><?php echo $honor_title;?></span>
                            </div>
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
                            <div class="honor_rows">
                                <span class="name _font22"><?php echo $student_name;?></span>
                                <span class="honor_title _font22"><?php echo $honor_title;?></span>
                            </div>
                        <?php $count =  $count + 1;?>
                        <?php else: break;?>
                        <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="honor_block">
        <div class="honor_block_title">
            <span class="_font40">會議獎助</span>
            <a class="more_btn web-button" onclick="showing_more('honor_block2','honor_rows')">
                <img  class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <span class="more_btn_text _font18">展開</span>
                </div>  
            </a>
            <a class="mobile-button">
                <input type="checkbox" id="switch" onclick="showing_more('honor_block2','honor_rows')"/>
                <label for="switch"></label>    
            </a>
        </div>
        <div class="item_titles _font18">
            <span class="name_col">姓名</span>
            <span>獎項</span>
        </div>
        <div class="whole_honor_table" id="honor_block2">
            <?php $honor1 = get_field('honor_content2');?>
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
                            <div class="honor_rows">
                                <span class="name _font22"><?php echo $student_name;?></span>
                                <span class="honor_title _font22"><?php echo $honor_title;?></span>
                            </div>
                        <?php endif; $count =  $count + 1;?>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="honor_block">
        <div class="honor_block_title">
            <span class="_font40">公費留學</span>
            <a class="more_btn web-button" onclick="showing_more('honor_block3','honor_rows')">
                <img  class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <span class="more_btn_text _font18">展開</span>
                </div>  
            </a>
            <a class="mobile-button">
                <input type="checkbox" id="switch" onclick="showing_more('honor_block3','honor_rows')"/>
                <label for="switch"></label>    
            </a>
        </div>
        <div class="item_titles _font18">
            <span class="name_col">姓名</span>
            <span>獎項</span>
        </div>
        <div class="whole_honor_table" id="honor_block3">
            <?php $honor1 = get_field('honor_content3');?>
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
                            <div class="honor_rows">
                                <span class="name _font22"><?php echo $student_name;?></span>
                                <span class="honor_title _font22"><?php echo $honor_title;?></span>
                            </div>
                        <?php endif; $count =  $count + 1;?>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="honor_block">
        <div class="honor_block_title">
            <span class="_font40">公職考試</span>
            <a class="more_btn web-button" onclick="showing_more('honor_block4','honor_rows')">
                <img  class="more_icon web-button" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <span class="more_btn_text _font18">展開</span>
                </div>  
            </a>
            <a class="mobile-button">
                <input type="checkbox" id="switch" onclick="showing_more('honor_block4','honor_rows')"/>
                <label for="switch"></label>    
            </a>
        </div>
        <div class="item_titles _font18">
            <span class="name_col">姓名</span>
            <span>獎項</span>
        </div>
        <div class="whole_honor_table" id="honor_block4">
            <?php $honor1 = get_field('honor_content4');?>
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
                            <div class="honor_rows">
                                <span class="name _font22"><?php echo $student_name;?></span>
                                <span class="honor_title _font22"><?php echo $honor_title;?></span>
                            </div>
                        <?php endif; $count =  $count + 1;?>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="honor_block">
        <div class="honor_block_title">
            <span class="_font40">其他</span>
            <a class="more_btn web-button" onclick="showing_more('honor_block5','honor_rows')">
                <img  class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <span class="more_btn_text _font18">展開</span>
                </div>  
            </a>
            <a class="mobile-button">
                <input type="checkbox" id="switch" onclick="showing_more('honor_block5','honor_rows')"/>
                <label for="switch"></label>    
            </a>
        </div>
        <div class="item_titles _font18">
            <span class="name_col">姓名</span>
            <span>獎項</span>
        </div>
        <div class="whole_honor_table" id="honor_block5">
            <?php $honor1 = get_field('honor_content5');?>
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
                            <div class="honor_rows">
                                <span class="name _font22"><?php echo $student_name;?></span>
                                <span class="honor_title _font22"><?php echo $honor_title;?></span>
                            </div>
                        <?php endif; $count =  $count + 1;?>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php global $rand; ?>
<script type='text/javascript' nonce="<?php echo $rand; ?>">
    const honor_blocks = document.getElementsByClassName("whole_honor_table");

    for (var i = 0; i < honor_blocks.length; i++)
    {
        var honor_rows = honor_blocks[i].getElementsByClassName("honor_rows");
        var honor_rows_len = honor_rows.length;

        //console.log(honor_rows);
        if (honor_rows_len > 0){
                if(honor_rows_len - 3 >= 0){
                for(var j = 0; j < 3; j++){
                    honor_rows[j].className += " shown";   
                }
            }
            else{
                for(var j = 0; j < honor_rows_len; j++){
                    honor_rows[j].className += " shown";   
                }
            }
        }
    }
    //const regu_row_mst = document.getElementsByClassName("ms_field");
    //const regu_row_phd = document.getElementsByClassName("phd_field");
    /*const h1_whole_rows = document.getElementById("honor_block1").getElementsByClassName("honor_rows");
    const h2_whole_rows = document.getElementById("honor_block2").getElementsByClassName("honor_rows");
    const h3_whole_rows = document.getElementById("honor_block3").getElementsByClassName("honor_rows");
    const h4_whole_rows = document.getElementById("honor_block4").getElementsByClassName("honor_rows");
    const h5_whole_rows = document.getElementById("honor_block5").getElementsByClassName("honor_rows");
    */
    
    //console.log(regu_row_mst.length);
    //var h1_rows_len = h1_whole_rows.length;
    //var h2_rows_len = h2_whole_rows.length;

    /*if( h1_whole_rows.length > 0){
        for(var i = 0; i < 3; i++){
            h1_whole_rows[i].className += " shown";   
        }
    }*/

    /*if(h1_rows_len - 3 >= 0){
        for(var i = 0; i < 3; i++){
            h1_whole_rows[i].className += " shown";   
        }
    }
    else{
        for(var i = 0; i < h1_rows_len; i++){
            h1_whole_rows[i].className += " shown";   
        }
    }*/
/*
    if( h2_whole_rows.length > 0){
        for(var i = 0; i < 3; i++){
            h2_whole_rows[i].className += " shown";   
        }
    }*//*
    if(h2_rows_len - 3 >= 0){
        for(var i = 0; i < 3; i++){
            h2_whole_rows[i].className += " shown";   
        }
    }
    else{
        for(var i = 0; i < h2_rows_len; i++){
            h2_whole_rows[i].className += " shown";   
        }
    }
    if( h3_whole_rows.length > 0){
        for(var i = 0; i < 3; i++){
            h3_whole_rows[i].className += " shown";   
        }
    }
    if( h4_whole_rows.length > 0){
        for(var i = 0; i < 3; i++){
            h4_whole_rows[i].className += " shown";   
        }
    }
    if( h5_whole_rows.length > 0){
        for(var i = 0; i < 3; i++){
            h5_whole_rows[i].className += " shown";   
        }
    }*/

</script>