<?php

/**
 * Footer default template.
 *
 * @package WordPress
 * @subpackage maidz
 */

$socials	= carbon_get_theme_option( 'socials' );
$copyright	= '&copy; ' . date( 'Y' ) . ' ' . carbon_get_theme_option( 'copyright' );
?>

			<?php
			if(
				! is_page_template( 'page-templates/host-signup.php' ) &&
				! is_page_template( 'page-templates/maid-signup.php' ) &&
				! is_page_template( 'page-templates/login.php' )
			){
				?>
				<footer class="footer">
					<div class="container">
						<div class="footer__wrapper">
							<div class="footer__navs">
								<nav class="footer__nav">
									<h5 class="h5">
										<?php _e( 'For Hosts', 'maidz' ) ?>
									</h5>
									<?php
									wp_nav_menu( [
										'theme_location'=> 'footer_hosts_menu',
										'container'		=> false,
										'menu_class'	=> 'menu footer__menu columns-3'
									] );
									?>
								</nav>
								<div class="footer__nav_wrapper">
									<nav class="footer__nav">
										<h5 class="h5">
											<?php _e( 'Services', 'maidz' ) ?>
										</h5>
										<?php
										wp_nav_menu( [
											'theme_location'=> 'footer_services',
											'container'		=> false,
											'menu_class'	=> 'menu footer__menu'
										] );
										?>
									</nav>
									<nav class="footer__nav">
										<h5 class="h5">
											<?php _e( 'Resources', 'maidz' ) ?>
										</h5>
										<?php
										wp_nav_menu( [
											'theme_location'=> 'footer_resources',
											'container'		=> false,
											'menu_class'	=> 'menu footer__menu'
										] );
										?>
									</nav>
								</div>
							</div>
							<div class="footer__contacts">
								<?php
								if( ! empty( $socials ) ){
									?>
									<div class="footer__contacts_title">
										FOLLOW US!
									</div>
									<div class="footer__socials">
										<?php
										foreach( $socials as $soc ){
											$icon	= $soc['icon'];
											$url	= $soc['url'];
											?>
											<a class="footer__social" href="<?php echo esc_url( $url ) ?>" target="_blank">
												<img src="<?php echo wp_get_attachment_image_url( $icon ) ?>" width="45" height="48" loading="lazy" alt="" />
											</a>
											<?php
										}
										?>
									</div>
									<?php
								}

								if( $copyright ){
									?>
									<div class="footer__rights">
										<?php echo esc_html( $copyright ) ?>
									</div>
									<?php
								}
								?>
							</div>
						</div>
					</div>
				</footer>
				<?php
			}

			wp_footer();
 			?>
		</div><!-- .wrapper -->
    </body>
</html>

