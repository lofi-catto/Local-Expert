<?php

/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

define('FUTAGO_VERSION', '2.2.0');

// if (!isset($content_width)) {
// 	$content_width = 800; // Pixels.
// }

if (!function_exists('futago_setup')) {
	/**
	 * Set up theme support.
	 *
	 * @return void
	 */
	function futago_setup()
	{
		$hook_result = apply_filters_deprecated('futago_theme_load_textdomain', [true], '2.0', 'futago_load_textdomain');
		if (apply_filters('futago_load_textdomain', $hook_result)) {
			load_theme_textdomain('futago', get_template_directory() . '/languages');
		}

		$hook_result = apply_filters_deprecated('futago_theme_register_menus', [true], '2.0', 'futago_register_menus');
		if (apply_filters('futago_register_menus', $hook_result)) {
			register_nav_menus(array('menu-1' => __('Primary', 'futago')));
		}

		// $hook_result = apply_filters_deprecated('futago_theme_add_theme_support', [true], '2.0', 'futago_add_theme_support');
		// if (apply_filters('futago_add_theme_support', $hook_result)) {
		// 	add_theme_support('post-thumbnails');
		// 	add_theme_support('automatic-feed-links');
		// 	add_theme_support('title-tag');
		// 	add_theme_support(
		// 		'html5',
		// 		array(
		// 			'search-form',
		// 			'comment-form',
		// 			'comment-list',
		// 			'gallery',
		// 			'caption',
		// 		)
		// 	);
		// 	add_theme_support(
		// 		'custom-logo',
		// 		array(
		// 			'height'      => 100,
		// 			'width'       => 350,
		// 			'flex-height' => true,
		// 			'flex-width'  => true,
		// 		)
		// 	);

		/*
			 * Editor Style.
			 */
		// add_editor_style('editor-style.css');

		/*
			 * WooCommerce.
			 */
		$hook_result = apply_filters_deprecated('futago_theme_add_woocommerce_support', [true], '2.0', 'futago_add_woocommerce_support');
		if (apply_filters('futago_add_woocommerce_support', $hook_result)) {
			// WooCommerce in general.
			add_theme_support('woocommerce');
			// Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
			// zoom.
			// add_theme_support('wc-product-gallery-zoom');
			// lightbox.
			add_theme_support('wc-product-gallery-lightbox');
			// swipe.
			add_theme_support('wc-product-gallery-slider');
		}
	}
}
add_action('after_setup_theme', 'futago_setup');

// if (!function_exists('futago_register_elementor_locations')) {
// 	/**
// 	 * Register Elementor Locations.
// 	 *
// 	 * @param ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager $elementor_theme_manager theme manager.
// 	 *
// 	 * @return void
// 	 */
// 	function futago_register_elementor_locations($elementor_theme_manager)
// 	{
// 		$hook_result = apply_filters_deprecated('futago_theme_register_elementor_locations', [true], '2.0', 'futago_register_elementor_locations');
// 		if (apply_filters('futago_register_elementor_locations', $hook_result)) {
// 			$elementor_theme_manager->register_all_core_location();
// 		}
// 	}
// }
// add_action('elementor/theme/register_locations', 'futago_register_elementor_locations');

// if (!function_exists('futago_content_width')) {
// 	/**
// 	 * Set default content width.
// 	 *
// 	 * @return void
// 	 */
// 	function futago_content_width()
// 	{
// 		$GLOBALS['content_width'] = apply_filters('futago_content_width', 800);
// 	}
// }
// add_action('after_setup_theme', 'futago_content_width', 0);


/**
 * Wrapper function to deal with backwards compatibility.
 */
// if (!function_exists('futago_body_open')) {
// 	function futago_body_open()
// 	{
// 		if (function_exists('wp_body_open')) {
// 			wp_body_open();
// 		} else {
// 			do_action('wp_body_open');
// 		}
// 	}
// }

// add styles and scripts
function my_theme_enqueue_styles()
{
	wp_enqueue_style('customstyle', get_stylesheet_directory_uri() . '/dist/bundle.css', array(), '', 'all');
	wp_enqueue_script('customjs', get_stylesheet_directory_uri() . '/dist/bundle.js', null, '1.0', true);
	wp_localize_script('customjs', 'futagoData', array(
		'root_url' => get_home_url(),
		'nonce' => wp_create_nonce('wp_rest'),
		'image_path' => get_stylesheet_directory_uri() . '/src/img/',
		'svg_path' => get_stylesheet_directory_uri() . '/src/svg/',
		'post_id' => get_the_ID(),
		'post_title' => get_the_title()
	));
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 9999);

// set up menu bar
function wp_get_menu_array($current_menu = 'menu-1')
{
	$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
	// This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

	$menuID = $menuLocations[$current_menu]; // Get the *primary* menu ID
	$menu_array = wp_get_nav_menu_items($menuID);

	$menu = array();

	function populate_children($menu_array, $menu_item)
	{
		$children = array();
		if (!empty($menu_array)) {
			foreach ($menu_array as $k => $m) {
				if ($m->menu_item_parent == $menu_item->ID) {
					$children[$m->ID] = array();
					$children[$m->ID]['ID'] = $m->ID;
					$children[$m->ID]['title'] = $m->title;
					$children[$m->ID]['url'] = $m->url;
					unset($menu_array[$k]);
					$children[$m->ID]['children'] = populate_children($menu_array, $m);
				}
			}
		};
		return $children;
	}

	foreach ($menu_array as $m) {
		if (empty($m->menu_item_parent)) {
			$menu[$m->ID] = array();
			$menu[$m->ID]['ID'] = $m->ID;
			$menu[$m->ID]['title'] = $m->title;
			$menu[$m->ID]['url'] = $m->url;
			$menu[$m->ID]['children'] = populate_children($menu_array, $m);
		}
	}

	return $menu;
}


// Add option page
if (function_exists('acf_add_options_page')) {

	$option_page = acf_add_options_page(array(
		'page_title'     => 'Theme Footer Settings',
		'menu_title'     => 'Options',
		'menu_slug'     => 'theme-footer-settings',
		'capability'     => 'edit_posts',
		'redirect'         => false
	));
}

function my_excerpt_length($length){
	return 20;
}
add_filter('excerpt_length', 'my_excerpt_length');

