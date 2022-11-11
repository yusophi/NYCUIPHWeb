<?php
/*
 * Template Name: admission
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>

<div class="page_admission">
    <div class="banner admission_banner">
        <?php if($locale == "zh_TW"):?>
        <span class="page_name" id="zh">招生訊息<br></span>
        <span class="page_name" id="eg">Admission Information</span>
        <?php else: ?>
        <span class="page_name" id="page_nanme-en">Admission Information</span>
        <?php endif; ?>
        <div class="circle"></div>
    </div>
    <div class="scetion1">
        <div class="block-deco">
            <div class="deco-dot"></div>
            <div class="deco-arrow"></div>
            <div class="deco-section">s1</div>
        </div>
        <div class="s1_content">
            <div class="text_content">
                <div class="content">
                    <?php if($locale == "zh_TW"):?>
                    <span>教育目標之內容與特色</span>
                    <?php else: ?>
                    <span class="en_title">Educational Objectives</span>
                    <?php endif; ?>
                    <div><?php the_field('edu_goals')?></div>
                </div>
                <div class="content career">
                    <?php if($locale == "zh_TW"):?>
                    <span>未來就業發展</span>
                    <?php else: ?>
                    <span class="en_title">Future Prospect After Graduation</span>
                    <?php endif; ?>
                    <div><?php the_field('career') ?></div>
                </div>
            </div>
            <div class="s1_pie_chart">
                <?php echo wp_get_attachment_image( get_field('pie_chart_1'), 'large'); ?>
                <?php echo wp_get_attachment_image( get_field('pie_chart_2'), 'large'); ?>
            </div>
        </div>
    </div>
    <div class="scetion2">
        <div class="block-deco">
            <div class="deco-dot"></div>
            <div class="deco-arrow"></div>
            <div class="deco-section">s2</div>
        </div>
        <?php
            $ad_MsPhD = get_field('ad_infomations_MsPhD');
            $ad_PhD = get_field('ad_infomations_PhD');
            $ad_Ms = get_field('ad_infomations_Ms');
        ?>
        <div class="three_ad_icon">
            <a href="#!" class="ad_icon actived"><?php echo $ad_MsPhD['ad_year'];?></a>
            <a href="#!" class="ad_icon"><?php echo $ad_PhD['ad_year'];?></a>
            <a href="#!" class="ad_icon"><?php echo $ad_Ms['ad_year'];?></a>        
        </div>
        
            <div class="ad_whole_block shown">
                <div class="ad_info">
                    <div class="ad_content"><?php echo $ad_MsPhD['ad_content']; ?></div>
                    <div class="ad_poster">
                        <?php echo wp_get_attachment_image( $ad_MsPhD['ad_poster'], 'ad_poster_size'); ?>
                    </div>
                </div>
            </div>

            <div class="ad_whole_block">
                <div class="ad_info">
                    <div class="ad_content"><?php echo $ad_PhD['ad_content']; ?></div>
                    <div class="ad_poster">
                        <?php echo wp_get_attachment_image( $ad_PhD['ad_poster'],'ad_poster_size'); ?>
                    </div>
                </div>
            </div>

            <div class="ad_whole_block">
                <div class="ad_info">
                    <div class="ad_content"><?php echo $ad_Ms['ad_content']; ?></div>
                    <div class="ad_poster">
                        <?php echo wp_get_attachment_image( $ad_Ms['ad_poster'], 'ad_poster_size'); ?>
                    </div>
                </div>
            </div>
        <?php global $rand; ?>
        <script type='text/javascript' nonce="<?php echo $rand; ?>">
            var btns = document.getElementsByClassName("ad_icon");

            for (var i = 0; i < btns.length; i++) {
                let k = i;
                btns[i].addEventListener("click", function() 
                {
                    var current = document.getElementsByClassName("actived");
                    current[0].className = current[0].className.replace(" actived", "");
                    this.className += " actived";
                    show(k);
                });
            }
            function show(n){
                //console.log(n);
                var current_block = document.getElementsByClassName("shown");
                var blocks = document.getElementsByClassName("ad_whole_block");
                current_block[0].className = current_block[0].className.replace(" shown", "");
                blocks[n].className += " shown";
            }
        </script>
    </div>  
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>    
<?php get_footer(); ?>