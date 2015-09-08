<?php

/* Template Name: ConnectTemplate */



?>




<?php get_header('connect'); ?>


<section class="section_1">
	<div class="section_1_p">
		<?php the_field('section_1_p') ?>
	</div>
</section>

<section class="section_2">
	<h2><?php the_field('section_2_h2'); ?></h2>
	<?php the_field('section_2_p'); ?>
	<a href="#"><p><?php the_field('section_2_phone') ?></p></a>

	<iframe src="" frameborder="0">
		
		map will go here 

	</iframe>

	<div class="new_business">

		<h2><?php the_field('new_business_h2'); ?></h2>
		<p><?php the_field('new_business_p'); ?></p>
		<p><?php the_field('new_business_phone') ?></p>
		<p><?php the_field('new_business_email') ?></p>

	</div>
	
	<div class="careers">
		<h2><?php the_field('careers_h2'); ?></h2>
		<?php the_field('careers_p'); ?>
		<a href="#"><p><?php the_field('careers_email') ?></p></a>
		


	</div>	

</section>






<?php get_footer(); ?>



	