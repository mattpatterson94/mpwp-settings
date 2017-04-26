<?php

require_once(plugin_dir_path( __FILE__ ) . 'settings/shortcodes-general.php');
require_once(plugin_dir_path( __FILE__ ) . 'settings/shortcodes-social.php');
require_once(plugin_dir_path( __FILE__ ) . 'settings/shortcodes-slides.php');
require_once(plugin_dir_path( __FILE__ ) . 'settings/shortcodes-footer.php');

//[mpwp-setting setting="example"]
function shortcode_mpwp($atts) {
  $args = shortcode_atts(
    array('setting' => ''),
    $atts
  );

  return get_field($args['setting'], 'option');
}

function initialise_copirite_shortcodes() {
  add_shortcode('mpwp-setting', 'shortcode_mpwp');
}

add_action('init', 'initialise_mpwp_shortcodes', 30);

