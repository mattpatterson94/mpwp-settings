<?php /*

**************************************************************************

Plugin Name:  MPWP Settings
Description:  Sets up a bunch of generic fields via ACF that can be used 
Version:      1.0.1
Author:       Matt Patterson
Author URI:   https://mattdoesdev.com
Text Domain:  mpwp-settings
License:      GPL-2.0+
License URI:  http://www.gnu.org/licenses/gpl-2.0.txt

**************************************************************************
*/

require_once(plugin_dir_path( __FILE__ ) . 'options/options.php');
require_once(plugin_dir_path( __FILE__ ) . 'shortcodes/shortcodes.php');

class MPWPSettings {
  public $menu_id;

  // Plugin initialization
  public function __construct() {}
}

// Start up this plugin
add_action('init', 'MPWPSettings');

function MPWPSettings() {
  global $MPWPSettings;
  $MPWPSettings = new MPWPSettings();
}

?>
