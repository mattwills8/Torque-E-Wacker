<?php

require_once( get_template_directory() . '/includes/utilities/torque-mega-menu-utilities.php' );

$items = Torque_Mega_Menu_Utilities::get_nav_menu_items_nested( 'primary' );
$secondary_items = Torque_Mega_Menu_Utilities::get_nav_menu_items_nested( 'secondary' );

// render children
function e_wacker_mega_menu_children( $parent ) {
  ob_start();
  ?>

  <div class="mega-menu-child-items-wrapper" data-parent-id="<?php echo $parent->ID; ?>">
    <h3 class="children-items-title"><?php echo $parent->title; ?></h3>

    <?php echo Torque_Mega_Menu_Utilities::render_child_items($parent); ?>
  </div>

  <?php
  echo ob_get_clean();
}
add_action( Torque_Mega_Menu_Utilities::$post_parent_item_handle, 'e_wacker_mega_menu_children' );

?>

<div id="mega-menu-entry" class="col4 col3-tablet header-menu-wrapper">
  <div class="mega-menu-highlight-box" >
    <?php get_template_part( 'parts/elements/element', 'burger-menu'); ?>
    <div class="header-burger-menu-text">MENU</div>
  </div>

  <div class="row mega-menu-menu-wrapper" >

    <div class="col1 parent-items-wrapper" >

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

    <div class="col2-tablet children-items-wrapper" >

      <?php
        foreach ($items as $key => $parent) { ?>

          <?php
          echo e_wacker_mega_menu_children( $parent );
        }
      ?>

    </div>

  </div>
</div>
