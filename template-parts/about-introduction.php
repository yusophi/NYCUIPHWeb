<?php $locale = get_locale();?>
<div class="information-block IPH-introduction">
    <div class="info-title">
        <span class="ch-title">公共衛生研究所</span>
        <span class="en_title">Institute of Public Health</span>
    </div>
    <div class="block-deco">
        <div class="deco-dot"></div>
        <div class="deco-arrow"></div>
        <div class="deco-section">s1</div>
    </div>  
    <div class="block-content iph-intro">
        <a href="member" class="img-teachers"><img src="<?php bloginfo('template_url')?>/images/page_about/img-teachers.webp"></a>
        <div class="<?php if($locale == "en_US"){ echo "en_text"; }else{echo "texts";};?>"><?php the_field('iph_introduction') ?></div>
        <div class="image"><img src="<?php bloginfo('template_url')?>/images/page_about/img-intro.png"></div>
    </div>  
</div>