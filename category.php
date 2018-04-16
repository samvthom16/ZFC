<?php get_header();?>
	<div class="container-fluid">
		<h2><strong><?php _e(single_cat_title( '', false ));?></strong></h2>
		<small class="text-muted">Text</small>		
		<hr>
		<small class="bottom-buffer"><strong class="text-muted">Related Topics: </strong>
		<?php
			$posttags = get_the_tags();
			if ($posttags) {
				foreach($posttags as $tag) {					
					echo $sep . '<a href="'.get_tag_link($tag->term_id).'" > '.$tag->name.'</a>';
					$sep = ', ';
				}
			}
		?>	
		</small>
			<?php $i=0; ?>
			<?php if(have_posts()):while ( have_posts() ) : the_post();?> 
			<?php $i++; ?>
		<div class="media">
		  <div class="media-left pad-left">		  
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<a href="<?php the_permalink(); ?>" class="card-img media-object bottom-buffer wd-300" style="background-image:url(<?php echo $image[0]?>);" rel="bookmark" title="<?php the_title_attribute(); ?>"></a>
			<?php endif; ?>
		  </div>
		  <div class="media-body">
			<h4 class="media-heading"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
			<div class="top-buffer bottom-buffer">
				<span class="twitter-blue rounded"><i class="fa fa-lg fa-twitter"></i></span>
				<span class="fb-blue rounded"><i class="fa fa-lg fa-facebook"></i>
			</div>
			<?php the_excerpt(); ?>
			<button data-toggle="collapse" data-target="#demo<?=$i?>" class="glyphicon collapsed bottom-buffer collapse-button"></button>
			<div id="demo<?=$i?>" class="collapse">
				<?php the_content(); ?>
			</div>
		  </div>
		</div>
		
    <?php endwhile;endif;?>
	</div>
	
<?php get_footer();?>