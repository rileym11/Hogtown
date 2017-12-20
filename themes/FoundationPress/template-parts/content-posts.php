<article class="post-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
        <div class="blog-thumbwrap">
            <?php the_post_thumbnail();	//position absolute?>
        </div>
    <?php
       
		the_title( '<h1 class="entry-title">', '</h1>' );
		
	?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>
