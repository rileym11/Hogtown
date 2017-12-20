<?php 
    /* Template Name: Blog Template*/
 get_header();   ?>
<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC' );
   $posts = get_posts( $args ); // returns an array of posts
?>
<?php if (!empty($posts)) {
    foreach ( $posts as $post ) : setup_postdata( $post ); 
     get_template_part( 'template-parts/content', 'posts'); 
    endforeach; wp_reset_postdata();}
    else 
    { get_template_part( 'template-parts/content', 'none' );}

?>

<?php  ?>
   <?php /* Content from your array of post results goes here */ ?>
<?php  ?>




<?php get_footer();  ?>
