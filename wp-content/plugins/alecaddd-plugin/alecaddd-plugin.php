<?php
/**
 * @package OlegtronicsPlugin
 */
/*
Plugin Name: Olegtronics Plugin
Plugin URI: http://olegtronics.com
Description: This is some kind of description
Version: 1.0.0
Author: Oleg Kono
License: GPLv2 or later
Text Domain: hello-world-plugin
*/

/*
This software is free and cool and fad..
Copyright 2005-2015 Automatic, Inc.
*/

// require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
// use HelloWorld\SayHello;
// echo SayHello::world();

// If this file is called directly, abort!!!
defined('ABSPATH') or die('Hey you cant access this file, you silly man!');

// Require once the Composer Autoload
if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

// Define CONSTANTS
// define('PLUGIN_PATH', plugin_dir_path(__FILE__));
// define('PLUGIN_URL', plugin_dir_url(__FILE__));
// define('PLUGIN', plugin_basename(__FILE__));

use Inc\Base\Activate;
use Inc\Base\Deactivate;

/**
 * The code that runs during plugin activation
 */
function activate_alecaddd_plugin() {
    Activate::activate();
}
/**
 * The code that runs during plugin deactivation
 */
function deactivate_alecaddd_plugin() {
    Deactivate::deactivate();
}
/**
 * Initialize all the core classes of the plugin
 */
register_activation_hook( __FILE__, 'activate_alecaddd_plugin');
register_deactivation_hook( __FILE__, 'deactivate_alecaddd_plugin');

if(class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}