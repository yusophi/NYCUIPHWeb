
<?php
    //primary-menu為主選單
    register_nav_menus(
    array(
    'primary-menu' => __( '主選單' )
        )
    );
?>

<?php
  function my_custom_post_staff() {
    $labelsss = array(
      'name'               => _x( 'Staff', 'post type 名称' ),
      'singular_name'      => _x( 'Staff', 'post type 单个 item 时的名称，因为英文有复数' ),
      'add_new'            => _x( '新建成員資料', '添加新内容的链接名称' ),
      'add_new_item'       => __( '新建成員資料' ),
      'edit_item'          => __( '編輯成員資料' ),
      'new_item'           => __( '新建成員資料' ),
      'all_items'          => __( '所有成員' ),
      'view_item'          => __( '查看成員' ),
      'search_items'       => __( '搜索成員' ),
      'not_found'          => __( '没有找到該成員資料' ),
      'not_found_in_trash' => __( '回收站里面没有相关成員資料' ),
      'parent_item_colon'  => '',
      'menu_name'          => '師資陣容'
    );
    $argsss = array(
      'labels'        => $labelsss,
      'description'   => '師資陣容資料',
      'public'        => true,
      'taxonomies'    => array('recordings', 'category', 'post_tag'),
      'menu_position' => 5,
      'reweite'       => false,
      'has_archive'   => false,
      'supports'      => array( 'title', 'thumbnail')
    );
    register_post_type( 'Staff', $argsss );
  }
  add_action( 'init', 'my_custom_post_staff' );
?>


<?php
  function wpb_image_editor_default_to_gd( $editors ) {
      $gd_editor = 'WP_Image_Editor_GD';
      $editors = array_diff( $editors, array( $gd_editor ) );
      array_unshift( $editors, $gd_editor );
      return $editors;
  }
  add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );
?>

<?php
  add_image_size( 'hp-interview-img-thumb', 370, 370, array( 'left', 'top' ) ); // Hard crop x:center y:top
  add_image_size( 'hp-interview-img-thumb1', 250, 250, array( 'left', 'top' ) ); // Hard crop x:center y:top
  add_image_size( 'pie_chart', 370, 370, array( 'left', 'top' ) ); // Hard crop x:center y:top
  add_image_size( 'ad_poster_size', 599, 835, array( 'left', 'top' ) ); // Hard crop x:center y:top
  add_image_size( 'member_picture', 376, 370, array( 'left', 'top' ) ); // Hard crop x:center y:top
  
  function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
    'hp-interview-img-thumb' => __( 'Homepage-interview-picture' ),
    'hp-interview-img-thumb1' => __( 'Search Thumb' ))   
  );
  add_filter( 'image_size_names_choose', 'my_custom_sizes' );

}
?>


<?php
  //enqueue the stylesheet
  function mytheme_style_files() { 
    wp_enqueue_style('mytheme_main_style', get_stylesheet_uri()); 
    wp_enqueue_style('mytheme_rm_btn_style', get_theme_file_uri('css/read_more_btn.css')); 
    wp_enqueue_style('mytheme_homepage_style', get_theme_file_uri('css/homepage.css')); 
    wp_enqueue_style('mytheme_footer_style', get_theme_file_uri('css/footer.css')); 
    wp_enqueue_style('mytheme_backtoTOP_style', get_theme_file_uri('css/backtoTOP.css'));
    wp_enqueue_style('mytheme_postSmall_style', get_theme_file_uri('css/element-postSmall.css'));
    wp_enqueue_style('mytheme_page-news_style', get_theme_file_uri('css/news.css')); 
    wp_enqueue_style('mytheme_page-about_style', get_theme_file_uri('css/about.css')); 
    wp_enqueue_style('mytheme_page-event_style', get_theme_file_uri('css/events.css')); 
    wp_enqueue_style('mytheme_singlepost_style', get_theme_file_uri('css/singlepost.css'));
    wp_enqueue_style('mytheme_post_event_style', get_theme_file_uri('css/events-article.css')); 
    wp_enqueue_style('mytheme_post_interview_style', get_theme_file_uri('css/article-interview.css')); 
    wp_enqueue_script('show_video_script', get_theme_file_uri('js/show_video.js'), true);
    wp_enqueue_style('mytheme_page-admission_style', get_theme_file_uri('css/admission.css')); 
    wp_enqueue_style('mytheme_article_member_style', get_theme_file_uri('css/article_member.css')); 
    wp_enqueue_style('mytheme_page-curriculum_style', get_theme_file_uri('css/curriculum.css')); 
    wp_enqueue_style('mytheme_page-student_style', get_theme_file_uri('css/student.css')); 

    if(is_page('course_architecture')){
      wp_enqueue_style('curriculum_arch_style', get_theme_file_uri('css/curriculum_arch.css')); 
    }
    elseif(is_page('degree_regulation')){
      wp_enqueue_style('curriculum_degree_style', get_theme_file_uri('css/degree_regulation.css')); 
      wp_enqueue_script('read_more_script', get_theme_file_uri('js/curriculum_read_more.js'), true);
    }
    elseif(is_page('course_schedule')){
      wp_enqueue_style('curriculum_schedule_style', get_theme_file_uri('css/course_schedule.css')); 
    }

    if(is_page('applications')){
      wp_enqueue_style('student_appli_style', get_theme_file_uri('css/student-applications.css')); 
    }
    elseif(is_page('scholarships')){
      wp_enqueue_style('curriculum_scholar_style', get_theme_file_uri('css/student-scholarships.css')); 
    }
    /*elseif(is_page('news')){
      wp_enqueue_style('mytheme_page-news_style', get_theme_file_uri('css/news.css')); 
    }
    elseif(is_page('events')){
      wp_enqueue_style('mytheme_page-event_style', get_theme_file_uri('css/events.css')); 
    }
    elseif(is_page('about')){
      wp_enqueue_style('mytheme_page-about_style', get_theme_file_uri('css/about.css')); 
    }
    elseif(is_page('admission')){
      wp_enqueue_style('mytheme_page-admission_style', get_theme_file_uri('css/admission.css')); 
    }*/
    if(is_page('member')){
      wp_enqueue_style('mytheme_page-member_style', get_theme_file_uri('css/member.css')); 
    }
    
  } 
  add_action('wp_enqueue_scripts', 'mytheme_style_files');
?>