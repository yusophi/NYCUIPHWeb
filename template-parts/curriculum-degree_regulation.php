<div class="degree_regulation">
    <div class="regulation_block" id="master_regulation">
        <div class="degree_title _font40">碩士班</div>
        <div class="item_titles _font18">
            <span>學年</span>
            <span class="item_title1">修業辦法與要則</span>
            <span class="item_title2">課程細目</span>
        </div>
        <div class="whole_regulation_files">
            <?php $master_regulation = get_field('master_regulation');?>
            <?php if($master_regulation): ?>
                <?php 
                    $count = 1;
                    while($count < 9 ):?>
                        <?php
                            $name = "year_group_" . $count; 
                            $group_data = $master_regulation[$name];
                            $year = $group_data['year'];
                        ?>
                        <?php if( $year ):?>
                            <div class="regulation_rows ms_field">
                                <span class="year _font22"><?php echo $group_data['year']. "學年度";?></span>
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
                                    <a class="link_block" href="<?php echo esc_url($group_data['mandatory_course']);?>" target="_blank">
                                        <span class="file_title _font18">所必選課程（核心三選二）</span>
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
        </div>
        <div class="bt-readmore mst_btn" onclick="read_more(1)">
            <div class="bt-readmore_hover_bk"></div>
            <a class="readmore" id="master_regu_btn" href="#!">read more</a>
            <img class="plus_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_blue.svg">
            <img class="plus_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_white.svg">
        </div>
    </div> 
    <div class="regulation_block" id="phd_regultation">
        <div class="degree_title _font40">博士班</div>
        <div class="item_titles _font18">
            <span>學年</span>
            <span class="item_title1">修業辦法與要則</span>
            <span class="item_title2">課程細目</span>
        </div>
        <div class="whole_regulation_files">
            <?php $PhD_regulation = get_field('PhD_regulation');?>
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
                            <div class="regulation_rows phd_field">
                                <span class="year _font22"><?php echo $group_data['year']. "學年度";?></span>
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
                                    <a class="link_block" href="<?php echo esc_url($group_data['mandatory_course']);?>" target="_blank">
                                        <span class="file_title _font18">所必選課程（核心三選二）</span>
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
        </div>
        <div class="bt-readmore phd_btn" onclick="read_more(2)">
            <div class="bt-readmore_hover_bk"></div>
            <a class="readmore" id="phd_regu_btn" href="#!">read more</a>
            <img class="plus_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_blue.svg">
            <img class="plus_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_white.svg">
        </div>
    </div> 
    <div class="regulation_block" id="others_regu">
        <div class="degree_title _font40">其他</div>
        <div class="others_regu_rows">
            <a class="link_block">
                <span class="file_title _font18">逕修讀博士學位甄選辦法&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
            <a class="link_block">
                <span class="file_title _font18">碩士班預備研究生甄選規定&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
            <a class="link_block">
                <span class="file_title _font18">博士班研究生申請轉入公共衛生研究所辦法&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
            <a class="link_block">
                <span class="file_title _font18">博、碩士班「論文研究進度審查」施行辦法&nbsp;</span>
                <img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg">
            </a>
        </div>
    </div>
</div>
<script>
    const regu_row_mst = document.getElementsByClassName("ms_field");
    const regu_row_phd = document.getElementsByClassName("phd_field");

    //console.log(regu_row_mst.length);
    if(regu_row_mst.length >= 3){
        for(var i = 0; i < 3; i++){
            regu_row_mst[i].className += " shown";   
        }
    }
    if(regu_row_phd.length >= 3){
        for(var i = 0; i < 3; i++){
            regu_row_phd[i].className += " phdshown";   
        }
    }
</script>