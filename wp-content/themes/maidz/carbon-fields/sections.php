<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', __( 'Fields', THEME_NAME ) )
	->where( 'post_type', '=', 'page' )
	->where( 'post_template', '=', 'page-templates/flexible-sections.php' )
	->add_fields( [
		Field::make( 'complex', 'page_sections', __( 'Page Sections', THEME_NAME ) )
			->set_layout( 'tabbed-horizontal' )

			// Hero section.
			->add_fields( 'hero_section', __( 'Hero Section', THEME_NAME ), [
				// Main fields.
				Field::make( 'rich_text', 'title', __( 'Title', THEME_NAME ) )
					->set_width( 40 ),
				Field::make( 'text', 'text', __( 'Text', THEME_NAME ) )
					->set_width( 30 ),
				Field::make( 'checkbox', 'is_first', __( 'First on the Page', THEME_NAME ) )
					->set_width( 30 ),
				Field::make( 'image', 'circle', __( 'Circle Image', THEME_NAME ) )
				     ->set_width( 25 ),
				Field::make( 'image', 'screen', __( 'Screen Image', THEME_NAME ) )
				     ->set_width( 25 ),
				Field::make( 'image', 'note_top', __( 'Top Notification Image', THEME_NAME ) )
				     ->set_width( 25 ),
				Field::make( 'image', 'note_bottom', __( 'Bottom Notification Image', THEME_NAME ) )
				     ->set_width( 25 ),
				Field::make( 'image', 'app_store', __( 'AppStore Image', THEME_NAME ) )
				     ->set_width( 50 ),
				Field::make( 'image', 'google_play', __( 'GooglePlay Image', THEME_NAME ) )
				     ->set_width( 50 )
			] )

			// Bullet Points section.
			->add_fields( 'bullets_section', __( 'Bullet Points Section', THEME_NAME ), [
				Field::make( 'complex', 'bullets', __( 'Bullet Points', THEME_NAME ) )
					->set_layout( 'tabbed-horizontal' )
					->add_fields( [
						Field::make( 'image', 'icon', __( 'Icon', THEME_NAME ) )
							->set_width( 50 ),
						Field::make( 'rich_text', 'text', __( 'Text', THEME_NAME ) )
							->set_width( 50 )
					] )
			] )

			// Image and Text section.
			->add_fields( 'image_text_section', __( 'Image and Text Section', THEME_NAME ), [
				Field::make( 'image', 'image', __( 'Image', THEME_NAME ) )
					->set_width( 30 ),
				Field::make( 'rich_text', 'text', __( 'Text', THEME_NAME ) )
					->set_width( 40 ),
				Field::make( 'image', 'bottom_image', __( 'Bottom Image', THEME_NAME ) )
					->set_width( 30 )
			] )

			// Text and Image section.
			->add_fields( 'text_image_section', __( 'Text and Image Section', THEME_NAME ), [
				Field::make( 'rich_text', 'text', __( 'Text', THEME_NAME ) )
					->set_width( 40 ),
				Field::make( 'image', 'image', __( 'Image', THEME_NAME ) )
					->set_width( 30 ),
				Field::make( 'image', 'second_image', __( 'Second Image', THEME_NAME ) )
					->set_width( 30 )
			] )

			// Partners section.
			->add_fields( 'partners_section', __( 'Partners Section', THEME_NAME ), [
				Field::make( 'text', 'title', __( 'Title', THEME_NAME ) ),
				Field::make( 'complex', 'partners', __( 'Partners', THEME_NAME ) )
					->set_layout( 'tabbed-horizontal' )
					->add_fields( [
						Field::make( 'image', 'logo', __( 'Logo', THEME_NAME ) )
							->set_width( 50 ),
						Field::make( 'text', 'name', __( 'Name', THEME_NAME ) )
							->set_width( 50 )
					] )
			] )
	] );

