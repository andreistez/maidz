<?php

/**
 * Section Find layout.
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'find', THEME_URI . '/static/css/flexible-sections/find.min.css', [], THEME_VERSION );

$title			= $section['title'];
$desc			= $section['desc'];
$maids_count	= $section['maids_count'] ?: 1000;
$hosts_count	= $section['hosts_count'] ?: 1000000;
?>

<section class="find">
	<div class="container">
		<?php
		if( $title ) echo '<h2 class="h2">' . esc_html( $title ) . '</h2>';

		if( $desc ) echo '<div class="find__subtext">' . esc_html( $desc ) . '</div>';
		?>

		<div class="find__nums">
			<div class="find__nums_item">
				<div class="find__item_title">
					<?php echo esc_html( number_format( $maids_count ) ) ?><span>+</span>
				</div>
				<p class="find__item_text">
					Starz Nationwide
				</p>
			</div>
			<div class="find__nums_item">
				<div class="find__item_title">
					<?php echo esc_html( number_format( $hosts_count ) ) ?><span>+</span>
				</div>
				<p class="find__item_text">
					Happy Hosts Serviced
				</p>
			</div>
		</div>
		<div class="find__form_wrapper">
			<form class="find__form">
				<fieldset>
					<input type="text" placeholder="Type An Address">
					<button class="button form_button">
						Find Your Next Maid
					</button>
				</fieldset>
			</form>
		</div>
	</div>
</section>

