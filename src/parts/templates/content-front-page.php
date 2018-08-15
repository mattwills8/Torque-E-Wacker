<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php get_template_part( 'parts/templates/content', 'loop' ); ?>

  <div class="front-page-button-wrapper">
    <a href="/whats-new">
      <button>View All updates</button>
    </a>
  </div>

</article>
