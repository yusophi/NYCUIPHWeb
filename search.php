<?php 
    //$nonce = $_POST['wpnonce'];
    if ( ! isset( $_POST['csrf_token']) || ! wp_verify_nonce($_POST['csrf_token'], 'test-nonce')):?>
    <?php echo  'Sorry, your nonce did not verify.';
        exit;
    ?>
<?php else : ?>
    <?php get_header(); ?>
    <div class="result_content">
        <?php if (is_search()):?>
            <div class="article">
                <p id="search_keyword"> <?php echo '搜尋結果: ' . esc_html( $_POST['s'] ); ?> </p>
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