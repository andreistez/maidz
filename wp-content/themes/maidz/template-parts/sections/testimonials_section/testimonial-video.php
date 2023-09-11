<?php

/**
 * Testimonials section. Single testimonial.
 * Type video.
 */

if( ! $slide = $args['slide'] ?? null ) return;

$video		= $slide['video'] ?? null;
$thumb		= $slide['poster'] ?? null;
$name		= $slide['name'] ?? null;
$position	= $slide['position'] ?? null;
?>

<div class="swiper-slide">
	<div class="frame-wrapper">
		<?php
		if( $video ){
			?>
			<div
				class="frame"
				data-src="<?php echo esc_url( $video ) ?>"
				data-vendor="youtube"
				data-thumbnail="<?php echo wp_get_attachment_image_url( $thumb, 'medium' ) ?>"
			>
			</div>
			<?php
		}
		?>

		<div class="frame__info">
			<img class="play" src="<?php echo THEME_URI ?>/static/img/ico/play.svg" width="75" height="75" alt="" />
			<div class="frame__info_inner">
				<?php
				if( $name ) echo '<div class="frame__name">' . esc_html( $name ) . '</div>';

				if( $position ) echo '<div class="frame__job">' . $position . '</div>';
				?>
			</div>
		</div>
	</div>
</div>

