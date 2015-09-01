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
			<?php

			// check if the repeater field has rows of data
			if( have_rows('home_repeater') ):



			 	// loop through the rows of data
			    while ( have_rows('home_repeater') ) : the_row(); ?>
				
				<a href="<?php the_sub_field('link_url')?> " target="_blank" class="linkWrapper">
					<div class="exampleClass" style="background-image:url('<?php the_sub_field('image_url') ?>')"> 

					<img src="<?php the_sub_field('image_url') ?>" alt="">

					<div class="homeTextBlock">

						<h2>	<?php  the_sub_field('header1');  ?> </h2>

						<h3> <?php  the_sub_field('header2');  ?> </h3>

						<div class="plusSign"></div>

				</div>        
					</div> 
			</a>		
   


			  <?php endwhile; ?>

			<?php endif; ?>

</div> <!-- end .homeParent -->



 // <script>
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

<?php get_footer(); ?>


