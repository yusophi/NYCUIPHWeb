<?php
/*
 * Template Name: admission
 */
?>

<?php get_header(); ?>

<div class="page_admission">
    <div class="banner">
        <span class="page_name" id="zh">招生訊息<br></span>
        <span class="page_name" id="eg">Admission Information</span>
        <div class="circle"></div>
    </div>
    <div calss="scetion1">
        <div class="block-deco">
            <div class="deco-dot"></div>
            <div class="deco-arrow"></div>
            <div class="deco-section">s1</div>
        </div>
        <div class="s1_content">
            <div class="text_content">
                <div class="content">
                    <span>教育目標之內容與特色</span>
                    <div><?php the_field('edu_goals')?></div>
                </div>
                <div class="content career">
                    <span>未來就業發展</span>
                    <div><?php the_field('career') ?></div>
                </div>
            </div>
            
            <div class="s1_pie_chart">
                <?php echo wp_get_attachment_image( get_field('pie_chart'), 'pie_chart'); ?>
                <?php 
                    /*$image = get_field('pie_chart');
                    if( !empty( $image ) ):*/ ?>
                        <!--<img src="<?php //echo esc_url($image['url']); ?>" alt="<?php //echo esc_attr($image['alt']); ?>" />-->
                <?php //endif; ?>
            </div>
        </div>
    </div>
    <div calss="scetion2">
        <div class="block-deco">
            <div class="deco-dot"></div>
            <div class="deco-arrow"></div>
            <div class="deco-section">s2</div>
        </div>
        <?php if( have_rows('ad_infomations_MsPhD')): ?>
            <?php while( have_rows('ad_infomations_MsPhD') ): the_row(); ?>
                <div class="ad_info_block _Ms&PhD">
                    <div class="ad_content"><?php the_sub_field('ad_content'); ?>
                    </div>
                    <div class="ad_poster">
                        <?php echo wp_get_attachment_image( get_sub_field('ad_poster'), 'ad_poster_size'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>  
    <?php get_template_part( 'template-parts/backtoTOP');?>    
</div>
<?php get_footer(); ?>