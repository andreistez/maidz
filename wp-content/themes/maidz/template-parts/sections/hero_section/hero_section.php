<?php

/**
 * Section Hero layout.
 */

if( ! $section = $args['section'] ?? null ) return;

wp_enqueue_style( 'hero', THEME_URI . '/static/css/flexible-sections/hero.min.css', [], THEME_VERSION );

$sup_title			= $section['sup_title'];
$title				= $section['title'];
$sub_title			= $section['sub_title'];
$text				= $section['text'];
$bottom_text		= $section['bottom_text'];
$happy_starz_count	= $section['happy_starz_count'] ?: 1000;
$happy_hosts_count	= $section['happy_hosts_count'] ?: 25000;
?>

<section class="hero">
	<div class="container">
		<div class="hero__headings">
			<?php
			if( $sup_title ) echo '<div class="hero__subtext">' . esc_html( $sup_title ) . '</div>';

			if( $title ) echo '<h1 class="h1">' . esc_html( $title ) . '</h1>';

			if( $sub_title ) echo '<h5 class="hero__subtitle">' . esc_html( $sub_title ) . '</h5>';
			?>
		</div>

		<?php
		if( $text ){
			?>
			<div class="hero__info">
				<p class="hero__text">
					<?php echo esc_html( $text ) ?>
				</p>
			</div>
			<?php
		}
		?>

		<div class="hero__buttons">
			<a href="<?php echo get_the_permalink( 41 ) ?>" class="button white find">
				<?php _e( 'Find Your Next Maid', 'maidz' ) ?>
			</a>
			<a href="<?php echo get_the_permalink( 45 ) ?>" class="button white sign-up">
				<?php _e( 'Join Us Now', 'maidz' ) ?>
			</a>
		</div>
		<div class="hero__bottom">
			<div class="hero__rate">
				<div class="hero__rate_stars">
					<?php
					for( $i = 0; $i < 5; $i++ )
						echo '<img src="' . THEME_URI . '/static/img/ico/star.svg" width="35" height="35" alt="" />';
					?>
				</div>
				<div class="hero__rate_text">
					Rated 4.9 stars
				</div>
			</div>
			<div class="hero__nums">
				<div class="hero__nums_item">
					<div class="hero__nums_title">
						<span class="hero__number-1" data-step="35" data-limit="<?php echo esc_attr( $happy_starz_count ) ?>"></span><span class="plus">+</span>
					</div>
					<div class="hero__nums_text">
						Happy Starz
					</div>
				</div>
				<div class="hero__nums_item">
					<div class="hero__nums_title">
						<span class="hero__number-2" data-step="675" data-limit="<?php echo esc_attr( $happy_hosts_count ) ?>"></span><span
							class="plus"
						>+</span>
					</div>
					<div class="hero__nums_text">
						Happy Hosts
					</div>
				</div>
			</div>

			<?php if( $bottom_text ) echo '<p class="hero__bottom_text">' . esc_html( $bottom_text ) . '</p>' ?>

			<img class="girl__left" src="<?php echo THEME_URI ?>/static/img/home/hero/girl1.png" width="490" height="794" alt="" />
			<img class="girl__right" src="<?php echo THEME_URI ?>/static/img/home/hero/girl2.png" width="377" height="794" alt="" />
		</div>
	</div>
</section>

