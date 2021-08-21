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
<footer class="site-footer">
	<div class="random">
		<img src="https://source.unsplash.com/featured?field" />
		<img src="https://source.unsplash.com/featured?water" />
		<img src="https://source.unsplash.com/featured?farm" />
		<img src="https://source.unsplash.com/featured?nature" />
		<img src="https://source.unsplash.com/featured?architect" />
	</div>
	<div class="footer-container">
		<div class="subscribe">
			<h3>Stay covered with the latest</h3>
			<input class="email" type="email" placeholder="Your email address">
			<a class="button" target="">Sign up</a>
		</div>

	</div>
	<div class="copyright container">
		<p class="col-5">We acknowledge that Local Expert takes place on the land of the traditional owners of lutruwita
			(Tasmania)
			and pay respects to the palawa people, Tasmanian Aboriginal Community and to Elders - past, present and
			emerging.</p>
	</div>
	<div class='author container'>
		<p>Designed & Built by <a class="text-decoration-underline"
				href="https://hackerspace.govhack.org/team_management/teams/1503">Tassie Hack Team</a></p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>