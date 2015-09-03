<?php

/* Template Name: Approach Template */



?>




<?php get_header('about'); ?>

<div class="section_1_p"><?php the_field('section_1_p') ?></div>

<div class="ourTeam">
	<h2>Our Team</h2>
</div>

<?php 

// check if repeater has stuff
if( have_rows('staff_profiles') ):

 	// loop through stuff
  while ( have_rows('staff_profiles') ) : the_row();

// vars

	$staff_image = get_sub_field('staff_image_url');
	$staff_quote = get_sub_field('staff_quote');
	$staff_name = get_sub_field('staff_name');
	$staff_title = get_sub_field('staff_title');
	$staff_paragraph = get_sub_field('staff_paragraph');
	$staff_connect = get_sub_field('staff_connect');
	$staff_phone = get_sub_field('staff_phone');
	$staff_email = get_sub_field('staff_email');

	?>

<section class="staffSection">
	<div class="staffLeft">
		<div class="staffImage">
			<img src="<?php echo $staff_image; ?>" alt="">
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



	