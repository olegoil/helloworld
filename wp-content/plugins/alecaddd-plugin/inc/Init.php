<?php
/**
 * @package AlecadddPlugin
 */

namespace Inc;

final class Init
{
    /**
    * Store all the classes inside an array
    * a Full list of classes
    */
    public static function get_services() {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLinks::class
        ];
    }

    /**
     * Loop through the classes, initialize them, 
     * and call the register() method if it exists
     */
    public static function register_services() {
        foreach(self::get_services() as $class) {
            $service = self::instantiate($class);
            if(method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     */
    private static function instantiate($class) {
        $service = new $class();
        return $service;
    }
}

// use Inc\Activate;
// use Inc\Deactivate;
// use Inc\Admin\Admin;

// class AlecadddPlugin
// {
//     // public
//     // can be accessed everywhere

//     // protected
//     // can be accessed only within the class itself or extensions of that class

//     // private
//     // can be accessed only within the class itself

//     public $plugin;

//     function __construct()
//     {
//         // $this->print_stuff();
//         // add_action( 'init', array( $this, 'custom_post_type' ));
//         $this->plugin = plugin_basename( __FILE__ );
//     }

//     public static function teststatic()
//     {
//         add_action( 'init', array( 'AlecadddPlugin', 'custom_post_type' ));
//         // echo 'Test';
//     }

//     protected function create_post_type()
//     {
//         add_action('admin_enqueue_scripts', array($this, 'enqueue'));

//         add_action('admin_menu', array($this, 'add_admin_pages'));

//         add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
//     }

//     public function settings_link($links) {
//         // add custom settings link
//         $settings_link = '<a href="admin.php?page=alecaddd_plugin">Settings</a>';
//         array_push($links, $settings_link);
//         return $links;
//     }

//     function register()
//     {
//         // add_action( 'admin_menu', array($this, 'add_admin_pages'));
//     }

//     public function add_admin_pages() {
//         add_menu_page('Alecaddd', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
//     }

//     public function admin_index() {
//         // require template
//         require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
//     }

//     function activate()
//     {
//         // require_once plugin_dir_path( __FILE__ ) . 'inc/alecaddd-plugin-activate.php';
//         // AlecadddPluginActivate::activate();
//         Activate::activate();
//         // generated a CPT
//         // $this->custom_post_type();
//         // flush rewrite rules
//         // flush_rewrite_rules();
//     }

//     function deactivate() 
//     {
//         // flush rewrite rules
//         // flush_rewrite_rules();
//         Deactivate::deactivate();
//     }

//     function custom_post_type()
//     {
//         register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
//     }

//     function enqueue()
//     {
//         // enqueue all our scripts
//         wp_enqueue_style('mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__ ));
//         wp_enqueue_script('mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ));
//     }

//     private function print_stuff()
//     {
//         echo 'Test';
//     }
// }

// class SecondClass extends AlecadddPlugin
// {
//     function register_post_type()
//     {
//         $this->create_post_type();
//     }
// }

// if ( class_exists( 'AlecadddPlugin' )) {
//     $alecadddPlugin = new AlecadddPlugin();
//     $alecadddPlugin->register();
//     alecadddPlugin::teststatic();
// }

// $secondClass = new SecondClass();
// $secondClass->register_post_type();

// // activation
// register_activation_hook( __FILE__, array('AlecadddPluginActivate', 'activate') );

// // deactivation
// // require_once plugin_dir_path( __FILE__ ) . 'inc/alecaddd-plugin-deactivate.php';
// register_deactivation_hook( __FILE__, array('AlecadddPluginDeactivate', 'deactivate') );
