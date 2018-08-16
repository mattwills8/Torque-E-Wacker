<div class="col1 col2-tablet col3-desktop links-section-link" >

  <div class="links-section-orange-background-mobile"></div>

  <div class="links-section-link-image-wrapper" >
    <img src="<?php echo the_sub_field('image'); ?>" />
  </div>

  <h3><?php echo the_sub_field('title'); ?></h3>

  <a href="<?php echo the_sub_field('cta_link'); ?>">
    <button class="button-icon">
      <?php echo the_sub_field('cta_text') ?>
    </button>
  </a>
</div>
