<?php

//[social-url product="example"]
function shortcode_social_url($atts) {
  $args = shortcode_atts(
    array('product' => 'facebook'),
    $atts
  );

  return get_field($args['product'] . '_url', 'option');
}

//[social-icons]
function shortcode_social_icons() {
  $available_social_medias = ['facebook', 'twitter', 'instagram', 'pinterest'];

  $html = "";
  $social_media_html = "";

  foreach($available_social_medias as $sm) {
    $sm_url = get_field($sm . '_url', 'option');
    if($sm_url) {
      $social_media_html .= "<li><a href='$sm_url'><i class='fa fa-$sm'></i></a></li>";
    }
  }

  if(!empty($social_media_html)) {
    $html = "<ul class='social-icons'>";
    $html .= $social_media_html;
    $html .= "</ul>";
  }

  return $html;
}

function initialise_social_shortcodes() {
  add_shortcode('social-url', 'shortcode_social_url');
  add_shortcode('social-icons', 'shortcode_social_icons');
}

add_action('init', 'initialise_social_shortcodes', 31);


