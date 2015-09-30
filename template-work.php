<?php

/* Template Name: Work Template */



?>




<?php get_header('work'); ?>
<div id="container">

	<?php
	$custom_post_type = 'work';
	$args=array(
	  'post_type' => $custom_post_type,
	  'post_status' => 'publish',
	  'posts_per_page' => -1,
	  'ignore_sticky_posts'=> 1
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
	  while ($my_query->have_posts()) : $my_query->the_post(); ?>

	
	    <div class="item"> <a target=""_blank href="<?php the_permalink() ?>" ><?php the_post_thumbnail();  ?><p class="testParagraph"> Here's an example paragraph thingy</p></a> 
			
	    </div> <!-- end .item -->
	    <?php
	  endwhile;
	}
	wp_reset_query();  // Restore global post data stomped by the_post().
	?>

</div> <!-- end container -->



<script type="text/javascript">
     
     $(window).load(function() {
     
   // MASSONRY Without jquery
   var container = document.querySelector('#container');
   var msnry = new Masonry( container, {
     itemSelector: '.item',
     columnWidth: '.item',                
   });  
   
     });

   
 </script>




<?php get_footer(); ?>



	