<?php global $post_id;?>
	<?php 
    	
    	/* check if it has a separate banner image for banner */
    	if(is_single()){
    		//$img = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
    		
    		
    		$img = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'banner-image', $post_id, null);
    		
    		/*
    		if($banner_img){
    			$img = $banner_img;
    		}
    		*/
    	}
		
		$header = get_option('hn_header');
		
?>
