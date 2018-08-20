<?php
/**
 * The template for displaying category pages
 */
?>
<?php TQ::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main>
	<?php get_template_part( 'parts/templates/titles/title', 'category' ); ?>

	<article <?php post_class('wacker-category-template'); ?> >

		<?php

		$num_posts = -1;

		$query = new WP_Query( array(
			'cat'             => $wp_query->get_queried_object_id(),
			'posts_per_page'  => $num_posts
		) );

		if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post();

			get_template_part( 'parts/templates/loop', 'amenities' );

		}}

		wp_reset_postdata();

		?>
	</article>
</main>

<?php TQ::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
