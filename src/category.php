<?php
/**
 * The template for displaying category pages
 */
?>
<?php TQ::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main>
	<?php get_template_part( 'parts/templates/titles/title', 'category' ); ?>
	
	<article class="wacker-category-template <?php post_class(); ?>" >

		<?php

		$num_posts = 9;

		$query = new WP_Query( array(
			'cat'             => $wp_query->get_queried_object_id(),
			'posts_per_page'  => $num_posts
		) );

		include( locate_template( 'parts/templates/content-loop-responsive.php', false, false ) );

		wp_reset_postdata();

		?>
	</article>
</main>

<?php TQ::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
