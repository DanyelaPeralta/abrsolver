<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title><?php bloginfo('name'); ?></title>
		
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
		
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="refresh" content="60000">
		<link href="https://fonts.googleapis.com/css?family=Red+Hat+Text&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Source+Sans+Pro&display=swap" rel="stylesheet">
		
		<script src="https://kit.fontawesome.com/744867eca3.js"></script>
		<style> 
			
			
			
		</style>

		
        <?php wp_head(); ?>
		
    </head>
<body>
	
<!--******************* BARRA GRIS*******************************-->

	<div class="row bg_footer">
		<div class="col-md-9 mx-auto pt-3">
			
			<div class="row">
				<div class="col-md-3 px-1 mx-auto pr-5">
				
					
		 		</div>
				
				
			
				<div class="col-md-2 px-1 mx-auto">
				<p class="texto-blanco mr-1 p-nav"><i class="fas fa-phone-alt mr-1"></i> +56 9 32706365 </p>
		 	    </div>
				
				<div class="col-md-3 px-1 mx-auto">	
				<p class="texto-blanco mr-1 p-nav"> <i class="fas fa-map-marker-alt mr-1"></i>Huérfanos 1160, Oficina 1101, Santiago Centro </p>
				</div>
				
				<div class="col-md-2 px-1 mx-auto">	
				<p class="texto-blanco mr-1 p-nav"><i class="fas fa-envelope-open mr-1"></i>victor.vera@abrsolver.cl </p>
				</div>
				
			
				<div class="col-md-2 px-1 mx-auto">
				<p class="texto-blanco mr-1 p-nav"><i class="fas fa-globe mr-1"></i> www.abrsolver.cl </p>
		 	</div>
		
			
		
				
				
			
			</div>
			
			
	</div>
	
	
	</div><!--cierre row-->
	
<!--******************* NAV *******************************-->
	
	
		    <?php $custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' ); ?>	
	
	
	
			<div class="px-10 navbar navbar-light bg-white navbar-expand-lg justify-content-between sticky-top shadow">
				
		

		    <a class="navbar-brand logo" href="<?php echo home_url() ?>">
			 <?php echo $custom_logo ?>
				
			</a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <?php
			  wp_nav_menu( array(
				  'theme_location'  => 'menu',
				  'depth'           => 2,
				  'container'       => 'div',
				  'container_id'    => 'navbarNavDropdown',
				  'container_class' => 'collapse navbar-collapse',
				  'menu_class'      => 'nav navbar-nav ml-auto',
				  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				  'walker'          => new WP_Bootstrap_Navwalker()  ) ); ?>
			</nav>

</div>