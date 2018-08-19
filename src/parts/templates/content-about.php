<?php
/**
 * Template part for displaying about page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php get_template_part( 'parts/templates/content-loop', 'building-facts' ); ?> 

	<div class="content page-content">
		<?php
			the_content();
		?>
	</div>

</article>
