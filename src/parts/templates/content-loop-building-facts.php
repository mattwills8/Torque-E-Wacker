<?php

$query = new WP_Query( array(
  'post_type'       => 'torque_building_facts',
  'posts_per_page'  => -1
) );

if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();

  echo $the_title();


} }

wp_reset_postdata();
?>
