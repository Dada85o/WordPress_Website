<?php
function vlastni_sablona_enqueue_styles() {
    // Registrace a načtení hlavního stylu
    wp_register_style('vlastni-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('vlastni-style');
}
add_action('wp_enqueue_scripts', 'vlastni_sablona_enqueue_styles');

function mytheme_customize_register( $wp_customize ) {
    // Příklad vlastního pole
    $wp_customize->add_section( 'mytheme_basic', array(
        'title'    => __( 'Základní nastavení', 'mytheme' ),
        'priority' => 30,
    ));

    $wp_customize->add_setting( 'mytheme_phone' , array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mytheme_phone_control', array(
        'label'    => __( 'Telefonní číslo', 'mytheme' ),
        'section'  => 'mytheme_basic',
        'settings' => 'mytheme_phone',
    )));
}
add_action( 'customize_register', 'mytheme_customize_register' );
