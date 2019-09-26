<?php

if (!defined('ABSPATH')) exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_term_options');
function crb_term_options()
{
	Container::make('post_meta', __('Slider'))
	 ->where( 'post-type', '=', 'slider' )
	 ->add_fields(array(
		 Field::make( 'image', 'cb_term_image', __( 'cb_term_image' ) )
	 ));
}

