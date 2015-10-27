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
		<a href="https://www.google.ca/maps/place/181+Carlaw+Ave,+Toronto,+ON+M4M+2S1/@43.6618288,-79.3422718,17z/data=!3m1!4b1!4m2!3m1!1s0x89d4cb76d7fb3f85:0xf9c5ecb7e339f2fa?hl=en&hl=en-US" target="_blank">
			<?php the_field('section_2_p'); ?>
		</a>
		<a href="#"><p><?php the_field('section_2_phone') ?></p></a>

	</div>

	   <div id="map"></div>
	   <script>

function initMap() {
  var myLatLng = {lat: 43.6620539, lng: -79.3402043};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });

}

    </script>

     <script async defer
        // src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDwIFvAF81oyPLRCWFfpld4-YZck_N_3U&signed_in=true&callback=initMap"></script>

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



	