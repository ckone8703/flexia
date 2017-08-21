<?php
/**
 *
 * @package Flexia
 */

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;


if ( ! function_exists( 'flexia_get_option_defaults' ) ) :
/**
 * Set default options
 */
function flexia_get_option_defaults()
{	
	$flexia_defaults = array(
		'body_font_color' => '#4d4d4d',
		'body_font_family' => 'Open Sans',
		'heading_font_family' => 'Merriweather',
		'container_width' => '90',
		'container_max_width' => '1200',
		'left_sidebar_width' => '300',
		'right_sidebar_width' => '300',
		'blog_bg_color' => '#f9f9f9',
		'post_content_bg_color' => '#fff',
		'post_meta_bg_color' => '#fff',
		'sidebar_widget_bg_color' => '#fff',
		'flexia_header_logo_width' => '150',
		'blog_logo_width' => '150',
		'blog_title_font_size' => '54',
		'blog_desc_font_size' => '18',
		'header_widget_area_bg_color' => '#262625',
		'flexia_topbar_bg_color' => '#262625',
		'flexia_logobar_bg_color' => '#fff',
		'flexia_navbar_bg_color' => '#fff',
		'flexia_nav_menu_link_color' => '#4d4d4d',
		'flexia_nav_menu_link_hover_color' => '#1b1f21',
		'flexia_submenu_bg_color' => '#fff',
		'flexia_submenu_link_color' => '#4d4d4d',
		'flexia_submenu_link_hover_color' => '#1b1f21',
		'footer_widget_area_bg_color' => '#fff',
		'flexia_footer_bg_color' => '#262625',
		'flexia_footer_content_color' => '#CBCED3',
		'flexia_footer_link_color' => '#F56A6A',
		'flexia_footer_link_hover_color' => '#E65A50',

	);
	
	return apply_filters( 'flexia_option_defaults', $flexia_defaults );
}
endif;



if ( ! function_exists( 'flexia_get_setting' ) ) :
/**
 * A wrapper function to get customizer settings
 */
function flexia_get_setting( $setting ) {
	$flexia_settings = wp_parse_args( 
		get_option( 'flexia_settings', array() ), 
		flexia_get_option_defaults() 
	);
	
	return $flexia_settings[ $setting ];
}
endif;




