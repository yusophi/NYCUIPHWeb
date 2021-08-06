<?php
/*
 * Template Name: homepage
 */
?>


<?php get_header(); ?>
<!--<script type="text/javascript" src="<?php// bloginfo('template_url')?>/js/homepage.js"></script>-->
<head> <link href="css/homepage.css" rel="stylesheet" type="text/css"> </head>

<div class="homepage">
    <div class="slidershow-container">    </div>




   <!-- the News -->
   <div class="News-container">
      <div class="news-title">
            <img class="icon" src="<?php bloginfo('template_url')?>/images/icon/hp-News_icon.svg">
            <span class="ch-title">最新消息<br></span>
            <span class="en-title">News</span>
      </div>
      <?php //query the recent 6 posts
            $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'news',
            'orderby'=>'date',
            'posts_per_page' => 6);
            $arr_posts = new WP_Query( $args );

            if ( $arr_posts->have_posts() ) :
      ?>
      <div class="news-article">
            <?php             
                  $counter=0;
                  while ( $arr_posts->have_posts() ) : 
                        $arr_posts->the_post(); 
                        $counter = $counter + 1;
            ?>
                  <div class="article-content num-<?php echo $counter ?>">
                        <div class="post_counter <?php echo $counter ?>"><?php echo "0" . $counter . "."?>&nbsp;&nbsp;</div>
                        <img class="thumbnail_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-newspaper-new.svg">
                        <div class="border-anim"><div class="inner-box"></div></div>
                        <div class="article-meta">
                              <img class="icon-clock>" src="<?php bloginfo('template_url')?>/images/icon/icon-clock.svg">
                              <span class="post_time"><?php the_time('Y.m.j'); ?></span>
                              <span class="post_category"><?php the_category(' , '); ?></span>
                              <!--<span><?php //the_tags('', ' , ', ''); ?></span>-->
                        </div>
                        <div class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="excerpt <?php echo $counter ?>"> <?php the_excerpt(); ?> </div>
                        <div class="clearfix"></div>
                  </div>
            <?php endwhile; ?>
      </div>
      <?php endif; wp_reset_postdata(); ?> 
      <!-- js for hover event-->
      <script>
            function showUP(x) {
            x.style.height = "64px";
            x.style.width = "64px";
            }

            function hidden(x) {
            x.style.height = "32px";
            x.style.width = "32px";
            }
      </script>
   </div>
</div>
