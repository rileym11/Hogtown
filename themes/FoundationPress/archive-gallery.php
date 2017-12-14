<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="main-container">
    <div class="gallery-header">
    <h1>Gallery</h1>
	<a class="gallery-filter" href="#">Filter</a>
</div>
<hr class="header-break">
<div class="gallery-center">
<section class="gallery-relative-wrap">
	<div class="gallery-filter-list-container">
		<form class="gallery-filter-list" action="">
			<!--<label for="all">All</label>
			<input type="checkbox" id="all" value="all">-->
			<label for="head-body">Head &amp; Body</label>
			<input type="checkbox" id="head-body"  value="head-body">
			<label for="uni-body">Uni-Body</label>
			<input type="checkbox" id="uni-body"  value="uni-body">
			<hr>
			<label for="human">Human</label>
			<input type="checkbox" id="human"  value="human">
			<label for="animal">Animal</label>
			<input type="checkbox" id="animal"  value="animal">
			<label for="monster">Monster</label>
			<input type="checkbox" id="monster"  value="monster">
			<label for="object">Object</label>
			<input type="checkbox" id="object"  value="object">
			<hr>
			<label for="sports">Sports</label>
			<input type="checkbox" id="sports"  value="sports">
			<label for="campaigns">Campaigns</label>
			<input type="checkbox" id="campaigns" value="campaigns">
			<label for="schools">Schools</label>
			<input type="checkbox" id="schools"  value="schools">
			<label for="government">Government</label>
			<input type="checkbox" id="government" value="government">
			<hr class="third-filter-hr">
			<button class="gallery-filter-button" type="submit">Done</button>
			

		</form>
	</div>
		<div class="gallery-forum" >
			<div class="main-grid">
				<main class="main-content">
				
					<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'gallery', get_post_format() ); ?>
					<?php endwhile; ?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; // End have_posts() check. ?>

					<?php /* Display navigation to next/previous pages when applicable */ ?>
				</main>
				<?php
					if ( function_exists( 'foundationpress_pagination' ) ) :
						foundationpress_pagination();
					elseif ( is_paged() ) :
					?>
						<nav id="post-nav">
							<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
							<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
						</nav>
					<?php endif; ?>


			</div>
		</div>
	</section>
	</div>
			
		
<?php get_footer();