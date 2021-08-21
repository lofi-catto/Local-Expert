<?php

/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<?php

$previous = get_previous_post();
$next = get_next_post();
$categories = get_the_category();
$posttags = get_the_tags();

while (have_posts()) : the_post();
?>

<main <?php post_class('site-main'); ?> id="single" role="main">
    <div class="container">
        <div class="post-content">
					<div class="left">
						<div class="date"><?php echo get_the_date( 'd.m.Y' ); ?></div>
						<div class="page-heading">
								<span class="dash"></span>
								<h1><?php echo get_the_title() ?></h1>
						</div>
						<div class="category">
							<?php
								if ( ! empty( $categories ) ) {
									foreach ( $categories as $category ) {
										echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
									}
								}
							?>
						</div>
						<div class="tags">
							<?php
								if ( ! empty( $posttags ) ) {
									foreach ( $posttags as $posttag ) {
										echo '<a href="' . esc_url( get_category_link( $posttag->term_id ) ) . '">' . esc_html( $posttag->name ) . '</a>';
									}
								}
							?>
						</div>
						<div class="author">
							<span>Author</span>
							<h5><?php echo get_the_author_meta( 'nicename', $author_id ); ?></h5>
						</div>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="right">
					<h2>Recent Posts</h2>
					<ul>
					<?php
							$args = array( 'numberposts' => '5' );
							$recent_posts = wp_get_recent_posts( $args );
							$arrow = get_template_directory_uri() . '/src/svg/arrow.svg';

							foreach( $recent_posts as $recent ) {
									printf( '<li><img src="'. $arrow . '"/><a href="%1$s">%2$s</a></li>',
											esc_url( get_permalink( $recent['ID'] ) ),
											apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
									);
							}
					?>
						</ul>
					</div>
        </div>
    </div>

    <div class="container">
        <div class="actions">
            <div class="group prev">
                <?php if (is_a($previous, 'WP_Post')) : ?>
                    <div class="text">
                        <a href="<?php echo $previous->guid ?>">
												
												<img src="<?php echo get_template_directory_uri() . '/src/svg/arrow.svg' ?>">
                        
												<span>
													<h5>Previous</h5>
													<?php echo $previous->post_title ?>
												</span>
												</a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="group next">
                <?php if (is_a($next, 'WP_Post')) : ?>
                    <div class="text">
                        <a href="<?php echo $next->guid ?>">
													<span>
														<h5>Next</h5>
														<?php echo $next->post_title ?>
													</span> 
													<img src="<?php echo get_template_directory_uri() . '/src/svg/arrow.svg' ?>">
												</a>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</main>

<?php
endwhile;
