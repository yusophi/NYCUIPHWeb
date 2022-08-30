<?php
/*
 * Template Name: sitemap
 */
?>


<?php get_header(); ?>
<div class="page-sitemap">
    <div class="banner">
        <?php if($locale == "zh_TW"):?>
        <span class="page_name" >網站導覽<br></span>
        <?php else: ?>
        <span class="page_name" id="page_name-en">Sitemap</span>
        <?php endif; ?>
        <div class="circle"></div>
    </div>
    <div id="sitemap-block">
        <div class="page-block">
            <p>關於我們</p>
            <ul class="subpage-list">
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/about/">系所簡介</a></li>
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/member/">系所成員</a></li>
            </ul>
        </div>
        <div class="page-block">
            <p>最新消息</p>
            <ul class="subpage-list">
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/news/">總覽</a></li>
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/announcement/">公告</a></li>
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/scholarship/">獎學金</a></li>
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/covid19/">COVID-19</a></li>
            </ul>
        </div>
        <div class="page-block">
            <p>學術活動</p>
            <ul class="subpage-list">
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/events/">所有活動</a></li>
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/seminars/">學術演講</a></li>
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/study_group/">讀書會</a></li>
            </ul>
        </div>
        <div class="page-block">
            <p>課程規劃</p>
            <ul class="subpage-list">
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/course_architecture/">修課架構</a></li>
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/degree_regulation/">修業規定</a></li>
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/course_schedule/">學期課表</a></li>
            </ul>
        </div>
        <div class="page-block">
            <p>學生園地</p>
            <ul class="subpage-list">
                <li><a class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/applications/">各類申請</a></li>
                <li><a class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/scholarships/">獎助學金</a></li>
                <li><a class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/honor/">榮譽榜單</a></li>
                <li><a class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/past_papers/">歷屆論文</a></li>
            </ul>
        </div>
        <div class="page-block">
            <p>招生訊息</p>
            <ul class="subpage-list">
                <li><a class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/admission/">招生訊息</a></li>
            </ul>
        </div>
        <div class="page-block">
            <p>公衛學科</p>
            <ul class="subpage-list">
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/dep_ph/">公衛學科</a></li>
            </ul>
        </div>
        <div class="page-block">
            <p>醫人暨教育學科</p>
            <ul class="subpage-list">
                <li><a  class="subpage-link" data-type="URL" href="<?php echo site_url(); ?>/dep_mhe/">醫人暨教育學科</a></li>
            </ul>
        </div>
        <div class="page-block">
            <p>相關資源</p>
            <ul class="subpage-list">
                <li><a  class="subpage-link" data-type="URL"  href="<?php echo site_url(); ?>/links/">相關資源</a></li>
            </ul>
        </div>

    </div>
</div>
<?php get_footer(); ?>