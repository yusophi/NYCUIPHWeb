
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
  add_image_size( 'hp-interview-img-thumb', 200, 250, array( 'center', 'top' ) ); // Hard crop x:center y:top
  add_image_size( 'hp-interview-img-thumb1', 350, 250, array( 'center', 'top' ) ); // Hard crop x:center y:top
  add_image_size( 'pie_chart', 370, 370, array( 'left', 'top' ) ); // Hard crop x:center y:top
  add_image_size( 'ad_poster_size', 599, 835, array( 'left', 'top' ) ); // Hard crop x:center y:top
  add_image_size( 'member_picture', 1500, 500,array( 'left', 'top' )); // Hard crop x:center y:top
  add_image_size( 'member_picture1', 1550, 500, array( 'left', 'top' ) );
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
    wp_enqueue_style('mytheme_page_banner_style', get_theme_file_uri('css/page_banner.css')); 
    wp_enqueue_style('mytheme_footer_style', get_theme_file_uri('css/footer.css')); 
    wp_enqueue_style('mytheme_backtoTOP_style', get_theme_file_uri('css/backtoTOP.css'));
    //wp_enqueue_script('post_filter', get_theme_file_uri('js/post_filter.js'),true);
    //wp_localize_script('post_filter', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
    wp_enqueue_script('post_filter', get_theme_file_uri('js/post_filter.js'),true);
    wp_localize_script('post_filter', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));

    if(is_page('homepage')){
      wp_enqueue_style('mytheme_homepage_style', get_theme_file_uri('css/homepage.css')); 
      wp_enqueue_style('mytheme_postSmall_style', get_theme_file_uri('css/element-postSmall.css'));
      wp_enqueue_style('mytheme_event_card_style', get_theme_file_uri('css/events_card_style.css')); 
      wp_enqueue_script('show_video_script', get_theme_file_uri('js/show_video.js'), true);
    }
    if(is_page('about')){
      wp_enqueue_style('mytheme_page-about_style', get_theme_file_uri('css/about.css')); 
      wp_enqueue_script('show_video_script', get_theme_file_uri('js/show_video.js'), true);
      
    }
    if(is_page('news')){
      wp_enqueue_style('mytheme_page-news_style', get_theme_file_uri('css/news.css')); 
      wp_enqueue_style('mytheme_postSmall_style', get_theme_file_uri('css/element-postSmall.css'));
      //wp_enqueue_script('post_filter', get_theme_file_uri('js/post_filter.js'),true);
      //wp_localize_script('post_filter', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
    }
    if(is_page('events')){
      wp_enqueue_style('mytheme_page-event_style', get_theme_file_uri('css/events.css')); 
      wp_enqueue_style('mytheme_event_card_style', get_theme_file_uri('css/events_card_style.css'));
      //wp_enqueue_script('post_filter', get_theme_file_uri('js/post_filter.js'),true);
      //wp_localize_script('post_filter', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
    }
    if(is_page('member')){
      wp_enqueue_style('mytheme_page-event_style', get_theme_file_uri('css/member.css')); 
    }
    if(is_page('admission')){
      wp_enqueue_style('mytheme_page-admission_style', get_theme_file_uri('css/admission.css')); 
    }

    if(is_page_template( 'page-templates/template-article-news.php')){
      wp_enqueue_style('mytheme_article_general_style', get_theme_file_uri('css/article_general_style.css'));
      wp_enqueue_style('mytheme_article_news_style', get_theme_file_uri('css/article_news.css'));
      wp_enqueue_style('mytheme_postSmall_style', get_theme_file_uri('css/element-postSmall.css'));
    }
    if(is_page_template( 'page-templates/template-article-event.php')){
      wp_enqueue_style('mytheme_article_general_style', get_theme_file_uri('css/article_general_style.css'));
      wp_enqueue_style('mytheme_article_event_style', get_theme_file_uri('css/article_event.css'));
      wp_enqueue_style('mytheme_event_card_style', get_theme_file_uri('css/events_card_style.css'));
    }
    if(is_page_template( 'page-templates/template-article-interview.php')){
      wp_enqueue_style('mytheme_article_general_style', get_theme_file_uri('css/article_general_style.css'));
      wp_enqueue_style('mytheme_post_interview_style', get_theme_file_uri('css/article_interview.css')); 
    }
    if(is_page_template( 'page-templates/template-article-member.php')){
      wp_enqueue_style('mytheme_article_member_style', get_theme_file_uri('css/article_member.css')); 
    }
    
    if(is_page('course_architecture')){
      wp_enqueue_style('mytheme_page-curriculum_style', get_theme_file_uri('css/curriculum.css')); 
      wp_enqueue_style('curriculum_arch_style', get_theme_file_uri('css/curriculum_arch.css')); 
    }
    elseif(is_page('degree_regulation')){
      wp_enqueue_style('mytheme_page-curriculum_style', get_theme_file_uri('css/curriculum.css')); 
      wp_enqueue_style('curriculum_degree_style', get_theme_file_uri('css/degree_regulation.css')); 
      wp_enqueue_script('read_more_script', get_theme_file_uri('js/curriculum_read_more.js'), true);
    }
    elseif(is_page('course_schedule')){
      wp_enqueue_style('mytheme_page-curriculum_style', get_theme_file_uri('css/curriculum.css')); 
      wp_enqueue_style('curriculum_schedule_style', get_theme_file_uri('css/course_schedule.css')); 
    }

    if(is_page('applications')){
      wp_enqueue_style('mytheme_page-student_style', get_theme_file_uri('css/student.css')); 
      wp_enqueue_style('student_appli_style', get_theme_file_uri('css/student-applications.css')); 
    }
    elseif(is_page('scholarships')){
      wp_enqueue_style('mytheme_page-student_style', get_theme_file_uri('css/student.css')); 
      wp_enqueue_style('student_scholar_style', get_theme_file_uri('css/student-scholarships.css')); 
    }
    elseif(is_page('honor')){
      wp_enqueue_style('mytheme_page-student_style', get_theme_file_uri('css/student.css')); 
      wp_enqueue_style('student_honor_style', get_theme_file_uri('css/student-honor.css')); 
      wp_enqueue_script('read_more_script', get_theme_file_uri('js/curriculum_read_more.js'), true);
    }
    if(is_page('dep_ph') || is_page('dep_mhe')) {
      wp_enqueue_style('dep_style', get_theme_file_uri('css/dep.css'));
    }
    if(is_page_template( 'page-templates/template-epid.php' ) || is_page_template( 'page-templates/template-bios.php' ) || is_page_template( 'page-templates/template-law.php' )){ /*流行病學模板*/
      wp_enqueue_style('pro_division_style', get_theme_file_uri('css/pro_division.css'));
    }
  } 
  add_action('wp_enqueue_scripts', 'mytheme_style_files');
