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
    // public
    // can be accessed everywhere

    // protected
    // can be accessed only within the class itself or extensions of that class

    // private
    // can be accessed only within the class itself

    function __construct()
    {
        $this->print_stuff();
        add_action( 'init', array( $this, 'custom_post_type' ));
    }

    protected function create_post_type()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    function register()
    {

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

    function enqueue()
    {
        // enqueue all our scripts
        wp_enqueue_style('mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ));
        wp_enqueue_script('mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ));
    }

    private function print_stuff()
    {
        echo 'Test';
    }
}

class SecondClass extends AlecadddPlugin
{
    function register_post_type()
    {
        $this->create_post_type();
    }
}

if ( class_exists( 'AlecadddPlugin' )) {
    $alecadddPlugin = new AlecadddPlugin();
    $alecadddPlugin->register();
}

$secondClass = new SecondClass();
$secondClass->register_post_type();

// activation
register_activation_hook( __FILE__, array($alecadddPlugin, 'activate') );

// deactivation
register_deactivation_hook( __FILE__, array($alecadddPlugin, 'deactivate') );
