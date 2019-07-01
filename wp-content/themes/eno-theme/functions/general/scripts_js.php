<?php

/**
 * En este archivo se incluyen los scripts
 *
 */


/** ==============================================================================================================
 *                                                HOOKS
 *  ==============================================================================================================
 */


add_action( 'wp_enqueue_scripts', 'cltvo_js' ); // incluye el functions.js
add_action( 'admin_enqueue_scripts', 'cltvo_admin_js' ); // incluye el admin-functions.js. Descomentar para tener JS en admin (no olvidar crear el file [admin-functions.js])


/** ==============================================================================================================
 *                                               SCRIPTS
 *  ==============================================================================================================
 */

// incluye el functions.js
function cltvo_js(){
	wp_register_script( 'cltvo_functions_js', JSPATH.'functions.js', array(
		'jquery',
		// 'cltvo_scrollIt_js',
		// 'cltvo_swiper_js',
		'cltvo_sticky_js',
		'cltvo_validate_js',
		'cltvo_validate_translate_js',
		'cltvo_scrollmagic_js',
		'cltvo_scrollmagic_addindicators_js',
		'cltvo_easings_js',
		'cltvo_scrilloverflow_js',
		'cltvo_fullpage__js'
	), false, true );

	//Sticky kit
	wp_register_script( 'cltvo_sticky_js', 'http://leafo.net/sticky-kit/src/jquery.sticky-kit.js', array('jquery'), false, true );

	wp_register_script( 'cltvo_scrollmagic_js', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array('jquery'), false, true );
	wp_register_script( 'cltvo_scrollmagic_addindicators_js', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array('jquery'), false, true);

	wp_register_script( 'cltvo_easings_js', '//cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/jquery.easings.min.js', array('jquery'), false, true );
	wp_register_script( 'cltvo_scrilloverflow_js', '//cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/scrolloverflow.min.js', array('jquery'), false, true);
	wp_register_script( 'cltvo_fullpage__js', '//cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js', array('jquery'), false, true);



	wp_register_script( 'cltvo_validate_js', JSPATH.'jquery.validate.min.js', array('jquery'), false, true );
	wp_register_script( 'cltvo_validate_translate_js', JSPATH.'messages_es_MX.min.js', array('jquery'), false, true );

	wp_localize_script( 'cltvo_functions_js', 'cltvo_js_vars', cltvo_js_vars() );

	wp_enqueue_script('jquery');
	wp_enqueue_script('cltvo_sticky_js');
	wp_enqueue_script('cltvo_functions_js');
}

// incluye el admin-functions.js

function cltvo_admin_js(){
	wp_register_script( 'cltvo_admin_functions_js', JSPATH.'admin-functions.js', array('jquery'), false, false );
	wp_localize_script( 'cltvo_admin_functions_js', 'cltvo_js_vars', cltvo_js_vars() );

	wp_enqueue_style('admin-styles', CSSPATH.'ultraligero_admin.css' );
	wp_enqueue_script('jquery');
	wp_enqueue_script('cltvo_admin_functions_js');
}

// genera el site_url y template_url para javascript

function cltvo_js_vars(){
	$php2js_vars = array(
		'site_url'     => home_url('/'),
		'template_url' => get_bloginfo('template_url'),
		'ajax_url' 		=> admin_url( 'admin-ajax.php' ),
	);
	return $php2js_vars;
}


?>
