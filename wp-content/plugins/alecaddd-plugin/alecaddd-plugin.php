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

defined('ABSPATH') or die('Hey you cant access this file, you silly man!');

if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));

if(class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}