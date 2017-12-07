<?php
/* Template Name: Home Template*/
 ?>
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
  <div class="main-grid">
    <main class="main-content">
      <div class="hero">
        <picture>
          <source media="(min-width: 600px)" srcset="<?php bloginfo('template_url'); ?>/src/assets/images/homepageAssets1@3x.png" alt="Man Building Mascot">
          <source media="(min-width: 400px)" srcset="<?php bloginfo('template_url'); ?>/src/assets/images/homepageAssets1@2x.png" alt="Man Building Mascot">
          <img src="<?php bloginfo('template_url'); ?>/src/assets/images/homepageAssets1.png" alt="Man Building Mascot">
        </picture>
      </div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
				<?php the_post_navigation(); ?>
				<?php comments_template(); ?>
			<?php endwhile;?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
