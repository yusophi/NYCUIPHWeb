
<?php
    //primary-menu為主選單
    register_nav_menus(
    array(
    'primary-menu' => __( '主選單' )
        )
    );
?>

<?php
remove_action('wp_head', 'wp_generator');
header('Strict-Transport-Security:max-age=31536000; includeSubdomains; preload');
header('X-Content-Type-Options: nosniff');
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
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
      'menu_name'          => '系所成員'
    );
    $argsss = array(
      'labels'        => $labelsss,
      'description'   => '系所成員資料',
      'public'        => true,
      'taxonomies'    => array('recordings', 'category', 'post_tag'),
      'menu_position' => 5,
      'rewrite'       => false,
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
    /*wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
    wp_enqueue_script('post_filter', get_theme_file_uri('js/post_filter.js'),true);
    wp_localize_script('post_filter', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
*/
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
    wp_enqueue_script('site_search', get_theme_file_uri('js/site_search.js'),true);
    wp_localize_script('site_search', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));

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
      wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
      wp_enqueue_script('post_filter', get_theme_file_uri('js/post_filter.js'),true);
      wp_localize_script('post_filter', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
    }
    if(is_page('events')){
      wp_enqueue_style('mytheme_page-event_style', get_theme_file_uri('css/events.css')); 
      wp_enqueue_style('mytheme_event_card_style', get_theme_file_uri('css/events_card_style.css'));
      wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
      wp_enqueue_script('post_filter', get_theme_file_uri('js/post_filter.js'),true);
      wp_localize_script('post_filter', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
    }
    if(is_page('member')){
      wp_enqueue_style('mytheme_page-event_style', get_theme_file_uri('css/member.css')); 
      wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
      wp_enqueue_script('staff_filter', get_theme_file_uri('js/staff_filter.js'),true);
      wp_localize_script('staff_filter', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
  
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
    elseif(is_page('past_papers')){
      wp_enqueue_style('mytheme_page-student_style', get_theme_file_uri('css/student.css')); 
      wp_enqueue_style('student_honor_style', get_theme_file_uri('css/student-past_paper.css')); 
      wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
      wp_enqueue_script('paper_filter', get_theme_file_uri('js/paper_filter.js'),true);
      wp_localize_script('paper_filter', 'wpAjax', array('ajaxUrl' => admin_url('admin-ajax.php')));
    }
    if(is_page('dep_ph') || is_page('dep_mhe')) {
      wp_enqueue_style('dep_style', get_theme_file_uri('css/dep.css'));
    }
    if(is_page_template( 'page-templates/template-epid.php' ) || is_page_template( 'page-templates/template-bios.php' ) || is_page_template( 'page-templates/template-law.php' )){ /*流行病學模板*/
      wp_enqueue_style('pro_division_style', get_theme_file_uri('css/pro_division.css'));
    }
    if(is_page('links')) {
      wp_enqueue_style('dep_style', get_theme_file_uri('css/links.css'));
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
  $check = 1;
  
  if($postType == 'Staff' && isset($_POST['cat_field']) && isset($_POST['cat_title'])){ 
    //post_type: Staff
    $cat_field = $_POST['cat_field'];
	  $cat_title = $_POST['cat_title'];
    
    $args = array(
      'post_type' => $postType,
      'post_status' => 'publish',
      'meta_key'   => 'prof_class_for_sorting',
      'orderby'    => 'meta_value_num',
      'order'      => 'ASC',
      'posts_per_page' => 15,
    );

    if(count($cat_field) > 0 &&  strlen($cat_field[0]) > 0){
      //echo "there is field_category.";
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
        'terms'        => $cat_title,
        'operator'      => 'IN'
      ];
    }
    else{ // if none category is selected, then show the default value
      $args['category_name'] = '1-regular';
    }
  }
  else if($postType == 'papers' /*&& isset($_POST['cat_year']) && isset($_POST['cat_division'])*/){ 
    //post_type: papers
    $cat_year = $_POST['cat_year'];
	  $cat_division = $_POST['cat_division'];
    $keyword = $_POST['keyword'];

    $args = array(
      'post_type' => $postType,
      'post_status' => 'publish',
      'orderby' => 'meta_value_num',
      'meta_key' => 'year',
      'order' => 'DESC',
    );
    if(isset($keyword))
    {
      $args['s'] = esc_attr($keyword);
    }
    else if(count($cat_year) > 0 &&  strlen($cat_year[0]) > 0){
      //echo "there is year cat.";
      $args['tax_query'][] = [
        'taxonomy'      => 'papers_cat',
        'field'		=> 'slug',
        'terms'         => $cat_year,
        'operator'      => 'IN'
      ];
      if(count($cat_division) > 0 &&  strlen($cat_division[0]) > 0){
        //echo "also there is title_category.";
        $args['tax_query']['relation'] = 'AND';
        $args['tax_query'][] = [
          'taxonomy'      => 'papers_cat',
          'field'		=> 'slug',
          'terms'         => $cat_division,
          'operator'      => 'IN'
        ];
      }
    }
    else if(count($cat_division) > 0 &&  strlen($cat_division[0]) > 0){
      //echo "there is title_categry.";
      $args['tax_query'][] = [
        'taxonomy'      => 'papers_cat',
        'field'		=> 'slug',
        'terms'         => $cat_division,
        'operator'      => 'IN'
      ];
    }
    else{ // if none category is selected, then show the default value
      $check = 0;
    }
  }
  else if($postType == 'all'){
    $keyword = $_POST['keyword'];
    $args = array(
      'post_type' => array('post'),
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
    );
    if(!empty($keyword)){
      $args['s'] = esc_attr($keyword);
    }
    else{
      $check = 0;
    }
  }
  else{//post type: news or events
    $args = array(
      'post_type' => $postType,
      'post_status' => 'publish',
      'orderby' => 'date',
      'order' => 'desc',
      'posts_per_page' => 15
    );
    $args['tax_query'][] = [
      'taxonomy'      => 'category',
      'field'		=> 'slug',
      'terms'        => $category,
      'operator'      => 'IN'
    ];
  }
  
  if($check){
    $query = new WP_Query($args); // if have query condition, create a query
  }
  
  if($postType == 'Staff'){ //post type: Staff
      while($query->have_posts()) : $query->the_post();
        get_template_part('template-parts/post_member_card');
      endwhile;
  }
  else if($postType == 'papers'){ //post type: papers
    if($query->have_posts()){
      echo '<div class="item_titles _font18">';
      echo ' <span>年份</span>
      <span class="name_col">姓名</span>
      <span class="name_col">畢業學位</span>
      <span class="name_col">指導教授</span>
      <span class="name_col">論文名稱</span>';
      echo '</div>';
      echo '<div class="block_paper_posts">';
      while($query->have_posts()) : $query->the_post();
        get_template_part('template-parts/post_paper_card');
      endwhile;
      echo '</div>';
    }
    else if(!$check){
      echo '<div id="search_hint">
        <p>填入欲查詢之學位論文關鍵字或類籤，系統將協助您列出相關資料。</p>
      </div>';
    }
    else{
      echo '<div id="search_hint">
        <p>查詢不到相關資訊，請重新輸入關鍵字。</p>
      </div>';
    }
  }
  else if ($postType == 'all'){
    // for full-site search
    if($query->have_posts()){
      while($query->have_posts()) : $query->the_post();
        echo '<a href="'; the_permalink(); echo '">'; the_title();
        echo '</a>';
      endwhile;
    }
    else{
      echo "查詢不到相關資訊，請重新輸入關鍵字。";
    }
  }
  else{ // post category: event 
    if( $category[0] == '1-academy_lectures' || $category[0] == '2-study_group' || $category[0] == 'event'){
      if($query->have_posts()){
        echo '<div class="event-cards">'; 
        while($query->have_posts()) : $query->the_post();
          get_template_part('template-parts/post_events_card');
        endwhile;
        echo '</div>';
      }
    }
    else{ //post category: news
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
  wp_reset_postdata();
  die();
} 
?>

<?php /* create custom post type called "papers"*/
// Creating a Deals Custom Post Type
function paper_custom_post_type() {
	$labels = array(
		'name'                => __( 'Papers' ),
		'singular_name'       => __( 'Paper'),
		'menu_name'           => __( '歷屆論文'),
		'parent_item_colon'   => __( 'parent Paper'),
		'all_items'           => __( '所有論文'),
		'view_item'           => __( 'View Paper'),
		'add_new_item'        => __( 'Add New Paper'),
		'add_new'             => __( '新建歷屆論文'),
		'edit_item'           => __( 'Edit Paper'),
		'update_item'         => __( 'Update Paper'),
		'search_items'        => __( 'Search Paper'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'papers'),
		'description'         => __( '歷屆論文資料'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'author', 'thumbnail', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
    'menu_position' => 5,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	  'yarpp_support'       => true,
		'taxonomies' 	      => array('papers_cat'),
		'publicly_queryable'  => true,
);
	register_post_type( 'papers', $args );
}
add_action( 'init', 'paper_custom_post_type', 0 );
?>

<?php // Let us create Taxonomy for Custom Post Type
add_action( 'init', 'create_paper_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function create_paper_custom_taxonomy() {
  $labels = array(
    'name' => _x( '論文分類', 'taxonomy general name' ),
    'singular_name' => _x( '論文分類', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( '所有分類' ),
    'parent_item' => __( '上層分類' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( '編輯分類' ), 
    'update_item' => __( '更新分類' ),
    'add_new_item' => __( '新增分類' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( '論文分類' ),
  ); 	
 
  register_taxonomy('papers_cat',array('papers'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
  ));
}
?>

<?php
/**
 * This function modifies the main WordPress query to include an array of 
 * post types instead of the default 'post' post type.
 *
 * @param object $query The main WordPress query.
 */
/*function tg_include_custom_post_types_in_search_results( $query ) {
    if ( $query->is_main_query() && $query->is_search() && ! is_admin() ) {
        $query->set( 'post_type', array( 'post', 'papers') );
    }
}
add_action( 'pre_get_posts', 'tg_include_custom_post_types_in_search_results' ); */
?>

<?php
/**
 * Extend WordPress search to include custom fields
 *
 * https://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;

    if (is_search()) {    
      $join .= ' LEFT JOIN '. $wpdb->postmeta . ' AS post_metas ON ' . $wpdb->posts . '.ID = post_metas.post_id ';
    }
    //$join .= ' LEFT JOIN '. $wpdb->postmeta . ' AS post_metas ON ' . $wpdb->posts . '.ID = post_metas.post_id ';
    //echo $join;
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;

    if (is_main_query() && is_search()) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (post_metas.meta_value LIKE $1)", $where );
        //echo $where;
    }
    /*$where = preg_replace(
      "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
      "(".$wpdb->posts.".post_title LIKE $1) OR (post_metas.meta_value LIKE $1)", $where );*/
    //echo $where;
    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if (is_search() ) {
        return "DISTINCT";
    }
    //return "DISTINCT";
    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );
?>
