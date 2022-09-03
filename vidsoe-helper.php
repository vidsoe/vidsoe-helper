<?php
/*
Author: Vidsoe
Author URI: https://vidsoe.com
Description: A collection of useful methods for your WordPress plugins and themes.
Domain Path:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network: true
Plugin Name: Vidsoe Helper
Plugin URI: https://github.com/vidsoe/vidsoe-helper
Requires at least: 5.6
Requires PHP: 5.6
Text Domain: vidsoe-helper
Version: 0.9.2
*/

defined('ABSPATH') or die('Hi there! I\'m just a plugin, not much I can do when called directly.');
require_once(plugin_dir_path(__FILE__) . 'classes/class-vidsoe-helper-loader.php');
register_activation_hook(__FILE__, ['Vidsoe_Helper_Loader', 'activate']);
register_uninstall_hook(__FILE__, ['Vidsoe_Helper_Loader', 'uninstall']);
if(class_exists('Vidsoe_Helper')){
    Vidsoe_Helper::build_update_checker('https://github.com/vidsoe/vidsoe-helper', __FILE__, 'vidsoe-helper');
    Vidsoe_Helper::enqueue_scripts();
}
