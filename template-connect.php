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
	<div class="officeDirections">
		<h2><?php the_field('section_2_h2'); ?></h2>
		<?php the_field('section_2_p'); ?>
		<a href="#"><p><?php the_field('section_2_phone') ?></p></a>

	</div>
<!-- 
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.350875187433!2d-79.340215!3d43.661671999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d5c9cf83450f%3A0xbb4f132e5b390899!2sClear+Space+Design!5e0!3m2!1sen!2sca!4v1441733352804" frameborder="0" style="border:0" allowfullscreen></iframe> -->

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




	   <div id="map"></div>
	    <script type="text/javascript">

	var map;
	function initMap() {
	  map = new google.maps.Map(document.getElementById('map'), {
	    center: {lat: -34.397, lng: 150.644},
	    zoom: 8
	  });
	}

	    </script>
	    <script async defer
	      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDwIFvAF81oyPLRCWFfpld4-YZck_N_3U&callback=initMap">
	    </script>





</section>






<?php get_footer(); ?>



	