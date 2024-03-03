<?php

namespace PluginScaffold\Services;

use PluginScaffold\Core\AbstractService;

/**
 * Example Service.
 */
class Example extends AbstractService {

	/**
	 * Registers all hooks for the class.
	 *
	 * This method is responsible for registering various hooks
	 * used by the class to interact with Core WordPress or other plugin/theme custom hooks.
	 * Add your hook registrations within this method.
	 *
	 * @return void
	 */
	public function register_hooks(): void {
		// TODO: Implement hook registrations here.
		// Example: add_action( 'hook_name', [ $this, 'method_name' ] );
	}
}
