<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	$basic_options_container = Container::make( 'theme_options', __( 'Basic Options' ) )
	->add_tab( __( 'Contacts' ), array(
		Field::make( 'text', 'crb_address_ro', __( 'address ro' ) )
			 ->set_width( 30 ),
		Field::make( 'text', 'crb_address_ru', __( 'address ru' ) )
			 ->set_width( 30 ),
		Field::make( 'text', 'crb_address_en', __( 'address en' ) )
			 ->set_width( 30 ),
	) );
	
	// Add second options page under 'Basic Options'
	Container::make( 'theme_options', 'Blocks' )
	         ->set_page_parent( $basic_options_container )// reference to a top level container
	         ->add_tab( __( 'Last posts' ), array(
		         Field::make( 'text', 'crb_last_posts_title_ro', __( 'crb_last_posts_title_ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_last_posts_title_ru', __( 'crb_last_posts_title_ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_last_posts_title_en', __( 'crb_last_posts_title_en' ) )
		              ->set_width( 30 ),
		
		         Field::make( 'text', 'crb_last_posts_all_ro', __( 'crb_last_posts_all__ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_last_posts_all_ru', __( 'crb_last_posts_all__ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_last_posts_all_en', __( 'crb_last_posts_all__en' ) )
		              ->set_width( 30 ),
		
		         Field::make( 'text', 'crb_for_write_all_ro', __( 'crb_for_write_all__ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_for_write_all_ru', __( 'crb_for_write_all__ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_for_write_all_en', __( 'crb_for_write_all__en' ) )
		              ->set_width( 30 ),
		
		         Field::make( 'text', 'crb_write_a_comment_all_ro', __( 'crb_write_a_comment_all__ro' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_write_a_comment_all_ru', __( 'crb_write_a_comment_all__ru' ) )
		              ->set_width( 30 ),
		         Field::make( 'text', 'crb_write_a_comment_all_en', __( 'crb_write_a_comment_all__en' ) )
		              ->set_width( 30 ),
	         ) );
	
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( __DIR__ . '/../../vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}
