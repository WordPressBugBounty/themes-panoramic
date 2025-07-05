<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer Library Demo
 */

if ( ! function_exists( 'panoramic_customizer_library_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function panoramic_customizer_library_build_styles() {
	
	$mobile_menu_breakpoint = 960;

    // Primary Color
    $color = 'panoramic-primary-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );

    if ( $colormod !== customizer_library_get_default( $color ) ) {

        $sancolor = esc_html( $colormod );
        $sancolor_rgb = customizer_library_hex_to_rgb( $sancolor );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'a,
                .header-image .overlay .opacity h1,
				.header-image .overlay .opacity h2,
                .panoramic-slider-container.default .slider .slide .overlay .opacity h1,
				.panoramic-slider-container.default .slider .slide .overlay .opacity h2,
				.search-btn .otb-fa-search,
                .search-btn .fa-search,
				.site-title a,
				.widget-area .widget a,
                .rpwe-title a,
                .rpwe-block .rpwe-comment,
				.search-button .otb-fa-search,
                .search-button .fa-search,
				.info-text em,
				.woocommerce .woocommerce-breadcrumb a,
				.woocommerce-page .woocommerce-breadcrumb a,
				.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
				.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
				.color-text,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon.elementor-view-default .elementor-icon,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon.elementor-view-framed .elementor-icon,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon-box.elementor-view-default .elementor-icon,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon-box.elementor-view-framed .elementor-icon,
                
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-amount-details .bpa-front-module--bs-ad--price,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active::before,
				.panoramic-bookingpress-use-theme-styles .bpa-custom-datepicker .el-year-table td.today .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-custom-datepicker .el-month-table td.today .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-front--dt__calendar .vc-day.is-today .vc-day-content,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control--checkbox .el-checkbox__input.is-checked + .el-checkbox__label,
				.panoramic-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item.__bpa-is-active,
				.panoramic-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item.__bpa-is-active span,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-vac-pd__item.__bpa-pd-is-total-item .bpa-vac-pd__val,
				.panoramic-bookingpress-use-theme-styles .el-date-picker__header-label.active, .el-date-picker__header-label:hover,
				.panoramic-bookingpress-use-theme-styles .el-date-table td.available:hover,
				.panoramic-bookingpress-use-theme-styles .el-date-table td.today:not(.current) span,
				.panoramic-bookingpress-use-theme-styles .el-month-table td .cell:hover,
				.panoramic-bookingpress-use-theme-styles .el-month-table td.current:not(.disabled) .cell,
				.panoramic-bookingpress-use-theme-styles .el-year-table td .cell:hover,
				.panoramic-bookingpress-use-theme-styles .el-year-table td.current:not(.disabled) .cell,
				.panoramic-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table td:not(.next-month):not(.prev-month):not(.today):not(.current) span:hover,
				.panoramic-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table td:not(.current):not(.today) span:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-year-table td.today .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-month-table td.today .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-custom-datepicker .el-year-table td.today .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-custom-datepicker .el-month-table td.today .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item.__bpa-is-active,
				.panoramic-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item.__bpa-is-active span,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-vac-pd__item.__bpa-pd-is-total-item .bpa-vac-pd__val,
				.panoramic-bookingpress-use-theme-styles .el-date-picker__header-label.active,
				.panoramic-bookingpress-use-theme-styles .el-date-picker__header-label:hover,
				.panoramic-bookingpress-use-theme-styles .el-date-table td.available:hover,
				.panoramic-bookingpress-use-theme-styles .el-date-table td.today:not(.current) span,
				.panoramic-bookingpress-use-theme-styles .el-month-table td .cell:hover,
				.panoramic-bookingpress-use-theme-styles .el-month-table td.current:not(.disabled) .cell,
				.panoramic-bookingpress-use-theme-styles .el-year-table td .cell:hover,
				.panoramic-bookingpress-use-theme-styles .el-year-table td.current:not(.disabled) .cell,
				.panoramic-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table td:not(.next-month):not(.prev-month):not(.today):not(.current) span:hover,
				.panoramic-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table td:not(.current):not(.today) span:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-year-table td.today .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-month-table td.today .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-custom-datepicker .el-year-table td.today .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-custom-datepicker .el-month-table td.today .cell,
                
                .wp-block-search__button-inside.wp-block-search__button-inside.wp-block-search__icon-button .wp-block-search__button,
                .wc-block-mini-cart__footer .wc-block-mini-cart__footer-actions .wc-block-components-button.outlined'
            ),
            'declarations' => array(
                'color' => $sancolor
            )
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.wp-block-search__button-inside.wp-block-search__icon-button .wp-block-search__button'
        	),
        	'declarations' => array(
        		'stroke' => $sancolor
        	)
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.panoramic-bookingpress-use-theme-styles .bpa-front-module--category .bpa-front-cat-items .bpa-front-ci-pill.el-tag.__bpa-is-active svg,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si-card--checkmark-icon svg,
				.panoramic-bookingpress-use-theme-styles .bpa-front-dcw__vector .bpa-front-dcw__vector-primary-color,
				.panoramic-bookingpress-use-theme-styles .bpa-front-loader-cl-primary,
				.panoramic-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item.__bpa-is-active svg,
				.panoramic-bookingpress-use-theme-styles .bpa-front-data-empty-view--my-bookings .bpa-front-dev__primary-bg,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--booking-summary .bpa-front-module--bs-head .bpa-head__vector-item,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--confirmation .bpa-head__vector--confirmation .bpa-head__vector-item,
				.panoramic-bookingpress-use-theme-styles .bpa-front-thankyou-module-container .bpa-front-tmc__head .bpa-front-tmc__vector--confirmation .bpa-head__vector-item,
        		.panoramic-bookingpress-use-theme-styles .bpa-front-loader-cl-primary,
				.panoramic-bookingpress-use-theme-styles .bpa-front-data-empty-view .bpa-front-dev__primary-bg,
				.panoramic-bookingpress-use-theme-styles .bpa-front__no-timeslots-body svg .bpa-front-dev__primary-bg'
        	),
        	'declarations' => array(
        		'fill' => $sancolor .' !important'
        	)
        ) );
        
		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'div.wpforms-container form.wpforms-form input[type="text"]:focus,
				div.wpforms-container form.wpforms-form input[type="email"]:focus,
				div.wpforms-container form.wpforms-form input[type="tel"]:focus,
				div.wpforms-container form.wpforms-form input[type="url"]:focus,
				div.wpforms-container form.wpforms-form input[type="password"]:focus,
				div.wpforms-container form.wpforms-form input[type="search"]:focus,
				div.wpforms-container form.wpforms-form select:focus,
				div.wpforms-container form.wpforms-form textarea:focus,
				.panoramic-bbpress-use-theme-styles #bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content:focus,
				.panoramic-bbpress-use-theme-styles #bbpress-forums fieldset.bbp-form input[type="text"]:focus,
				input[type="text"]:focus,
				input[type="email"]:focus,
				input[type="tel"]:focus,
				input[type="url"]:focus,
				input[type="password"]:focus,
				input[type="search"]:focus,
				select:focus,
				textarea:focus,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon.elementor-view-framed .elementor-icon,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon-box.elementor-view-framed .elementor-icon,
				.wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper:focus-within,
				
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control input:focus,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control .el-textarea__inner:focus,
				.panoramic-bookingpress-use-theme-styles .el-date-picker__time-header .el-input .el-input__inner:focus,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--service-item.__bpa-is-selected .bpa-front-si-card,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--category .bpa-front-cat-items .bpa-front-ci-pill.el-tag.__bpa-is-active,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--category .bpa-front-cat-items .bpa-front-ci-pill.el-tag:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front--dt__time-slots .bpa-front--dt__ts-body .bpa-front--dt__ts-body--row .bpa-front--dt__ts-body--items .bpa-front--dt__ts-body--item:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active .bpa-front-tm--item-icon,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--payment-methods .bpa-front-module--pm-body .bpa-front-module--pm-body__item.__bpa-is-selected,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--payment-methods .bpa-front-module--pm-body .bpa-front-module--pm-body__item.__is-selected,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control--checkbox .el-checkbox__input.is-checked .el-checkbox__inner,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control--checkbox .el-checkbox__inner:hover,
				.panoramic-bookingpress-use-theme-styles .el-radio__input.is-checked .el-radio__inner,
				.panoramic-bookingpress-use-theme-styles .bpa-front--dt__time-slots .bpa-front--dt__ts-body .bpa-front--dt__ts-body--row .bpa-front--dt__ts-body--items .bpa-front--dt__ts-body--item.__bpa-is-selected,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--atc-wrapper .bpa-front-btn:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front-btn--primary,
				.panoramic-bookingpress-use-theme-styles .bpa-ma-vac--action-btn-group .bpa-front-btn:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .btn-prev:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .btn-next:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front-btn--primary:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li.active,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li:hover'
			),
			'declarations' => array(
				'border-color' => $sancolor .' !important'
			)
		) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
				'.main-navigation,
				.main-navigation ul ul,
				#comments .form-submit #submit,
				.search-block .search-submit,
				.no-results-btn,
				button,
        		a.button,
        		.widget-area .widget a.button,
				.panoramic-page-builders-use-theme-styles .widget_sow-button .ow-button-base a,
				.panoramic-page-builders-use-theme-styles .elementor-widget-button .elementor-button,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon.elementor-view-stacked .elementor-icon,
				input[type="button"],
				input[type="reset"],
				input[type="submit"],
        		p.woocommerce-store-notice.demo_store,
				.woocommerce ul.products li.product a.add_to_cart_button,
				.woocommerce-page ul.products li.product a.add_to_cart_button,
				.woocommerce ul.products li.product a.button.product_type_simple,
				.woocommerce-page ul.products li.product a.button.product_type_simple,
        		.woocommerce button.button,
				.woocommerce button.button.alt,
				.woocommerce a.button.alt,
				.woocommerce-page button.button.alt,
				.woocommerce input.button.alt,
				.woocommerce-page #content input.button.alt,
				.woocommerce .cart-collaterals .shipping_calculator .button,
				.woocommerce-page .cart-collaterals .shipping_calculator .button,
				.woocommerce a.button,
				.woocommerce-page a.button,
				.woocommerce input.button,
				.woocommerce-page #content input.button,
				.woocommerce-page input.button,
				.woocommerce #review_form #respond .form-submit input,
				.woocommerce-page #review_form #respond .form-submit input,
				.woocommerce #respond input#submit.alt.disabled,
				.woocommerce #respond input#submit.alt.disabled:hover,
				.woocommerce #respond input#submit.alt:disabled,
				.woocommerce #respond input#submit.alt:disabled:hover,
				.woocommerce #respond input#submit.alt:disabled[disabled],
				.woocommerce #respond input#submit.alt:disabled[disabled]:hover,
        		
				.woocommerce button.button:disabled,
				.woocommerce button.button:disabled[disabled],
				.woocommerce button.button:disabled:hover,
				.woocommerce button.button:disabled[disabled]:hover,
				.woocommerce button.button.alt:disabled,
				.woocommerce button.button.alt:disabled[disabled],
				.woocommerce button.button.alt:disabled,
				.woocommerce button.button.alt:disabled:hover,
				.woocommerce button.button.alt:disabled[disabled],
				.woocommerce button.button.alt:disabled[disabled]:hover,
				.woocommerce button.button,
				.woocommerce button.button.alt,
				.woocommerce button.button.alt.disabled,
				.woocommerce button.button.alt.disabled:hover,
				.woocommerce a.button.alt,
				.woocommerce-page button.button.alt,
				.woocommerce input.button.alt,

        		.widget_search .search-submit,
				.widget_product_search .search-submit,
				.wpcf7-submit,
        		div.wpforms-container form.wpforms-form input[type=submit],
				div.wpforms-container form.wpforms-form button[type=submit],
				div.wpforms-container form.wpforms-form .wpforms-page-button,
        		html #infinite-handle span button,
				.site-footer-bottom-bar,
        		.panoramic-page-builders-use-theme-styles .testimonials .sow-slider-base .sow-slide-nav,
        		.panoramic-page-builders-use-theme-styles .elementor-widget-icon-box.elementor-view-stacked .elementor-icon,

				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active .bpa-front-tm--item-icon,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active span,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body strong.--is-service-price,
				.panoramic-bookingpress-use-theme-styles .bpa-front-btn--primary,
				.panoramic-bookingpress-use-theme-styles .bpa-front-btn--primary:focus,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li.active,
				.panoramic-bookingpress-use-theme-styles .bpa-ma-vac--action-btn-group .bpa-front-btn:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma-table-actions-wrap .bpa-front-btn--icon-without-box:hover,
				.panoramic-bookingpress-use-theme-styles .el-date-table td.current:not(.disabled) span,
				.panoramic-bookingpress-use-theme-styles .bpa-front--dt__calendar .vc-day .vc-highlights .vc-day-layer .vc-highlight,
        		
				.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
				.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        		.wp-block-search__button,
        		.wc-block-components-button:not(.is-link).contained,
				.wc-block-components-button:not(.is-link).outlined:hover,
        		.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link'
			),
        	'declarations' => array(
        		'background-color' => $sancolor
        	)
		) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.panoramic-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active .bpa-front-tm--item-icon,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs--vertical-left .bpa-front-tab-menu .bpa-front-tab-menu--item.__bpa-is-active span,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body strong.--is-service-price,
				.panoramic-bookingpress-use-theme-styles .bpa-front-btn--primary,
				.panoramic-bookingpress-use-theme-styles .bpa-front-btn--primary:focus,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li.active,
				.panoramic-bookingpress-use-theme-styles .bpa-ma-vac--action-btn-group .bpa-front-btn:hover,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma-table-actions-wrap .bpa-front-btn--icon-without-box:hover,
				.panoramic-bookingpress-use-theme-styles .el-date-table td.current:not(.disabled) span,
				.panoramic-bookingpress-use-theme-styles .bpa-front--dt__calendar .vc-day .vc-highlights .vc-day-layer .vc-highlight'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor .' !important'
        	)
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.main-navigation.translucent,
        		#main-menu.panoramic-mobile-menu-standard-color-scheme'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor . ' !important'
        	),
        	'media' => '(max-width: ' .$mobile_menu_breakpoint. 'px)'
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
				'.main-navigation.translucent'
        	),
        	'declarations' => array(
        		'background-color' => 'rgba(' .$sancolor_rgb['r']. ',' .$sancolor_rgb['g']. ',' .$sancolor_rgb['b']. ', 0.7)'
			)
		) );
        
        Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'.header-cart-checkout.cart-has-items .otb-fa-shopping-cart,
				.header-cart-checkout.cart-has-items .fa-shopping-cart'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor . ' !important'
			)
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.woocommerce .woocommerce-info,
        		.woocommerce .woocommerce-message'
        	),
        	'declarations' => array(
        		'border-top-color' => $sancolor
        	)
        ) );
        
		Customizer_Library_Styles()->add( array(
        	'selectors' => array(
				'::-moz-selection'
			),
			'declarations' => array(
				'background-color' => $sancolor
			)
		) );

		Customizer_Library_Styles()->add( array(
        	'selectors' => array(
				'::selection'
			),
			'declarations' => array(
				'background-color' => $sancolor
			)
		) );

    }

    // Secondary Color
    $color = 'panoramic-secondary-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );

    if ( $colormod !== customizer_library_get_default( $color ) ) {

    	$sancolor = esc_html( $colormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'a:hover,
				.widget-area .widget a:hover,
                .rpwe-title a:hover,
                .rpwe-block .rpwe-comment:hover,
                .search-btn .otb-fa-search:hover,
				.search-button .otb-fa-search:hover,
                .search-btn .fa-search:hover,
				.search-button .fa-search:hover,
				.site-header .site-top-bar-left a:hover,
				.site-header .site-top-bar-right a:hover,
				.site-header .site-header-right a:hover,
				.woocommerce .woocommerce-breadcrumb a:hover,
				.woocommerce-page .woocommerce-breadcrumb a:hover,
				.woocommerce #content div.product .woocommerce-tabs ul.tabs li.active,
				.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
				.woocommerce-page #content div.product .woocommerce-tabs ul.tabs li.active,
				.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active,
                .wp-block-search__button-inside.wp-block-search__button-inside.wp-block-search__icon-button .wp-block-search__button:hover'
            ),
            'declarations' => array(
                'color' => $sancolor
            )
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.wp-block-search__button-inside.wp-block-search__icon-button .wp-block-search__button:hover'
        	),
        	'declarations' => array(
        		'stroke' => $sancolor
        	)
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.main-navigation button:hover,
				#comments .form-submit #submit:hover,
				.search-block .search-submit:hover,
				.no-results-btn:hover,
				button:hover,
        		a.button:hover,
				.widget-area .widget a.button:hover,
				.panoramic-page-builders-use-theme-styles .widget_sow-button .ow-button-base a.ow-button-hover:hover,
				.panoramic-page-builders-use-theme-styles .elementor-widget-button .elementor-button:hover,
				input[type="button"]:hover,
				input[type="reset"]:hover,
				input[type="submit"]:hover,
				.site-header .site-top-bar-right a:hover .header-cart-checkout .otb-fa,
				.site-header .site-header-right a:hover .header-cart-checkout .otb-fa,
        		.site-header .site-top-bar-right a:hover .header-cart-checkout .fa-solid,
				.site-header .site-header-right a:hover .header-cart-checkout .fa-solid,
				.woocommerce input.button.alt:hover,
				.woocommerce-page #content input.button.alt:hover,
				.woocommerce .cart-collaterals .shipping_calculator .button,
				.woocommerce-page .cart-collaterals .shipping_calculator .button,
				.woocommerce a.button:hover,
				.woocommerce-page a.button:hover,
				.woocommerce input.button:hover,
				.woocommerce-page #content input.button:hover,
				.woocommerce-page input.button:hover,
				.woocommerce ul.products li.product a.add_to_cart_button:hover,
				.woocommerce-page ul.products li.product a.add_to_cart_button:hover,
				.woocommerce ul.products li.product a.button.product_type_simple:hover,
				.woocommerce-page ul.products li.product a.button.product_type_simple:hover,
        		.woocommerce button.button:hover,
				.woocommerce button.button.alt:hover,
				.woocommerce a.button.alt:hover,
				.woocommerce-page button.button.alt:hover,
				.woocommerce #review_form #respond .form-submit input:hover,
				.woocommerce-page #review_form #respond .form-submit input:hover,
        		.widget_search .search-submit:hover,
				.widget_product_search .search-submit:hover,
				.wpcf7-submit:hover,
        		html #infinite-handle span button:hover,
        		div.wpforms-container form.wpforms-form input[type=submit]:hover,
				div.wpforms-container form.wpforms-form button[type=submit]:hover,
				div.wpforms-container form.wpforms-form .wpforms-page-button:hover,
        		.panoramic-page-builders-use-theme-styles .testimonials .sow-slider-base .sow-slide-nav:hover,
        		
        		.panoramic-bookingpress-use-theme-styles .bpa-front-btn--primary:hover,
        		
        		.wp-block-search__button:hover,
        		.wc-block-components-button:not(.is-link).contained:hover,
        		.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover'
        	),
        	'declarations' => array(
        		'background-color' => $sancolor .' !important'
        	)
		) );
        
    }
    
    
    // Footer Color
    $color = 'panoramic-footer-color';
    $colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    if ( $colormod !== customizer_library_get_default( $color ) ) {
    
    	$sancolor = esc_html( $colormod );
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-footer'
    		),
    		'declarations' => array(
    			'background-color' => $sancolor
    		)
    	) );
    
    }
    

    // Site Title Font
    $font = 'panoramic-site-title-font';
    $fontmod = get_theme_mod( $font, customizer_library_get_default( $font ) );
    $fontstack = customizer_library_get_font_stack( $fontmod );
    
    if ( $fontmod != customizer_library_get_default( $font ) ) {
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'.site-header .branding .title'
    		),
    		'declarations' => array(
    			'font-family' => $fontstack
    		)
    	) );
    
    }
    
    
    // Heading Font
    $font = 'panoramic-heading-font';
    $fontmod = get_theme_mod( $font, customizer_library_get_default( $font ) );
    $fontstack = customizer_library_get_font_stack( $fontmod );
    
    if ( $fontmod != customizer_library_get_default( $font ) ) {
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'h1, h2, h3, h4, h5, h6,
				h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
				.site-footer-widgets ul li h2.widgettitle,
    			.site-footer-widgets ul li .wp-block-heading,
    			.header-image .overlay .opacity h1,
				.header-image .overlay .opacity h2,
    			.panoramic-slider-container.default .slider .slide .overlay .opacity h1,
				.panoramic-slider-container.default .slider .slide .overlay .opacity h2,
    			ul.product_list_widget li .product-title,
				.woocommerce a.button,
				.woocommerce-page a.button,
				.woocommerce a.button.alt,
				.woocommerce table.cart th,
				.woocommerce-page #content table.cart th,
				.woocommerce-page table.cart th,
				.woocommerce input.button.alt,
				.woocommerce-page #content input.button.alt,
				.woocommerce table.cart input,
				.woocommerce-page #content table.cart input,
				.woocommerce-page table.cart input,
				.woocommerce #respond input#submit,
				.woocommerce a.button,
				.woocommerce button.button,
				.woocommerce input.button,
				button,
    			a.button,
    			.widget-area .widget a.button,
				.panoramic-page-builders-use-theme-styles .widget_sow-button .ow-button-base a,
				.panoramic-page-builders-use-theme-styles .elementor-widget-button .elementor-button,
				.panoramic-page-builders-use-theme-styles .elementor-widget-heading .elementor-heading-title,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title a,
    			.panoramic-page-builders-use-theme-styles .elementor-widget-image-box .elementor-image-box-title,
    			html #jp-relatedposts h3.jp-relatedposts-headline,
				html #infinite-handle span button,
				html #infinite-handle span button:hover,
    			div.wpforms-container form.wpforms-form input[type=submit],
				div.wpforms-container form.wpforms-form button[type=submit],
				div.wpforms-container form.wpforms-form .wpforms-page-button,
    			input[type="button"],
				input[type="reset"],
				input[type="submit"],
    			
    			.panoramic-bookingpress-use-theme-styles .bpa-front-btn--primary span,
    			
    			.wp-block-search__button'
    		),
    		'declarations' => array(
    			'font-family' => $fontstack .' !important'
    		)
    	) );
    
    }

    // Heading Font Color
    $fontcolor = 'panoramic-heading-font-color';
    $fontcolormod = get_theme_mod( $fontcolor, customizer_library_get_default( $fontcolor ) );
    
    if ( $fontcolormod !== customizer_library_get_default( $fontcolor ) ) {
    
    	$sanfontcolor = esc_html( $fontcolormod );
    
    	Customizer_Library_Styles()->add( array(
    		'selectors' => array(
    			'h1, h2, h3, h4, h5, h6,
				h1 a, h2 a, h3 a, h4 a, h5 a, h6 a,
    			ul.product_list_widget li .product-title,
				.site-footer-widgets ul li h2.widgettitle,
    			.site-footer-widgets ul li .wp-block-heading,
    			.panoramic-page-builders-use-theme-styles .elementor-widget-heading .elementor-heading-title,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-title,
    			.panoramic-page-builders-use-theme-styles .elementor-widget-image-box .elementor-image-box-title'
    		),
    		'declarations' => array(
    			'color' => $sanfontcolor
    		)
    	) );
    	 
    }
    

    // Body Font
    $font = 'panoramic-body-font';
    $fontmod = get_theme_mod( $font, customizer_library_get_default( $font ) );
    $fontstack = customizer_library_get_font_stack( $fontmod );

    if ( $fontmod != customizer_library_get_default( $font ) ) {

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
	            'body,
				.site-header .site-top-bar-left a,
				.site-header .site-top-bar-right a,
				.site-header .site-header-right a,
				.breadcrumbs,
	            div.wpforms-container form.wpforms-form .wpforms-field-label,
				div.wpforms-container form.wpforms-form input[type="text"],
				div.wpforms-container form.wpforms-form input[type="email"],
				div.wpforms-container form.wpforms-form input[type="tel"],
				div.wpforms-container form.wpforms-form input[type="url"],
				div.wpforms-container form.wpforms-form input[type="password"],
				div.wpforms-container form.wpforms-form input[type="search"],
				div.wpforms-container form.wpforms-form select,
				div.wpforms-container form.wpforms-form textarea,
	            .panoramic-bbpress-use-theme-styles #bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content,
	            .panoramic-bbpress-use-theme-styles #bbpress-forums fieldset.bbp-form input[type="text"],
				input[type="text"],
				input[type="email"],
				input[type="tel"],
				input[type="url"],
				input[type="password"],
				input[type="search"],
				select,
				textarea,
				.site-footer-widgets .widget a,
				.header-image .overlay .opacity p,
				.panoramic-slider-container.default .slider .slide .overlay .opacity p,
	            .panoramic-page-builders-use-theme-styles .elementor-widget-text-editor,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-description,
	            .panoramic-page-builders-use-theme-styles .elementor-widget-image-box .elementor-image-box-description,
	            
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .bpa-front-si__card-body--heading,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module-heading,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tmc__head .bpa-front-tmc__title,
				.panoramic-bookingpress-use-theme-styles .bpa-front-cancel-module-container .bpa-front-cmc__title,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tmc__booking-id .bpa-front-bi__label,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--add-to-calendar .bpa-fm--atc__heading,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module-heading,
				.panoramic-bookingpress-use-theme-styles .bpa-cp-pd__title,
				.panoramic-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table .bpa-cp-ma-cell-val,
				.panoramic-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table td.el-table__cell .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table .el-table__header-wrapper tr th.el-table__cell,
				.panoramic-bookingpress-use-theme-styles .bpa-left__service-detail .bpa-sd__appointment-title,
				.panoramic-bookingpress-use-theme-styles .bpa-bd__item .bpa-item--val,
				.panoramic-bookingpress-use-theme-styles .bpa-ma-vac-sec-title,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control input,
				.panoramic-bookingpress-use-theme-styles .bpa-left__service-detail .bpa-sd__appointment-id,
				.panoramic-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item a.bpa-tm__item,
				.panoramic-bookingpress-use-theme-styles .bpa-tn__dropdown-menu .bpa-tn__dropdown-item,
				.panoramic-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table td.el-table__cell,
				.panoramic-bookingpress-use-theme-styles .bpa-cp-ma-table.el-table td.el-table__cell .bpa-ma-date-time-details .bpa-ma-dt__time-val,
				.panoramic-bookingpress-use-theme-styles .bpa-bd__item .bpa-item--label,
				.panoramic-bookingpress-use-theme-styles .bpa-vac-pd__item .bpa-vac-pd__label,
				.panoramic-bookingpress-use-theme-styles .bpa-vac-pd__item .bpa-vac-pd__val,
				.panoramic-bookingpress-use-theme-styles .bpa-ma-vac--action-btn-group .bpa-front-btn__small,
				.panoramic-bookingpress-use-theme-styles .bpa-front-btn--primary,
				.panoramic-bookingpress-use-theme-styles .bpa-front-pill,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .el-pager li.number,
				.panoramic-bookingpress-use-theme-styles .bpa-front-dcw__body-title,
				.panoramic-bookingpress-use-theme-styles .bpa-front-dcw__body-sub-title,
				.panoramic-bookingpress-use-theme-styles .bpa-front-btn,
				.panoramic-bookingpress-use-theme-styles .el-popconfirm__main,
				.panoramic-bookingpress-use-theme-styles .bpa-front-btn__small,
				.panoramic-bookingpress-use-theme-styles .el-date-picker__header-label,
				.panoramic-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table th,
				.panoramic-bookingpress-use-theme-styles .el-picker-panel__content .el-date-table td span,
				.panoramic-bookingpress-use-theme-styles .bpa-front-data-empty-view--my-bookings .bpa-front-dev__title,
				.panoramic-bookingpress-use-theme-styles .el-form-item__error,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control input::placeholder,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control .el-textarea__inner::placeholder,
				.panoramic-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-year-table td .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-front-cp-custom-popover .el-month-table td .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-custom-datepicker .el-year-table td .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-custom-datepicker .el-month-table td .cell,
				.panoramic-bookingpress-use-theme-styles .el-year-table td .cell,
				.panoramic-bookingpress-use-theme-styles .el-month-table td .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .btn-prev span,
				.panoramic-bookingpress-use-theme-styles .bpa-front-ma--pagination-wrapper .btn-next span,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module-heading,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-weeks .vc-weekday,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__time-slots .bpa-front--dt__ts-body .bpa-front--dt__ts-body--row .bpa-front--dt__ts-body--items .bpa-front--dt__ts-body--item span,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control input,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-form-control .el-textarea__inner,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-summary-content .bpa-front-module--bs-summary-content-item .bpa-front-bs-sm__item-val,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-head p,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .bpa-front-si-cb__specs .bpa-front-si-cb__specs-item p,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .el-form-item__label .bpa-front-form-label,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .--bpa-is-desc,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--payment-methods .bpa-front-module--pm-body .bpa-front-module--pm-body__item p,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-tab-menu .bpa-front-tab-menu--item, .el-form-item__error,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--category .bpa-front-cat-items .bpa-front-ci-pill.el-tag,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .bpa-front-si-cb__specs .bpa-front-si-cb__specs-item p strong,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--service-item .bpa-front-si-card .bpa-front-si__card-body .bpa-front-si__card-body--heading,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__time-slots .bpa-front--dt__ts-body .bpa-front--dt__ts-body--row .bpa-front--dt-ts__sub-heading,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-summary-content .bpa-front-module--bs-summary-content-item span,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--bs-amount-details .bpa-fm--bs-amount-item .bpa-front-total-payment-amount-label,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front-module--booking-summary .bpa-front-module--bs-amount-details .bpa-front-module--bs-ad--price,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs .bpa-front--dt__calendar .vc-title,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tabs--foot .bpa-front-btn,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control.--bpa-country-dropdown.vue-tel-input strong,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tmc__booking-id .bpa-front-bi__label,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tmc__booking-id .bpa-front-bi__val,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tmc__head .bpa-front-tmc__title,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tmc__summary-content .bpa-front-tmc__sc-item .bpa-front-sc-item__label,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tmc__summary-content .bpa-front-tmc__sc-item .bpa-front-sc-item__val,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--add-to-calendar .bpa-fm--atc__heading,
				.panoramic-bookingpress-use-theme-styles .bpa-front-tmc__head p,
				.panoramic-bookingpress-use-theme-styles .bpa-front-data-empty-view .bpa-front-dev__title,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control input::placeholder,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control .el-textarea__inner::placeholder,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control--file-upload .bpa-fu__placeholder,
				.panoramic-bookingpress-use-theme-styles .bpa-custom-datepicker .el-year-table td .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-custom-datepicker .el-month-table td .cell,
				.panoramic-bookingpress-use-theme-styles .bpa-front--dt__calendar .vc-nav-title,
				.panoramic-bookingpress-use-theme-styles .bpa-front--dt__calendar .vc-nav-items .vc-nav-item,
				.panoramic-bookingpress-use-theme-styles .bpa-front-thankyou-module-container .bpa-front-cc__error-toast-notification,
				.panoramic-bookingpress-use-theme-styles .bpa-front__no-timeslots-body .bpa-front-ntb__val,
				.panoramic-bookingpress-use-theme-styles .bpa-front-module--note-desc,
				.panoramic-bookingpress-use-theme-styles .bpa-front-refund-confirmation-content .bpa-front-rcc__body .bpa-front-rcc__empty-msg,
				.panoramic-bookingpress-use-theme-styles .bpa-front--dt__calendar .vc-day .vc-day-content,
				.panoramic-bookingpress-use-theme-styles .bpa-front-form-control--checkbox .el-checkbox__label'
			),
            'declarations' => array(
                'font-family' => $fontstack .' !important'
            )
        ) );

    }
    
    // Body Font Color
    $fontcolor = 'panoramic-body-font-color';
    $fontcolormod = get_theme_mod( $fontcolor, customizer_library_get_default( $fontcolor ) );
    
    if ( $fontcolormod !== customizer_library_get_default( $fontcolor ) ) {

        $sanfontcolor = esc_html( $fontcolormod );
        $sanfontcolor_rgb = customizer_library_hex_to_rgb( $sanfontcolor );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'body,
				.site-header .site-top-bar-left a,
				.site-header .site-top-bar-right a,
				.site-header .site-header-right a,
				.breadcrumbs,
				.woocommerce .woocommerce-breadcrumb,
				.woocommerce-page .woocommerce-breadcrumb,
				.header-image .overlay .opacity p,
				.panoramic-slider-container.default .slider .slide .overlay .opacity p,
                .woocommerce ul.products li.product .price,
				.woocommerce #content ul.products li.product span.price,
				.woocommerce-page #content ul.products li.product span.price,
				.woocommerce #content div.product p.price,
				.woocommerce-page #content div.product p.price,
				.woocommerce-page div.product p.price,
				.woocommerce #content div.product span.price,
				.woocommerce div.product span.price,
				.woocommerce-page #content div.product span.price,
				.woocommerce-page div.product span.price,
				.woocommerce div.product .woocommerce-tabs ul.tabs li a,
                .woocommerce #reviews #comments ol.commentlist li .meta,
				#add_payment_method #payment div.payment_box,
				.woocommerce-checkout #payment div.payment_box,
                .rpwe-block .rpwe-time,
				.widget-area .widget h2,
                .widget-area .wp-block-heading,
                .panoramic-page-builders-use-theme-styles .testimonials .sow-slider-base ul.sow-slider-images .sow-slider-image-wrapper p,
               	.panoramic-page-builders-use-theme-styles .elementor-widget-text-editor,
				.panoramic-page-builders-use-theme-styles .elementor-widget-icon-box .elementor-icon-box-content .elementor-icon-box-description,
                .panoramic-page-builders-use-theme-styles .elementor-widget-image-box .elementor-image-box-description'
            ),
            'declarations' => array(
                'color' => $sanfontcolor
            )
        ) );

        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.select2-default'
        	),
        	'declarations' => array(
        		'color' => 'rgba(' .$sanfontcolor_rgb['r']. ',' .$sanfontcolor_rgb['g']. ',' .$sanfontcolor_rgb['b']. ', 0.7) !important'
        	)
        ) );
         
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'::-webkit-input-placeholder'
        	),
        	'declarations' => array(
        		'color' => 'rgba(' .$sanfontcolor_rgb['r']. ',' .$sanfontcolor_rgb['g']. ',' .$sanfontcolor_rgb['b']. ', 0.7)'
        	)
        ) );
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		':-moz-placeholder'
        	),
        	'declarations' => array(
        		'color' => 'rgba(' .$sanfontcolor_rgb['r']. ',' .$sanfontcolor_rgb['g']. ',' .$sanfontcolor_rgb['b']. ', 0.7)'
        	)
        ) );
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'::-moz-placeholder'
        	),
        	'declarations' => array(
        		'color' => 'rgba(' .$sanfontcolor_rgb['r']. ',' .$sanfontcolor_rgb['g']. ',' .$sanfontcolor_rgb['b']. ', 0.7)'
        	)
        ) );
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		':-ms-input-placeholder'
        	),
        	'declarations' => array(
        		'color' => 'rgba(' .$sanfontcolor_rgb['r']. ',' .$sanfontcolor_rgb['g']. ',' .$sanfontcolor_rgb['b']. ', 0.7)'
        	)
        ) );
        
        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'.header-cart-checkout .otb-fa,
        		.header-cart-checkout .fa-solid'
        	),
        	'declarations' => array(
        		'background-color' => $sanfontcolor
        	)
        ) );
        
    }
    
	// Form Input Font Color
    $fontcolor = 'panoramic-form-input-font-color';
    $fontcolormod = get_theme_mod( $fontcolor, customizer_library_get_default( $fontcolor ) );
    
    if ( $fontcolormod !== customizer_library_get_default( $fontcolor ) ) {

        $sanfontcolor = esc_html( $fontcolormod );

        Customizer_Library_Styles()->add( array(
        	'selectors' => array(
        		'div.wpforms-container form.wpforms-form input[type="text"],
				div.wpforms-container form.wpforms-form input[type="email"],
				div.wpforms-container form.wpforms-form input[type="tel"],
                div.wpforms-container form.wpforms-form input[type="number"],
				div.wpforms-container form.wpforms-form input[type="url"],
				div.wpforms-container form.wpforms-form input[type="password"],
				div.wpforms-container form.wpforms-form input[type="search"],
				div.wpforms-container form.wpforms-form select,
				div.wpforms-container form.wpforms-form textarea,
        		.panoramic-bbpress-use-theme-styles #bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content,
	            .panoramic-bbpress-use-theme-styles #bbpress-forums fieldset.bbp-form input[type="text"],
				input[type="text"],
				input[type="email"],
				input[type="tel"],
				input[type="url"],
				input[type="password"],
				input[type="search"],
                select,
				textarea,
				.search-block .search-field,
				.select2-drop,
				.select2-container .select2-choice,
        		.select2-container--default .select2-selection--single .select2-selection__rendered,
        		.select2-container--default .select2-results__option,
        		.woocommerce .woocommerce-ordering select,
				.woocommerce-page .woocommerce-ordering select,
				.woocommerce #content .quantity input.qty,
				.woocommerce .quantity input.qty,
				.woocommerce-page #content .quantity input.qty,
				.woocommerce-page .quantity input.qty'
        	),
        	'declarations' => array(
        		'color' => $sanfontcolor
        	)
        ) );
	
    }

}
endif;

add_action( 'customizer_library_styles', 'panoramic_customizer_library_build_styles' );

if ( ! function_exists( 'panoramic_customizer_library_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function panoramic_customizer_library_styles() {

	do_action( 'customizer_library_styles' );

	// Echo the rules
	$css = Customizer_Library_Styles()->build();

	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"out-the-box-custom-css\">\n";
		echo $css;
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}
}
endif;

add_action( 'wp_head', 'panoramic_customizer_library_styles', 11 );