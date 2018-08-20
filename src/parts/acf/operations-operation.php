<?php

$show_link = get_field('show_link_button');
$link_class = $show_link ? 'with-link' : '';

?>

<div class="row wacker-operation-wrapper">

  <?php
  $id = 'operation-'.$i;
  ?>
  <div id="<?php echo $id; ?>" class="wacker-loop-post-link-button wacker-loop-operation-link-button">
    <img src="/wp-content/uploads/2018/08/anchor-icon.png" />
  </div>

  <h2 class="col1 wacker-operation-title">
    <?php echo the_sub_field('title'); ?>
  </h2>

  <div class="col1 col2-tablet wacker-operation-col1">
    <?php echo the_sub_field('content_col_1'); ?>
  </div>

  <div class="col1 col2-tablet wacker-operation-col2">
    <?php echo the_sub_field('content_col_2'); ?>
  </div>
</div>
