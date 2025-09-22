<?php
/**
 * Plugin Name:     ACF Field Group Composer
 * Plugin URI:      https://github.com/flyntwp/acf-field-group-composer
 * Description:     Configuration builder for advanced custom fields field groups.
 * Author:          bleech GmbH
 * Author URI:      https://bleech.de
 * Text Domain:     acf-field-group-composer
 * Domain Path:     /languages
 * Version:         1.3.1
 *
 * @package         ACF_Field_Group_Composer
 */

// Use root autoloader to load ACFComposer classes
if (!class_exists('ACFComposer\ACFComposer')) {
    $autoloader = dirname(__DIR__, 4) . '/vendor/autoload.php';
    if (file_exists($autoloader)) {
        require_once $autoloader;
    } else {
        // Fallback to manual requires if root autoloader not found
        require_once __DIR__ . '/lib/ACFComposer/ResolveConfig.php';
        require_once __DIR__ . '/lib/ACFComposer/ACFComposer.php';
    }
}
