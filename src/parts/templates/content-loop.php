<?php if (get_field('show_post_loop')) { ?>

  <div class="wacker-loop" >

    <?php
      $post_cat = get_field('loop_post_category');
      $num_posts = get_field('loop_number_posts');

      $query = new WP_Query( array(
        'cat'             => $post_cat,
        'posts_per_page'  => $num_posts
      ) );

      $found_posts = $num_posts ? min((int) $query->found_posts, (int) $num_posts) : $query->found_posts;

      $post_count = 0;

      // we have to loop for both tablet and desktop
      // and then hide the one we dont want in the css depending on screen size
      if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();

        if ($post_count % 2 === 0) { ?>
          <div class="row wacker-loop-row wacker-loop-row-tablet" >
        <?php }

            get_template_part( 'parts/templates/loop', $post->post_type );


        if ($post_count % 2 === 1 || $post_count === $found_posts - 1) { ?>
          </div>
        <?php }

        $post_count++;
      } }

      $post_count = 0;

      // desktop loop
      if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();

        if ($post_count % 3 === 0) { ?>
          <div class="row wacker-loop-row wacker-loop-row-desktop" >
        <?php }

            get_template_part( 'parts/templates/loop', $post->post_type );


        if ($post_count % 3 === 2 || $post_count === $found_posts - 1) { ?>
          </div>
        <?php }

        $post_count++;
      } }
    ?>

  </div>

<?php } ?>
