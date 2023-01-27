<?php $locale = get_locale();?>
<div class="degree_regulation">
    <div class="regulation_block" id="master_regulation">
        <div class="degree_block_title">
            <?php if($locale == "zh_TW"): ?>    
            <span class="_font40">碩士班</span>
            <?php else: ?>
            <span class="en_title _font40">Master Program</span>
            <?php endif; ?>
            <a class="more_btn" id="master-more-btn" onclick="show('regu_block1','tr')">
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
        </div>
        <ul class="table">
            <li class="thead fontstyle-thead">
                <ol class="thead-tr">
                    <?php if($locale == "zh_TW"): ?>    
                        <li class="align-left">學年</li>
                        <li class="align-left">修業辦法與要則</li>
                        <li class="align-left">課程細目</li>
                    <?php else: ?>
                        <li class="align-left en_text">Year</li>
                        <li class="align-left en_text">Courses list</li>
                    <?php endif; ?>
                </ol>
            </li>
            <li class="tbody" id="regu_block1">
                <?php $master_regulation = get_field('master_regulation');?>
                <?php $more_master_regulation = get_field('more_master_regulation');?>
                <?php 
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
                        <ol class="tr">
                            <?php if($locale == "zh_TW"): ?>    
                                <li class="align-left tdata-year"><?php echo $group_data['year'];?></li>
                                <li class="align-left tdata-group1">
                                    <div class="flex-wrapper"> 
                                        <a class="tdata" href="<?php echo esc_url($group_data['program_regulation']);?>" target="_blank">
                                            <span>修業辦法&nbsp;</span>
                                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                        </a>
                                        <a class="tdata" href="<?php echo esc_url($group_data['program_rules']);?>" target="_blank">
                                            <span>修業要則&nbsp;</span>
                                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                        </a>
                                    </div>  
                                </li>
                                <li class="align-left tdata-group2">
                                    <div class="flex-wrapper"> 
                                        <a class="tdata" href="<?php echo esc_url($group_data['course_rules']);?>" target="_blank">
                                            <span>修課規定&nbsp;</span>
                                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                        </a>
                                        <a class="tdata" href="<?php echo esc_url($group_data['mandatory_course']);?>" target="_blank">
                                            <span>所必選課程(核心三選二)&nbsp;</span>
                                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                        </a>
                                        <a class="tdata" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                                            <span>領域必選課程&nbsp;</span>
                                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                        </a>
                                    </div>
                                </li>
                            <?php else: ?>
                                <li class="align-left tdata-year"><?php echo $group_data['year'];?></li>
                                <li class="align-left">
                                    <div class="flex-wrapper"> 
                                        <a class="tdata" href="<?php echo esc_url($group_data['course_rules']);?>" target="_blank">
                                            <span>Regulations for Course Selection&nbsp;</span>
                                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                        </a>
                                        <a class="tdata" href="<?php echo esc_url($group_data['mandatory_course']);?>" target="_blank">
                                            <span>Compulsory/Required&nbsp;</span>
                                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                        </a>
                                        <a class="tdata" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                                            <span>Division for compulsory/required&nbsp;</span>
                                            <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                        </a>
                                    </div> 
                                </li>
                            <?php endif; ?>
                        </ol>
                <?php endforeach; ?>
            </li>
        </ul>
    </div> 
    <div class="regulation_block" id="phd_regulation">
        <div class="degree_block_title">
            <?php if($locale == "zh_TW"): ?>    
            <span class="_font40">博士班</span>
            <?php else: ?>
            <span class="en_title _font40">Ph.D. Program</span>
            <?php endif; ?>
            <a class="more_btn" onclick="show('regu_block2','tr')">
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
        <ul class="table">
            <li class="thead fontstyle-thead">
                <ol class="thead-tr">
                    <?php if($locale == "zh_TW"): ?>    
                        <li>學年</li>
                        <li class="align-left">修業辦法與要則</li>
                        <li class="align-left">課程細目</li>
                    <?php else: ?>
                        <li class="align-left en_text">Year</li>
                        <li class="align-left en_text">Courses list</li>
                    <?php endif; ?>
                </ol>
            </li>
            <li class="tbody" id="regu_block2">
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
                    <ol class="tr">
                        <?php if($locale == "zh_TW"): ?>    
                            <li class="align-left tdata-year"><?php echo $group_data['year'];?></li>
                            <li class="align-left tdata-group1">
                                <div class="flex-wrapper"> 
                                    <a class="tdata" href="<?php echo esc_url($group_data['program_regulation']);?>" target="_blank">
                                        <span>修業辦法&nbsp;</span>
                                        <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                    </a>
                                    <a class="tdata" href="<?php echo esc_url($group_data['program_rules']);?>" target="_blank">
                                        <span>修業要則&nbsp;</span>
                                        <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                    </a>
                                </div>
                            </li>
                            <li class="align-left tdata-group2">
                                <div class="flex-wrapper"> 
                                    <a class="tdata" href="<?php echo esc_url($group_data['course_rules']);?>" target="_blank">
                                        <span>修課規定&nbsp;</span>
                                        <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                    </a>
                                    <a class="tdata" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                                        <span>領域必選課程&nbsp;</span>
                                        <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                    </a>
                                 </div>
                            </li>
                        <?php else: ?>
                            <li class="align-left"><?php echo $group_data['year'];?></li>
                            <li class="align-left">
                                <div class="flex-wrapper"> 
                                    <a class="tdata" href="<?php echo esc_url($group_data['course_rules']);?>" target="_blank">
                                        <span>Regulations for Course Selection&nbsp;</span>
                                        <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                    </a>
                                    <a class="tdata" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                                        <span>Division for compulsory/required&nbsp;</span>
                                        <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                    </a>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ol>
                <?php endforeach; ?>
            </li>
        </ul>
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