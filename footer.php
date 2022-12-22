<?php
/*
 * Template Name: footer
 */
?>
<div class="Footer-container">
      <div class="footer-margin">
            <div class="footer-exclam">
                  <?php the_field('slogan', 4110);?>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-pic"><img src="<?php bloginfo('template_url') ?>/images/icon/icon-footer-pic.svg"></div>
            <div class="footer-info">
                  <div id="footer-info-d2"><?php the_field('institution_info', 4110);?></div>
                  <div id="footer-info-d3"><?php the_field('connect_info', 4110);?></div>
            </div>
            <div class="footer-statement">
                  <div id="statement_block1">
                        <a id="info_open" class="statement" href="<?php bloginfo('template_url');?>/website-opendata-announcement/">網站資訊開放宣告</a>
                        <a id="privacy" class="statement" href="<?php bloginfo('tmeplate_url');?>/privacy-and-information-security-policy/">隱私權及資訊安全政策</a>     
                        <a id="sitemap" class="statement" href="<?php bloginfo('template_url');?>/sitemap/">網站導覽</a>
                        <?php $yt_link = get_field('youtube', 4110);
                              $fb_link = get_field('facebook', 4110); ?> 
                        <a href="<?php if($yt_link){echo $yt_link;}?>"><img id="icon_yt" src="<?php bloginfo('template_url') ?>/images/icon/icon-youtube_link_white.svg"></a>
                        <a href="<?php if($fb_link){echo $fb_link;}?>"><img id="icon_fb" src="<?php bloginfo('template_url') ?>/images/icon/icon-FB_link_white.svg"></a>
                  </div>
                  <div>
                        © 國立陽明交通大學公共衛生研究所 <?php echo date('Y') ?> &nbsp;&nbsp;&nbsp;illustration by&nbsp;
                        <a class="footer-iconscout-link" href="https://iconscout.com/">iconscout</a>
                  </div>
            </div>
      </div>
</div>
<!-- Milo: End of footer part -->
</body>

</html>