<?php

/**
 * Section About layout.
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'about-section', THEME_URI . '/static/css/flexible-sections/about.min.css', [], THEME_VERSION );

$items = $section['items'];
?>

<section class="about">
	<div class="container">
		<?php
		If( ! empty( $items ) ){
			echo '<div class="about__items">';

			foreach( $items as $item )
				get_template_part( 'template-parts/sections/about_section/item', null, ['item' => $item] );

			echo '</div>';
		}
		?>

		<div class="about__button_wrapper">
			<a href="/" class="button transparent" type="button">
				Get Started
			</a>
		</div>
	</div>
</section>

