<?php
/**
 * The main template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Four Corners Exhibit
 * @since 1.0.0
 */
get_header();
global $post;
?>

<main id="main" class="site-main">

	<?php

	$query = new WP_Query( array(
		'post_type' => 'page',
		'post_status' => 'publish'
	) );

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post(); ?>

			<div class="page-link">

				<a href="<?= get_the_permalink(); ?>">
					<?= get_the_title(); ?>
				</a>

			</div>

		<?php }

	} else { ?>

		<h2>No photos to exhibit.</h2>

	<?php } ?>

</main>

<?php
get_footer();
