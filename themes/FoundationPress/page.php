<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<table>
  <tbody>
    <tr>
      <td><?php $props = CFS()->get_field_info( 'client' );
      echo $props['label']; ?></td>
      <td><?php echo '<p>' . CFS()->get( 'client' ) . '</p>' ?></td>
      <td><?php $props = CFS()->get_field_info( 'location_and_time_zone' );
      echo $props['label']; ?></td>
      <td><?php echo '<p>' . CFS()->get( 'location_and_time_zone' ) . '</p>' ?></td>
    </tr>
    <tr>
      <td><?php $props = CFS()->get_field_info( 'costume' );
      echo $props['label']; ?></td>
      <td><?php echo '<p>' . CFS()->get( 'costume' ) . '</p>' ?></td>
    </tr>
  </tbody>
</table>
<?php get_footer();
