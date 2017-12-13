<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header" role="banner">

		<nav class="site-navigation-top-bar" role="navigation">
			<!--HeaderLogo --> 
				
				<div class="flexyheader"> 
					<?php echo '<a href="' . esc_url( home_url( '/' ) ) . '"><img id=headerlogo src=' . get_template_directory_uri() . '/dist/assets/images/Logos/hogtown_logo.png' . ' /></a>'  ?> 

					<h1 id="headertitle">Hogtown Mascots</h1>
					<!-- <button id=headerbutton src="">Build A Quote</button>  -->
					<div class="fixed-menu">
						<ul class="vertical menu accordion-menu" data-accordion-menu>
							<li class="mobile-menu-button">
								<a class="mobile-menu-button" href="#"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
								<ul class="menu vertical nested dropdown-list">
									<li class="dropdown-link">
										<a href="#">About</a>
										<ul class="menu vertical nested">
											<li class="submenu-link"><a href="./our-story/">Our Story</a></li>
											<li class="submenu-link"><a href="./our-process/">Our Process</a></li>
										</ul>
									</li>
									<li class="dropdown-link"><a href="./contact-us/">Contact Us</a></li>
									<li class="dropdown-link"><a href="./gallery/">Gallery</a></li>
									<li class="dropdown-link">
										<a href="./services/">Services</a>
										<ul class="menu vertical nested">
											<li class="submenu-link"><a href="./services/">Training</a></li>
											<li class="submenu-link"><a href="./services/">Cleaning</a></li>
											<li class="submenu-link"><a href="./services/">Repair</a></li>
											<li class="submenu-link"><a href="./services/">Storage</a></li>
											<li class="submenu-link"><a href="./services/">Sesame Street Appearances</a></li>
											<li class="submenu-link"><a href="./services/">Accessories and Plush Toys</a></li>
										</ul>
									</li>
									<li class="dropdown-link"><a href="#">Build a Quote</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>
