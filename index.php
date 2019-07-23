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
		'post_type' => 'photo'
	) );

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();

			echo '<div class="photo-post">';

				echo the_content();

			echo '</div>';
		}

	} else {

		echo "<h2>No photos to exhibit.</h2>";

	}
	?>

</main><!-- .site-main -->

<?php
get_footer();
