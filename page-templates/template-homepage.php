<?php
/*
 * Template Name: homepage
 */
?>

<?php get_header(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/homepage.js"></script>
<link href="css/homepage.css" rel="stylesheet" type="text/css">

<div class="homepage">
      <!-- the slideshoe block-->
      <div class="slideshow-container">

            <?php //query the recent 6 posts
            $args = array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'tag' => 'tag-slideshow',
                  'orderby' => 'date',
                  'order' => 'DESC',
                  'posts_per_page' => 7
            );
            $arr_posts = new WP_Query($args);
            if ($arr_posts->have_posts()) :
            ?>
                  <div class="images-container">
                        <?php
                        $counter = 0;
                        while ($arr_posts->have_posts()) :
                              $arr_posts->the_post();
                              $counter = $counter + 1;
                        ?>
                              <div class="imagesSlide thumb-image <?php echo $counter ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                          </a>
                                    <?php endif; ?>
                              </div>
                        <?php endwhile; ?>
                  </div>
            <?php endif;
            wp_reset_postdata(); ?>

            <div class="bar">
                  <?php for ($i = 0; $i < 7; $i++) : ?>
                        <div class="dot" onclick="currentImage(<?php echo $i + 1; ?>)"></div>
                  <?php endfor; ?>
            </div>

            <a class="previous" onclick="plusImage(-1)">
                  <img src="<?php bloginfo('template_url') ?>/images/icon/icon-pre.svg">
            </a>
            <a class="next" onclick="plusImage(1)">
                  <img src="<?php bloginfo('template_url') ?>/images/icon/icon-next.svg">
            </a>

            <div class="social_media_links">
                  <img src="<?php bloginfo('template_url') ?>/images/icon/icon-youtube_link.svg">
                  <img src="<?php bloginfo('template_url') ?>/images/icon/icon-FB_link.svg">
            </div>

      </div>
      <script>
            var imagesIndex = 1;
            displayImage(imagesIndex);
      </script>
      <!-- the News block -->
      <div class="News-container">

            <div class="block-title">
                  <img class="icon" src="<?php bloginfo('template_url')?>/images/icon/hp-News_icon.svg">
                  <span class="ch-title">最新消息<br></span>
                  <span class="en-title">News</span>
            </div>
            <?php //query the recent 6 posts
            $args = array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'category_name' => 'news',
                  'category__not_in' => array(14),
                  'orderby' => 'date',
                  'posts_per_page' => 6
            );

            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :
            ?>
                  <div class="news-article">
                        <?php
                        $counter = 0;
                        while ($arr_posts->have_posts()) :
                              $arr_posts->the_post();
                              $counter = $counter + 1;
                        ?>
                              <div class="article-content num-<?php echo $counter ?>">
                                    <div class="post_counter <?php echo $counter ?>"><?php echo "0" . $counter . "." ?>&nbsp;&nbsp;</div>
                                    <img class="thumbnail_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-newspaper-new.svg">
                                    <img class="thumbnail_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-news-more.svg">
                                    <div class="border-anim">
                                          <div class="inner-box"></div>
                                    </div>
                                    <div class="article-meta">
                                          <img class="icon-clock>" src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                                          <span class="post_time"><?php the_time('Y.m.j'); ?></span>
                                          <span class="post_category"><?php the_category(' , '); ?></span>
                                          <!--<span><?php //the_tags('', ' , ', ''); 
                                                      ?></span>-->
                                    </div>
                                    <div class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                    <div class="excerpt" id="<?php echo $counter ?>"> <?php the_excerpt(); ?> </div>
                                    <div class="clearfix"></div>
                              </div>
                        <?php endwhile; ?>
                  </div>
            <?php endif; wp_reset_postdata(); ?>
            <div class="bt-readmore news_readmore_btn">
                  <a class="readmore">read more</a>
                  <img class="plus_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_blue.svg">
                  <img class="plus_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_white.svg">
            </div> 
      </div>

      <div class="events">
            <div class="event-title">
                  <div class="event-icon-container"><img class="icon" src="<?php bloginfo('template_url') ?>/images/icon/hp-Events_icon.svg"></div>
                  <div class="event-ch-title">學術活動<br></div>
                  <div class="event-en-title">Events</div>
            </div>
            
            <div id="event-slides">
                  <!--<img id="event-icon-prev" src="<?php //bloginfo('template_url') ?>/images/icon/icon-pre_white.svg">
                  <img id="event-icon-next" src="<?php //bloginfo('template_url') ?>/images/icon/icon-next_white.svg">-->
                  <div id="event-data">
                        <?php /*query the recent 6 posts*/
                              $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'event',
                                    'orderby' => 'date',
                                    'posts_per_page' => 6
                              );

                        $arr_posts = new WP_Query($args);

                        if ($arr_posts->have_posts()) :                
                        ?>    
                              <?php  
                                    while ($arr_posts->have_posts()) :
                                    $arr_posts->the_post();                              
                              ?>
                              <!-- One event-data-item means one event -->
                              <div class="event-data-item">
                                    <div class="event-container">
                                          <div class="single-event">
                                                <div class="event-mask">
                                                      <div class="event-main-margin">
                                                            <div class="event-main-slide-upper">
                                                                  <div class="event-img-container"><img src="<?php bloginfo('template_url') ?>/images/icon/pic-seminar.svg"></div>
                                                                  <div class="event-info">
                                                                        <div class="event-date-title">
                                                                              <img src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg" style="z-index: -1;">
                                                                              <span class="event-date-words">Date</span>
                                                                        </div>
                                                                        <div class="event-date"><?php the_field('event_date')?> </div>
                                                                        <div class="event-tags">
                                                                              <span class="event-tag-mask"><?php the_field('event_category')?></span>
                                                                              <span class="event-tag-mask"><?php the_field('location')?></span>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="event-name"><?php the_title(); ?></div>
                                                            <div class="event-intro"><?php the_excerpt(); ?></div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              
                              <?php endwhile; ?>
                        <?php endif;
                        wp_reset_postdata(); ?>

                        <!--<div class="event-data-item">
                              <div class="event-container">
                                    <div class="single-event">
                                          <div class="event-mask">
                                                <div class="event-main-margin">
                                                      <div class="event-main-slide-upper">
                                                            <div class="event-img-container"><img src="<?php// bloginfo('template_url') ?>/images/icon/pic-seminar.svg"></div>
                                                            <div class="event-info">
                                                                  <div class="event-date-title">
                                                                        <img src="<?php// bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                                                                        <span class="event-date-words">Date</span>
                                                                  </div>
                                                                  <div class="event-date">2020.10.12(Mon.)</div>
                                                                  <div class="event-tags">
                                                                        <span class="event-tag-mask">讀書會</span>
                                                                        <span class="event-tag-mask">醫學二館221室</span>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="event-name">優雅的老年：678位修女揭開大腦健康之鑰 (莊宜芳老師)</div>
                                                      <div class="event-intro">這不只是一本突破性的健康與科學書籍，更是一個感動人心的故事，因為眾多高齡修女們的慷慨奉獻
                                                            ，我們才能活得更久、活得更好。老年如何過得優雅？經過一生的學習和打拚，到了歲月將盡之時，究竟能以豐富的大腦功能
                                                            安享天年？.......</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="event-data-item">
                              <div class="event-container">
                                    <div class="single-event">
                                          <div class="event-mask">
                                                <div class="event-main-margin">
                                                      <div class="event-main-slide-upper">
                                                            <div class="event-img-container"><img src="<?php //bloginfo('template_url') ?>/images/icon/pic-seminar.svg"></div>
                                                            <div class="event-info">
                                                                  <div class="event-date-title">
                                                                        <img src="<?php //bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                                                                        <span class="event-date-words">Date</span>
                                                                  </div>
                                                                  <div class="event-date">年份.月份.日期(禮拜幾.)</div>
                                                                  <div class="event-tags">
                                                                        <span class="event-tag-mask">標籤</span>
                                                                        <span class="event-tag-mask">標籤</span>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="event-name">標題</div>
                                                      <div class="event-intro">內容...</div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>-->
                  </div>

                  <div id="event-slider-container-outer">
                        <div id="event-slider-container" class="event-slider-container-transition">
                              <div class="event-slider-item"></div>
                              <div class="event-indent"></div>
                              <div class="event-slider-item prev-event"></div>
                              <div class="event-indent"></div>
                              <div class="event-slider-item main-event"></div>
                              <div class="event-indent"></div>
                              <div class="event-slider-item next-event"></div>
                              <div class="event-indent"></div>
                              <div class="event-slider-item"></div>
                        </div>
                  </div>
                  <img id="event-icon-prev" src="<?php bloginfo('template_url') ?>/images/icon/icon-pre_white.svg">
                  <img id="event-icon-next" src="<?php bloginfo('template_url') ?>/images/icon/icon-next_white.svg">
            </div>
            <div class="bt-readmore event_readmore_btn">
                  <a class="readmore">read more</a>
                  <img class="plus_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_white.svg">
                  <img class="plus_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_blue.svg">
            </div>
      </div>
      <!--<script>
            FlexSlider.init();
      </script>-->
      <!-- Jenny: About Us Block -->
      <div class="About-container">
            <div class="block-title abouttitle">
                  <img class="icon" src="<?php bloginfo('template_url')?>/images/icon/icon-about.svg">
                  <span class="ch-title">關於我們<br></span>
                  <span class="en-title">About</span>
            </div>

            <div class="intro_content">
                  <div class="iph_ch"> <?php the_field('iph_ch') ?></div>
                  <div class="iph_en"> <?php the_field('iph_en') ?></div>
                  <div class="iph_intro"> <?php the_field('iph_intro') ?></div>
                  <img class="icon_aboutus_1" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-1.svg">
                  <div class="bt-readmore aboutUS_intro_btn">
                        <a class="readmore">read more</a>
                        <img class="plus_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-plus_blue.svg">
                        <img class="plus_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-plus_white.svg">
                  </div>
            </div>

            <div class="videos">
                  <div class="module video1">
                        <span class="bk_num video1">01.</span> 
                        <img class="icon_aboutus_2 video1" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-2.svg">
                        <div class="video_title video1"> 陽明大學醫學系-醫學人文必修你該知道的事<?php //the_field('video_title1') ?></div>    
                        <div class="bt-watchmore video1">
                              <a class="watchmore">watch</a>
                              <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                              <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
                        </div>
                  </div>
                  <div class="module video2">
                        <span class="bk_num video2">02.</span> 
                        <img class="icon_aboutus_2 video2" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-3.svg">
                        <div class="video_title video2"> 陽明大學公共衛生研究所 招生宣傳短片<?php //the_field('video_title1') ?></div>    
                        <div class="bt-watchmore video2">
                              <a class="watchmore">watch</a>
                              <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                              <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
                        </div>        
                  </div>
            </div>


      </div>

      <div class="Specialization-container"> 

      </div>

</div>
