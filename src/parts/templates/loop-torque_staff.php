<?php

$meta = get_post_meta( get_the_ID(), 'staff_meta', true );

?>

<div class="col1 col2-tablet col3-desktop wacker-loop-staff" >

  <div class="featured-image-wrapper">
    <div class="featured-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" >
    </div>
  </div>
  
  <h3 class="wacker-loop-staff-title"><?php the_title(); ?></h3>

  <?php if ( $meta['role'] ) { ?>
    <div class="wacker-loop-staff-role"><?php echo $meta['role']; ?></div>
  <?php } ?>

  <div class="wacker-loop-staff-content"><?php the_content(); ?></div>

  <?php if ( $meta['tel'] ) { ?>
    <div class="wacker-loop-staff-tel"><?php echo $meta['tel']; ?></div>
  <?php } ?>
  <?php if ( $meta['email'] ) { ?>
    <a href="mailto:<?php echo $meta['email']; ?>" >
    <div class="wacker-loop-staff-email"><?php echo $meta['email']; ?></div>
  </a>
  <?php } ?>

</div>
