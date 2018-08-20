<?php

$query = new WP_Query( array(
  'post_type'       => 'torque_building_fact',
  'posts_per_page'  => -1
) );

if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();

  get_template_part( 'parts/templates/loop', 'building-fact' );

} }

wp_reset_postdata();
?>
