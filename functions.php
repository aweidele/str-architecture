<?php
/*
ADVANCED CUSTOM FIELDS
*/
include_once('includes/custom-fields.php');

/*
ENQUEUE SCRIPTS AND STYLES
*/
function str_enqueue_styles() {
  wp_enqueue_style( 'str_fonts',
      '//fonts.googleapis.com/css?family=Libre+Franklin:300,300i,600,600i|PT+Sans+Narrow:700'
  );

  wp_enqueue_style( 'str_main_style',
      get_stylesheet_directory_uri() . '/css/str.css'
  );

  wp_enqueue_script( 'str_main_script',
      get_stylesheet_directory_uri() . '/js/str.js',
      array('jquery'),
      wp_get_theme()->get('Version'),
      true
  );
}
add_action( 'wp_enqueue_scripts', 'str_enqueue_styles' );

/*
ADD IMAGE SIZES
*/
add_image_size('STR Slider',999999,650);
add_image_size('image_module_content',521,9999999);
add_image_size('image_module_medium',860,9999999);
add_image_size('image_module_full',1200,9999999);

/*
ADD MENUS
*/
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
  //register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}

/*
CREATE CUSTOM POST TYPE FOR SLIDER
*/
function create_sider_post_type() {
  $labels = array(
    'name'                => _x('Project Sliders', 'post type general name'),
    'singular_name'       => _x('Project', 'post type singular name'),
    'archives'            => __( 'Projects' ),
    'add_new'             => _x('Add New Project', 'portfolio item'),
    'add_new_item'        => __('Add New Project'),
    'edit_item'           => __('Edit Project'),
    'new_item'            => __('New Project'),
    'view_item'           => __('View Project'),
    'search_items'        => __('Search Projects'),
    'not_found'           =>  __('Nothing found'),
    'not_found_in_trash'  => __('Nothing found in Trash'),
    'parent_item_colon'   => ''
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'query_var'           => true,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'menu_position'       => null,
    'menu_icon'           => 'dashicons-camera',
    'supports'            => array('title'),
    'has_archive'         => true,
  );

  register_post_type( 'str-slider' , $args );

}
add_action( 'init', 'create_sider_post_type' );

/*
THEME CUSTOMIZATION SETTINGS
*/
function mytheme_customize_register( $wp_customize ) {

  // ADD OPTIONS
	$wp_customize->add_setting( 'theme_logo'    , array('transport' => 'refresh','type' => 'option'));

  /// ADD CONTROLS
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_logo', array(
    'label' => 'Upload Logo',
    'section' => 'title_tagline',
    'settings' => 'theme_logo',
  ) ) );

}
add_action( 'customize_register', 'mytheme_customize_register' );
