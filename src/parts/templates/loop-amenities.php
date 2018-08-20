<?php

$show_link = get_field('show_link_button');
$link_class = $show_link ? 'with-link' : '';

$forms = get_field('post_forms');

?>

<div class="row wacker-loop-amenities <?php echo $link_class; ?>" >

  <?php if ($show_link) {
    $id = $post->post_type.'-'.$post->ID;
    ?>
    <div id="<?php echo $id; ?>" class="wacker-loop-post-link-button">
      <img src="/wp-content/uploads/2018/08/anchor-icon.png" />
    </div>
  <?php } ?>

  <a href="<?php the_permalink(); ?>" >
    <h2><?php the_title(); ?></h2>
  </a>

  <div class="wacker-loop-amenities-content"><?php the_content(); ?></div>

  <?php if ($forms) { ?>
    <a href="<?php echo $forms['url']; ?>" target="_blank">
      <button class="button-icon download wacker-loop-post-forms-button" >
        Forms
      </button>
    </a>
  <?php } ?>

</div>
