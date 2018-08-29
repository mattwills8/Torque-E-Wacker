<?php
/**
 * Template part for displaying contact page content
 */

$telephone = get_field('telephone', 'options');
$fax = get_field('fax', 'options');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="row contact-inner">

    <div class="col1 col3-desktop contact-col contact-left-col">

      <div class="col1 col2-tablet col1-desktop contact-details contact-address">
        <img class="contact-icon" src="/wp-content/uploads/2018/08/location-pin@3x.png" />
        <?php echo get_field('address', 'options'); ?>
      </div>

      <div class="col1 col2-tablet col1-desktop contact-details contact-phone">

        <img class="contact-icon" src="/wp-content/uploads/2018/08/cell@3x.png" />

        <?php if ($telephone) { ?>
          <p><?php echo 'T. '.$telephone; ?></p>
        <?php } ?>

        <?php if ($fax) { ?>
          <p><?php echo 'F. '.$fax; ?></p>
        <?php } ?>

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
