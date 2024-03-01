<?php

namespace PluginScaffold;

use PluginScaffold\Core\AbstractService;

class PluginScaffold {

	/**
	 * Plugin version.
	 *
	 * @var string
	 */
	public static string $version;

	/**
	 * Plugin file.
	 *
	 * @var string
	 */
	public static string $plugin_file;

	/**
	 * Plugin directory.
	 *
	 * @var string
	 */
	public static string $plugin_directory;

	/**
	 * Plugin base name.
	 *
	 * @var string
	 */
	public static string $basename;

	/**
	 * @var array
	 */
	public array $services = [];

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
		$this->bootstrap();

		add_action( 'plugins_loaded', [ $this, 'load_services' ], 99 );
	}

	/**
	 * Initialize the plugin.
	 *
	 * @return void
	 */
	protected function init(): void {
		self::$version          = '1.0.0';
		self::$plugin_file      = PluginScaffold_PLUGIN_FILE;
		self::$plugin_directory = PluginScaffold_DIR;
		self::$basename         = plugin_basename( self::$plugin_file );
	}

	/**
	 * Boostrap services.
	 *
	 * @return void
	 */
	protected function bootstrap(): void {
		$this->services = Bootstrap::services();
	}

	/**
	 * Loads the services.
	 *
	 * @return void
	 */
	public function load_services(): void {
		// Loads the services.
		foreach ( $this->services as $service ) {
			if ( class_exists( $service ) && is_subclass_of( $service, AbstractService::class ) ) {
				$service = new $service();
				$service->init_hooks();
			}
		}
	}

	/**
	 * Initializes the PluginScaffold class.
	 *
	 * Checks for an existing PluginScaffold instance
	 * and if it doesn't find one, creates it.
	 *
	 * @return PluginScaffold
	 */
	public static function instance(): PluginScaffold {
		static $instance = false;

		if ( ! $instance ) {
			$instance = new self();
		}

		return $instance;
	}
}
