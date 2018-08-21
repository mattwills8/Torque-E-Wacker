<?php

global $wp_query;
$found_posts = $wp_query->found_posts;

?>

<div class="wacker-hero">

  <div class="wacker-hero-title-wrapper" >

    <h1>
      Search Results
    </h1>

    <?php get_template_part( 'parts/templates/titles/searchform', 'search' ); ?>

    <p class="number-results"><?php echo $found_posts.' results found'; ?></p>

  </div>

</div>
