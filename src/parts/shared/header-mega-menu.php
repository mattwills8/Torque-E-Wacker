<?php

require_once( get_template_directory() . '/includes/utilities/torque-utilities.php' );

$items = TQ::get_nav_menu_items_nested( 'primary' );
$secondary_items = TQ::get_nav_menu_items_nested( 'secondary' );

?>

<div id="mega-menu-entry" class="col4 col3-tablet header-menu-wrapper active">
  <div class="mega-menu-highlight-box" >
    <?php get_template_part( 'parts/elements/element', 'burger-menu'); ?>
    <div class="header-burger-menu-text">MENU</div>
  </div>

  <div class="mega-menu-menu-wrapper" >

    <div class="parent-items-wrapper" >

      <?php
      if ($items && sizeof($items) > 0) {
        foreach ($items as $key => $item) {
        ?>

          <div class="mega-menu-item mega-menu-parent-item">
            <a href="<?php echo $item->url; ?>">
              <?php echo $item->title; ?>
            </a>
          </div>

        <?php
        }
      }
      ?>

      <?php if ($secondary_items && sizeof($secondary_items) > 0) { ?>

        <div class="secondary-parent-items-wrapper" >

          <?php foreach ($secondary_items as $key => $item) { ?>

            <div class="mega-menu-item mega-menu-parent-item">
              <a href="<?php echo $item->url; ?>">
                <?php echo $item->title; ?>
              </a>
            </div>

          <?php } ?>

        </div>
      <?php } ?>

    </div>

  </div>
</div>
