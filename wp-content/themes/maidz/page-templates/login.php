<?php

/**
 * Template Name: Login
 *
 * @package WordPress
 * @subpackage maidz
 */

get_header();

wp_enqueue_style( 'signup', THEME_URI . '/static/css/pages/signup.min.css', [], THEME_VERSION );
wp_enqueue_style( 'signin', THEME_URI . '/static/css/pages/signin.min.css', [], THEME_VERSION );
wp_enqueue_script( 'signin', THEME_URI . '/static/js/signin/signin.min.js', [], THEME_VERSION, true );

$http_referer = $_SERVER['HTTP_REFERER'] ?? '';
?>

<main class="main">
	<section class="signin">
		<div class="container-fluid">
			<div class="signup__wrapper">
				<div class="signup__left">
					<a href="<?php echo home_url( '/' ) ?>" class="signup__logo">
						<img src="<?php echo THEME_URI ?>/static/img/home/header/logo-white.png" width="180" height="40" alt="">
					</a>

					<?php
					if( ! is_user_logged_in() ){
						?>
						<div class="signin__form_wrapper">
							<h2 class="h2">
								<?php _e( 'Sign In', 'maidz' ) ?>
							</h2>
							<p class="signin__text">
								<?php _e( 'Enter your email and password', 'maidz' ) ?>
							</p>
							<form id="form-login" class="signin__form">
								<fieldset>
									<div class="input__wrapper">
										<input type="text" name="signin-email" placeholder="Email">
									</div>
									<div class="input__wrapper forgot">
										<input type="password" name="signin-password" placeholder="Password">
										<a href="#" class="forgot__pass">
											<?php _e( 'Forgot password?', 'maidz' ) ?>
										</a>
									</div>
									<input type="hidden" name="referer" value="<?php echo esc_attr( $http_referer ) ?>" />
									<?php wp_nonce_field( 'maidz_ajax_login', 'maidz_login_nonce' ) ?>
								</fieldset>
								<div class="note"></div>
								<div class="button__wrapper">
									<button class="create__button">
										<?php _e( 'Login', 'maidz' ) ?>
									</button>
								</div>
							</form>
							<div class="signin__additionals">
								<div class="signin__account">
									<div class="signin__account_top">
										<?php _e( 'Dont have an acount?', 'maidz' ) ?>
										<a href="<?php echo get_the_permalink( 41 ) ?>" class="sugnup__account_link">
											<?php _e( 'Sign up', 'maidz' ) ?>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php
					}	// ! is_user_logged_in()
					?>
				</div>
				<div class="signup__right">
					<div class="signup__right_wrapper">
						<a href="<?php echo esc_url( $_SERVER['HTTP_REFERER'] ?? home_url( '/' ) ) ?>" class="signup__arrow">
							<img src="<?php echo THEME_URI ?>/static/img/ico/arrow.svg" width="54" height="42" alt="">
						</a>
						<div class="signup__welcome">
							<div class="signup__img">
								<img src="<?php echo THEME_URI ?>/static/img/sign-in/welcome-smile.png" width="311" height="276" alt="">
							</div>

							<h2 class="signup__welcome_title">
								<?php
								if( ! is_user_logged_in() ){
									_e( 'Welcome Back!', 'maidz' );
								}else{
									$user = wp_set_current_user( get_current_user_id() );
									printf( __( 'Hello, %s!%sYou are already logged in.', 'maidz' ), $user->display_name, '<br />' );
								}
								?>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

