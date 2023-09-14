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
	] )

	// Footer settings.
	->add_tab( __( 'Footer', 'maidz' ), [
		Field::make( 'text', 'copyright', __( 'Copyright', 'maidz' ) )
	] );

