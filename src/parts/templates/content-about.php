<?php
/**
 * Template part for displaying about page content
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="about-building-facts-wrapper">

    <h2>Building Facts</h2>

    <?php get_template_part( 'parts/templates/content-loop', 'building-facts' ); ?>

  </div>

	<div class="content page-content">
		<?php
			the_content();
		?>
	</div>

</article>
