<?php

/**
 * Section Hiring layout.
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'hiring', THEME_URI . '/static/css/flexible-sections/starts.min.css', [], THEME_VERSION );

$title			= $section['title'];
$image			= $section['image'];
$bullets_left	= $section['bullets_left'];
$bullets_right	= $section['bullets_right'];
?>

<section class="starts">
	<div class="container">
		<?php if( $title ) echo '<h2 class="h2">' . esc_html( $title ) . '</h2>' ?>

		<div class="starts__items">
			<?php
			if( ! empty( $bullets_left ) ){
				?>
				<div class="starts__left">
					<ul class="starts__list">
						<?php
						foreach( $bullets_left as $item )
							echo '<li class="starts__item">' . esc_html( $item['item'] ) . '</li>';
						?>
					</ul>
				</div>
				<?php
			}

			if( $image )
				echo '<div class="starts__img">
					<img src="' . wp_get_attachment_image_url( $image, 'medium' ) . '" width="240" height="200" loading="lazy" alt="" />
				</div>';

			if( ! empty( $bullets_right ) ){
				?>
				<div class="starts__right">
					<ul class="starts__list">
						<?php
						foreach( $bullets_left as $item )
							echo '<li class="starts__item">' . esc_html( $item['item'] ) . '</li>';
						?>
					</ul>
				</div>
				<?php
			}
			?>
		</div>
		<div class="starts__button_wrapper">
			<a href="/" class="button rose" type="button">
				Sign Up Now
			</a>
		</div>
	</div>
</section>

