<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Theme Settings', 'maidz' ) )
	// Common settings.
	->add_tab( __( 'Common', 'maidz' ), [
		Field::make( 'complex', 'socials', __( 'Social Links', 'maidz' ) )
			->set_layout( 'tabbed-horizontal' )
			->add_fields( [
				Field::make( 'image', 'icon', __( 'Icon', 'maidz' ) )
					->set_width( 50 ),
				Field::make( 'text', 'url', __( 'URL', 'maidz' ) )
					->set_width( 50 )
			] )
	] )

	// Header settings.
	->add_tab( __( 'Header', 'maidz' ), [
		Field::make( 'image', 'header_logo', __( 'Header Logo', 'maidz' ) )
			->set_width( 30 ),
		Field::make( 'text', 'header_button_label', __( 'Button Label', 'maidz' ) )
			->set_width( 35 ),
		Field::make( 'text', 'header_button_link', __( 'Button Link', 'maidz' ) )
			->set_width( 35 )
	] )

	// Footer settings.
	->add_tab( __( 'Footer', 'maidz' ), [
		Field::make( 'text', 'copyright', __( 'Copyright', 'maidz' ) )
			->set_width( 20 ),
		Field::make( 'image', 'app_store_image', __( 'AppStore Image', 'maidz' ) )
			->set_width( 20 ),
		Field::make( 'image', 'google_play_image', __( 'GooglePlay Image', 'maidz' ) )
			->set_width( 20 )
	] )

	// 404 Page settings.
	->add_tab( __( '404 Page', 'maidz' ), [
		Field::make( 'image', '404_image', __( '404 Image', 'maidz' ) )
			->set_width( 50 ),

		Field::make( 'textarea', '404_description', __( '404 Description', 'maidz' ) )
			->set_width( 50 )
	] );

