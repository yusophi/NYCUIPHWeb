
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
      'description'   => '實驗室成員資料',
      'public'        => true,
      'taxonomies'    => array('recordings', 'category'),
      'menu_position' => 5,
      'reweite'       => false,
      'has_archive'   => false,
      'supports'      => array( 'title', 'editor', 'thumbnail')
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
  add_image_size( 'hp-interview-img-thumb', 200, 200, array( 'center', 'top' ) ); // Hard crop x:center y:top
  add_image_size( 'hp-interview-img-thumb1', 250, 250, array( 'left', 'top' ) ); // Hard crop x:center y:top
  
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
    wp_enqueue_style('mytheme_homepage_style', get_theme_file_uri('css/homepage.css')); 
    wp_enqueue_style('mytheme_footer_style', get_theme_file_uri('css/footer.css')); 
    wp_enqueue_style('mytheme_backtoTOP_style', get_theme_file_uri('css/backtoTOP.css'));
    wp_enqueue_style('mytheme_postSmall_style', get_theme_file_uri('css/element-postSmall.css'));
    wp_enqueue_style('mytheme_singlepost_style', get_theme_file_uri('css/singlepost.css'));
    wp_enqueue_style('mytheme_page-news_style', get_theme_file_uri('css/news.css')); 
    wp_enqueue_style('mytheme_page-about_style', get_theme_file_uri('css/about.css')); 
  } 
  add_action('wp_enqueue_scripts', 'mytheme_style_files');
?>