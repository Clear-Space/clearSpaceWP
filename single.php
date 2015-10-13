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
				<?php the_field('section_1_paragraph') ?>
			</div>
		</section>	<!-- end .section_1 -->
	



		  <!-- SLIDER STARTS -->
		 
		 <div class="Wallop Wallop--slide">

		   <div class="Wallop-list">


			
			<?php 

			// check if the repeater field has rows of data
			if( have_rows('slider_repeater') ):

			 	// loop through the rows of data
			    while ( have_rows('slider_repeater') ) : the_row();

			// vars

			$sliderImageURL = get_sub_field('slide');

				?>

				 <div class="Wallop-item" id="Wallop-item">
		      	<img src="<?php echo $sliderImageURL; ?>" alt="">
		     </div>



			    <?php endwhile; ?>

			<?php endif; ?>



		    



		     <div class="Wallop-buttonPrevious"></div>
		     <div class="Wallop-buttonNext"></div>
		   </div>
		  
		 </div>




		<section class="section_3">
			<h2><?php the_field('brand_positioning') ?></h2>
			<p><?php the_field('brand_positioning_p') ?></p>
			

		<div class="section_100">
			<?php 

			// check if the repeater field has rows of data
			if( have_rows('100_width') ):

			 	// loop through the rows of data
			    while ( have_rows('100_width') ) : the_row();

			// vars

			$image100 = get_sub_field('100_width');

				?>

				<div class="images_100">
					<img src="<?php echo $image100; ?>" alt="">
				</div>

			    <?php endwhile; ?>

			<?php endif; ?>
		</div>	

		<div class="section_50">
			<?php 

			// check if the repeater field has rows of data
			if( have_rows('50_width') ):

			 	// loop through the rows of data
			    while ( have_rows('50_width') ) : the_row();

			// vars

			$image50 = get_sub_field('50_width');

				?>

				<div class="images_50">
					<img src="<?php echo $image50; ?>" alt="">
				</div>

			    <?php endwhile; ?>

			<?php endif; ?>
		</div>	

		<div class="section_33">
			<?php 

			// check if the repeater field has rows of data
			if( have_rows('33_width') ):

			 	// loop through the rows of data
			    while ( have_rows('33_width') ) : the_row();

			// vars

			$image33 = get_sub_field('33_width');

				?>

				<div class="images_33">
					<img src="<?php echo $image33; ?>" alt="">
				</div>

			    <?php endwhile; ?>

			<?php endif; ?>
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


<script>
function navCheck () {
	if ($( "div.Wallop-item--current > div.exampleClass > div" ).hasClass("homeTextBlockBlack" )) {
    $("nav.mobilenav").attr('id', 'black_menu');
  } else {
    $("nav.mobilenav").attr('id', 'white_menu');
  };

  if ($( "div.Wallop-item--current > div.exampleClass > div" ).hasClass("homeTextBlockBlack" )) {
    $("h1.site-title").attr('id', 'black_logo');
    console.log("Black logo");
  } else {
    $("h1.site-title").attr('id', 'white_logo');
    console.log("White Logo");
  };
}

navCheck();
	
</script>

<?php get_footer('work'); ?>
