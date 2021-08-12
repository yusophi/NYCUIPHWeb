<?php
/*
 * Template Name: homepage
 */
?>


<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/homepage.js"></script>
<head> <link href="css/homepage.css" rel="stylesheet" type="text/css"> </head>

<div class="homepage">
      <div class="slideshow-container">  
            
            <?php //query the recent 6 posts
                  $args = array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'category_name' => 'slideshow',
                  'orderby'=>'date',
                  'posts_per_page' => 7);
                  $arr_posts = new WP_Query( $args );
                  if ( $arr_posts->have_posts() ) :
            ?>
            <div class="images-container">
                  <?php             
                        $counter=0;
                        while ( $arr_posts->have_posts() ) : 
                              $arr_posts->the_post(); 
                              $counter = $counter + 1;
                  ?>
                        <div class="imagesSlide thumb-image ">
                              <?php if ( has_post_thumbnail() ) : ?>
                              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail(); ?>
                              </a>
                              <?php endif;?>
                        </div>
                  <?php endwhile; ?>
            </div>
            <?php endif; wp_reset_postdata(); ?> 

            <div class="bar">                    
            <?php for($i=0; $i<7 ;$i++):?>
                  <span class="dot" onclick="currentImage(<?php echo $i+1;?>)"></span>
            <?php endfor;?>
            </div>

            <a class="previous" onclick="plusImage(-1)">
                  <img src="<?php bloginfo('template_url')?>/images/icon/icon-pre.svg" >
            </a>
            <a class="next" onclick="plusImage(1)">
                  <img src="<?php bloginfo('template_url')?>/images/icon/icon-next.svg">
            </a>
            
            <div class="social_media_links">
                  <img src="<?php bloginfo('template_url')?>/images/icon/icon-youtube_link.svg">
                  <img src="<?php bloginfo('template_url')?>/images/icon/icon-FB_link.svg">
            </div>

      </div>
</div>
