<?php//require_once('wp_bootstrap_navwalker.php');
require_once('customize-theme.php');

add_theme_support( 'post-thumbnails' );

/**registering nav menu*/
function register_my_menus() {  register_nav_menus(    array(		'primary' => __( 'Header Navigation', 'zfc' ),  		'secondary' => __('Footer Navigation', 'zfc')    )  );}add_action( 'init', 'register_my_menus' );

/*remove extra <p> and <br> tags*/
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/* load javascript */
function load_js() {
	/*wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), null, true);
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true );
	wp_enqueue_script( 'boostrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );	wp_enqueue_script('zfc-font-awesome', 'https://use.fontawesome.com/releases/v5.0.7/js/all.js', false );	//enqueue style	wp_enqueue_style('zfc-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', false, get_stylesheet_directory() . '/css/bootstrap.min.css' );	wp_enqueue_style('zfc-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat|Cardo', false );	wp_enqueue_style('zfc-google-fonts', 'https://fonts.googleapis.com/css?family=Noto+Serif', false );*/	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() .'/style.css', false, filemtime(get_stylesheet_directory() .'/style.css') );
}
add_action('wp_enqueue_scripts', 'load_js');


add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    
    register_sidebar( array('name' => 'Footer Sidebar 1','id' => 'footer-sidebar-1','description' => 'Appears in the footer area','before_widget' => '<aside id="%1$s" class="widget %2$s">','after_widget' => '</aside>','before_title' => '<h3 class="widget-title">','after_title' => '</h3>',) );register_sidebar( array('name' => 'Footer Sidebar 2','id' => 'footer-sidebar-2','description' => 'Appears in the footer area','before_widget' => '<aside id="%1$s" class="widget %2$s">','after_widget' => '</aside>','before_title' => '<h3 class="widget-title">','after_title' => '</h3>',) );register_sidebar( array('name' => 'Footer Sidebar 3','id' => 'footer-sidebar-3','description' => 'Appears in the footer area','before_widget' => '<aside id="%1$s" class="widget %2$s">','after_widget' => '</aside>','before_title' => '<h3 class="widget-title">','after_title' => '</h3>',) );register_sidebar( array('name' => 'Footer Sidebar 4','id' => 'footer-sidebar-4','description' => 'Appears in the footer area','before_widget' => '<aside id="%1$s" class="widget %2$s">','after_widget' => '</aside>','before_title' => '<h3 class="widget-title">','after_title' => '</h3>',) );
}add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);function enqueue_child_theme_styles() {  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );}
?>
