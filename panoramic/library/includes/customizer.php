<?php
/**
 * Panoramic Theme Customizer
 *
 * @package panoramic
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function panoramic_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'panoramic_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function panoramic_customize_preview_js() {
	wp_enqueue_script( 'panoramic_customizer', get_template_directory_uri() . '/library/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'panoramic_customize_preview_js' );

/**
 * Enqueue panoramic custom customizer styling.
 */
function panoramic_load_customizer_script() {
	wp_enqueue_script( 'panoramic-customizer-custom-js', get_template_directory_uri() . '/customizer/customizer-library/js/customizer-custom.js', array('jquery'), PANORAMIC_THEME_VERSION, true );
	wp_enqueue_style( 'panoramic-customizer', get_template_directory_uri() . '/customizer/customizer-library/css/customizer.css' );

	wp_register_style( 'out-the-box-dynamic', false );
	wp_enqueue_style( 'out-the-box-dynamic' );

	ob_start();
	include( get_template_directory() . '/customizer/customizer-library/includes/dynamic-css.php' );
	$css = ob_get_contents();
	ob_end_clean();

	wp_add_inline_style( 'out-the-box-dynamic', $css );
}
add_action( 'customize_controls_enqueue_scripts', 'panoramic_load_customizer_script' );
