<div id="myCarousel" class="carousel slide " data-ride="carousel">
	<ol class="carousel-indicators">
		<?php for($i = 0; $i< $this->query->post_count; $i++): ?>
		<li data-target="#myCarousel" data-slide-to="<?php _e( $i );?>" <?php if( $i == 0):?>class="active"<?php endif;?>></li>
		<?php endfor;?>
	</ol>
	
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
	<?php $index = 0;while( $this->query->have_posts() ) : $this->query->the_post();?>
		
		<?php 
			$image = '';
			if( has_post_thumbnail( $this->query->post->ID ) ){ 
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $this->query->post->ID ), 'single-post-thumbnail' );
				$image = $image[0];
			}
		?>	
		
		<div class="item <?php if ($index == 0) { echo ' active'; } ?>" style="background-image:url('<?php echo $image; ?>')">
			<div class="carousel-caption col-md-7">
				<h2 class=" top-buffer">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>
			</div>
		</div>

	<?php $index++; endwhile; ?>
	</div>
</div>