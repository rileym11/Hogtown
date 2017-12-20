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
	
</article>
