<?php $locale = get_locale();?>
<div class="degree_regulation">
    <div class="regulation_block" id="master_regulation">
        <div class="degree_block_title">
            <?php if($locale == "zh_TW"): ?>    
            <span class="_font40">碩士班</span>
            <?php else: ?>
            <span class="en_title _font40">Master Program</span>
            <?php endif; ?>
            <a class="more_btn" onclick="showing_more('regu_block1','regulation_rows')">
                <img  class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <?php if($locale == "zh_TW"): ?>    
                    <span class="more_btn_text _font18">展開</span>
                    <?php else: ?>
                    <span class="more_btn_text _font18">mores</span>
                    <?php endif; ?>
                </div>  
            </a>
        </div>
        <div class="item_titles">
            <?php if($locale == "zh_TW"): ?>    
            <span>學年</span>
            <span class="item_title1">修業辦法與要則</span>
            <span class="item_title2">課程細目</span>
            <?php else: ?>
            <span>Year</span>
            <span class="item_title2">Courses list</span>
            <?php endif; ?>
        </div>
        <div class="whole_regulation_files" id="regu_block1">
            <?php $master_regulation = get_field('master_regulation');?>
            <?php $more_master_regulation = get_field('more_master_regulation');?>
            <?php 
                //print(count($master_regulation));
                $key_value_pair = [];
                if($master_regulation){
                    for ($x = 0; $x < count($master_regulation) - 1; $x++){
                        $name = "year_group_" . ($x+1);
                        $year = $master_regulation[$name]['year'];
                        if($year != null){
                            $key_value_pair[$name] = $year;
                        }
                    }
                }
                if($more_master_regulation){
                    for ($x = 0; $x < count($more_master_regulation) - 1; $x++){
                        $name = "year_group_" . ($x+1);
                        $year = $master_regulation[$name]['year'];
                        if($year != null){
                            $key_value_pair[$name] = $year;
                        }
                    }
                }
                /*foreach($key_value_pair as $y => $y_value){
                    echo "Key: " . $y . ", Value: " . $y_value;
                    echo "<br>";
                }*/
                arsort($key_value_pair);
                /*foreach($key_value_pair as $y => $y_value){
                    //echo "Key: " . $y . ", Value: " . $y_value;
                    //echo "<br>";
                    $group_data = $master_regulation[$y];
                    $year = $group_data['year'];
                    echo $year;
                    echo "<br>";
                }*/
            ?>
            <?php foreach($key_value_pair as $group_name => $year_value): ?>
                <?php $group_data = $master_regulation[$group_name];
                    $year = $group_data['year'];?>
                    <div class="regulation_rows">
                        <?php if($locale == "zh_TW"): ?>    
                        <span class="year _font20"><?php echo $group_data['year']. "學年度";?></span>
                        <div class="item1">
                            <a class="link_block" href="<?php echo esc_url($group_data['program_regulation']);?>" target="_blank">
                            <span class="file_title">修業辦法&nbsp;</span>
                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                            </a>
                            <a class="link_block" href="<?php echo esc_url($group_data['program_rules']);?>" target="_blank">
                                <span class="file_title">修業要則&nbsp;</span>
                                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                            </a>
                        </div>
                        <div class="item2">
                            <a class="link_block" href="<?php echo esc_url($group_data['course_rules']);?>" target="_blank">
                                <span class="file_title">修課規定&nbsp;</span>
                                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                            </a>
                            <a class="link_block" href="<?php echo esc_url($group_data['mandatory_course']);?>" target="_blank">
                                <span class="file_title">所必選課程（核心三選二）</span>
                                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                            </a>
                            <a class="link_block" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                                <span class="file_title">領域必選課程&nbsp;</span>
                                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                            </a>
                        </div>
                        <?php else: ?>
                        <span class="year _font20"><?php echo $group_data['year'];?></span>
                        <div class="item2">
                            <a class="link_block" href="<?php echo esc_url($group_data['course_rules']);?>" target="_blank">
                                <span class="file_title">Regulations for Course Selection&nbsp;</span>
                                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                            </a>
                            <a class="link_block" href="<?php echo esc_url($group_data['mandatory_course']);?>" target="_blank">
                                <span class="file_title">Compulsory/Required&nbsp;</span>
                                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                            </a>
                            <a class="link_block" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                                <span class="file_title">Division for compulsory/required&nbsp;</span>
                                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
            <?php endforeach; ?>
        </div>
    </div> 
    <div class="regulation_block">
        <div class="degree_block_title">
            <?php if($locale == "zh_TW"): ?>    
            <span class="_font40">博士班</span>
            <?php else: ?>
            <span class="en_title _font40">Ph.D. Program</span>
            <?php endif; ?>
            <a class="more_btn" onclick="showing_more('regu_block2','regulation_rows')">
                <img  class="more_icon" id="more_white"src="<?php bloginfo('template_url') ?>/images/icon/more_white.svg">
                <div class="more_btn_hover">
                    <img  class="more_icon" id="more_blue" src="<?php bloginfo('template_url') ?>/images/icon/more_blue.svg">
                    <?php if($locale == "zh_TW"): ?>    
                    <span class="more_btn_text _font18">展開</span>
                    <?php else: ?>
                    <span class="more_btn_text _font18">mores</span>
                    <?php endif; ?>
                </div>  
            </a>
        </div>
        <div class="item_titles _font18">
            <?php if($locale == "zh_TW"): ?>    
            <span>學年</span>
            <span class="item_title1">修業辦法與要則</span>
            <span class="item_title2">課程細目</span>
            <?php else: ?>
            <span>Year</span>
            <span class="item_title2">Courses list</span>
            <?php endif; ?>
        </div>
        <div class="whole_regulation_files" id="regu_block2">
            <?php $PhD_regulation = get_field('PhD_regulation');
                $more_PhD_regulation = get_field('more_PhD_regulation');  ?>
            <?php 
                //print(count($master_regulation));
                $key_value_pair = [];
                if($PhD_regulation){
                    for ($x = 0; $x < count($PhD_regulation) - 1; $x++){
                        $name = "year_group_" . ($x+1);
                        $year = $master_regulation[$name]['year'];
                        if($year != null){
                            $key_value_pair[$name] = $year;
                        }
                    }
                }
                if($more_PhD_regulation){
                    for ($x = 0; $x < count($more_PhD_regulation) - 1; $x++){
                        $name = "year_group_" . ($x+1);
                        $year = $master_regulation[$name]['year'];
                        if($year != null){
                            $key_value_pair[$name] = $year;
                        }
                    }
                }
                arsort($key_value_pair);
            ?>
            <?php foreach($key_value_pair as $group_name => $year_value): ?>
                <?php $group_data = $master_regulation[$group_name]; 
                    $year = $group_data['year']; ?>
                <div class="regulation_rows">
                    <?php if($locale == "zh_TW"): ?>    
                    <span class="year _font20"><?php echo $group_data['year']. "學年度";?></span>
                    <div class="item1">
                        <a class="link_block" href="<?php echo esc_url($group_data['program_regulation']);?>" target="_blank">
                            <span class="file_title _font18">修業辦法&nbsp;</span>
                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                        </a>
                        <a class="link_block" href="<?php echo esc_url($group_data['program_rules']);?>" target="_blank">
                            <span class="file_title _font18">修業要則&nbsp;</span>
                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                        </a>
                    </div>
                    <div class="item2">
                        <a class="link_block" href="<?php echo esc_url($group_data['course_rules']);?>" target="_blank">
                            <span class="file_title _font18">修課規定&nbsp;</span>
                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                        </a>
                        <a class="link_block" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                            <span class="file_title _font18">領域必選課程&nbsp;</span>
                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                        </a>
                    </div>
                    <?php else: ?>
                    <span class="year _font20"><?php echo $group_data['year'];?></span>
                    <div class="item2">
                        <a class="link_block" href="<?php echo esc_url($group_data['course_rules']);?>" target="_blank">
                            <span class="file_title _font18">Regulations for Course Selection&nbsp;</span>
                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                        </a>
                        <a class="link_block" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                            <span class="file_title _font18">Division for compulsory/required&nbsp;</span>
                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div> 
    <div class="regulation_block" id="others_regu">
        <?php if($locale == "zh_TW"): ?>    
        <div class="_font40">其他</div>
        <?php else: ?>
        <span class="en_title _font40">Others</span>
        <?php endif; ?>
        <div class="others_regu_rows">
            <a class="link_block" href="<?php echo esc_url(the_field('phd_program_regu'));?>" target="_blank">
                <span class="file_title"><?php if($locale == "zh_TW"){echo "逕修讀博士學位甄選辦法";}else{echo "Regulations for the Selection of Master's Students for Doctoral Degrees";}?>&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
            <a class="link_block" href="<?php echo esc_url(the_field('pre_master_program_regu'));?>" target="_blank">
                <span class="file_title"><?php if($locale == "zh_TW"){echo "碩士班預備研究生甄選規定";}else{echo "Regulations for the Selected Candidates of the Master's Program";}?>&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
            <a class="link_block" href="<?php echo esc_url(the_field('transfer_ragu'));?>" target="_blank">
                <span class="file_title"><?php if($locale == "zh_TW"){echo "博士班研究生申請轉入公共衛生研究所辦法";}else{echo "Regulations for Transfer of Doctoral Students from other institute to IPH";}?>&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
        </div>
    </div>
</div>
<?php global $rand;?>
<script type='text/javascript' nonce="<?php echo $rand; ?>">
    const regu1_whole_rows = document.getElementById("regu_block1").getElementsByClassName("regulation_rows");
    const regu2_whole_rows = document.getElementById("regu_block2").getElementsByClassName("regulation_rows");

    //console.log(regu_row_mst.length);
    if(regu1_whole_rows.length > 0){
        for(var i = 0; i < 3; i++){
            regu1_whole_rows[i].className += " shown";   
        }
    }
    if(regu2_whole_rows.length > 0){
        for(var i = 0; i < 3; i++){
            regu2_whole_rows[i].className += " shown";   
        }
    }
</script>