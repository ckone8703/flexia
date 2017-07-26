<?php
/**
 * Flexia Theme Customizer outout for layout settings
 *
 * @package Flexia
 */


if ( ! function_exists( 'flexia_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see flexia_custom_header_setup().
 */
function flexia_header_style() {
	$header_text_color = get_header_textcolor();

	/*
	 * If no custom options for text are set, let's bail.
	 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
	 */
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>

	  .flexia-container.width {
	    width: <?php echo get_theme_mod('container_width'); ?>%;
	  }

	  .flexia-container.max {
	    max-width: <?php echo get_theme_mod('container_max_width'); ?>px;
	  }

	  .flexia-sidebar-left {
	    width: <?php echo get_theme_mod('left_sidebar_width'); ?>px;
	  }

	  .flexia-sidebar-right {
	    width: <?php echo get_theme_mod('right_sidebar_width'); ?>px;
	  }






	</style>
	<?php
}
endif;