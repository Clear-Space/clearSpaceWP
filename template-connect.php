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

</section>

        

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDwIFvAF81oyPLRCWFfpld4-YZck_N_3U&sensor=false"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>






<?php get_footer(); ?>



	