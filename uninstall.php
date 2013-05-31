<?php
/**
 * Uninstall Media Library Custom Fields. Fired when the plugin is uninstalled.
 *
 * @package   Media Library Custom Fields
 * @license   GPL-2.0+
 * @copyright 2013 abcFolio.com
 * @since     1.0.0
 */

// If uninstall, not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) { exit; }

delete_option( 'abcfmlcf_optns' );