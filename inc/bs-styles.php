<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function bs_ucauto_scripts() {
	wp_enqueue_style( 'bs-ucauto-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bs-settings-style', get_template_directory_uri() . '/assets/rs-plugin/css/settings.css' );
	wp_enqueue_style( 'bs-resset-style', get_template_directory_uri() . '/assets/style/reset.css' );
	wp_enqueue_style( 'bs-superfish-style', get_template_directory_uri() . '/assets/style/superfish.css' );
	wp_enqueue_style( 'bs-prettyPhoto-style', get_template_directory_uri() . '/assets/style/prettyPhoto.css' );
//	wp_enqueue_style( 'bs-jquery.qtip-style', get_template_directory_uri() . '/assets/style/jquery.qtip.css' );
	wp_enqueue_style( 'bs-animations-style', get_template_directory_uri() . '/assets/style/animations.css' );
	wp_enqueue_style( 'bs-responsive-style', get_template_directory_uri() . '/assets/style/responsive.css' );
	wp_enqueue_style( 'bs-odometer-theme-default-style', get_template_directory_uri() . '/assets/style/odometer-theme-default.css' );
	wp_enqueue_style( 'bs-fonts/streamline-small/style-style', get_template_directory_uri() . '/fonts/streamline-small/style.css' );
	wp_enqueue_style( 'bs-fonts/template/styles-style', get_template_directory_uri() . '/fonts/template/styles.css' );
	wp_enqueue_style( 'bs-fonts/social/styles-style', get_template_directory_uri() . '/fonts/social/styles.css' );
	wp_enqueue_style( 'bs-style-style', get_template_directory_uri() . '/assets/style/my.css' );
	
	
	wp_enqueue_script( 'bs-ucauto-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bs-ucauto-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'bs-jquery-migrate-1.4.1.min-js', get_template_directory_uri() . '/assets/js/jquery-migrate-1.4.1.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.themepunch.tools.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.themepunch.revolution.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.ba-bbq.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.ba-bbq.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery-ui-1.11.4.custom.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery-ui-1.11.4.custom.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.ui.touch-punch.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.ui.touch-punch.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.isotope.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.isotope.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.easing.1.3.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.easing.1.3.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.carouFredSel-6.2.1-packed-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.carouFredSel-6.2.1-packed.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.touchSwipe.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.touchSwipe.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.transit.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.transit.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.hint.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.hint.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.costCalculator.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.costCalculator.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.parallax.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.parallax.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.prettyPhoto-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.prettyPhoto.js', array('jquery'), null, true );
//	wp_enqueue_script( 'bs-jquery.qtip.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.qtip.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-jquery.blockUI.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.blockUI.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-odometer.min-js', get_template_directory_uri() . '/assets/rs-plugin/js/odometer.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'bs-main-js', get_template_directory_uri() . '/assets/rs-plugin/js/main.js', array('jquery'), null, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'bs_ucauto_scripts' );
