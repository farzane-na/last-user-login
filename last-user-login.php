<?php
/*
 * Plugin Name:       last user login
 * Plugin URI:        https://github.com/farzane-na/last-user-login
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Farzane Nazmabadi
 * Author URI:        https://farzanenazmabadi.ir/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/farzane-na/last-user-login
 * Text Domain:       last-user-login
 * Domain Path:       /languages
 */


  define("LAST_USER_LOGIN_PLUGIN_DIR_PATH",plugin_dir_path( __FILE__ ));
  define("LAST_USER_LOGIN_PLUGIN_DIR_URL",plugin_dir_url( __FILE__ ));
  define("LAST_USER_LOGIN_PLUGIN_VERSION","1.0.0");
 
 
  if ( !defined( 'ABSPATH' ) ) {
     exit;
 };
 
 require_once LAST_USER_LOGIN_PLUGIN_DIR_PATH."includes/plugin.php";