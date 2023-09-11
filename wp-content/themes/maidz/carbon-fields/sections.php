<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', __( 'Fields', 'maidz' ) )
	->where( 'post_type', '=', 'page' )
	->where( 'post_template', '=', 'page-templates/flexible-sections.php' )
	->add_fields( [
		Field::make( 'complex', 'page_sections', __( 'Page Sections', 'maidz' ) )
			->set_layout( 'tabbed-horizontal' )

			// Hero section.
			->add_fields( 'hero_section', __( 'Hero Section', 'maidz' ), [
				Field::make( 'text', 'sup_title', __( 'Sup Title', 'maidz' ) )
					->set_width( 25 ),
				Field::make( 'text', 'title', __( 'Title', 'maidz' ) )
				     ->set_width( 25 ),
				Field::make( 'text', 'sub_title', __( 'Sub Title', 'maidz' ) )
					->set_width( 25 ),
				Field::make( 'text', 'text', __( 'Text', 'maidz' ) )
					->set_width( 25 ),
				Field::make( 'textarea', 'bottom_text', __( 'Bottom Text', 'maidz' ) )
					->set_width( 25 ),
				Field::make( 'text', 'happy_starz_count', __( 'Happy Starz Count', 'maidz' ) )
					->set_width( 25 ),
				Field::make( 'text', 'happy_hosts_count', __( 'Happy Hosts Count', 'maidz' ) )
					->set_width( 25 )
			] )

			// Testimonials section.
			->add_fields( 'testimonials_section', __( 'Testimonials Section', 'maidz' ), [
				Field::make( 'text', 'title', __( 'Title', 'maidz' ) )
					 ->set_width( 50 ),
				Field::make( 'textarea', 'desc', __( 'Description', 'maidz' ) )
					 ->set_width( 50 ),
				Field::make( 'complex', 'testimonials', __( 'Testimonials', 'maidz' ) )
					->set_layout( 'tabbed-horizontal' )
					->add_fields( [
						Field::make( 'radio', 'type', __( 'Type', 'maidz' ) )
							->set_options( ['image' => __( 'Image', 'maidz' ), 'video' => __( 'Video', 'maidz' )] )
							->set_width( 20 ),
						Field::make( 'image', 'image', __( 'Image', 'maidz' ) )
							->set_width( 20 )
							->set_conditional_logic( [ ['field' => 'type', 'value' => 'image'] ] ),
						Field::make( 'text', 'video', __( 'Video URL', 'maidz' ) )
						     ->set_width( 20 )
							->set_conditional_logic( [ ['field' => 'type', 'value' => 'video'] ] ),
						Field::make( 'image', 'poster', __( 'Poster', 'maidz' ) )
							 ->set_width( 20 )
							 ->set_conditional_logic( [ ['field' => 'type', 'value' => 'video'] ] ),
						Field::make( 'text', 'name', __( 'Name', 'maidz' ) )
						     ->set_width( 20 ),
						Field::make( 'text', 'position', __( 'Position', 'maidz' ) )
						     ->set_width( 20 ),
						Field::make( 'textarea', 'text', __( 'Text', 'maidz' ) )
							->set_width( 20 )
							->set_conditional_logic( [ ['field' => 'type', 'value' => 'image'] ] ),
					] )
			] )

			// About section.
			->add_fields( 'about_section', __( 'About Section', 'maidz' ), [
				Field::make( 'complex', 'items', __( 'Items', 'maidz' ) )
					 ->set_layout( 'tabbed-horizontal' )
					 ->add_fields( [
						 Field::make( 'image', 'image', __( 'Image', 'maidz' ) )
							  ->set_width( 34 ),
						 Field::make( 'text', 'title', __( 'Title', 'maidz' ) )
							  ->set_width( 33 ),
						 Field::make( 'textarea', 'text', __( 'Text', 'maidz' ) )
							  ->set_width( 33 )
					 ] )
			] )

			// Hiring section.
			->add_fields( 'hiring_section', __( 'Hiring Section', 'maidz' ), [
				Field::make( 'text', 'title', __( 'Title', 'maidz' ) )
					->set_width( 50 ),
				Field::make( 'image', 'image', __( 'Image', 'maidz' ) )
					->set_width( 50 ),
				Field::make( 'complex', 'bullets_left', __( 'Bullets Left', 'maidz' ) )
					 ->set_layout( 'tabbed-horizontal' )
					 ->add_fields( [
						 Field::make( 'text', 'item', __( 'Item', 'maidz' ) )
					 ] )
					->set_width( 50 ),
				Field::make( 'complex', 'bullets_right', __( 'Bullets Right', 'maidz' ) )
					 ->set_layout( 'tabbed-horizontal' )
					 ->add_fields( [
						 Field::make( 'text', 'item', __( 'Item', 'maidz' ) )
					 ] )
					->set_width( 50 )
			] )

			// Find Maid section.
			->add_fields( 'find_section', __( 'Find Maid', 'maidz' ), [
				Field::make( 'text', 'title', __( 'Title', 'maidz' ) )
					 ->set_width( 25 ),
				Field::make( 'textarea', 'desc', __( 'Description', 'maidz' ) )
					 ->set_width( 25 ),
				Field::make( 'text', 'maids_count', __( 'Maids Count', 'maidz' ) )
					 ->set_width( 25 ),
				Field::make( 'text', 'hosts_count', __( 'Hosts Count', 'maidz' ) )
					 ->set_width( 25 )
			] )
	] );

