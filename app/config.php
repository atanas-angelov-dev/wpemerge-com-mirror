<?php
/**
 * WP Emerge configuration.
 *
 * @link https://docs.wpemerge.com/#/framework/configuration
 *
 * @package WPEmergeTheme
 */

return [
	/**
	 * Array of service providers you wish to enable.
	 */
	'providers'         => [
		\App\Routing\RouteConditionsServiceProvider::class,
	],

	/**
	 * Array of global middleware to apply to all requests.
	 */
	'global_middleware' => [
		// phpcs:ignore
	],

	/**
	 * Other config goes after this comment.
	 */

];
