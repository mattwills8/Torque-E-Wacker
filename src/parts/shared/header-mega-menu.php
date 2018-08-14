<?php

require_once( get_template_directory() . '/includes/utilities/torque-mega-menu-utilities.php' );

$items = Torque_Mega_Menu_Utilities::get_nav_menu_items_nested( 'primary' );
$secondary_items = Torque_Mega_Menu_Utilities::get_nav_menu_items_nested( 'secondary' );

// render children mobile
add_action( Torque_Mega_Menu_Utilities::$post_parent_item_handle, function($parent) {
  ob_start();
  ?>

  <div class="mega-menu-child-items-wrapper" >
    <?php echo Torque_Mega_Menu_Utilities::render_child_items($parent); ?>
  </div>

  <?php
  echo ob_get_clean();
})

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
        echo Torque_Mega_Menu_Utilities::render_parent_items( $items );
      }
      ?>

      <?php if ($secondary_items && sizeof($secondary_items) > 0) { ?>

        <div class="secondary-parent-items-wrapper" >

          <?php echo Torque_Mega_Menu_Utilities::render_parent_items( $secondary_items ); ?>

        </div>
      <?php } ?>

    </div>

  </div>
</div>
