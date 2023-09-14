<?php

/**
 * Theme custom functions.
 * Please place all your custom functions declarations inside this file.
 *
 * @package WordPress
 * @subpackage maidz
 */

add_action( 'wp_head', 'maidz_js_vars_for_frontend' );
/**
 * JS variables for frontend, such as AJAX URL. Available in JS via window.wpData object.
 *
 * @example window.wpData.ajaxUrl
 * @return void
 */
function maidz_js_vars_for_frontend(): void
{
	$variables = ['ajaxUrl' => admin_url( 'admin-ajax.php' )];
	echo '<script type="text/javascript">window.wpData = ' . json_encode( $variables ) . ';</script>';
}

/**
 * Clean incoming value from trash.
 *
 * @param	mixed	$value	Some value to clean.
 * @return	string
 */
function maidz_clean( mixed $value ): string
{
	$value	= wp_unslash( $value );
	$value	= trim( $value );
	$value	= stripslashes( $value );
	$value	= strip_tags( $value );

	return htmlspecialchars( $value );
}

/**
 * Shows formatted data (for testing).
 *
 * @param mixed $data
 * @return void
 */
function maidz_prettify_data( mixed $data ): void
{
	echo '<pre>', print_r( $data, 1 ), '</pre>';
}

add_action( 'manage_users_columns', 'maidz_add_custom_users_columns' );
/**
 * Add custom columns to Admin users list.
 *
 * @param $columns
 * @return array
 */
function maidz_add_custom_users_columns( $columns ): array
{
	$columns['account_type'] = __( 'Account Type', 'maidz' );

	return $columns;
}

add_filter( 'manage_users_custom_column',  'maidz_add_data_to_custom_users_columns', 10, 3 );
/**
 * Show account type meta field.
 *
 * @param $value
 * @param $column_name
 * @param $user_id
 * @return string
 */
function maidz_add_data_to_custom_users_columns( $value, $column_name, $user_id ): string
{
	return carbon_get_user_meta( $user_id, 'type' );
}

