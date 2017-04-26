<?php

//[copyright-text]
function shortcode_copyright_text() {
  $copyright_text = get_field('copyright_text', 'option');

  if(!$copyright_text) {
    $copyright_text = get_bloginfo('sitename') . " &copy; | Copyright " . date('Y');
  } else {
    $copyright_text . " | Copyright " . date('Y');
  }

  return $copyright_text;
}

function initialise_footer_shortcodes() {
  add_shortcode('copyright-text', 'shortcode_copyright_text');
}

add_action('init', 'initialise_footer_shortcodes', 31);


