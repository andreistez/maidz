<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'user_meta', __( 'User Fields', 'maidz' ) )
	->add_fields( [
		Field::make( 'text', 'type', __( 'Account Type', 'maidz' ) )
	] );

