<!-- INCLUDES -->
<?php
/*
Template Name: Inicio
*/
?>
 <!--******************* SLIDER *******************************-->
<?php get_header(); ?>
 <?php echo do_shortcode('[smartslider3 slider=3]');?>
<div class="container-fluid">
		

	
<!--******************* BANNER NARANJO 1*******************************-->
<div class="row bg_naranjo">
			<div class="col-md-8 mx-auto pb-5 pt-5">
				<div class="row">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=banner&showposts=1&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-9 mx-auto text-center text-white">
						 
						  <p class="card-text text-white"><?php the_content();?></p>
						
						<div class="pt-3">
								<button type="button" class="btn btn-outline-light rounded-pill text_btn " href="<?php the_permalink(); ?>">R E A D  -  M O R E</button>
							</div>
						
					</div>
					
					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>				
				 </div>
			   </div>
			</div>

	
	
	
	
<!--******************* QUENES SOMOS *******************************-->	
	<div class="row">
			<div class="col-md-9 mx-auto my-5 py-5">
				<div class="row">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=somos&showposts=1&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-9 mx-auto text-center">
						  <h5 class="card-title text-center text-separacion"><?php the_title();?></h5>
						<div class="row">
							
						</div>	
						  <p class="card-text"><?php the_content();?></p>
						
					</div>
					
					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>				
				 </div>
			   </div>
			</div>

	
	
<!--******************* cards iconos*******************************-->	
	
	<div class="row pb-5">
			<div class="col-md-7 mx-auto">
				<div class="row">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=cards1&showposts=1&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-4 mx-auto text-white">
						  <div class="card mb-aling bg_negro px-3 pb-5 shadow">
								<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-icon mx-auto pt-3')); ?>
							  	 <h5 class="card-title text-center pt-2"><?php the_title();?></h5>
						  		 <p class="card-text"><?php the_content();?></p>
					
						  </div>
						
						<div class="card-img-overlay">
								<button type="button" class="btn btn-outline-light mb-b rounded-pill" href="<?php the_permalink(); ?>">R E A D  -  M O R E</button>
							</div>
						
						
					</div><!--cierre col-md-3-->

					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>		
					
					
					
					
					
					
					
					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=cards2&showposts=1&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-4 mx-auto text-white">
						  <div class="card mb-aling bg_naranjo px-3 pb-5 shadow">
								<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-icon mx-auto pt-3')); ?>
							  	 <h5 class="card-title text-center pt-2"><?php the_title();?></h5>
						  		 <p class="card-text"><?php the_content();?></p>
					
						  </div>
						
						<div class="card-img-overlay">
								<button type="button" class="btn btn-outline-light mb-b rounded-pill" href="<?php the_permalink(); ?>">R E A D  -  M O R E</button>
							</div>
						
						
					</div><!--cierre col-md-3-->

					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>	
					
					
					
					
					
					
					
					
					
					
					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=cards3&showposts=1&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-4 mx-auto text-white">
						  <div class="card mb-aling bg_gris px-3 pb-5 shadow">
								<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-icon mx-auto pt-3')); ?>
							  	 <h5 class="card-title text-center pt-2"><?php the_title();?></h5>
						  		 <p class="card-text"><?php the_content();?></p>
					
						  </div>
						
						<div class="card-img-overlay">
								<button type="button" class="btn btn-outline-light mb-b rounded-pill" href="<?php the_permalink(); ?>">R E A D  -  M O R E</button>
							</div>
						
						
					</div><!--cierre col-md-3-->

					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>	
					
					
					
					
					
					
				</div><!--cierre row-->
			</div><!--cierre col-md-10-->
		</div><!--cierre row-->

	
<!--******************* CATEGORIA EXPERIENCIA  *******************************-->
	
	
	<div class="row pb-5 bg-gris">
			<div class="col-md-10 mx-auto mt-5">
			<div class="row">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=experiencia&showposts=1&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-9 text-bl pl-5 mx-auto">
						<h5 class="card-title text-center"><?php the_title();?></h5> 
						<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-50')); ?>
						  
						  <p class="card-text gris"><?php the_content();?></p>
						
						 
						 
					</div><!--cierre col-md-3-->

					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>				
				</div><!--cierre row-->
			</div><!--cierre col-md-9-->
		</div><!--cierre row-->

	
<!--******************* SLIDER 2 *******************************-->
	

 <?php
echo do_shortcode('[smartslider3 slider=4]');
?>
	
	
<!--******************* BANNER NARANJO 2 *******************************-->	
	
	
	<div class="row bg_naranjo2">
			<div class="col-md-7 mx-auto pb-1 pt-1">
				<div class="row">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=banner2&showposts=1&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-8 mx-auto text-center text-white pt-4">
						 
						  <p class="card-text text-white"><?php the_content();?></p>
						</div>
					
						<div class="col-md-4 mx-auto text-center text-white pt-1">
						<div class="pt-5">
								<button type="button" class="btn btn-outline-light rounded-pill text_btn" href="<?php the_permalink(); ?>">R E A D  -  M O R E</button>
							</div>
						</div>
					
					
					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>				
				 </div>
			   </div>
			</div>
	
	
<!--******************* CONTACTO *******************************-->	

	<div class="row">
			<div class="col-md-4 mx-auto pb-1 pt-5">

					
					<div class="row">
						<div class="col-md-5 mx-auto text-center mt-3 mb-2">
						<h5> Contacto</h5>
						</div>
					</div><!--cierre row titulo contacto-->
					
			 		<div class="row">

					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=contacto&showposts=2&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-6 mx-auto text-center pt-4">
						
						<?php the_post_thumbnail('full', array ('class' => 'img-fluid w-50')); ?>
						
						<p class="card-text gris"><?php the_content();?></p>
						  
						</div>
					
						
					
					
					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>				
				 </div>
			   </div>
			</div>
	
	
<!--******************* FORMULARIO *******************************-->	
			
				
		<div class="row">
			<div class="col-md-10 mx-auto my-3">	
				<div class="row">
					<!-- LOOP DE WORDPRESS -->
					<?php if (have_posts()) : ?>
					<!-- Filtro de categorías -->
					<?php query_posts("category_name=formulario&showposts=3&order=DESC"); ?>
					<?php while (have_posts()) : the_post(); ?>


					<div class="col-md-6 mt-3 mx-auto ">
						
						<p><?php the_content(); ?></p>
						<?php the_field ('formulario') ?> 
					</div>


					<?php endwhile; ?> 
					<?php else : ?>  
					<?php endif; ?>
					<?php wp_reset_query(); ?>	
					
				</div>
			</div><!-- cierre col-md-10 -->			
		</div><!-- cierre row -->	
	
	
	
<!--******************* MAPA *******************************-->	
			
	
	
		   <div class="col-md-12 embed-responsive embed-responsive-16by9 iframe-alto full-width">
       
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.359632952517!2d-70.65531338547444!3d-33.43993578077696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5a43e7d04a9%3A0x3572cf206cfe5bde!2sHu%C3%A9rfanos%201160%2C%20Oficina%201101%2C%20Santiago%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1582729928697!5m2!1ses!2scl" width="1500" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        
        <!--cierre de mapa--> 
     	</div>
		
	
	
	
	
			</div><!--cierre container-fluid-->








<?php get_sidebar(); ?> 
<?php get_footer(); ?>