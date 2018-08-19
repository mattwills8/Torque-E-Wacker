<?php

$the_category = $wp_query->get_queried_object();

?>

<div class="wacker-hero">

  <div class="wacker-hero-title-wrapper" >

    <h1>
      <?php echo $the_category->cat_name; ?>
    </h1>

    <p>
      <?php echo $the_category->category_description; ?>
    </p>

  </div>

</div>
