<div class="course_schedule">
    <div class="course_outline">
        <?php $course_content= get_field('course_outline');?>
        <div class="file_content ">
            <div class="file_title _font40">國立陽明大學公共衛生研究所課程 授課大綱</div>
            <div class="links">
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file1']);?>" target="_blank"><?php echo $course_content['file_name_1']; ?></a>
                    <a href="<?php echo esc_url($course_content['file1']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file2']);?>" target="_blank"><?php echo $course_content['file_name_2']; ?></a>
                    <a href="<?php echo esc_url($course_content['file2']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
            </div>
        </div>
    </div> 
    <div class="course_outline">
    <?php $course_content= get_field('master_majority1');?>
        <div class="file_content ">
            <div class="file_title _font40">碩士班必選課程（三核心選二核心）課程細目、授課大綱</div>
            <div class="links">
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file1']);?>" target="_blank"><?php echo $course_content['file_name_1']; ?></a>
                    <a href="<?php echo esc_url($course_content['file1']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file2']);?>" target="_blank"><?php echo $course_content['file_name_2']; ?></a>
                    <a href="<?php echo esc_url($course_content['file2']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
            </div>
        </div>
    </div> 
    <div class="course_outline">
    <?php $course_content= get_field('master_majority2');?>
        <div class="file_content ">
            <div class="file_title _font40">碩士班必選課程（方法學、議題類）課程細目 授課大綱</div>
            <div class="links">
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file1']);?>" target="_blank"><?php echo $course_content['file_name_1']; ?></a>
                    <a href="<?php echo esc_url($course_content['file1']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file2']);?>" target="_blank"><?php echo $course_content['file_name_2']; ?></a>
                    <a href="<?php echo esc_url($course_content['file2']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="course_outline">
    <?php $course_content= get_field('phd_majority');?>
        <div class="file_content ">
            <div class="file_title _font40">博士班必選課程（方法學、議題類）課程細目 授課大綱</div>
            <div class="links">
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file1']);?>" target="_blank"><?php echo $course_content['file_name_1']; ?></a>
                    <a href="<?php echo esc_url($course_content['file1']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file2']);?>" target="_blank"><?php echo $course_content['file_name_2']; ?></a>
                    <a href="<?php echo esc_url($course_content['file2']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
            </div>
        </div>
    </div>
</div>