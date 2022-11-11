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
            <span class="en_text">Year</span>
            <span class="item_title2-en en_text">Courses list</span>
            <?php endif; ?>
        </div>
        <div class="whole_regulation_files" id="regu_block1">
            <?php $master_regulation = get_field('master_regulation');?>
            <?php $more_master_regulation = get_field('more_master_regulation');?>
            <?php 
                //print(count($master_regulation));
                $key_value_pair = [];
                if($master_regulation){
                    for ($x = 1; $x < count($master_regulation); $x++){
                        $name = "year_group_" . $x;
                        $year = $master_regulation[$name]['year'];
                        if($year != null){
                            $key_value_pair[$x] = $year;
                        }
                    }
                }
                if($more_master_regulation){
                    for ($x = 11; $x < 11 + count($more_master_regulation); $x++){
                        $name = "year_group_" . $x;
                        $year = $more_master_regulation[$name]['year'];
                        if($year != null){
                            $key_value_pair[$x] = $year;
                        }
                    }
                }
                arsort($key_value_pair);
            ?>
            <?php foreach($key_value_pair as $group_num => $year_value): ?>
                <?php //$group_data = $master_regulation[$group_name];
                    if($group_num < 11){
                        $group_name = "year_group_" . $group_num;
                        $group_data = $master_regulation[$group_name];
                    }else{ 
                        $group_name = "year_group_" . $group_num;
                        $group_data = $more_master_regulation[$group_name]; 
                    }
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
                                <span class="file_title en_text">Regulations for Course Selection&nbsp;</span>
                                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                            </a>
                            <a class="link_block" href="<?php echo esc_url($group_data['mandatory_course']);?>" target="_blank">
                                <span class="file_title en_text">Compulsory/Required&nbsp;</span>
                                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                            </a>
                            <a class="link_block" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                                <span class="file_title en_text">Division for compulsory/required&nbsp;</span>
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
            <span class="en_text">Year</span>
            <span class="item_title2-en en_text">Courses list</span>
            <?php endif; ?>
        </div>
        <div class="whole_regulation_files" id="regu_block2">
            <?php $PhD_regulation = get_field('PhD_regulation');
                $more_PhD_regulation = get_field('more_PhD_regulation');  ?>
            <?php 
                //print(count($master_regulation));
                $key_value_pair = [];
                if($PhD_regulation){
                    for ($x = 1; $x < count($PhD_regulation); $x++){
                        $name = "year_group_" . $x;
                        $year = $PhD_regulation[$name]['year'];
                        if($year != null){
                            $key_value_pair[$x] = $year;
                        }
                    }
                }
                if($more_PhD_regulation){
                    for ($x = 11; $x < 11 + count($more_PhD_regulation); $x++){
                        $name = "year_group_" . $x;
                        $year = $more_PhD_regulation[$name]['year'];
                        if($year != null){
                            $key_value_pair[$x] = $year;
                        }
                    }
                }
                arsort($key_value_pair);
            ?>
            <?php foreach($key_value_pair as $group_num => $year_value): ?>
                <?php 
                    if($group_num < 11){
                        $group_name = "year_group_" . $group_num;
                        $group_data = $PhD_regulation[$group_name];
                    }else{ 
                        $group_name = "year_group_" . $group_num;
                        $group_data = $more_PhD_regulation[$group_name]; 
                    }
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
                            <span class="file_title _font18 en_text">Regulations for Course Selection&nbsp;</span>
                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                        </a>
                        <a class="link_block" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                            <span class="file_title _font18 en_text">Division for compulsory/required&nbsp;</span>
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
            <?php $others_regu = get_field('others'); ?>
            <?php foreach( $others_regu as $data_group): ?>
                <?php if($data_group['file'] && $data_group['filename']): ?>
                <a class="link_block" href="<?php echo esc_url($data_group['file']);?>" target="_blank">
                    <span class="file_title"><?php echo $data_group['filename']; ?>&nbsp;</span>
                    <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php global $rand;?>
<script type='text/javascript'>
    
   const regu_blocks = document.getElementsByClassName("whole_regulation_files");
    
    for (var i = 0; i < regu_blocks.length; i++)
    {
        var regu_rows = regu_blocks[i].getElementsByClassName("regulation_rows");

        var regu_rows_len = regu_rows.length;

        //console.log(regu_rows_len);

        if (regu_rows_len > 0){
            if(regu_rows_len - 3 >= 0){
                for(var j = 0; j < 3; j++){
                    regu_rows[j].className += " shown";   
                }
            }
            else{
                for(var j = 0; j < regu_rows_len; j++){
                    regu_rows[j].className += " shown";   
                }
            }
        }
    }
    /*var regu1_whole_rows = document.getElementById("regu_block1").getElementsByClassName("regulation_rows");
    var regu2_whole_rows = document.getElementById("regu_block2").getElementsByClassName("regulation_rows");

    //console.log(regu_row_mst.length);
    const regu1_len = regu1_whole_rows.length;
    const regu2_len = regu2_whole_rows.length;

    if(regu1_len - 3 >= 0){
        for(var i = 0; i < 3; i++){
            regu1_whole_rows[i].className += " shown";   
        }
    }
    else{
        for(var i = 0; i < regu1_len; i++){
            regu1_whole_rows[i].className += " shown";   
        }
    }

    if(regu2_len - 3 >= 0){
        for(var i = 0; i < 3; i++){
            regu2_whole_rows[i].className += " shown";   
        }
    }
    else{
        for(var i = 0; i < regu2_len; i++){
            regu2_whole_rows[i].className += " shown";   
        }
    }*/
</script>