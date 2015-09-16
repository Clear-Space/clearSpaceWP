<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package styl_s
 */

get_header('home'); ?>

	<div id="primary">
		<main id="main" class="site-main" role="main">
			
			<div class="homeParent">
		
				
					


				
					
   			<div class="Wallop Wallop--fade">
   			  <div class="Wallop-list">

					<?php

					// check if the repeater field has rows of data
					if( have_rows('home_repeater') ):



					 	// loop through the rows of data
					    while ( have_rows('home_repeater') ) : the_row(); ?>
						

   			    <div class="Wallop-item">
						
						<div class="exampleClass" style="background-image:url('<?php the_sub_field('image_url') ?>')"> 

							<div class="homeTextBlock">
								<a href="<?php the_sub_field('link_url')?> " target="_blank" class="linkWrapper">

									<h2>	<?php  the_sub_field('header1');  ?> </h2>

									<h3> <?php  the_sub_field('header2');  ?> </h3>
								</a>	
	   			    </div>

					</div>
							</div>

	  <?php endwhile; ?>

			<?php endif; ?>

					  <div class="Wallop-buttonPrevious">PreviousPreviousPreviousPreviousPrevious</div>
		  <div class="Wallop-buttonNext">NextNextNextNextNextNext</div>
   			 
   		


			

</div> <!-- end .homeParent -->


</div>        
					</div> 


  <script>
 // function checkWidth() {
 //     if ($(window).width() > 650) {
 //         $('.linkWrapper').addClass('gallery-cell');
 //         $('.homeParent').addClass('gallery js-flickity');
 //     } else {
 //         $('.linkWrapper').removeClass('gallery-cell');
 //         $('.homeParent').removeClass('gallery js-flickity flickity-enabled is-draggable');
 //     }
 // }

 // $(window).resize(checkWidth);

 // </script>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer('home'); ?>


