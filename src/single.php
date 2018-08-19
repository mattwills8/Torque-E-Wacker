<?php TQ::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="single">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post();

		$categories = get_the_category();

		$is_update = false;
		$is_button = false;

		foreach ($categories as $category) {
			// set true if we run a loop (means categories is not empty)
			$is_button = true;

		  if ($category->slug === 'updates') {
		    $is_update = true;
		    break;
		  }
		}

		$button_link = $is_button ? get_category_link( $categories[0] ) : false;

		?>

		<?php
		if ($is_update) {
			get_template_part( 'parts/templates/titles/title', 'single-update' );
		} else {
			get_template_part( 'parts/templates/titles/title', 'single' );
		}
		?>

		<?php get_template_part( 'parts/templates/content', 'single' ); ?>

		<?php
		if ($button_link) { ?>
			<a href="<?php echo $button_link; ?>">
				<button>
					<?php if ($is_update) { ?>
							View all updates
					<?php } else { ?>
							Go back
					<?php } ?>
				</button>
			</a>
		<?php } ?>

	<?php endwhile; ?>
</main>

<?php TQ::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
