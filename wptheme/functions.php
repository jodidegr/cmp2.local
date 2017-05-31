<?php

/** INLADEN SCRIPTS **/
function add_theme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.1','all' );
    wp_enqueue_style( 'style', get_stylesheet_uri());

    wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/vendor/jquery.js', array(), 1.1, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/vendor/bootstrap.min.js', array('jquery'), 1.1, true );
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/main.js', array('jquery'), 1.1, true );
    }

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' ) ;   
/** END INLADEN SCRIPTS **/

/** LOGO UPLOAD HEADER **/
function zonderzorgen_custom_logo_setup() {
    $defaults = array(
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'zonderzorgen_custom_logo_setup' );
/** END LOGO UPLOAD HEADER **/  

/** SIDEBAR **/

if(function_exists('register_sidebar'))
  register_sidebar(
    array(
      'name'                => 'sidebar-left',
      'before_widget'       => '<li id="%1$s" class="widget %2$s">',
      'after_widget'        => '</li>',
      'before_title'        => '<p class="widgettitle">',
      'after_title'         => '</p>',
    )   
  );
  register_sidebar( array(
    'name' => 'sidebar-right',
    'before_widget'       => '<li id="%1$s" class="widget %2$s">',
      'after_widget'        => '</li>',
      'before_title'        => '<p class="widgettitle">',
      'after_title'         => '</p>',
      ) 
    );

/** END SIDEBAR **/

/** MENU AANMAKEN **/
function register_menu_locations() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary menu'),
        'footer-menu'  => __( 'Footer menu'),
      )
    );
  }
  add_action( 'init', 'register_menu_locations' );
  /** END MENU AANMAKEN **/

  /** CUSTOM POST TYPE BLOG **/
function add_my_custom_posttype_blog(){
  //LABELS DIFINIËREN
    $labels = array(
        'add_new' => 'Voeg nieuw blogbericht toe',
        'add_new_item' => 'Voeg nieuw blogbericht toe',
        'name' => 'Blog',
        'singular_name' => 'Blog',
    );
  //ARGUMENTEN DIFINIËREN
	$args = array(
		'labels' => $labels, // de array labels van hier boven linken aan het argument labels
		'Description' => 'Blogberichten toevoegen aan de pagina Blog',
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-media-document', //Een icoon kiezen
		'supports' => array('title', 'editor','comments'),
        'has_archive' => true, //Maak een archief aan (opsomming van alle elementen), anders gaan we archive-blog.php nooit kunnen aanspreken.
        'taxonomies'    => array('category'),
	);
	register_post_type( 'blogpagina', $args ); 
}
add_action( 'init', 'add_my_custom_posttype_blog' );
  /** END CUSTOM POST TYPE BLOG **/

    /** CUSTOM POST TYPE BIEREN **/
function add_my_custom_posttype_bieren(){
  //LABELS DIFINIËREN
    $labels = array(
        'add_new' => 'Voeg nieuw biertje toe',
        'add_new_item' => 'Voeg nieuw biertje toe',
        'name' => 'Bieren',
        'singular_name' => 'Bieren',
    );
  //ARGUMENTEN DIFINIËREN
	$args = array(
		'labels' => $labels, // de array labels van hier boven linken aan het argument labels
		'Description' => 'Bieren toevoegen aan de pagina Bieren',
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-editor-bold', //Een icoon kiezen
		'supports' => array('title', 'editor','comments'),
        'has_archive' => true, //Maak een archief aan (opsomming van alle elementen), anders gaan we archive-blog.php nooit kunnen aanspreken.
        'taxonomies'    => array('category'),
	);
	register_post_type( 'bieren', $args ); 
}
add_action( 'init', 'add_my_custom_posttype_bieren' );
  /** END CUSTOM POST TYPE BIEREN **/


?>