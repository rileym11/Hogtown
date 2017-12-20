<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'posts' ); ?>
			<?php endwhile;?>
		</main>
	</div>
</div>
<?php get_footer();
