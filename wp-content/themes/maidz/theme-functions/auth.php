<?php

/**
 * Authorization logic AJAX functions.
 *
 * @package WordPress
 * @subpackage maidz
 */

add_action( 'init', 'maidz_block_admin_access' );
/**
 * Redirect website Visitors who trying to access Admin side.
 * Only Administrator and Editor User roles are allowed.
 *
 * @return void
 */
function maidz_block_admin_access(): void
{
	if(
		is_admin()
		&& ! current_user_can( 'administrator' )
		&& ! current_user_can( 'editor' )
		&& ! ( defined( 'DOING_AJAX' ) && DOING_AJAX )
	){
		wp_redirect( get_the_permalink( 43 ) );
		exit;
	}
}

add_action( 'wp_ajax_nopriv_maidz_ajax_login', 'maidz_ajax_login' );
/**
 * Custom login logic.
 *
 * @return void
 */
function maidz_ajax_login(): void
{
	// Verify hidden nonce field.
	if( empty( $_POST ) || ! wp_verify_nonce( $_POST['maidz_login_nonce'], 'maidz_ajax_login' ) )
		wp_send_json_error( ['msg' => esc_html__( 'Invalid request data.', 'maidz' )] );

	$login		= maidz_clean( $_POST['signin-email'] );
	$pass		= str_replace( ' ', '', $_POST['signin-password'] );
	$referer	= maidz_clean( $_POST['referer'] );

	// If data is not set - send error.
	if( ! $login || ! $pass )
		wp_send_json_error( ['msg' => __( 'Fields are required', 'maidz' )] );

	// If this login or email was not found - user not exists, send error.
	if( ! username_exists( $login ) && ! email_exists( $login ) )
		wp_send_json_error( ['msg' => __( 'This user does not exist', 'maidz' )] );

	// If not success - trying to find user by email field.
	if( ! $user = get_user_by( 'login', $login ) ){
		$user = get_user_by( 'email', $login );

		// If fail again - user not found, send error.
		if( ! $user ) wp_send_json_error( ['msg' => __( 'Error during user capture.', 'maidz' )] );
	}

	$user_id	= $user->ID;
	$user_data	= get_userdata( $user_id )->data;
	$hash		= $user_data->user_pass;

	// If passwords are not equal - send error.
	if( ! wp_check_password( $pass, $hash, $user_id ) )
		wp_send_json_error( ['msg' => __( 'Invalid password', 'maidz' )] );

	// If all is OK - trying to sign user on.
	$credentials = [
		'user_login'	=> $login,
		'user_password'	=> $pass,
		'remember'		=> true
	];
	$sign_on = wp_signon( $credentials, false );

	// If there is error during sign on - send it.
	if( is_wp_error( $sign_on ) ) wp_send_json_error( ['msg' => $sign_on->get_error_message()] );

	wp_set_current_user( $user_id );
	wp_set_auth_cookie( $user_id, true );

	wp_send_json_success( [
		'msg'		=> sprintf( __( 'Hello, %s!', 'maidz' ), $user->display_name ),
		'redirect'	=> $referer ?: home_url( '/' )
	] );
}

add_action( 'wp_ajax_maidz_ajax_logout', 'maidz_ajax_logout' );
/**
 * Custom logout logic.
 *
 * @return void
 */
function maidz_ajax_logout(): void
{
	wp_logout();

	wp_send_json_success( [
		'msg'		=> esc_html__( 'Bye!', 'maidz' ),
		'redirect'	=> home_url( '/' )
	] );
}

add_action( 'wp_ajax_nopriv_maidz_ajax_register', 'maidz_ajax_register' );
/**
 * AJAX register.
 *
 * @return void
 */
function maidz_ajax_register(): void
{
	if( ! get_option( 'users_can_register' ) )
		wp_send_json_error( ['msg' => esc_html__( 'User registration currently is unavailable, please try again later.', 'maidz' )] );

	// Verify hidden nonce field.
	if( empty( $_POST ) || ! wp_verify_nonce( $_POST['maidz_register_nonce'], 'maidz_ajax_register' ) )
		wp_send_json_error( ['msg' => esc_html__( 'Invalid request data.', 'maidz' )] );

	$fullname		= maidz_clean( $_POST['host-name'] );
	$firstname		= $fullname ? explode( ' ', $fullname, 2 )[0] : '';
	$lastname		= $fullname ? explode( ' ', $fullname, 2 )[1] : '';
	$email			= maidz_clean( $_POST['host-email'] );
	$pass			= str_replace( ' ', '', $_POST['host-password'] );
	$type			= maidz_clean( $_POST['type'] );

	// If some of required data fields is not set - send error.
	if( ! $firstname || ! $email || ! $pass )
		wp_send_json_error( ['msg' => __( 'Fields are required', 'maidz' )] );

	if( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) )
		wp_send_json_error( ['msg' => __( 'Invalid Email format', 'maidz' )] );

	// Data to create new User.
	$login			= substr( $email, 0, strrpos( $email, '@' ) );
	$new_user_id	= wp_insert_user( [
		'user_login'			=> $login,
		'user_email'			=> $email,
		'first_name'			=> $firstname,
		'last_name'				=> $lastname,
		'show_admin_bar_front'	=> 'false'
	] );

	// Set new User's password and meta fields.
	wp_set_password( $pass, $new_user_id );
	carbon_set_user_meta( $new_user_id, 'type', $type );
	wp_send_json_success( [
		'msg'		=> sprintf( __( 'Congratulations! New User %s registered successfully.', 'maidz' ), $login, $email ),
		'redirect'	=> get_the_permalink( 43 )
	] );
}

