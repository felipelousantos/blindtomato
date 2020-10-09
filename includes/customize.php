<?php

// Add Kirki config

Kirki::add_config( 'blindtomato_kirki_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

// Add panel and section using Kirki

Kirki::add_section( 'blindtomato_section_additional_options', array(
    'title'          => esc_html__( 'Additional Options', 'blindtomato' ),
    'description'    => esc_html__( 'Some Blidtomato additional options.', 'blindtomato' ),
    'priority'       => 160,
) );

// Add sidebar exibition option

Kirki::add_field( 'blindtomato_kirki_config', [
	'type'        => 'switch',
	'settings'    => 'switch_setting',
	'label'       => esc_html__( 'Sidebar exibition', 'blindtomato' ),
	'section'     => 'blindtomato_section_additional_options',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enable', 'blindtomato' ),
		'off' => esc_html__( 'Disable', 'blindtomato' ),
	],
] );