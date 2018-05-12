<nav class="navbar header2">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle top-buffer" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php do_action('sp_logo');?>
			<div class='clearfix'></div>
			<div>TAGLINE HERE COME HERE</div>
		</div>
		
		<?php do_action('sp_nav_menu');?>

	</div>
	<!-- /.container-fluid --> 
</nav>

<style>
	
	.logo{
		min-height: 80px;
	}
	
	.logo .hidden-xs{
		max-width: 400px;
	}
	
	@media( max-width: 1200px ){
		.logo .hidden-xs{
			max-width: 350px;
		}
	}
	
	@media( max-width: 1090px ){
		.logo .hidden-xs{
			max-width: 320px;
		}
	}
	
</style>