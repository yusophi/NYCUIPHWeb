<div class="student_scholar">
    <div class="block_title _font40">相關辦法</div>
    <div class="links">
        <ul>
        <?php $apply_regulation = get_field('scholarships_apply');?>
        <?php if($apply_regulation): ?>
            <?php $count=1;
                while($count < 9):?>
                    <?php
                        $name = "file_name" . $count;
                        $file_name = $apply_regulation[$name];
                        if($file_name):
                    ?>
                        <?php $filesource = "file_source" . $count; 
                              $file_link = $apply_regulation[$filesource];
                        ?>
                            
                                <li>
                                    <a class="link_block _font20" href="<?php echo esc_url($file_link); ?>" target="_blank"><?php echo $file_name; ?>&nbsp;
                                        <!--<span class="file_title _font18"><?php //echo $file_name; ?>&nbsp;</span>-->
                                    </a>
                                </li>
                            
                    <?php endif;  $count =  $count + 1; ?>
                <?php endwhile; ?>
        <?php endif; ?>
        </ul>
    </div>
</div>