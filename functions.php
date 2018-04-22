<?php
		add_theme_support( 'post-thumbnails' );

	add_action('wp_enqueue_scripts', function(){
		wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), null, true );		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() .'/style.css', array( 'sp-core-style' ), filemtime(get_stylesheet_directory() .'/style.css') );	});


	add_action( 'sp_copyright', function(){
	?>	
		<div class="copyright text-center grey-text"><small><i class="fa fa-copyright"></i> 2018 All Rights Reserved. Powered by Sputznik.</small></div>
	<?php
	});
	
	/* CHANGE THE ATTRIBUTES PASSED TO THE NAVIGATION MENU */
	add_filter('sp_nav_menu_options', function( $sp_nav_menu_options ){
		
		global $sp_customize;
		
		$header_type = $sp_customize->get_header_type();
		
		/* CHANGE ONLY IF HEADER TYPE IS 2 */
		if( $header_type == 'header2' ){
		
			$sp_nav_menu_options['container_class'] = 'collapse navbar-collapse';
			$sp_nav_menu_options['container_id']    = 'bs-example-navbar-collapse-1';
			$sp_nav_menu_options['menu_class']      = 'nav navbar-nav navbar-right top-buffer text-uppercase';
		
		}	
		return $sp_nav_menu_options;
	});
		
	add_filter('posts_query_atts', function( $atts ){
	$atts['title'] = '';
	return $atts;
});

function custom_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function doctype_opengraph($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');
function fb_opengraph() {
    global $post;
 
    if(is_single()) {
        if(has_post_thumbnail($post->ID)) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium');
        } else {
            $img_src = get_stylesheet_directory_uri() . '/img/opengraph_image.jpg';
        }
        if($excerpt = $post->post_excerpt) {
            $excerpt = strip_tags($post->post_excerpt);
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = get_bloginfo('description');
        }
        ?>
 
    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src[0]; ?>"/>
 
<?php
    } else {
        return;
    }
}
add_action('wp_head', 'fb_opengraph', 5);