<?php
/**
 * @package AlecadddPlugin
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController
{
    public function register() {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    function enqueue()
    {
        // enqueue all our scripts
        wp_enqueue_style('mypluginstyle', $this->base_url . 'assets/mystyle.css');
        wp_enqueue_script('mypluginscript', $this->base_url . 'assets/myscript.js');
    }
}