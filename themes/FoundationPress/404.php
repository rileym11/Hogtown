<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-container">
    <main class="main-content not-found-container">
        <img src="<?php bloginfo('template_url'); ?>/src/assets/images/Build-Quote/Pizza3.svg" alt="" srcset="">
        <h1>404</h1>
        <p>We can't find what you're looking for.</p>
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer();
