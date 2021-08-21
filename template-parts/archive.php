<?php

/**
 * The template for displaying archive pages.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<main class="site-main archive" role="main">
	<div class="container">
		<div class="page-heading">
			<span class="dash"></span>
			<h1>Insights</h1>
		</div>
		
		<div class="page-content">
			<?php
			while (have_posts()) {
				the_post();
				$post_link = get_permalink();
			?>
				<article class="post">
					<span class="orange-dash"></span>
					<div class="meta">
						<div><?php echo get_the_date( 'd.m.Y' ); ?></div>
						<div><?php echo get_the_author_meta( 'nicename', $author_id ); ?></div>
					</div>
					<?php
					printf('<h2 class="%s"><a href="%s">%s</a></h2>', 'entry-title', esc_url($post_link), esc_html(get_the_title()));
					// printf('<a href="%s">%s</a>', esc_url($post_link), get_the_post_thumbnail($post, 'large'));
					the_excerpt();
					?>
					<div class="action">
						<a class="btn" href="<?php echo esc_url($post_link) ?>"><div class="dash"></div><span>Read More</span></a>
					</div>
				</article>
			<?php } ?>
		</div>
	

		<?php wp_link_pages(); ?>

		<?php
		global $wp_query;
		if ($wp_query->max_num_pages > 1) :
		?>
			<nav class="pagination" role="navigation">
				<?php /* Translators: HTML arrow */ ?>
				<div class="nav-previous"><?php next_posts_link(sprintf(__('%s Previous', 'futago'), '<span class="meta-nav">&larr;</span>')); ?></div>
				<?php /* Translators: HTML arrow */ ?>
				<div class="nav-next"><?php previous_posts_link(sprintf(__('Next %s', 'futago'), '<span class="meta-nav">&rarr;</span>')); ?></div>
			</nav>
		<?php endif; ?>
	</div>
</main>