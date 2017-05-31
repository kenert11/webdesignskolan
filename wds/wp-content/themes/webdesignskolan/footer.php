<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Webdesignskolan
 */
 $footer_button_link= get_field('footer_button_link');

?>



<?php wp_footer(); ?>
<!-- SIGN UP SECTION
	================================================== -->
	<section id="signup" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>Är du redo att ta dina kodningsförmågor till  <strong>nästa nivå</strong>?</h2>
					<p><a href="<?php echo $footer_button_link; ?>" class="btn btn-lg btn-block btn-success">Ja, läs blogg!</a></p>
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- signup -->


	<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-3">
				<p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Webbdesignskolan"></a></p>
			</div><!-- end col -->
			<div class="col-sm-6">
				<?php
				wp_nav_menu( array(

					'theme_location'	=> 'footer',
					'container'			=> 'nav',

					'menu_class'		=> 'list-unstyled list-inline'

				) );
			?>
			</div><!-- end col -->
			<div class="col-sm-3">
				<p class="pull-right">&copy; 2017 KJ</p>
			</div><!-- end col -->
		</div><!-- container -->
	</footer>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/tilt.jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
