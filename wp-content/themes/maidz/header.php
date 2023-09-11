<?php

/**
 * Header default template.
 *
 * @package WordPress
 * @subpackage maidz
 */

global $page, $paged;
$site_description	= get_bloginfo( 'description', 'display' );
$logo_text			= carbon_get_theme_option( 'header_logo_text' );
?>

<!doctype html>
<html class="no-js" <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta content="" name="description" />
	<meta content="" name="keywords" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta content="telephone=no" name="format-detection" />
	<meta name="HandheldFriendly" content="true" />

	<title>
		<?php
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );

		if( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";

		if( $paged > 1 || $page > 1 ) echo ' | ' . sprintf( __( 'Page %s', 'critick' ), max( $paged, $page ) );
		?>
	</title>

	<!-- FAVICON -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_URI ?>/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_URI ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_URI ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo THEME_URI ?>/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo THEME_URI ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="<?php echo THEME_URI ?>/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="<?php echo THEME_URI ?>/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- /FAVICON -->

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php wp_body_open() ?>

	<div class="wrapper">
		<header class="header">
			<div class="container">
				<div class="header__wrapper" id="menu-lock">
					<?php
					if( $logo_text ){
						?>
						<a href="<?php echo home_url( '/' ) ?>" class="header__logo">
							<?php echo esc_html( $logo_text ) ?>
						</a>
						<?php
					}
					?>

					<div class="header__inner">
						<?php
						wp_nav_menu( [
							'theme_location'	=> 'header_menu',
							'container'			=> 'nav',
							'container_class'	=> 'header__nav'
						] );
						?>

						<div class="header__buttons">
							<button class="button transparent sign-in" type="button">
								Sign In
							</button>
							<button class="button sign-up" type="button">
								Sign Up
							</button>
						</div>
					</div>
					<div class="burger__button">
						<span></span>
					</div>
				</div>
			</div>
		</header>

