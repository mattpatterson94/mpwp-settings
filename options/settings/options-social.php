<?php

function register_social_options() {
	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_sub_page(
			array(
				'page_title'  => 'Social Network Settings',
				'menu_title'  => 'Social',
				'parent_slug' => 'theme-general-settings',
			)
		);
	}

	if ( function_exists( 'acf_add_local_field_group' ) ) {

		acf_add_local_field_group(
			array(
				'key' => 'group_57e337cb2bd36',
				'title' => 'Social Settings',
				'fields' => array(
					array(
						'key' => 'field_57e337dc1e694',
						'label' => 'Facebook URL',
						'name' => 'facebook_url',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
					array(
						'key' => 'field_57e337ef1e695',
						'label' => 'Twitter URL',
						'name' => 'twitter_url',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
					array(
						'key' => 'field_57e337f71e696',
						'label' => 'Instagram URL',
						'name' => 'instagram_url',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
					array(
						'key' => 'field_57e338021e697',
						'label' => 'Pinterest URL',
						'name' => 'pinterest_url',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
					array(
						'key' => 'field_57e338021e699',
						'label' => 'Youtube URL',
						'name' => 'youtube-play_url',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
					array(
						'key' => 'field_57e338021e611',
						'label' => 'Email',
						'name' => 'envelope-o_url',
						'type' => 'email',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
					array(
						'key' => 'field_57e338021e635',
						'label' => 'Spotify URL',
						'name' => 'spotify_url',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
                    array(
                        'key' => 'field_57e338021e649',
                        'label' => 'iTunes URL',
                        'name' => 'apple_url',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                    ),
				),
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'acf-options-social',
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
			)
		);

	}
}

add_action( 'init', 'register_social_options', 15 );
