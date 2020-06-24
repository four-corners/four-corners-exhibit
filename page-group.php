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

	<?php
	$slug = $post->post_name;
	$parent_slug = $post->parent_name;
	echo $parent_slug;
	$cat = get_category_by_slug( $slug );

	if( $cat ) {

		$photos = get_posts( array(
			'post_type' => 'photo',
			'cat' => $cat->term_id
		) );

		if ( $photos ) {

			foreach ( $photos as $photo ) { ?>

				<div class="photo-post">

					<h2>
						<a href="<?= get_permalink( $photo ) ?>">
							<?= $photo->post_title; ?>
						</a>
					</h2>

					<div class="photo-content">

						<?= $photo->post_content; ?>

					</div>

				</div>

			<?php }

		} else { ?>

			<h2>Nothing here.</h2>

		<?php }
	} else { ?>

		<h2>Nothing here.</h2>

	<?php } ?>

</main><!-- .site-main -->

<?php
get_footer();
