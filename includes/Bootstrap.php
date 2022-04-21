<?php

namespace WpPluginSkeleton;

use WpPluginSkeleton\Admin\AdminServiceProvider;

/**
 * Bootstrap class.
 *
 * All bootstrap code should be placed here.
 *
 * @package WpPluginSkeleton
 */
class Bootstrap {

	/**
	 * @var array $service_providers
	 */
	protected $service_providers = [
		AdminServiceProvider::class,
	];

	/**
	 * Runs plugin bootstrap code.
	 *
	 * @return void
	 */
	public static function run() {
		$bootstrap = new static();
		$bootstrap->register_service_providers();
	}

	/**
	 * Registers service providers.
	 *
	 * @return void
	 */
	private function register_service_providers() {
		foreach ( $this->service_providers as $service_provider ) {
			// Todo: register service provider.
		}
	}
}
