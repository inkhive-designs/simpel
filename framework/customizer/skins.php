<?php
function simpel_customize_register_skins($wp_customize) {
    //---- Color Settings ----//
    $wp_customize->get_section( 'colors' )->panel	=	'simpel_design_panel';

    $wp_customize-> add_setting(
        'simpel-title-color',
        array(
            'default'	=> 'ffffff',
            'sanitize_callback'	=> 'sanitize_hex_color',
            'transport'	=> 'postMessage'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'simpel-title-color',
            array(
                'label' => __('Site Title Color','simpel'),
                'section' => 'colors',
                'settings' => 'simpel-title-color',
                'priority'	=> 2,
            )
        )
    );
}
add_action('customize_register', 'simpel_customize_register_skins');