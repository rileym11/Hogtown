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
		<link href="https://fonts.googleapis.com/css?family=Nunito|Zilla+Slab" rel="stylesheet">
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
			<?php echo '<img id=headerlogo src=' . get_template_directory_uri() .'/dist/assets/images/logo/hogtown-logo@3x.jpg' . ' />'  ?> 
				
				<div class="flexyheader"> 
					<a id="headertitle" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<!-- <button id=headerbutton src="">Build A Quote</button>  -->
					<div class="fixed">
						<ul class="vertical menu accordion-menu" data-accordion-menu>
							<li>
								<a href="#">Menu</a>
								<ul class="menu vertical nested">
									<li><a href="#">About</a></li>
									<li><a href="#">Item 1B</a></li>
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
	

