<?php
		add_theme_support( 'post-thumbnails' );

	add_action('wp_enqueue_scripts', function(){		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() .'/style.css', array( 'sp-core-style' ), filemtime(get_stylesheet_directory() .'/style.css') );	});


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
		
	