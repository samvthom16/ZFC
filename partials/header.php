<nav class="navbar header2">
	<div class="container-fluid">
			<div class="navbar-header">
			<div class="navbar-left">
				<?php do_action('sp_logo');?>
			<span><?php echo get_bloginfo( 'description', 'display' );?> </span>
			</div>
			<div class="nav navbar-nav navbar-right">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<?php do_action('sp_nav_menu');?>
	</div>
	</div>
	<!-- /.container-fluid --> 
</nav>