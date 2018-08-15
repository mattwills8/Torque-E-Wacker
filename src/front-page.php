<?php
/**
 * Template Name: Front Page
 *
 * @package torque
 */
?>
<?php TQ::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="front-page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'parts/templates/titles/title', $post->post_type ); ?>

    <div class="front-page-updates-title-wrapper" >
      <h2>Latest Updates</h2>
    </div>

		<?php get_template_part( 'parts/templates/content', 'front-page' ); ?>

	<?php endwhile; ?>
</main>

<?php TQ::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
