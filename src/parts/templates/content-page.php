<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php get_template_part( 'parts/templates/content', 'loop' ); ?>

	<div class="content page-content">
		<?php
			the_content();
		?>
	</div>

</article>
