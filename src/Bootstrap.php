<?php

namespace PluginScaffold;

use PluginScaffold\Services\Example;

/**
 * Class Bootstrap
 *
 * Bootstrap class responsible for initializing services.
 */
class Bootstrap {

	/**
	 * Retrieves an array of services.
	 *
	 * @return array An array of services.
	 */
	public static function services(): array {
		return [
			/**
			 * Example service.
			 * This is an example of adding a service.
			 *
			 * You can remove this class as it serves as an example.
			 */
			Example::class,
		];
	}
}
