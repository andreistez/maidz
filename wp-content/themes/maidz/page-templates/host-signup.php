<?php

/**
 * Template Name: Host Signup
 *
 * @package WordPress
 * @subpackage maidz
 */

get_header();

wp_enqueue_style( 'signup', THEME_URI . '/static/css/pages/signup.min.css', [], THEME_VERSION );
wp_enqueue_script( 'signup', THEME_URI . '/static/js/signup/signup.min.js', [], THEME_VERSION, true );

$http_referer = $_SERVER['HTTP_REFERER'] ?? '';
?>

<main class="main">
	<section class="signup">
		<div class="container-fluid">
			<div class="signup__wrapper">
				<div class="signup__left">
					<a href="<?php echo home_url( '/' ) ?>" class="signup__logo">
						<img src="<?php echo THEME_URI ?>/static/img/home/header/logo-white.png" width="180" height="40" alt="">
					</a>
					<h1 class="signup__title">
						<?php _e( 'Elevate Your Space With Bikini Glamour!', 'maidz' ) ?>
					</h1>
					<div class="signup__img">
						<img src="<?php echo THEME_URI ?>/static/img/sign-up/smile.svg" width="250" height="226" alt="">
					</div>
				</div>
				<div class="signup__right">
					<div class="signup__right_wrapper">
						<div class="signup__right_title">
							<a href="<?php echo esc_url( $_SERVER['HTTP_REFERER'] ?? home_url( '/' ) ) ?>" class="signup__arrow">
								<img src="<?php echo THEME_URI ?>/static/img/ico/arrow.svg" width="54" height="42" alt="">
							</a>
							<h2 class="h2">
								<?php
								if( ! is_user_logged_in() ){
									_e( 'Create Host Account', 'maidz' );
								}else{
									$user = wp_get_current_user();
									printf( __( 'Hello, %s!%sYou are already logged in.', 'maidz' ), $user->display_name, '<br />' );
								}
								?>
							</h2>
						</div>

						<?php
						if( ! is_user_logged_in() ){
							?>
							<div class="signup__buttons">
								<?php echo do_shortcode( '[nextend_social_login provider="google"]' ) ?>
								<button class="signup__button">
									<img src="<?php echo THEME_URI ?>/static/img/ico/fb.svg" width="30" height="30" alt="">
									Sign up with facebook
								</button>
							</div>
							<div class="signup__or">
								-<?php _e( 'OR', 'maidz' ) ?>-
							</div>
							<div class="signup__form_wrapper">
								<form id="form-register" class="signup__form" data-type="host">
									<fieldset>
										<div class="input__wrapper">
											<label for="host-name">
												<?php _e( 'Full name', 'maidz' ) ?>
											</label>
											<input id="host-name" type="text" name="host-name">
										</div>
										<div class="input__wrapper">
											<label for="host-email">
												<?php _e( 'Email Address', 'maidz' ) ?>
											</label>
											<input id="host-email" type="email" name="host-email">
										</div>
										<div class="input__wrapper">
											<label for="host-password">
												<?php _e( 'Password', 'maidz' ) ?>
											</label>
											<input id="host-password" class="last" type="password" name="host-password">
											<div class="eye__wrapper">
												<img class="eye" width="38" height="30" src="<?php echo THEME_URI ?>/static/img/ico/eye.svg" alt="">
											</div>
										</div>
										<input type="hidden" name="referer" value="<?php echo esc_attr( $http_referer ) ?>" />
										<?php wp_nonce_field( 'maidz_ajax_register', 'maidz_register_nonce' ) ?>
									</fieldset>
									<div class="note"></div>
									<button class="create__button" type="submit">
										<?php _e( 'Create Account', 'maidz' ) ?>
									</button>
									<div class="signup__links">
										<span class="signup__link">
											<?php _e( 'Already have an account?', 'maidz' ) ?>
										</span>
										<a href="<?php echo get_the_permalink( 43 ) ?>" class="signup__link">
											<?php _e( 'Log in', 'maidz' ) ?>
										</a>
									</div>
								</form>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

