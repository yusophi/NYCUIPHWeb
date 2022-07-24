<div class="course_schedule">
    <div class="course_outline">
        <?php $course_content= get_field('course_outline');?>
        <div class="file_content ">
            <div class="file_title _font40">國立陽明大學公共衛生研究所課程 授課大綱</div>
            <div class="links">
                <?php if($course_content['file_name_1'] && $course_content['file1']): ?>
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file1']);?>" target="_blank"><?php echo $course_content['file_name_1']; ?></a>
                    <a href="<?php echo esc_url($course_content['file1']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
                <?php endif; ?>

                <?php if($course_content['file_name_2'] && $course_content['file2']): ?>
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file2']);?>" target="_blank"><?php echo $course_content['file_name_2']; ?></a>
                    <a href="<?php echo esc_url($course_content['file2']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
                <?php endif; ?>

                <?php if($course_content['file_name_3'] && $course_content['file3']): ?>
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file3']);?>" target="_blank"><?php echo $course_content['file_name_3']; ?></a>
                    <a href="<?php echo esc_url($course_content['file3']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
                <?php endif; ?>

                <?php if($course_content['file_name_4'] && $course_content['file4']): ?>
                <div class="file_link">
                    <a class="file_name _font18" href="<?php echo esc_url($course_content['file4']);?>" target="_blank"><?php echo $course_content['file_name_4']; ?></a>
                    <a href="<?php echo esc_url($course_content['file4']); ?>" download><img class="icon_download" src="<?php bloginfo('template_url')?>/images/page_curriculum/icon_download.svg"></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div> 
</div>