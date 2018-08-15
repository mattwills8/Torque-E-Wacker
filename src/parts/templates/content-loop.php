<?php if (get_field('show_post_loop')) { ?>

  <div class="wacker-loop" >

    <?php
      $post_cat = get_field('loop_post_category');

      $query = new WP_Query( array(
        'cat' => $post_cat
      ) );

      if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();

        get_template_part( 'parts/templates/loop', $post->post_type ); 

      } }
    ?>

  </div>

<?php } ?>
