<?php
/**
 * The template for displaying all single posts.
 *
 * @package styl_s
 */

get_header('workInterior'); ?>

	<div id="primary" class="">
		<main id="main" class="site-main" role="main">

		<section class="section_1">
			<div class="section_1_left">
				<h3>
					<?php the_field('project_scope') ?>
				</h3>	
				<p>
					<?php the_field('project_scope_list') ?>
				</p>
			</div>

			<div class="section_1_right">
				<h1>
					<?php the_field('section_1_h1') ?>
				</h1>
				<h2>
					<?php the_field('section_1_h2') ?>
				</h2>
				<p><?php the_field('section_1_paragraph') ?></p>
			</div>
		</section>	<!-- end .section_1 -->



		  <!-- SLIDER STARTS -->
		 
		 <div class="Wallop Wallop--fade">

		<!--  <img src="http://clearspace.dev/wp-content/uploads/2015/09/investGraphic.jpg" alt=""> -->
		   <div class="Wallop-list">
		     <div class="Wallop-item Wallop-item--current">
		       <img src="http://fillmurray.com/400/200" />
		     </div>
		     <div class="Wallop-item">
		       <img src="http://fillmurray.com/300/200" />
		     </div>
		     <div class="Wallop-item">
		       <img src="http://fillmurray.com/300/200" />
		     </div>
		     <div class="Wallop-buttonPrevious">Previous</div>
		     <div class="Wallop-buttonNext">Next</div>
		   </div>
		  
		 </div>




		<section class="section_3">
			<h2><?php the_field('brand_positioning') ?></h2>
			<p><?php the_field('brand_positioning_p') ?></p>
			

		<div class="largeImages">
			<?php 

			// check if the repeater field has rows of data
			if( have_rows('large_image_repeater') ):

			 	// loop through the rows of data
			    while ( have_rows('large_image_repeater') ) : the_row();

			// vars

			$largeImageUrl = get_sub_field('large_image');

				?>

				<div class="largeImage">
					<img src="<?php echo $largeImageUrl; ?>" alt="">
				</div>

			    <?php endwhile; ?>

			<?php endif; ?>
		</div>	
		<div id="container">	
			<div class="masonry_grid">
				<div class="item"></div>
			</div>

			<?php 

			// check if the repeater field has rows of data
			if( have_rows('masonry_repeater') ):

			 	// loop through the rows of data
			    while ( have_rows('masonry_repeater') ) : the_row();

			// vars

			$imageUrl = get_sub_field('masonry_item');
			// $textUrl = get_sub_field('masonry_item2');

				?>

				<div class="item">
					<img src="<?php echo $imageUrl; ?>" alt="">
				</div>
				<!-- <div class="item"><p><?php echo $textUrl ?></p></div> -->
			    <?php endwhile; ?>

			<?php endif; ?>

		</div> <!-- end #container -->	

	

			<div class="body_pull_quote">

				<h2><?php the_field('body_pull_quote') ?></h2>
				<p><?php the_field('body_pull_quote_p') ?></p>
			</div>
		</section>

		<section class="testimonial">

			<div class="testimonialBlock">
				<h2><?php the_field('testimonial_quote') ?></h2>
				<p><span><?php the_field('testimonial_author') ?></span> <?php the_field('testimonial_job_title') ?></p>
				<p class="testimonialClient"><?php the_field('testimonial_client') ?></p>
			</div> <!-- end .testimonialBlock -->	
		</section>



		
		


		</main><!-- #main -->
	</div><!-- #primary -->

	<script type="text/javascript">
	     
	     $(window).load(function() {
	     
	   // MASSONRY Without jquery
	   var container = document.querySelector('#container');
	   var msnry = new Masonry( container, {
	     itemSelector: '.item',
	     columnWidth: '.item',                
	   });  
	   
	     });

	   
	 </script>



<?php get_footer('work'); ?>
