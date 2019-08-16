<?php
/**
 * @package AlecadddPlugin
 */

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

class Admin extends BaseController
{
    public $settings;

    public $pages;

    public function __construct() {
        
        $this->settings = new SettingsApi();

        $this->pages = [
            [
                'page_title' => 'Alecaddd Plugin',
                'menu_title' => 'Alecaddd',
                'capability' => 'manage_options',
                'menu_slug' => 'alecaddd_plugin',
                'callback' => function() {echo '<h1>Alecaddd Plugin</h1>';},
                'icon_url' => 'dashicons-store',
                'position' => 110
            ],
            [
                'page_title' => 'Test Plugin',
                'menu_title' => 'Text',
                'capability' => 'manage_options',
                'menu_slug' => 'test_plugin',
                'callback' => function() {echo '<h1>External</h1>';},
                'icon_url' => 'dashicons-store',
                'position' => 9
            ]
        ];

    }

    public function register() {
        // add_action( 'admin_menu', array($this, 'add_admin_pages'));

        $this->settings->addPages($this->pages)->register();
    }

    // public function add_admin_pages() {
    //     add_menu_page('Alecaddd', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
    // }

    // public function admin_index() {
    //     // require template
    //     require_once $this->plugin_path . 'templates/admin.php';
    // }

}