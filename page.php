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

	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_content();
		}

	} else {



	}
	?>

</main><!-- .site-main -->

<?php
get_footer();
