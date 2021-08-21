<?php

/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php $viewport_content = apply_filters('futago_viewport_content', 'width=device-width, initial-scale=1'); ?>
	<meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
	<title><?php echo get_the_title() . ' - ' . get_bloginfo('name') ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() . '/src/favicon/favicon.ico' ?>">
	<?php if (is_front_page()) : ?>
		<meta property="og:image" content="<?php echo get_template_directory_uri() . '/src/img/screenshot.png' ?>" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	global $wp;
	$site_name = get_bloginfo('name');
	$tagline   = get_bloginfo('description', 'display');
	$current_url = trim(home_url($wp->request), '/');
	$post_id = get_post_field('post_name', get_post());
	$logo = '/src/img/logo.png';
	// if ($post_id !== "home") {
	// 	$logo = '/src/img/logo.png';
	// }
	?>

	<!-- change the color of header if you want -->
	<header class="site-header" role="banner">
		<div class="header-container container">
			<nav class="navbar navbar-expand-lg navbar-light row">
				<div class="site-branding">
					<a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?><?php echo $logo ?>" alt=""></a>
				</div>
				<div class='navbar-mobile row col-2 col-sm-2 d-lg-none'>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<!-- <div class="navbar-cart navbar-cart-mobile d-flex d-sm-flex d-lg-none">
						<a href="<?php echo home_url('/cart') ?>"><img src="<?php echo get_template_directory_uri() . '/src/svg/cart.svg' ?>" alt=""></a>
					</div> -->
				</div>
				<?php
				$menuLocations = get_nav_menu_locations();
				$menuID = $menuLocations['menu-1'];
				$navigation = wp_get_menu_array('menu-1');

				if ($navigation) :
				?>
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<?php foreach ($navigation as $item) : ?>
								<li class="nav-item <?php echo $item['children'] ? 'dropdown' : '' ?>">
									<a class="nav-link <?php echo $item['children'] ? 'dropdown-toggle' : '';
														echo ($current_url == trim($item['url'], '/')) ? 'active' : '' ?>" <?php echo $item['children'] ? ' id="nav-' . $item['title'] . '" role="button" data-bs-toggle="dropdown" aria-expanded="false"' : 'aria-current="page"' ?> href="<?php echo $item['url'] ?>"><?php echo $item['title'] ?></a>
									<?php
									$navChild = '';
									if ($item['children']) :
										$navChild = '
                           					 <ul class="dropdown-menu" aria-labelledby="nav-' . $item['title'] . '">';
										foreach ($item['children'] as $child) :
											$navChild .= '<li><a class="dropdown-item" href="' . $child['url'] . '">' . $child['title'] . '</a></li>';
										endforeach;
										$navChild .= '</ul>';
									endif;
									?>
									<?php echo $item['children'] ? $navChild : '' ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</nav>
		</div>

		<!-- <?php if (has_nav_menu('menu-1')) : ?>
		<nav class="site-navigation" role="navigation">
		<?php wp_nav_menu(array('theme_location' =>
					'menu-1')); ?>
		</nav>
	<?php endif; ?> -->


	</header>