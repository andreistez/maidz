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
							<div class="footer__rows">
								<div class="footer__row">
									<div class="footer__col">
										For Hosts
									</div>
									<div class="footer__col"></div>
									<div class="footer__col"></div>
									<div class="footer__col">
										Services
									</div>
									<div class="footer__col">
										Resources
									</div>
									<div class="footer__col">
										Branding
									</div>
								</div>

								<div class="footer__row">
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Arizona
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Kansas
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Rhode Island
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Topless Maids
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Who We Work With
										</a>
									</div>
									<div class="footer__col"></div>
								</div>

								<div class="footer__row">
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Californi
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Louisniana
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in South Dakota
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Multiple Maids
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Guide for New Hosts
										</a>
									</div>
									<div class="footer__col"></div>
								</div>

								<div class="footer__row">
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Deleware
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Maine
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Texas
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Twin Maids
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Guide for New Maids
										</a>
									</div>
									<div class="footer__col"></div>
								</div>

								<div class="footer__row">
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Florida
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Nevada
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Utah
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Male Butlers
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Privacy Policy
										</a>
									</div>
									<div class="footer__col"></div>
								</div>

								<div class="footer__row">
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Hawaii
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Ohio
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											And More...
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Suggest Additional Services
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											FAQ
										</a>
									</div>
									<div class="footer__col"></div>
								</div>

								<div class="footer__row">
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Idaho
										</a>
									</div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Maids in Pennsylvania
										</a>
									</div>
									<div class="footer__col"></div>
									<div class="footer__col"></div>
									<div class="footer__col">
										<a class="footer__link" href="#">
											Anti-Slavery and Anti-Trafficking Statement
										</a>
									</div>
									<div class="footer__col"></div>
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

