<?php get_header();?>
<?php global $post;?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<?php if(have_posts()):while ( have_posts() ) : the_post();?> 
			<h1 class="post-title"><strong><?php the_title_attribute(); ?></strong></h1>
			<p class="text-muted">Meta: <?php echo get_the_excerpt(); ?></p>
			<div class="media-left">
				<a href="<?php bloginfo('url');?>" class="rounded">
					<?php echo get_avatar(32); ?>
				</a>
			</div>
			<div class="media-body text-left">
				<span class="media-heading"><?php the_author_posts_link(); ?></span>
				<div class="post-date"><?php echo get_the_date( 'M d' ); ?></div>
			</div>
			<div class="top-buffer bottom-buffer">
				<span class="twitter-blue rounded"><i class="fa fa-lg fa-twitter"></i></span>
				<span class="fb-blue rounded"><i class="fa fa-lg fa-facebook"></i>
			</div>
		</div>
		<div class="col-md-5">
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<div class="card-img overlay bottom-buffer" style="background-image:url(<?php echo $image[0]?>);" rel="bookmark" title="<?php the_title_attribute(); ?>"></div>
			<?php endif; ?>
		</div>
		<div class="col-md-10 col-md-offset-1 top-buffer">
			<?php the_content(); ?>
			<?php endwhile;endif;?>
		</div>
		<div class="col-md-12 no-gutter">
			<hr class="bottom-buffer">
			<small class="text-muted col-md-12 bottom-buffer">READ NEXT</small>
				<?php   global $post;
				 $current_post = $post; // remember the current post

					  for($i = 1; $i <= 3; $i++):
						$post = get_previous_post(); // this uses $post->ID
					  setup_postdata($post);?>

					<div class="col-md-4">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
						  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<a href="<?php the_permalink(); ?>" class="card-img overlay bottom-buffer" style="background-image:url(<?php echo $image[0]?>);" rel="bookmark" title="<?php the_title_attribute(); ?>"></a>
						<?php endif; ?>
					<h3><strong><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></strong></h3>
					<p class="text-muted"><?php echo  get_the_excerpt(); ?></p>
				</div>
					 <?php   endfor;
						$post = $current_post; 

						?>
		</div>
	</div>
</div>
<?php get_footer();?>