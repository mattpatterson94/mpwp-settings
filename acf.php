<?php

add_filter('acf/settings/path', 'mpwp_acf_settings_path');

function mpwp_acf_settings_path( $path ) {
    $path = plugin_dir_path( __FILE__ ) . '/acf/';
    return $path;
}

add_filter('acf/settings/dir', 'mpwp_acf_settings_dir');

function mpwp_acf_settings_dir( $dir ) {
  $dir = plugin_dir_url( __FILE__ ) . 'acf/';
  return $dir;
}

// 3. Hide ACF field group menu item
// add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( plugin_dir_path( __FILE__ ) . '/acf/acf.php' );
