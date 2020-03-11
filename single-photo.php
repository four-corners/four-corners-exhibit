<?php
/**
 * Template Name: Group
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

	<div class="photo-post">

		<h2><?= $post->post_title; ?></h2>

		<div class="photo-content">

			<?= $post->post_content; ?>

		</div>

	</div>
		

</main>

<?php
get_footer();
