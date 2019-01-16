<?php
/**
 * Declare theme functionality support.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
 *
 * @package WPEmergeTheme
 */

/**
 * Support automatic feed links.
 *
 * @link https://codex.wordpress.org/Automatic_Feed_Links
 */
add_theme_support( 'automatic-feed-links' );

/**
 * Support post thumbnails.
 *
 * @link https://codex.wordpress.org/Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );

/**
 * Support document title tag.
 *
 * @link https://codex.wordpress.org/Title_Tag
 */
add_theme_support( 'title-tag' );

/**
 * Support menus.
 *
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
 */
add_theme_support( 'menus' );

/**
 * Support HTML5 markup.
 *
 * @link https://codex.wordpress.org/Theme_Markup
 */
add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );

/**
 * Manually select Post Formats to be supported.
 *
 * @link http://codex.wordpress.org/Post_Formats
 */
// phpcs:ignore
// add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ] );

/**
 * Support default editor block styles.
 *
 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
 */
add_theme_support( 'wp-block-styles' );

/**
 * Support wide alignment for editor blocks.
 *
 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
 */
add_theme_support( 'align-wide' );

/**
 * Support custom editor block color palette.
 * Don't forget to edit resources/styles/shared/variables.scss when you update these.
 * Uses Material Design colors.
 *
 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
 */
add_theme_support(
	'editor-color-palette',
	[
		[
			'name'  => __( 'Red', 'app' ),
			'slug'  => 'material-red',
			'color' => Theme\Config::get( 'variables.color.material-red', '#000000' ),
		],
		[
			'name'  => __( 'Pink', 'app' ),
			'slug'  => 'material-pink',
			'color' => Theme\Config::get( 'variables.color.material-pink', '#000000' ),
		],
		[
			'name'  => __( 'Purple', 'app' ),
			'slug'  => 'material-purple',
			'color' => Theme\Config::get( 'variables.color.material-purple', '#000000' ),
		],
		[
			'name'  => __( 'Deep Purple', 'app' ),
			'slug'  => 'material-deep-purple',
			'color' => Theme\Config::get( 'variables.color.material-deep-purple', '#000000' ),
		],
		[
			'name'  => __( 'Indigo', 'app' ),
			'slug'  => 'material-indigo',
			'color' => Theme\Config::get( 'variables.color.material-indigo', '#000000' ),
		],
		[
			'name'  => __( 'Blue', 'app' ),
			'slug'  => 'material-blue',
			'color' => Theme\Config::get( 'variables.color.material-blue', '#000000' ),
		],
		[
			'name'  => __( 'Light Blue', 'app' ),
			'slug'  => 'material-light-blue',
			'color' => Theme\Config::get( 'variables.color.material-light-blue', '#000000' ),
		],
		[
			'name'  => __( 'Cyan', 'app' ),
			'slug'  => 'material-cyan	',
			'color' => Theme\Config::get( 'variables.color.material-cyan	', '#000000' ),
		],
		[
			'name'  => __( 'Teal', 'app' ),
			'slug'  => 'material-teal',
			'color' => Theme\Config::get( 'variables.color.material-teal', '#000000' ),
		],
		[
			'name'  => __( 'Green', 'app' ),
			'slug'  => 'material-green',
			'color' => Theme\Config::get( 'variables.color.material-green', '#000000' ),
		],
		[
			'name'  => __( 'Light Green', 'app' ),
			'slug'  => 'material-light-green',
			'color' => Theme\Config::get( 'variables.color.material-light-green', '#000000' ),
		],
		[
			'name'  => __( 'Lime', 'app' ),
			'slug'  => 'material-lime',
			'color' => Theme\Config::get( 'variables.color.material-lime', '#000000' ),
		],
		[
			'name'  => __( 'Yellow', 'app' ),
			'slug'  => 'material-yellow',
			'color' => Theme\Config::get( 'variables.color.material-yellow', '#000000' ),
		],
		[
			'name'  => __( 'Amber', 'app' ),
			'slug'  => 'material-amber',
			'color' => Theme\Config::get( 'variables.color.material-amber', '#000000' ),
		],
		[
			'name'  => __( 'Orange', 'app' ),
			'slug'  => 'material-orange',
			'color' => Theme\Config::get( 'variables.color.material-orange', '#000000' ),
		],
		[
			'name'  => __( 'Deep Orange', 'app' ),
			'slug'  => 'material-deep-orange',
			'color' => Theme\Config::get( 'variables.color.material-deep-orange', '#000000' ),
		],
		[
			'name'  => __( 'Brown', 'app' ),
			'slug'  => 'material-brown',
			'color' => Theme\Config::get( 'variables.color.material-brown', '#000000' ),
		],
		[
			'name'  => __( 'Grey', 'app' ),
			'slug'  => 'material-grey',
			'color' => Theme\Config::get( 'variables.color.material-grey', '#000000' ),
		],
		[
			'name'  => __( 'Blue Grey', 'app' ),
			'slug'  => 'material-blue-grey',
			'color' => Theme\Config::get( 'variables.color.material-blue-grey', '#000000' ),
		],
	]
);

/**
 * Support color pallette enforcement.
 *
 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
 */
// phpcs:ignore
// add_theme_support( 'disable-custom-colors' );

/**
 * Support custom editor block font sizes.
 * Don't forget to edit resources/styles/shared/variables.scss when you update these.
 *
 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
 */
add_theme_support(
	'editor-font-sizes',
	[
		[
			'name'      => __( 'extra small', 'app' ),
			'shortName' => __( 'XS', 'app' ),
			'size'      => Theme\Config::get( 'variables.font-size.xs', 12 ),
			'slug'      => 'extra-small',
		],
		[
			'name'      => __( 'small', 'app' ),
			'shortName' => __( 'S', 'app' ),
			'size'      => Theme\Config::get( 'variables.font-size.s', 16 ),
			'slug'      => 'small',
		],
		[
			'name'      => __( 'regular', 'app' ),
			'shortName' => __( 'M', 'app' ),
			'size'      => Theme\Config::get( 'variables.font-size.m', 20 ),
			'slug'      => 'regular',
		],
		[
			'name'      => __( 'large', 'app' ),
			'shortName' => __( 'L', 'app' ),
			'size'      => Theme\Config::get( 'variables.font-size.l', 28 ),
			'slug'      => 'large',
		],
		[
			'name'      => __( 'extra large', 'app' ),
			'shortName' => __( 'XL', 'app' ),
			'size'      => Theme\Config::get( 'variables.font-size.xl', 36 ),
			'slug'      => 'extra-large',
		],
	]
);

add_image_size( 'intro', 1920, 345, false );
add_image_size( 'intro@2x', 3840, 690, false );
add_image_size( 'avatar', 60, 60, true );
add_image_size( 'avatar@2x', 120, 120, true );
add_image_size( 'article', 1170, 530, true );
add_image_size( 'article@2x', 2340, 1060, true );
