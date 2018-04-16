<div id="myCarousel" class="carousel slide " data-ride="carousel">
	<!--ol class="carousel-indicators">
		<?php for($i = 0; $i< $this->query->post_count; $i++): ?>
		<li data-target="#myCarousel" data-slide-to="<?php _e( $i );?>" <?php if( $i == 0):?>class="active"<?php endif;?>></li>
		<?php endfor;?>
	</ol-->
	
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
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
				<h2>
					<?php the_title_attribute(); ?>
					<p><a href="<?php the_permalink(); ?>" class="top-buffer btn-lg btn btn-default" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
				</h2>
			</div>
		</div>

	<?php $index++; endwhile; ?>
	</div>
</div>