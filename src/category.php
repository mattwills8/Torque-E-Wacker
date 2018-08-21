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

		$num_posts = 10;
		$query = $wp_query;

		include( locate_template( 'parts/templates/content-loop-responsive.php', false, false ) );

		get_template_part( 'parts/elements/pagination/pagination', 'buttons' );

		?>
	</article>
</main>

<?php

if ( $wp_query->get_queried_object()->slug !== 'updates') {
	get_template_part( 'parts/shared/footer', 'contact-cta-inner' );
}

?>

<?php TQ::get_template_parts( array( 'parts/shared/footer-cols','parts/shared/html-footer' ) ); ?>
