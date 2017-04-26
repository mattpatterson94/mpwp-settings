<?php

function register_footer_options() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_sub_page(array(
      'page_title'  => 'Footer Settings',
      'menu_title'  => 'Footer',
      'parent_slug' => 'theme-general-settings',
    ));
  }

  if( function_exists('acf_add_local_field_group') ) {

    acf_add_local_field_group(array (
      'key' => 'group_57e33c3aa5c1f',
      'title' => 'Footer Settings',
      'fields' => array (
        array (
          'key' => 'field_57fadf2fd6706',
          'label' => 'Copyright Text',
          'name' => 'copyright_text',
          'type' => 'text',
          'instructions' => 'Override \'Copyright 20XX etc\'. Leave blank if you don\'t want to change.',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'options_page',
            'operator' => '==',
            'value' => 'acf-options-footer',
          ),
        ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => 1,
      'description' => '',
    ));
  }
}

add_action('init', 'register_footer_options', 12);

