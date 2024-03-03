<?php

namespace PluginScaffold;

use PluginScaffold\Services\Example;

/**
 * Handles application bootstrap process.
 */
class Bootstrap {

	/**
	 * Define plugin services to be automatically instantiated and hooked by register_hooks() method.
	 *
	 * @return array An array of service classes to be registered.
	 */
	public static function services(): array {
		return [
			/**
			 * Example service.
			 * This demonstrates how to add a service.
			 *
			 * You can remove this class if not needed; it serves as an example.
			 */
			Example::class,
		];
	}
}
