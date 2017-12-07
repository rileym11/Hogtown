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
        <div class="build-quote">
          <p class="hero-text">We create custom mascots for your special events.</p>
          <a href="" class="front-page-btn">Build A Quote</a>
        </div>
      </div>
      <div class="our-process">
        <h1>Our Process</h1>
        <div class="sketch">
          <img src="<?php bloginfo('template_url'); ?>/src/assets/images/About-Page/Our-Process/Process-1.png" class="our-process-image" alt="Sketch of Tiger Mascot">
          <p class="our-process-text">1. Sketch</p>
          <p class="our-process-text">We sketch your dream mascot</p>
          <img src="<?php bloginfo('template_url'); ?>/src/assets/images/About-Page/Our-Process/Process2Jumpsuit1.png" class="our-process-image" alt="Girl Sewing Mascot">
        </div>
        <div class="build">
          <img src="">
          <p class="our-process-text">2. Build</p>
          <p class="our-process-text">We make the sketch come to life</p>
        </div>
        <div class="deliver">
          <img src="<?php bloginfo('template_url'); ?>/src/assets/images/About-Page/Our-Process/Process5_Final.png" class="our-process-image" alt="Finished Tiger Mascot">
          <p class="our-process-text">3. Deliver</p>
          <p class="our-process-text">We ship your mascot to you</p>
          <a href="" class="front-page-btn">Learn More</a>
        </div>
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
