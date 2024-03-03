<?php

namespace PluginScaffold\Core;

/**
 * Interface HookableInterface
 *
 * Provides a hookable interface for classes.
 */
interface HookableInterface {

	/**
	 * Registers all hooks for the class.
	 *
	 * This method is responsible for registering various hooks
	 * used by the class to interact with Core WordPress or other custom plugin/theme hooks.
	 * Add your hook registrations within this method.
	 *
	 * @return void
	 */
	public function register_hooks(): void;
}
