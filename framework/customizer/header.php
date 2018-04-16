<?php
function simpel_customize_register_header_settings($wp_customize) {
    $wp_customize-> get_section('title_tagline')->panel = 'simpel_header_panel';
    $wp_customize-> get_section('header_image')->panel = 'simpel_header_panel';

    $wp_customize-> add_panel('simpel_header_panel', array(
       'title' => __('Header Settings', 'simpel'),
       'priority' => 20
    ));

    $wp_customize-> add_setting('logo');

    $wp_customize-> add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
                'label' => __('OR Logo Upload', 'simpel'),
                'section' => 'title_tagline',
                'settings' => 'logo'
            )
        )
    );
}
add_action('customize_register', 'simpel_customize_register_header_settings');