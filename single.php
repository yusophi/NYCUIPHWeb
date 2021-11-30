<?php get_header(); ?>
    <div class="content">
        <div class="article">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="article-content">
                    <h1 class="article-title"><?php the_title(); ?></h1>
                    <div class="article-meta">
                        <span><?php the_time('n / j, Y'); ?></span><span> / </span>
                        <span><?php the_category(' , '); ?></span><span> / </span>
                        <span><?php the_tags('', ' , ', ''); ?></span>
                    </div>
                    <?php the_content(); ?>
                    <div class="clearfix"></div>
                </article>
            <?php endwhile; ?>
        </div>
        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>