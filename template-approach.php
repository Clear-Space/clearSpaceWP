<?php

/* Template Name: Approach Template */



?>




<?php get_header('approach'); ?>

<div class="section_1_p"><?php the_field('section_1_p') ?></div>

<section class="section_1">

	<div class="section_1_left">
		<h2><?php the_field('section_1_h2') ?></h2>
	</div>

	<div class="section_1_right">
		<div class="section_1_p">
			<?php the_field('section_1_p'); ?>
		</div>
	</div>

</section> <!-- end .section_1 -->

<section class="section_2">'
	<div class="section_2_left">
		<h2><?php the_field('section_2_h2'); ?></h2>
	</div>
	<div class="section_2_right">
		<h2><?php the_field('section_2_right_h2'); ?></h2>
		
		<!-- begin section_2_paragraphs repeater -->
		<?php 

		// check if repeater has stuff
		if( have_rows('section_2_paragraphs') ):

		 	// loop through stuff
		  while ( have_rows('section_2_paragraphs') ) : the_row();

		// vars

			$paragraph_copy = get_sub_field('paragraph_copy');
			$paragraph_header = get_sub_field('paragraph_header');

			?>

		<div class="section_2_paragraphs">
			<div class="paragraphBlock">
				<h2><?php echo $paragraph_header; ?></h2>
				<?php echo $paragraph_copy; ?>
			</div>



			</div> <!-- end .section_2_paragraphs -->

		  <?php endwhile; ?>

				<?php endif; ?>


	</div> <!-- end .section_2_right -->

</section> <!-- end .section_2 -->

<section class="section_3">
	<div class="section_3_right">
		<h2><?php the_field('section_3_h2'); ?></h2>
		<p><?php the_field('section_3_p') ?></p>
	</div>

	
	<!-- begin section_3_lists repeater -->
			<?php 

			// check if repeater has stuff
			if( have_rows('section_3_lists') ):

			 	// loop through stuff
			  while ( have_rows('section_3_lists') ) : the_row();

			// vars

				$list_items = get_sub_field('list_items');
				$list_header = get_sub_field('list_header');

				?>
			
			<div class="listBlock">
				<h2><?php echo $list_header; ?></h2>
				<?php echo $list_items; ?>
			</div>




			  <?php endwhile; ?>

					<?php endif; ?>



</section>





<?php get_footer(); ?>



	