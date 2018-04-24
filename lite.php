<?php /* Template Name: Lite */ ?>	
<html>
	<body>
		<div style="text-align:center; margin-top: 2em;">
			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
		</div>
	</body>
</html>