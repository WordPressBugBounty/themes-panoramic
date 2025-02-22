<?php
/**
 * The template for displaying search forms
 *
 */

if ( get_theme_mod( 'panoramic-font-awesome-version', customizer_library_get_default( 'panoramic-font-awesome-version' ) ) == '4.7.0' ) {
	$font_awesome_code = 'otb-fa';
	$font_awesome_icon_prefix = 'otb-';
} else {
	$font_awesome_code = 'fa';
	$font_awesome_icon_prefix = '';
}
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field" placeholder="<?php echo esc_attr( pll__( get_theme_mod( 'panoramic-search-placeholder-text', customizer_library_get_default( 'panoramic-search-placeholder-text' ) ) ) ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'panoramic' ); ?>" />
	<a class="search-submit">
		<i class="<?php echo esc_attr( $font_awesome_code ); ?> <?php echo esc_attr( $font_awesome_icon_prefix ); ?>fa-search"></i>
	</a>
</form>