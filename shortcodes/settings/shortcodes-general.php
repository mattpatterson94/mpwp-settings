<?php
//[logo]
function shortcode_logo() {
  $logo = get_bloginfo('sitename');

  if(get_field('theme_logo', 'option')) {
    $logo = wp_get_attachment_image_url(get_field('theme_logo', 'option'), 'full');
  }

  return $logo;
}

// [logo_2x]
function shortcode_logo_2x() {
  $logo = get_bloginfo('sitename');

  if(get_field('theme_logo_2x', 'option')) {
    $logo = wp_get_attachment_image_url(get_field('theme_logo_2x', 'option'), 'full');
  }

  return $logo;
}

//[phone-number]
function shortcode_phone_number() {
  return get_field('phone_number', 'option');
}

//[email-address]
function shortcode_email_address() {
  return get_field('email_address', 'option');
}

function initialise_general_shortcodes() {
  add_shortcode('logo', 'shortcode_logo');
  add_shortcode('logo_2x', 'shortcode_logo_2x');
  add_shortcode('phone-number', 'shortcode_phone_number');
  add_shortcode('email-address', 'shortcode_email_address');
}

add_action('init', 'initialise_general_shortcodes', 31);


