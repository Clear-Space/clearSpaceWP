<?php

/* Template Name: About Template */



?>




<?php get_header('about'); ?>

<div class="section_1_p"><?php the_field('section_1_p') ?></div>

<?php 

// check if repeater has stuff
if( have_rows('staff_profiles') ):

 	// loop through stuff
  while ( have_rows('staff_profiles') ) : the_row();
	// while ( have_rows('staff_quote') ) : the_row();
	// while ( have_rows('staff_name') ) : the_row();
	// while ( have_rows('staff_title') ) : the_row();
	// while ( have_rows('staff_paragraph') ) : the_row();
	// while ( have_rows('staff_connect') ) : the_row();
	// while ( have_rows('staff_phone') ) : the_row();
	// while ( have_rows('staff_email') ) : the_row();

// vars

	$staff_image = get_sub_field('staff_image_url');
	$staff_quote = get_sub_field('staff_quote');
	$staff_name = get_sub_field('staff_name');
	$staff_title = get_sub_field('staff_title');
	$staff_paragraph = get_sub_field('staff_paragraph');
	$staff_connect = get_sub_field('staff_connect');
	$staff_connect = get_sub_field('staff_phone');
	$staff_email = get_sub_field('staff_email');

	?>

<section class="staffSection">
	<div class="staffLeft">
		<div class="staffImage">
			<img src="<?php echo $staff_Image; ?>" alt="">
		</div>
		<div class="staffQuote">
			<?php echo $staff_quote ?>
		</div>
	</div> <!-- end .staffLeft  -->

	<div class="staffRight">
		<div class="nameTitle">
			<p><span><?php echo $staff_name; ?></span> <?php echo $staff_title; ?></p>
		</div>
		<div class="staffParagraph">
			<?php echo $staff_paragraph; ?>
		</div>
		<div class="contactInformation">
			<p><span><?php echo $staff_connect; ?></span></p>
			<p><?php echo $staff_phone; ?></p>
			<p><?php echo $staff_email; ?></p>
		</div>
	</div> <!-- end .staffRight -->
</section>	

    <?php endwhile; ?>

		<?php endif; ?>



<?php get_footer(); ?>



	