<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<main class="site-main" role="main">
	<?php if (apply_filters('futago_page_title', true)) : ?>
		<header class="page-header">
			<h1 class="entry-title"><?php esc_html_e('The page can&rsquo;t be found.', 'futago'); ?></h1>
		</header>
	<?php endif; ?>
	<div class="page-content">
		<p><?php esc_html_e('It looks like nothing was found at this location.', 'futago'); ?></p>
	</div>

</main>