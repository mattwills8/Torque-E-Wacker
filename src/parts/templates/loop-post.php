<?php

$show_link = get_field('show_link_button');
$link_class = $show_link ? 'with-link' : '';

$forms = get_field('post_forms');

?>

<div class="col1 col2-tablet col3-desktop wacker-loop-post <?php echo $link_class; ?>" >

  <?php if ($show_link) {
    $id = $post->post_type.'-'.$post->ID;
    ?>
    <div id="<?php echo $id; ?>" class="wacker-loop-post-link-button">
      <img src="/wp-content/uploads/2018/08/anchor-icon.png" />
    </div>
  <?php } ?>

  <h3><?php the_title(); ?></h3>

  <div class="wacker-loop-post-excerpt"><?php the_excerpt(); ?></div>

  <a href="<?php echo the_permalink(); ?>">
    <div class="body-link">READ MORE</div>
  </a>

  <?php if ($forms) { ?>
    <a href="<?php echo $forms['url']; ?>" target="_blank">
      <button class="button-icon download wacker-loop-post-forms-button" >
        Forms
      </button>
    </a>
  <?php } ?>

</div>
