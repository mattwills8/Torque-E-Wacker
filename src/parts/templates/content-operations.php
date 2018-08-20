<?php
/**
 * Template part for displaying about page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php

  $num_posts = -1;

  $query = new WP_Query( array(
    'post_type'       => 'torque_staff',
    'posts_per_page'  => $num_posts
  ) );

  ?>
  <div class="row wacker-operation-wrapper">

    <div id="operation-staff" class="wacker-loop-post-link-button wacker-loop-operation-link-button">
      <img src="/wp-content/uploads/2018/08/anchor-icon.png" />
    </div>

    <h2 class="col1 wacker-operation-title">
      Staff
    </h2>

    <?php include( locate_template( 'parts/templates/content-loop-responsive.php', false, false ) ); ?>

  </div>
  <?php
  wp_reset_postdata();

	get_template_part( 'parts/acf/operations', 'loop' );

  ?>

</article>
