<?php
/**
 * Plugin Name: PluginScaffold
 * Description: PluginScaffold
 * URI: https://trewknowledge.com
 * Author: Trew Knowledge
 * Author URI: https://trewknowledge.com
 * Version: 1.0.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: plugin-scaffold
 */

namespace PluginScaffold;

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( PluginScaffold::class ) && is_readable( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

if ( ! defined( 'PluginScaffold_PLUGIN_FILE' ) ) {
	define( 'PluginScaffold_PLUGIN_FILE', __FILE__ );
}

if ( ! defined( 'PluginScaffold_DIR' ) ) {
	define( 'PluginScaffold_DIR', __DIR__ );
}

class_exists( PluginScaffold::class ) && PluginScaffold::instance();
