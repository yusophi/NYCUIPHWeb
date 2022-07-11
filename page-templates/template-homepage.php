<?php
/*
 * Template Name: homepage
 */
?>

<?php get_header(); ?>
<?php $locale = get_locale();?>
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
            $counter = 0;
            if ($arr_posts->have_posts()) :
            ?>
                  <div class="images-container">
                        <?php
                        while ($arr_posts->have_posts()) :
                              $arr_posts->the_post();
                              $counter = $counter + 1;
                        ?>
                              <div class="imagesSlide" id="thumb-image-<?php echo $counter; ?>">
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

            <div class="image-bar">
                  <?php for ($i = 0; $i < $counter ; $i++) : ?>
                        <div class="dot" onclick="currentImage(<?php echo $i + 1; ?>)"></div>
                  <?php endfor; ?>
            </div>

            <button id="btn_pre_img" onclick="plusImage(-1)" type="button" title="前一張">
                  <img src="<?php bloginfo('template_url') ?>/images/icon/icon-pre.svg">
            </button>
            <button id="btn_next_img" onclick="plusImage(1)" type="button" title="後一張">
                  <img src="<?php bloginfo('template_url') ?>/images/icon/icon-next.svg">
            </button>

            <div class="social_media_links">
                  <img src="<?php bloginfo('template_url') ?>/images/icon/icon-youtube_link.svg">
                  <img src="<?php bloginfo('template_url') ?>/images/icon/icon-FB_link.svg">
            </div>

      </div>
      <!-- the News block -->
      <div class="News-container">
            <div class="block-title news_title">
                  <img class="icon" src="<?php bloginfo('template_url')?>/images/icon/hp-News_icon.svg">
                  <?php if($locale == "zh_TW"):?>
                  <span class="ch-title">最新消息<br></span>
                  <?php endif; ?>
                  <span class="en-title">News</span>
            </div>
            <?php //query the recent 6 posts
            $args = array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'category_name' => 'news',
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
                                    <!--<img class="thumbnail_icon" src="<?php// bloginfo('template_url') ?>/images/icon/icon-newspaper-new.svg">
                                    <img class="thumbnail_icon_hover" src="<?php// bloginfo('template_url') ?>/images/icon/icon-news-more.svg">-->
                                    <div class="post_icon">
                                          <img src="<?php bloginfo('template_url') ?>/images/icon/icon-newspaper.svg">
                                          <div>
                                          <p class="post_icon_hover_dots"></p>
                                          <p class="post_icon_hover_dots"></p>
                                          <p class="post_icon_hover_dots"></p>
                                          </div>
                                    </div>
                                   
                                    <div class="border-anim">
                                          <div class="inner-box"></div>
                                    </div>
                                    <div class="article-meta">
                                          <img class="icon-clock>" src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                                          <span class="post_time"><?php the_time('Y.m.j'); ?></span>
                                    </div>
                                    <div class="post_tags">
                                          <div class="post_category"><?php the_field('news_item');//the_category(''); ?></div>
                                          <?php
                                          $sdgs = get_field('sdg');
                                          if( $sdgs ): ?>
                                                <ul class="sdg-tag">
                                                      <?php foreach( $sdgs as $sdg ): ?>
                                                            <li><?php echo $sdg; ?></li>
                                                      <?php endforeach; ?>
                                                </ul>
                                          <?php endif; ?>
                                    </div>
                                    <!--div class="article-title"><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></div>-->
                                    <div class="article-title">
                                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                          <div class="article-title_bottom_line"></div>
                                    </div>
                                    <div class="excerpt" id="<?php echo $counter ?>"> <?php the_field('excerpt'); ?><?php echo "..."?> </div>
                                    <div class="clearfix"></div>
                              </div>
                        <?php endwhile; ?>
                  </div>
            <?php endif; wp_reset_postdata(); ?>
            <a class="bt-readmore animation1_btn" id="news_readmore_btn" href="<?php echo site_url(); ?>/news/">
                  read more
                  <img class="plus_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_blue.svg">
                  <img class="plus_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_white.svg">
            </a> 
      </div>

      <div class="events">
            <div class="event-title">
                  <div class="event-icon-container"><img class="icon" src="<?php bloginfo('template_url') ?>/images/icon/hp-Events_icon.svg"></div>
                  <?php if($locale == "zh_TW"):?>
                  <div class="event-ch-title">學術活動<br></div>
                  <?php endif; ?>
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
                                                                              <img src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                                                                              <span class="event-date-words">Date</span>
                                                                        </div>
                                                                        <div class="event-date"><?php the_field('event_date');?> </div>
                                                                        <div class="hp_event_tag">
                                                                              <div class="post_category"><?php the_field('event_item');//the_category(''); ?></div>
                                                                              <div class="event-location"><?php the_field('event_location'); ?></div>
                                                                        </div>
                                                                        <?php
                                                                              $sdgs = get_field('sdg');
                                                                              if( $sdgs ): ?>
                                                                              <ul class="sdg-tag">
                                                                                    <?php foreach( $sdgs as $sdg ): ?>
                                                                                          <li><?php echo $sdg; ?></li>
                                                                                    <?php endforeach; ?>
                                                                              </ul>
                                                                        <?php endif; ?>
                                                                  </div>
                                                            </div>
                                                            <div class="event-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                                            <div class="event-intro"><?php the_field('excerpt'); ?><?php echo "..."?></div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              
                              <?php endwhile; ?>
                        <?php endif;
                        wp_reset_postdata(); ?>
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
            <a class="bt-readmore animation2_btn" id="event_readmore_btn" href="<?php echo site_url(); ?>/events/">
                  read more
                  <img class="plus_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_blue.svg">
                  <img class="plus_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_white.svg">
            </a>
      </div>
      <!-- Jenny: About Us block-->
      <div class="About-container">
            <div class="block-title abouttitle">
                  <img class="icon" src="<?php bloginfo('template_url')?>/images/icon/icon-about.svg">
                  <?php if($locale == "zh_TW"):?>
                  <span class="ch-title">關於我們<br></span>
                  <?php endif; ?>
                  <span class="en-title">About IPH</span>
            </div>
            <div class="Aboutus-content-container">
                  <div class="intro_content">
                        <div class="intro_content-text <?php if($locale == "en_US"){echo 'intro_content-text-en';} ?>">
                              <?php if($locale == "zh_TW"):?>
                              <div class="iph_ch"> <?php the_field('iph_ch'); ?></div>
                              <div class="iph_en"> <?php the_field('iph_en'); ?></div>
                              <div class="iph_intro"> <?php the_field('iph_intro'); ?></div>
                              <?php else: ?>
                              <div class="iph_en"> <?php the_field('iph_en'); ?></div>
                              <div class="iph_intro_en"> <?php the_field('iph_intro'); ?></div>
                              <?php endif; ?>
                        </div>
                        <a class="bt-readmore animation1_btn" id="aboutUS_intro_btn" href="<?php echo site_url(); ?>/about/">
                              read more
                              <img class="plus_icon" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_blue.svg">
                              <img class="plus_icon_hover" src="<?php bloginfo('template_url') ?>/images/icon/icon-plus_white.svg">
                        </a>
                  </div>

                  <div class="videos">
                        <div class="module video1">
                              <span class="bk_num video1">01.</span> 
                              <img class="icon_aboutus_2 video1" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-2.svg">
                              <div class="video_title video1 <?php if($locale == "en_US"){echo 'video_title-en';} ?>"> <?php the_field('video_title1') ?></div>  
                              
                              <div class="bt-watchmore animation1_btn" id="hp-watchmore-1">watch
                                    <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                                    <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
                              </div>  
                              <div id="overlay1" class="overlay">
                                    <div class="overlay_content">
                                          <img class="closebtn" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg">
                                          <div class="video_content"><?php the_field('video1') ?></div>
                                    </div>
                              </div>
                        </div>
                        <div class="module video2">
                              <span class="bk_num video2">02.</span> 
                              <img class="icon_aboutus_2 video2" src="<?php bloginfo('template_url')?>/images/icon/icon-aboutus-3.svg">
                              <div class="video_title video2 <?php if($locale == "en_US"){echo 'video_title-en';} ?>"> <?php the_field('video_title2') ?></div>    
                              <div class="bt-watchmore animation1_btn" id="hp-watchmore-2">watch
                                    <img class="watch_icon" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_blue.svg">
                                    <img class="watch_icon_hover" src="<?php bloginfo('template_url')?>/images/icon/icon-watch_yellow.svg">
                              </div>
                              <div id="overlay2" class="overlay">
                                    <div class="overlay_content">
                                          <img class="closebtn" src="<?php bloginfo('template_url')?>/images/icon/ESC.svg">
                                          <div class="video_content"><?php the_field('video2') ?></div>
                                    </div>
                              </div>        
                        </div>
                  </div>
                  <div class="deco_waves" id="up_waves">
                        <img class="wave" src="<?php bloginfo('template_url')?>/images/icon/wave_2.svg">
                        <img class="wave" src="<?php bloginfo('template_url')?>/images/icon/wave_3.svg">
                        <img class="wave" src="<?php bloginfo('template_url')?>/images/icon/wave_4.svg">            
                  </div>
            </div>
            
            <div class="Specialization-container"> 
                  <div class="block-title" id="Specialization_title">
                        <img class="icon" src="<?php bloginfo('template_url')?>/images/icon/icon-SP.svg">
                        <?php if($locale == "zh_TW"):?>
                        <span class="ch-title">專業領域<br></span>
                        <?php endif; ?>
                        <span class="en-title">Divisions</span>
                  </div>

                  <div id="SP_content_container">
                        <a id="SP_1" class="SP_content" href="<?php echo site_url(); ?><?php if($locale == "zh_TW"){echo "/epidemiology/";}else{echo "/division-epidemiology/";}?>">
                              <div class="SP_img_shadow">
                                    <img class="SP_img" src="<?php bloginfo('template_url')?>/images/icon/SP_Epide.png">
                              </div>
                              <?php if($locale == "zh_TW"):?>
                              <span class="SP_ch_title">流行病學<br></span>
                              <?php endif; ?>
                              <span class="SP_en_title <?php if($locale == "en_US"){echo 'SP_title-en_margin';}?>">Epidemiology</span>
                        </a>
                        <a id="SP_2" class="SP_content" href="<?php echo site_url(); ?><?php if($locale == "zh_TW"){echo "/bio_and_datascience/";}else{echo "/division-biostatisticsandddatasscience/";}?>">
                              <div class="SP_img_shadow">
                                    <img class="SP_img" src="<?php bloginfo('template_url')?>/images/icon/SP_data.png">
                              </div>
                              <?php if($locale == "zh_TW"):?>
                              <span class="SP_ch_title">生物統計與資料科學<br></span>
                              <?php endif; ?>
                              <span class="SP_en_title <?php if($locale == "en_US"){echo 'SP_title-en_margin';}?>">Biostatistics and Data Science</span>
                        </a>
                        <a id="SP_3" class="SP_content" href="<?php echo site_url(); ?><?php if($locale == "zh_TW"){echo "/policy_and_law/";}else{echo "/division-healthpolicyandlaw/";}?>">
                              <div class="SP_img_shadow">
                                    <img class="SP_img" src="<?php bloginfo('template_url')?>/images/icon/SP_law.png">
                              </div>
                              <?php if($locale == "zh_TW"):?>
                              <span class="SP_ch_title">健康政策與法律<br></span>
                              <?php endif; ?>
                              <span class="SP_en_title <?php if($locale == "en_US"){echo 'SP_title-en_margin';}?>">Policy and Law</span>
                        </a>
                  </div>
            </div>
            
            <div class="deco_waves" id="below_wave">
                  <img class="wave" src="<?php bloginfo('template_url')?>/images/icon/wave_5.svg">
                  <img class="wave" src="<?php bloginfo('template_url')?>/images/icon/wave_6.svg">
                  <img class="wave" src="<?php bloginfo('template_url')?>/images/icon/wave_7.svg">
            </div>
      
            <div class="Interview-container">
                  <div class="cards">
                        <?php //query the recent 6 posts
                        if($locale == "en_US"){
                              $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'interviews-en',
                                    'orderby' => 'date',
                                    'posts_per_page' => 6
                              );
                        }else{
                              $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'interviews',
                                    'orderby' => 'date',
                                    'posts_per_page' => 6
                              );
                        }
                        $arr_posts = new WP_Query($args);

                        if ($arr_posts->have_posts()) :
                        ?>
                              <?php
                              //$counter = 0;
                              while ($arr_posts->have_posts()) :
                                    $arr_posts->the_post();
                                    //$counter = $counter + 1;
                              ?>
                                    <div class="interview-slide">
                                          <div class="interview-picture">
                                                <?php echo wp_get_attachment_image( get_field('alumni_picture'), 'hp-interview-img-thumb'); ?>
                                          </div>      
                                          <div class="interview-text-content">
                                                <a class="interview-title" href="<?php the_permalink(); ?>"><?php the_field('interview-class'); ?> <?php echo "─"?> <?php the_field('alumni_name'); ?></a>
                                                <span class="interview-excerpt"><?php the_field('interview-excerpt'); ?><?php echo "...";?></span>
                                          </div>
                                                
                                    </div>
                              <?php endwhile; ?>
                        
                        <?php endif; wp_reset_postdata(); ?>
                  </div> 
            </div>
      </div>

      <!-- Milo: 從這裡開始是links的內容 -->
      <?php if($locale == "zh_TW"):?> 
      <div class="Links-container">
            <div class="block-title links_title">
                  <img  class="icon" src="<?php bloginfo('template_url')?>/images/icon/icon-links.svg">
                  <span class="ch-title">相關連結<br></span>
                  <span class="en-title">Links</span>
            </div>
            <div class="links-content">
                  <span class="links-flex-col">
                        <div class="links-category-item">
                              <div class="links-upper-item">
                                    <span class="links-item-title">學術資源</span>
                                    <span class="links-icon-more-item">+</span>
                              </div>
                              <div class="links-items">
                                    <div class="links-item">陽明大學圖書館</div>
                                    <div class="links-item">中央研究院館藏查詢</div>
                                    <div class="links-item">國家圖書館</div>
                                    <div class="links-item">全國圖書書目資料聯合查詢</div>
                                    <div class="links-item">全國法規資料庫</div>
                                    <div class="links-item">全民健康保險研究資料庫</div>
                                    <div class="links-item">科技部科普知識</div>
                                    <div class="links-item">健康數據統計研究資源中心</div>
                              </div>
                        </div>
                        <div class="links-category-item">
                              <div class="links-upper-item">
                                    <span class="links-item-title">相關單位</span>
                                    <span class="links-icon-more-item">+</span>
                              </div>
                              <div class="links-items">
                                    <div class="links-item">陽明大學圖書館</div>
                                    <div class="links-item">中央研究院館藏查詢</div>
                                    <div class="links-item">國家圖書館</div>
                                    <div class="links-item">全國圖書書目資料聯合查詢</div>
                                    <div class="links-item">全國法規資料庫</div>
                                    <div class="links-item">全民健康保險研究資料庫</div>
                                    <div class="links-item">科技部科普知識</div>
                                    <div class="links-item">健康數據統計研究資源中心</div>
                              </div>
                        </div>
                  </span>
                  <span class="links-flex-col">
                        <div class="links-category-item">
                              <div class="links-upper-item">
                                    <span class="links-item-title">政府機構</span>
                                    <span class="links-icon-more-item">+</span>
                              </div>
                              <div class="link s-items">
                                    <div class="links-item">陽明大學圖書館</div>
                                    <div class="links-item">中央研究院館藏查詢</div>
                                    <div class="links-item">國家圖書館</div>
                                    <div class="links-item">全國圖書書目資料聯合查詢</div>
                                    <div class="links-item">全國法規資料庫</div>
                                    <div class="links-item">全民健康保險研究資料庫</div>
                                    <div class="links-item">科技部科普知識</div>
                                    <div class="links-item">健康數據統計研究資源中心</div>
                              </div>
                        </div>
                        <div class="links-category-item">
                              <div class="links-upper-item">
                                    <span class="links-item-title">搜尋引擎</span>
                                    <span class="links-icon-more-item">+</span>
                              </div>
                              <div class="links-items">
                                    <div class="links-item">陽明大學圖書館</div>
                                    <div class="links-item">中央研究院館藏查詢</div>
                                    <div class="links-item">國家圖書館</div>
                                    <div class="links-item">全國圖書書目資料聯合查詢</div>
                                    <div class="links-item">全國法規資料庫</div>
                                    <div class="links-item">全民健康保險研究資料庫</div>
                                    <div class="links-item">科技部科普知識</div>
                                    <div class="links-item">健康數據統計研究資源中心</div>
                              </div>
                        </div>
                  </span>
            </div>
      </div>
      <?php endif; ?>
      <!-- Milo: links結束 -->
      
      <!-- Jenny: Contact Us block start-->
      <div class="ContactUs-container <?php if($locale == 'en_US'){echo 'ContactUs-container-en';} ?>"> 
            <div class="block-title contactUS_title">
                  <img class="icon" src="<?php bloginfo('template_url')?>/images/icon/icon-contact.svg">
                  <?php if($locale == "zh_TW"):?>
                  <span class="ch-title">聯絡我們<br></span>
                  <?php endif; ?>
                  <span class="en-title">Contact us</span>
            </div>
            <div id=administor_profile_block>
                  
                  <?php
                        //$i=1;
                        //$b1_page=0;
                        if($locale == "en_US"){
                              $args = array(
                              'post_type' => 'Staff', 
                              'post_status' => 'publish',
                              'category_name' => 'staff-en', 
                              'orderby'=>'date',
                              'order'=>'ASC');
                        }
                        else{
                              $args = array(
                              'post_type' => 'Staff', 
                              'post_status' => 'publish',
                              'category_name' => 'staff', 
                              'orderby'=>'date',
                              'order'=>'ASC');
                        }
                        $the_query = new WP_Query($args);
                        //echo $the_query->max_num_pages;
                        if($the_query->have_posts()):
                  ?>
                  <?php
                        $counter=0;
                        while($the_query->have_posts()):
                              $counter = $counter + 1;
                              $the_query->the_post();
                  ?>
                        <div class="profile">
                              <div class="profile-header" onclick="currentProfile(<?php echo $counter; ?>)" >
                                    <!--<?php //$imageQ = wp_get_attachment_image_src(get_field('staff_photo'), 'custom size'); ?>-->
                                    <!--<img src="<?php //echo $imageQ[0]; ?>" alt="<?php// echo get_the_title(get_field('staff_photo')) ?>" >-->
                                    <?php echo wp_get_attachment_image( get_field('staff_photo'), 'medium' ); ?>

                                    <?php 
                                    $image = get_field('staff_photo');
                                    if( !empty( $image ) ): ?>
                                          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                                    <?php endif; ?>
                              </div>
                              <div class="profile_content">
                                    <div class="profile_p1">
                                          <p class="contact_text staff_name"><?php the_field('staff_name') ?></p>
                                          <p class="work_respon"><?php the_field('work_group') ?></p>
                                    </div>
                                    <div class="profile_p2">
                                          <?php if($locale == "zh_TW"):?>
                                          <p class="contact_text contact_title">電話:</p>
                                          <?php else: ?>
                                          <p class="contact_text contact_title">TEL:</p>
                                          <?php endif; ?>
                                          <p class="phone_num"><?php the_field('phone_number') ?> </p>
                                    </div>
                                    <div class="profile_p3">
                                          <?php if($locale == "zh_TW"):?>
                                          <p class="contact_text contact_title">信箱:</p>
                                          <?php else: ?>
                                          <p class="contact_text contact_title">E-mail:</p>
                                          <?php endif; ?>
                                          <p class="email"><?php the_field('email') ?> </p>
                                    </div>
                              </div> 
                        </div>

                        <div class="overlayinContact" id="profile_overlay<?php echo $counter ?>" onclick="closeProfile(<?php echo $counter; ?>)">
                              <div class="overlay_wapper">
                                    <div class="cls_btn">
                                          <img onclick="closeProfile(<?php echo $counter; ?>)" src="<?php bloginfo('template_url')?>/images/icon/profile_back.svg">
                                    </div>
                                    <div class="overlay_profile_content">
                                          <div class="overlay_title">
                                                <p class="contact_text profile_text">(Profile)</p>
                                                <p class="contact_text work_respon"><?php the_field('work_group') ?> </p>
                                                <img src="<?php bloginfo('template_url')?>/images/icon/overlay_Contactus_icon.svg">
                                          </div>
                                          <div class="overlay_middle">
                                                <div class="overlay_img">
                                                      <div class="profile_post_num">
                                                            <p><?php echo "0" . $counter; ?></p>
                                                            <p><?php echo "/0" . $the_query->found_posts; ?></p>
                                                      </div>
                                                      <div class="img_block">
                                                      <?php 
                                                            $image = get_field('staff_photo');
                                                            if( !empty( $image ) ): ?>
                                                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"/>
                                                            <?php endif; ?>   
                                                      </div>
                                                </div>
                                                <div class="overlay_self_info">
                                                      <p class="contact_text overlay_staff_name"><?php the_field('staff_name') ?></p>
                                                      <div class="profile_p2">
                                                            <?php if($locale == "zh_TW"):?>
                                                            <p class="contact_title">電話:</p>
                                                            <?php else: ?>
                                                            <p class="contact_title">TEL:</p>
                                                            <?php endif; ?>
                                                            <p class="phone_num overlay_phone_num"><?php the_field('phone_number') ?> </p>
                                                      </div>
                                                      <div class="profile_p3">
                                                            <?php if($locale == "zh_TW"):?>
                                                            <p class="contact_title" >信箱:</p>
                                                            <?php else: ?>
                                                            <p class="contact_title" >E-mail:</p>
                                                            <?php endif; ?>
                                                            <p class="email overlay_mail"><?php the_field('email') ?> </p>
                                                      </div>
                                                      <p class="contact_text self_intro"><?php the_field('self_introduction') ?> </p>
                                                </div>
                                          </div>
                                          <div class="ovetlay_bottom">
                                                <div class="overlay_profile_left_pointer" onclick="plusProfile(-1)">
                                                      <img src="<?php bloginfo('template_url')?>/images/icon/overlay_left_pointer.svg">
                                                </div>
                                                <div class="overlay_profile_right_pointer"  onclick="plusProfile(1)">
                                                      <img src="<?php bloginfo('template_url')?>/images/icon/overlay_right_pointer.svg">
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <?php endwhile; ?>
                  <?php endif;
                        wp_reset_postdata(); 
                  ?>
            </div>
            
      </div>
      <?php get_template_part( 'template-parts/backtoTOP');?>
      <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/back_to_top.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/homepage.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/draggable-slides.js"></script>
      <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/show_video.js"></script>
</div>
<?php get_footer(); ?>