<?php

namespace PluginScaffold\Core;

/**
 * Abstract class representing a service in WordPress with hookable functionality.
 *
 * This abstract class serves as a base for implementing services within the WordPress ecosystem that support hooking into various points of execution.
 * Classes extending this abstract class can implement custom functionality while utilizing hooks provided by
 * implementing the HookableInterface.
 *
 * @implements HookableInterface
 */
abstract class AbstractService implements HookableInterface {

}
