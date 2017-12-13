<?php $terms = get_the_terms( $post->ID, 'mascot-type' ); ?>
<?php  if (!empty($terms)):?>
<div class="gallery-image<?php foreach( $terms as $term ) echo ' ' . $term->slug; ?>">
<?php else: ?>
<div class="gallery-image">
<?php endif;?>
<?php  the_post_thumbnail() ?>
</div>