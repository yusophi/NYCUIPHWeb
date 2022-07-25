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
            <span class="item_title2">Rules & Regulations</span>
            <span class="item_title2">Courses list</span>
            <?php endif; ?>
        </div>
        <div class="whole_regulation_files" id="regu_block1">
            <?php $master_regulation = get_field('master_regulation');?>
            <?php $more_master_regulation = get_field('more_master_regulation');?>
            <?php if($master_regulation): ?>
                <?php 
                    $count = 1;
                    while($count < 11 ):?>
                        <?php
                            $name = "year_group_" . $count; 
                            $group_data = $master_regulation[$name];
                            $year = $group_data['year'];
                        ?>
                        <?php if( $year ):?>
                            <div class="regulation_rows">
                                <?php if($locale == "zh_TW"): ?>    
                                <span class="year _font22"><?php echo $group_data['year']. "學年度";?></span>
                                <?php else: ?>
                                <span class="year _font22"><?php echo $group_data['year'];?></span>
                                <?php endif; ?>
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
                            </div>
                        <?php endif; 
                            $count =  $count + 1;
                        ?>
                    <?php endwhile; ?>
            <?php endif; ?>
            <?php if($more_master_regulation):?>
                <?php $count = 11;
                    while($count < 21 ):?>
                    <?php
                        $name = "year_group_" . $count; 
                        $group_data = $more_master_regulation[$name];
                        $year = $group_data['year'];
                    ?>
                        <?php if( $year ):?>
                            <div class="regulation_rows">
                                <?php if($locale == "zh_TW"): ?>    
                                <span class="year _font22"><?php echo $group_data['year']. "學年度";?></span>
                                <?php else: ?>
                                <span class="year _font22"><?php echo $group_data['year'];?></span>
                                <?php endif; ?>
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
                            </div>
                        <?php endif; 
                            $count =  $count + 1;
                        ?>
                    <?php endwhile; ?>
            <?php endif; ?>
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
            <span class="item_title2">Rules & Regulations</span>
            <span class="item_title2">Courses list</span>
            <?php endif; ?>
        </div>
        <div class="whole_regulation_files" id="regu_block2">
            <?php $PhD_regulation = get_field('PhD_regulation');
                $more_PhD_regulation = get_field('more_PhD_regulation');  ?>
            <?php if($PhD_regulation): ?>
                <?php 
                    $count = 1;
                    while($count < 9 ):?>
                        <?php
                            $name = "year_group_" . $count; 
                            $group_data = $PhD_regulation[$name];
                            $year = $group_data['year'];
                        ?>
                        <?php if( $year ):?>
                            <div class="regulation_rows">
                                <?php if($locale == "zh_TW"): ?>    
                                <span class="year _font22"><?php echo $group_data['year']. "學年度";?></span>
                                <?php else: ?>
                                <span class="year _font22"><?php echo $group_data['year'];?></span>
                                <?php endif; ?>
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
                            </div>
                        <?php endif; 
                            $count =  $count + 1;
                        ?>
                    <?php endwhile; ?>
            <?php endif; ?>
            <?php if($more_PhD_regulation):?>
                <?php $count = 11;
                    while($count < 21 ):?>
                    <?php
                        $name = "year_group_" . $count; 
                        $group_data = $more_PhD_regulation[$name];
                        $year = $group_data['year'];
                    ?>
                        <?php if( $year ):?>
                            <div class="regulation_rows">
                                <?php if($locale == "zh_TW"): ?>    
                                <span class="year _font22"><?php echo $group_data['year']. "學年度";?></span>
                                <?php else: ?>
                                <span class="year _font22"><?php echo $group_data['year'];?></span>
                                <?php endif; ?>                                <div class="item1">
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
                                    <a class="link_block" href="<?php echo esc_url($group_data['domain_mandatory_course']);?>" target="_blank">
                                        <span class="file_title">領域必選課程&nbsp;</span>
                                        <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
                                    </a>
                                </div>
                            </div>
                        <?php endif; 
                            $count =  $count + 1;
                        ?>
                    <?php endwhile; ?>
            <?php endif; ?>
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
                <span class="file_title _font18">逕修讀博士學位甄選辦法&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
            <a class="link_block" href="<?php echo esc_url(the_field('pre_master_program_regu'));?>" target="_blank">
                <span class="file_title _font18">碩士班預備研究生甄選規定&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
            <a class="link_block" href="<?php echo esc_url(the_field('transfer_ragu'));?>" target="_blank">
                <span class="file_title _font18">博士班研究生申請轉入公共衛生研究所辦法&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
            <a class="link_block" href="<?php echo esc_url(the_field('paper_investigate'));?>" target="_blank">
                <span class="file_title _font18">博、碩士班「論文研究進度審查」施行辦法&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
        </div>
    </div>
</div>
<script type='text/javascript'>
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