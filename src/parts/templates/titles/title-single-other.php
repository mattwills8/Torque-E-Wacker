<div class="breadcrumbs" >
  <?php if ($cat_name && $cat_link) { ?>
    <a href="<?php echo $cat_link ?>">
      <?php echo $cat_name; ?>
    </a>
  <?php } ?>

  /

  <?php echo get_the_title(); ?>

</div>

<?php get_template_part( 'parts/templates/titles/title', 'single' ); ?>
