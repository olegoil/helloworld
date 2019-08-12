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

class AlecadddPlugin
{

    function __construct()
    {
        add_action( 'init', array( $this, 'custom_post_type' ));
    }

    function activate()
    {
        // generated a CPT
        $this->custom_post_type();
        // flush rewrite rules
        flush_rewrite_rules();
    }

    function deactivate() 
    {
        // flush rewrite rules
        flush_rewrite_rules();
    }

    function custom_post_type()
    {
        register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
    }
}

if ( class_exists( 'AlecadddPlugin' )) {
    $alecadddPlugin = new AlecadddPlugin();
}

// activation
register_activation_hook( __FILE__, array($alecadddPlugin, 'activate') );

// deactivation
register_deactivation_hook( __FILE__, array($alecadddPlugin, 'deactivate') );
