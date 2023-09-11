<?php

/**
 * About section item layout.
 */

if( ! $item = $args['item'] ?? null ) return;

$image	= $item['image'];
$title	= $item['title'];
$text	= $item['text'];
?>

<div class="about__item">
	<div class="about__item_inner">
		<?php
		if( $image )
			echo '<div class="about__item_img">'
				 . wp_get_attachment_image( $image, 'medium', false, ['loading' => 'lazy'] ) .
			'</div>';
		?>

		<div class="about__item_info">
			<?php
			if( $title ) echo '<h6 class="about__item_title">' . esc_html( $title ) . '</h6>';

			if( $text ) echo '<p class="about__item_text">' . esc_html( $text ) . '</p>';
			?>
		</div>
	</div>
</div>

