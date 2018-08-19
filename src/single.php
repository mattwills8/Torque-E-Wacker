<?php TQ::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<main id="single">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post();

		$categories = get_the_category();

		$is_update = false;
		$is_cat = false;

		foreach ($categories as $category) {
			// set true if we run a loop (means categories is not empty)
			$is_cat = true;

		  if ($category->slug === 'updates') {
		    $is_update = true;
		    break;
		  }
		}

		$cat_name = $is_cat ? $categories[0]->cat_name : false;
		$cat_link = $is_cat ? get_category_link( $categories[0] ) : false;

		?>

		<?php
		if ($is_update) {
			get_template_part( 'parts/templates/titles/title', 'single-update' );
		} else {
			include( locate_template( 'parts/templates/titles/title-single-other.php' ) );
		}
		?>

		<?php get_template_part( 'parts/templates/content', 'single' ); ?>

		<?php
		if ($cat_link) { ?>
			<a href="<?php echo $cat_link; ?>">
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
