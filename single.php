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

		<section class="section_2">
			Work Slider to come section 2
		</section>

		<section class="section_3">
			<h2><?php the_field('brand_positioning') ?></h2>
			<p><?php the_field('brand_positioning_p') ?></p>
			<?php the_field('body_images') ?>

			<div class="body_pull_quote">
				<h2><?php the_field('body_pull_quote') ?></h2>
				<p><?php the_field('body_pull_quote_p') ?></p>
			</div>
		</section>

		<section class="testimonial">
			<h2><?php the_field('testimonial_quote') ?></h2>
			<p><?php the_field('testimonial_author') ?>, <?php the_field('testimonial_job_title') ?></p>
			<p><?php the_field('testimonial_client') ?></p>
		</section>



		
		


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
