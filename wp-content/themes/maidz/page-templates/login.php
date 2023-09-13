<?php

/**
 * Template Name: Login
 *
 * @package WordPress
 * @subpackage maidz
 */

get_header();

wp_enqueue_style( 'signup', THEME_URI . '/static/css/pages/signup.min.css', [], THEME_VERSION );
?>

<main class="main">
	<section class="signup login">
		<div class="container-fluid">
			<div class="signup__wrapper">
				<div class="signup__left">
					<a href="<?php echo home_url( '/' ) ?>" class="signup__logo">
						LOGO
					</a>
				</div>
				<div class="signup__right">
					<div class="signup__right_lang">
						<a href="<?php echo esc_url( $_SERVER['HTTP_REFERER'] ?? home_url( '/' ) ) ?>" class="signup__arrow">
							<img src="<?php echo THEME_URI ?>/static/img/ico/arrow.svg" width="54" height="42" alt="">
						</a>
					</div>
					<div class="signup__right_wrapper"></div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