?>

<?php
// include custom jQuery
/*function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');*/
?>

<?php
//require_once('include/load_script.php');
  //   require_once('include/ajax.php');
      ?>

<?php
  /*function load_script(){
    //wp_enqueue_script('ajax', get_template_directory_uri() . '/js/post_filter.js', array('jquery'), 1.1, true);
   // wp_localize_script('ajax', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
   wp_enqueue_script('post_filter', get_theme_file_uri('js/post_filter.js'),true);
   wp_localize_script('post_filter', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
  }
  add_action('wp_enqueue_scripts','load_script');*/
?>      

<?php
// post filter function
add_action('wp_ajax_filter', 'filter_ajax');
add_action('wp_ajax_nopriv_filter', 'filter_ajax');

function filter_ajax() {
  $postType = $_POST['type'];
  $category = $_POST['category'];
  $cat_field = $_POST['cat_field'];
	$cat_title = $_POST['cat_title'];
  
  $args = array(
    'post_type' => $postType,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'desc',
    'posts_per_page' => 15
  );

  if(count($cat_field) > 0 &&  strlen($cat_field[0]) > 0){
    //echo "there is field_category.";

    //$multi_cat = $cat_field . "," . $cat_title;
    $args['tax_query'][] = [
      'taxonomy'      => 'category',
      'field'		=> 'slug',
      'terms'         => $cat_field,
      'operator'      => 'IN'
    ];
    if(count($cat_title) > 0 &&  strlen($cat_title[0]) > 0){
      //echo "also there is title_category.";
      $args['tax_query']['relation'] = 'AND';
      $args['tax_query'][] = [
        'taxonomy'      => 'category',
        'field'		=> 'slug',
        'terms'         => $cat_title,
        'operator'      => 'IN'
      ];
    }
  }
  else if(count($cat_title) > 0 &&  strlen($cat_title[0]) > 0){
    //echo "there is title_categry.";
    $args['tax_query'][] = [
      'taxonomy'      => 'category',
      'field'		=> 'slug',
      'terms'         => $cat_title,
      'operator'      => 'IN'
    ];
  }
  else{ // if none category is selected, then show the default value
    $args['category_name'] = 'professor_class';
  }
  //echo "\n" . "multi_cat: " . $multi_cat;
  //$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  //echo $paged;
  /*$args = array(
    'post_type' => $postType,
    'post_status' => 'publish',
    'category_name' => $cat_title,
    'orderby' => 'date',
    'paged' => $paged,
    'order' => 'desc',
    'posts_per_page' => 15
  );*/

  
  $response = '';
  /*if(isset($category)){
    $args['category__in'] = array($category);
  }*/

  $query = new WP_Query($args);
  if($postType == 'Staff'){ //staff member
      while($query->have_posts()) : $query->the_post();
        get_template_part('template-parts/post_member_card');
      endwhile;
    }
  else{ // post 
    if( $category == '1-academy_lectures' || $category == '2-study_group'){
      if($query->have_posts()){
        echo '<div class="event-cards">'; 
        while($query->have_posts()) : $query->the_post();
          get_template_part('template-parts/post_events_card');
        endwhile;
        echo '</div>';
      }
    }
    else{
      if($query->have_posts()){
        $counter = 1;
        echo '<div class="news-article">';
        while($query->have_posts()) : $query->the_post();
          echo '<div class="article-content">';
          echo '<div class="post_counter">';
          if($counter >= 10){
            echo $counter . ".";
          }else{
            echo "0" . $counter . ".";} 
          echo '</div>';
          get_template_part('template-parts/post_news_card');
          echo '</div>';
          $counter = $counter + 1;
        endwhile;
        echo '</div>';
      }
    }
  }
  
  //echo $response;
  //exit;

  /*echo '<div class="pagination">';
  $big = 999999999; // need an unlikely integer
  $arg = array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?page=%#%',
      'total' => $query->max_num_pages,
      'current' => max( 1, get_query_var( 'paged') ),
      'show_all' => false,
      'end_size' => 3,
      'mid_size' => 2,
      'prev_next' => True,
      'prev_text' => __('<'),
      'next_text' => __('>'),
      'type' => 'list',
      );
  echo paginate_links($arg);
  echo '</div>';*/
  wp_reset_postdata();
  die();
} 
?>