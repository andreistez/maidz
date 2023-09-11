<?php

/**
 * Testimonials section. Single testimonial.
 * Type image.
 */

if( ! $slide = $args['slide'] ?? null ) return;

$image		= $slide['image'] ?? null;
$name		= $slide['name'] ?? null;
$position	= $slide['position'] ?? null;
$text		= $slide['text'] ?? null;
?>

<div class="swiper-slide">
	<div class="slide__wrapper">
		<div class="slide__info">
			<?php
			if ( $image ) {
				?>
				<div class="slide__img">
					<?php
					echo wp_get_attachment_image(
						$image,
						'thumbnail',
						null,
						['width' => 100, 'height' => 100, 'loading' => 'lazy']
					);
					?>
				</div>
				<?php
			}
			?>

			<div class="slide__person">
				<?php
				if( $name ) echo '<div class="slide__person_name">' . esc_html( $name ) . '</div>';

				if( $position ) echo '<div class="slide__person_info">' . $position . '</div>';
				?>
			</div>
		</div>

		<?php if( $text ) echo '<p class="slide__text">' . esc_html( $text ) . '</p>' ?>
	</div>
</div>

