<?php
/**
 * Theme Customizer - Footer
 *
 * @package burnt-shake
 */

namespace BurntShake\Api\Customizer;

use WP_Customize_Control;
use WP_Customize_Color_Control;

use BurntShake\Api\Customizer;

/**
 * Customizer class
 */
class Footer
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register( $wp_customize )
	{
		$wp_customize->add_section( 'burnt-shake_footer_section' , array(
			'title' => __( 'Footer', 'burnt-shake' ),
			'description' => __( 'Customize the Footer' ),
			'priority' => 162
		) );

		$wp_customize->add_setting( 'burnt-shake_footer_background_color' , array(
			'default' => '#ffffff',
			'transport' => 'postMessage', // or refresh if you want the entire page to reload
		) );

		$wp_customize->add_setting( 'burnt-shake_footer_copy_text' , array(
			'default' => 'Proudly powered by AWPS',
			'transport' => 'postMessage', // or refresh if you want the entire page to reload
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'burnt-shake_footer_background_color', array(
			'label' => __( 'Background Color', 'burnt-shake' ),
			'section' => 'burnt-shake_footer_section',
			'settings' => 'burnt-shake_footer_background_color',
		) ) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'burnt-shake_footer_copy_text', array(
			'label' => __( 'Copyright Text', 'burnt-shake' ),
			'section' => 'burnt-shake_footer_section',
			'settings' => 'burnt-shake_footer_copy_text',
		) ) );

		if ( isset( $wp_customize->selective_refresh ) ) {
			$wp_customize->selective_refresh->add_partial( 'burnt-shake_footer_background_color', array(
				'selector' => '#burnt-shake-footer-control',
				'render_callback' => array( $this, 'outputCss' ),
				'fallback_refresh' => true
			) );

			$wp_customize->selective_refresh->add_partial( 'burnt-shake_footer_copy_text', array(
				'selector' => '#burnt-shake-footer-copy-control',
				'render_callback' => array( $this, 'outputText' ),
				'fallback_refresh' => true
			) );
		}
	}

	/**
	 * Generate inline CSS for customizer async reload
	 */
	public function outputCss()
	{
		echo '<style type="text/css">';
			echo Customizer::css( '.site-footer', 'background-color', 'burnt-shake_footer_background_color' );
		echo '</style>';
	}

	/**
	 * Generate inline text for customizer async reload
	 */
	public function outputText()
	{
		echo Customizer::text( 'burnt-shake_footer_copy_text' );
	}
}
