<?php

$img_src = get_the_post_thumbnail_url( null, $size = 'original' );
$title = get_the_title();
$excerpt = get_the_excerpt();

?>


<div class="wacker-hero">

  <?php if ($img_src) { ?>
    <img src="<?php echo get_the_post_thumbnail_url( null, $size = 'original' ); ?>" class="wacker-hero-image" />
  <?php } ?>

  <div class="wacker-hero-title-wrapper" >

    <h1>
      <?php the_title(); ?>
    </h1>

    <p>
      <?php the_excerpt(); ?>
    </p>

</div>
