<?php
if ( get_theme_mod( 'panoramic-font-awesome-version', customizer_library_get_default( 'panoramic-font-awesome-version' ) ) == '4.7.0' ) {
	$font_awesome_code = 'otb-fa';
	$font_awesome_brand_code = 'otb-fa';
	$font_awesome_custom_icon_style_code = 'otb-fa';
	$font_awesome_icon_prefix = 'otb-';
} else {
	$font_awesome_code = 'fa';
	$font_awesome_brand_code = 'fab';
	$font_awesome_custom_icon_style_code = get_theme_mod( 'panoramic-social-custom-icon-style-code', customizer_library_get_default( 'panoramic-social-custom-icon-style-code' ) );
	$font_awesome_icon_prefix = '';
}
?>

<ul class="social-links">
<?php
if( get_theme_mod( 'panoramic-social-email', '' ) != '' ) :
    echo '<li><a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'panoramic-social-email' ), 1 ) ) . '" target="_blank" rel="noopener" title="' . esc_attr( __( 'Send us an email', 'panoramic' ) ) . '" class="social-email"><i class="' .$font_awesome_code. ' ' .$font_awesome_icon_prefix. 'fa-envelope"></i></a></li>';
endif;

if( get_theme_mod( 'panoramic-social-skype', '' ) != '' ) :
    echo '<li><a href="skype:' . esc_html( get_theme_mod( 'panoramic-social-skype' ) ) . '?userinfo" rel="noopener" title="' . esc_attr( __( 'Contact us on Skype', 'panoramic' ) ) . '" class="social-skype"><i class="' .$font_awesome_brand_code. ' ' .$font_awesome_icon_prefix. 'fa-skype"></i></a></li>';
endif;

if( get_theme_mod( 'panoramic-social-tumblr', '' ) != '' ) :
    echo '<li><a href="' . esc_url( get_theme_mod( 'panoramic-social-tumblr' ) ) . '" target="_blank" rel="noopener" title="' . esc_attr( __( 'Find us on Tumblr', 'panoramic' ) ) . '" class="social-tumblr"><i class="' .$font_awesome_brand_code. ' ' .$font_awesome_icon_prefix. 'fa-tumblr"></i></a></li>';
endif;

if( get_theme_mod( 'panoramic-social-flickr', '' ) != '' ) :
    echo '<li><a href="' . esc_url( get_theme_mod( 'panoramic-social-flickr' ) ) . '" target="_blank" rel="noopener" title="' . esc_attr( __( 'Find us on Flickr', 'panoramic' ) ) . '" class="social-flickr"><i class="' .$font_awesome_brand_code. ' ' .$font_awesome_icon_prefix. 'fa-flickr"></i></a></li>';
endif;

if( get_theme_mod( 'panoramic-header-search', true ) ) :
	echo '<li><a class="search-btn"><i class="' .$font_awesome_code. ' ' .$font_awesome_icon_prefix. 'fa-search"></i></a></li>';
endif;
?>
</ul>