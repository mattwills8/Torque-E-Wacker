<?php

if ( have_rows('column_'.$contact_col) ) {
  while ( have_rows('column_'.$contact_col) ) { the_row();

?>

    <div class="contact-column-row">

      <h3><?php echo the_sub_field('title'); ?></h3>

      <div>
        <?php echo the_sub_field('content'); ?>
      </div>

    </div>

<?php

  }
}

?>
