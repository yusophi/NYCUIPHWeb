<?php get_header(); ?>
    <div class="result_content">
        <div class="article">
            <article class="article-content">
                <h1>404 找不到網頁</h1>
            <p>抱歉，找不到您所要的頁面，或許已經移除、暫時關閉或發生錯誤。</p>
            <p>您可經由<a href="<?php bloginfo('url');?>" title="回到首頁">回到首頁</a>
            或以下分類及時間找到您所要的內容，或以下搜尋框：</p>
            <?php get_search_form(); ?>

            </article>
        </div>
        <?php get_template_part( 'template-parts/backtoTOP');?>    
    </div>
<?php get_footer(); ?>