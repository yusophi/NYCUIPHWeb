<div class="student_applications">
    <div class="content_group">
        <div class="group_title _font40">◆&nbsp;休、退、復學</div>
        <div class="group_content"><?php the_field('content1'); ?></div>
    </div>
    <div class="content_group">
        <div class="group_title _font40">◆&nbsp;繳交修業進度表</div>
        <div class="group_content"><?php the_field('content2'); ?></div>
    </div><div class="content_group">
        <div class="group_title _font40">◆&nbsp;逕修讀博士學位</div>
        <div class="group_content"><?php the_field('content3'); ?></div>
    </div><div class="content_group">
        <div class="group_title _font40">◆&nbsp;碩士班大口試</div>
        <div class="group_content"><?php the_field('content4'); ?></div>
    </div><div class="content_group">
        <div class="group_title _font40">◆&nbsp;博士班資格考（筆試）</div>
        <div class="group_content"><?php the_field('content5'); ?></div>
    </div><div class="content_group">
        <div class="group_title _font40">◆&nbsp;博士班資格考（口試）</div>
        <div class="group_content"><?php the_field('content6'); ?></div>
    </div><div class="content_group">
        <div class="group_title _font40">◆&nbsp;碩士班學位考</div>
        <div class="group_content"><?php the_field('content7'); ?></div>
    </div>
    <div class="content_group">
        <div class="group_title _font40">◆&nbsp;博士班學位考</div>
        <div class="group_content"><?php the_field('content8'); ?></div>
        <div class="Phd_paper_form">
            <div class="orange_text _font27">博士班論文格式，請依照以下內容依序撰寫</div>
            <div class="list _font20"><?php the_field('PhD_paper_form');?></div>
            <div class="list orange_text _font20">Appendix.&nbsp;Published papers&nbsp;(全文若非open access，可放摘要)</div>
            <div class="note _font20">*論文內容若需引用已發表期刊內容應尊受相關版權規定。</div>
            <div class="realted_files">
                <a class="_font20" href="<?php echo esc_url(the_field('application_form1')); ?>" target="_blank">．國立陽明交通大學碩博士學位【延後公開】申請書</a>
                <a class="_font20" href="<?php echo esc_url(the_field('application_form2')); ?>" target="_blank">．國立陽明交通大學碩博士學位論文格式</a>
            </div>
        </div>
    </div><div class="content_group">
        <div class="group_title _font40">◆&nbsp;轉所相關資料繳交</div>
        <div class="group_content files_table">
        <?php $file_group1 = get_field('file_group1');
            $count = 1;
            while($count < 6):    
        ?>
            <?php 
                $name = "file" . $count;
                $file_group_content = $file_group1[$name];
                $filename = $file_group_content['filename'];
                $word_file = $file_group_content['word_file'];
                $pdf_file = $file_group_content['pdf_file'];
            ?>
            <div class="file_group_content">
                <span class="filename _font18"><?php echo $filename; ?></span>
                <div>
                <?php if($word_file):?>
                    <a class="_font22" href="<?php echo esc_url($word_file); ?>" target="_blank">【word】</a>
                <?php endif; ?>
                <?php if($pdf_file):?>
                    <a class="_font22" href="<?php echo esc_url($pdf_file); ?>" target="_blank">【PDF】</a>
                <?php endif; $count = $count + 1;?>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
    <div class="content_group">
        <div class="group_title _font40">◆&nbsp;其他表單</div>
        <div class="group_content other_forms">
        <?php $file_group1 = get_field('file_group2');
            $count = 1;
            while($count < 6):    
        ?>
            <?php 
                $name = "file" . $count;
                $file_group_content = $file_group1[$name];
                $filename = $file_group_content['filename'];
                $filesource = $file_group_content['file_source'];
            ?>
            <?php if($filesource):?>
                <a class="_font22" href="<?php echo esc_url($filesource);?>"><?php echo $filename;?></a>
            <?php endif; $count = $count + 1;?>
        <?php endwhile; ?>
        </div>
    </div>
</div>