<?php

/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<footer class="site-footer" role="contentinfo">
	<div class="footer-container">
		<div class="address">
			<h3>Chambers</h3>
			<p><?php echo get_field('footer_address', 'options') ?></p>
		</div>
		<!-- <div class="contact">
			<h3>Phone</h3>
			<a href="tel:<?php echo get_field('footer_number', 'options') ?>"><?php echo get_field('footer_number', 'options') ?></a>
		</div> -->
		<div class='email'>
			<h3>Email</h3><a class="text-decoration-underline" href="mailto:<?php echo get_field('footer_email', 'options') ?>"><?php echo get_field('footer_email', 'options') ?></a><br><br>
		</div>
		<!-- <div class="social">
			<h3 class='follow'>Follow us</h3>
			<div class="icons">
				<a href="<?php echo get_field('footer_other', 'options') ?>" target="_blank"><i class="flaticon-linkedin"></i></a>
				<a href="<?php echo get_field('footer_instagram', 'options') ?>" target="_blank"><i class="flaticon-instagram"></i></a>
				<a href="<?php echo get_field('footer_facebook', 'options') ?>" target="_blank"><i class="flaticon-facebook"></i></a>
			</div>
			<p class='futago'>Designed & Built by <a class="text-decoration-underline" href="https://www.futago.com.au">Futago</a></p>
		</div> -->
	</div>
	<div class='author container'>
		<p>Designed & Built by <a class="text-decoration-underline" href="https://www.futago.com.au">Futago</a></p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>