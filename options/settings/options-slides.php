<?php

function register_slide_options() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_sub_page(array(
      'page_title'  => 'Slides',
      'menu_title'  => 'Slides',
      'parent_slug' => 'theme-general-settings',
    ));
  }

  if( function_exists('acf_add_local_field_group') ) {

    acf_add_local_field_group(array (
      'key' => 'group_57e4a23dbdaac',
      'title' => 'Slide fields',
      'fields' => array (
        array (
          'key' => 'field_57e4a245a696d',
          'label' => 'Slides',
          'name' => 'slides',
          'type' => 'repeater',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'collapsed' => 'field_57e4a24ea696e',
          'min' => '',
          'max' => '',
          'layout' => 'table',
          'button_label' => 'Add Slide',
          'sub_fields' => array (
            array (
              'key' => 'field_57e4a24ea696e',
              'label' => 'Image',
              'name' => 'image',
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
              'key' => 'field_57e4a295a6971',
              'label' => 'Title',
              'name' => 'title',
              'type' => 'text',
              'instructions' => '',
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
              'key' => 'field_57e4a29ea6972',
              'label' => 'Description',
              'name' => 'description',
              'type' => 'textarea',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'maxlength' => '',
              'rows' => '',
              'new_lines' => 'wpautop',
            ),
            array (
              'key' => 'field_57e4a28ba6970',
              'label' => 'Link Text',
              'name' => 'link_text',
              'type' => 'text',
              'instructions' => '',
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
              'key' => 'field_57e4a270a696f',
              'label' => 'Link URL',
              'name' => 'link_url',
              'type' => 'page_link',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              "allow_archives" => 1,
              'post_type' => [],
              'taxonomy' => [],
              'allow_null' => 0,
              'multiple' => 0,
              'placeholder' => '',
            ),
          ),
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'options_page',
            'operator' => '==',
            'value' => 'acf-options-slides',
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

add_action('init', 'register_slide_options', 14);
