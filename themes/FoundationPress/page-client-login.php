<?php
/* Template Name: Client Login */
 ?>

<?php get_header(); ?>
<div class="content">
  <table>
    <tbody>
      <tr>
        <td class="labels"><?php $props = CFS()->get_field_info( 'client' );
        echo $props['label']; ?></td>
        <td><?php echo '<p>' . CFS()->get( 'client' ) . '</p>' ?></td>
        <td class="labels"><?php $props = CFS()->get_field_info( 'location_and_time_zone' );
        echo $props['label']; ?></td>
        <td><?php echo '<p>' . CFS()->get( 'location_and_time_zone' ) . '</p>' ?></td>
      </tr>
      <tr>
        <td class="labels"><?php $props = CFS()->get_field_info( 'costume' );
        echo $props['label']; ?></td>
        <td><?php echo '<p>' . CFS()->get( 'costume' ) . '</p>' ?></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <div class="client-content">
    <?php echo CFS()->get( 'client_updates' ); ?>
  </div>
</div>
<?php get_footer();
