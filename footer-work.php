<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package styl_s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footerWrapper">
			<div class="site-info">
				<p>	Smart. Simple. Creative.</p>
				<p class="copyrightText"> &copy; 2015 Clear Space. All rights reserved.</p>
				<div class="socialIcons">
					<div class="social1"></div>
					<div class="social2"></div>
					<div class="social3"></div>
				</div>
			</div><!-- .site-info -->

			
		</div> <!-- end .footerWrapper -->	
		</footer><!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


<script>
	// New instance of Wallop
	  var slider = document.querySelector('.Wallop');
	  var Wallop = new Wallop(slider);

	  Wallop.on('change', function(e) {
	    
	  });

	  document.addEventListener('click', function(e) {
	  });
</script>



<!-- 
var myInterval;

function intervalThing(){
    myInterval = setInterval(Wallop.next, 5000)
}

$('nextThingy').on('click', function(e){
    clearInterval(myInterval);
    Wallop.next();
    intervalThing();
});
 -->
</body>
</html>
