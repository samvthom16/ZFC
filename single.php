<?php get_header();?>
<?php global $post;?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php if(have_posts()):while ( have_posts() ) : the_post();?> 
			<h2 class="post-title top-buffer bottom-buffer"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<a href="<?php the_permalink(); ?>">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<div class="text-center bottom-buffer"><img class="img-responsive" src="<?php echo $image[0]; ?>" alt="" align="center" ></div>
			<?php endif; ?>
			</a>
			<?php the_content(); ?>
			<hr class="bottom-buffer">
			<?php endwhile;endif;?>
		</div>
	</div>
</div>
<?php get_footer();?>