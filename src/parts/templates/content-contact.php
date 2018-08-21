<?php
/**
 * Template part for displaying contact page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="row contact-inner">

    <div class="col1 col3-desktop contact-col contact-left-col">
      <div class="col1 col2-tablet col1-desktop contact-address">
        <?php echo get_field('address'); ?>
      </div>
      <div class="col1 col2-tablet col1-desktop contact-phone">
        <?php echo get_field('telephone'); ?>
        <?php echo get_field('fax'); ?>
      </div>
    </div>

    <div class="col1 col2-tablet col3-desktop contact-col contact-middle-col">
      <?php
      $contact_col = 1;

      include( locate_template( 'parts/acf/contact-loop.php', false, false ) );
      ?>
    </div>

    <div class="col1 col2-tablet col3-desktop contact-col contact-right-col">
      <?php
      $contact_col = 2;

      include( locate_template( 'parts/acf/contact-loop.php', false, false ) );
      ?>
    </div>

  </div>

</article>
