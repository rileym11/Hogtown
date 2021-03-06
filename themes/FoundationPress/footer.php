<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<div class="footer-container">
	<footer class="footer">
		<div class="footer-link-container">
			<div class="footer-site-links">
				<a href="<?php echo get_post_type_archive_link('gallery') ?>">Gallery</a>
				<a href="<?php echo get_page_link(get_page_by_path( 'Contact Us' )) ?>">Contact Us</a>
				<a href="<?php echo get_page_link(get_page_by_path( 'Our Process' )) ?>">Our Process</a>
			</div>
			<div class="footer-site-links">
				<a href="<?php echo get_page_link(get_page_by_path( 'Services' )) ?>">Services</a>
				<a href="<?php echo get_page_link(get_page_by_path( 'Our Story' )) ?>">About</a>
			</div>
		</div>
			<div class= "footer-media-icons">
				<a href="https://www.facebook.com/hogtownmascots"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
				<a href="https://twitter.com/hogtownmascots"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/hogtownmascots/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://www.youtube.com/user/HogtownMascots"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			</div>
	</footer>
</div>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
