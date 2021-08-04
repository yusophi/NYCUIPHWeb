<?php
/*
 * Template Name: homepage
 */
?>


<?php get_header(); ?>
<!--<script type="text/javascript" src="<?php// bloginfo('template_url')?>/js/homepage.js"></script>-->
<head> <link href="css/homepage.css" rel="stylesheet" type="text/css"> </head>

<div class="homepage">
    <div class="slidershow-container">
    </div>

   <!-- the News -->
   <div class="News-container">
   <div class="news-icon">
         <div class="icon"></div>
         <span class="title">最新消息</span>
   </div>
   <?php
            $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'news',
            'order'=>'DESC');
            $arr_posts = new WP_Query( $args );

            if ( $arr_posts->have_posts() ) :
   ?>
   <?php while ( $arr_posts->have_posts() ) : $arr_posts->the_post(); ?>
      <div class="article-content">
         <div class="article-meta">
               <span class="post_time"><?php the_time('Y.m.j'); ?></span>
               <span class="post_category"><?php the_category(' , '); ?></span>
               <!--<span><?php //the_tags('', ' , ', ''); ?></span>-->
         </div>
         <div class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
         <!--<div class="excerpt'></div>-->
         <?php the_excerpt(); ?>
         <div class="clearfix"></div>
      </div>
   <?php endwhile; ?>

   <?php endif;
         wp_reset_postdata();?>
   </div>


</div>
