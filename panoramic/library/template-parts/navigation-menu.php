<?php
global $is_translucent;

if ( function_exists( 'max_mega_menu_is_enabled' ) && max_mega_menu_is_enabled( 'primary' ) ) {
?>
<nav id="site-navigation" class="main-navigation-mega-menu" style="background: linear-gradient(to bottom, <?php echo( mmm_get_theme_for_location('primary')['container_background_from'] ); ?>, <?php echo( mmm_get_theme_for_location('primary')['container_background_to'] ); ?>);" role="navigation">
	<div id="main-menu" class="main-menu-container">
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</div>
</nav><!-- #site-navigation -->
<?php 
} else {
	if ( get_theme_mod( 'panoramic-font-awesome-version', customizer_library_get_default( 'panoramic-font-awesome-version' ) ) == '4.7.0' ) {
		$font_awesome_code = 'otb-fa';
		$font_awesome_icon_prefix = 'otb-';
	} else {
		$font_awesome_code = 'fa-solid';
		$font_awesome_icon_prefix = '';
	}
?>
<nav id="site-navigation" class="main-navigation border-bottom <?php echo ( $is_translucent ) ? sanitize_html_class( 'translucent' ) : sanitize_html_class( '' ); ?>" role="navigation">
	<span class="header-menu-button" aria-expanded="false"><i class="<?php echo esc_attr( $font_awesome_code ); ?> <?php echo esc_attr( $font_awesome_icon_prefix ); ?>fa-bars"></i></span>
	<div id="main-menu" class="main-menu-container panoramic-mobile-menu-standard-color-scheme">
		<div class="main-menu-close"><i class="<?php echo esc_attr( $font_awesome_code ); ?> <?php echo esc_attr( $font_awesome_icon_prefix ); ?>fa-angle-right"></i><i class="<?php echo esc_attr( $font_awesome_code ); ?> <?php echo esc_attr( $font_awesome_icon_prefix ); ?>fa-angle-left"></i></div>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'main-navigation-inner' ) ); ?>
	</div>
</nav><!-- #site-navigation -->
<?php 
}
