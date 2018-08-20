<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php
  $num_posts = 3;

	$query = new WP_Query( array(
		'cat'             => '5',
		'posts_per_page'  => $num_posts
	) );

	include( locate_template( 'parts/templates/content-loop-responsive.php', false, false ) ); ?>

  <div class="front-page-button-wrapper">
    <a href="/category/updates/">
      <button>View All updates</button>
    </a>
  </div>

  <?php wp_reset_postdata(); ?>

</article>
