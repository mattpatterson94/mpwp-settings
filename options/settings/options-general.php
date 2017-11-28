<?php
function register_general_options() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title'  => 'General Settings',
      'menu_title'  => 'Theme Settings',
      'menu_slug'   => 'theme-general-settings',
      'capability'  => 'edit_posts',
      'icon_url'    => plugin_dir_url( __FILE__ ) . 'mpwp.svg',
      'redirect'    => false
    ));
  }

  if( function_exists('acf_add_local_field_group') ) {

    acf_add_local_field_group(array (
      'key' => 'group_57e335745563a',
      'title' => 'General Setting Fields',
      'fields' => array (
        array (
          'key' => 'field_57e335bfec42f',
          'label' => 'Phone Number',
          'name' => 'phone_number',
          'type' => 'text',
          'instructions' => 'Used for display only',
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
        array (
          'key' => 'field_57e335d7ec430',
          'label' => 'Email Address',
          'name' => 'email_address',
          'type' => 'email',
          'instructions' => 'Used for display only',
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
        ),
        array (
          'key' => 'field_57e335d7ec499',
          'label' => 'Address',
          'name' => 'address',
          'type' => 'textarea',
          'instructions' => 'Used for display only',
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
        ),
        array (
          'key' => 'field_57e4a414ca5d6',
          'label' => 'Logo',
          'name' => 'theme_logo',
          'type' => 'image',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'id',
          'preview_size' => 'thumbnail',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
        array (
          'key' => 'field_57e4a414ca5d8',
          'label' => 'Logo (2x)',
          'name' => 'theme_logo_2x',
          'type' => 'image',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'id',
          'preview_size' => 'thumbnail',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'options_page',
            'operator' => '==',
            'value' => 'theme-general-settings',
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

add_action('init', 'register_general_options', 11);
