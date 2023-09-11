<?php

/**
 * Section Testimonials layout.
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'testimonials', THEME_URI . '/static/css/flexible-sections/testimonials.min.css', [], THEME_VERSION );
//wp_enqueue_script( 'testimonials', THEME_URI . '/static/js/flexible-sections/testimonials.min.js', [], THEME_VERSION, true );

$title			= $section['title'];
$desc			= $section['desc'];
$testimonials	= $section['testimonials'];
?>

<section class="testimonials">
	<div class="container">
		<div class="testimonials__inner">
			<?php
			if( $title ) echo '<h2 class="h2">' . esc_html( $title ) . '</h2>';

			if( $desc ) echo '<p class="testimonials__subtitle">' . esc_html( $desc ) . '</p>';
			?>

			<a href="/" class="button"><?php esc_html_e( 'Sign Up Now', 'maidz' ) ?></a>
		</div>

		<?php
		if( ! empty( $testimonials ) ){
			?>
			<div class="swiper">
				<div class="swiper-wrapper">
					<?php
					foreach( $testimonials as $item )
						get_template_part( 'template-parts/sections/testimonials_section/testimonial', $item['type'], ['slide' => $item] );
					?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
			<?php
		}
		?>
	</div>
</section>

