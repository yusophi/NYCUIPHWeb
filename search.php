<?php 
    if ( ! isset( $_POST['site_search_nonce'] ) 
    || ! wp_verify_nonce( $_POST['site_search_nonce'], 'get_site_search' ) 
    ) {
        print 'Sorry, your nonce did not verify.';
        exit;
    } else :?>
    <?php get_header(); ?>
    <div class="result_content">
        <?php if (is_search()):?>
            <div class="article">
                <p id="search_keyword"> <?php echo '搜尋結果: ' . esc_html( $_GET['s'] ); ?> </p>
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="article-content">
                            <h1 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <?php if('post' == get_post_type()){
                            the_field('excerpt'); echo "...";
                            }?>
                            <div class="clearfix"></div>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <article class="article-content">
                        <h1>搜尋結果</h1>
                        <p>很抱歉，找不到你所搜尋的文章，你可以試著用其他關鍵字再次搜尋。</p>
                        <?php //get_search_form(); ?>
                    </article>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php get_template_part( 'template-parts/backtoTOP');?>    
    </div>
<?php get_footer(); ?>
<?php endif; ?>