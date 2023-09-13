<?php

/**
 * Template Name: Host Signup
 *
 * @package WordPress
 * @subpackage maidz
 */

get_header();

wp_enqueue_style( 'signup', THEME_URI . '/static/css/pages/signup.min.css', [], THEME_VERSION );
?>

<main class="main">
	<section class="signup">
		<div class="container-fluid">
			<div class="signup__wrapper">
				<div class="signup__left">
					<a href="<?php echo home_url( '/' ) ?>" class="signup__logo">
						LOGO
					</a>
					<h1 class="signup__title">
						<?php _e( 'Elevate Your Space With Bikini Glamour!', 'maidz' ) ?>
					</h1>
					<div class="signup__img">
						<img src="<?php echo THEME_URI ?>/static/img/sign-up/smile.svg" width="250" height="226" alt="">
					</div>
				</div>
				<div class="signup__right">
					<div class="signup__right_lang">
						<a href="<?php echo esc_url( $_SERVER['HTTP_REFERER'] ?? home_url( '/' ) ) ?>" class="signup__arrow">
							<img src="<?php echo THEME_URI ?>/static/img/ico/arrow.svg" width="54" height="42" alt="">
						</a>
					</div>
					<div class="signup__right_wrapper">
						<h2 class="h2">
							<?php _e( 'Create Host Account', 'maidz' ) ?>
						</h2>
						<div class="signup__buttons">
							<button class="signup__button">
								<img src="<?php echo THEME_URI ?>/static/img/ico/google.svg" width="30" height="30" alt="">
								Sign up with google
							</button>
							<button class="signup__button">
								<img src="<?php echo THEME_URI ?>/static/img/ico/fb.svg" width="30" height="30" alt="">
								Sign up with facebook
							</button>
						</div>
						<div class="signup__or">
							-<?php _e( 'OR', 'maidz' ) ?>-
						</div>
						<div class="signup__form_wrapper">
							<form class="signup__form">
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
								</fieldset>
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
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

