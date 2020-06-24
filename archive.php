<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Four Corners Exhibit
 * @since 1.0.0
 */
get_header();
?>

<main id="main" class="site-main">

	<?php
	$cat = get_queried_object();
	$args = array (
		'post_type' => 'photo',
		'category' => $cat->term_id,
	);
	$photos = get_posts( $args );
	if ( sizeof( $photos ) ) {
		foreach( $photos as $photo ) { ?>
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
	<?php } ?>

</main><!-- .site-main -->

<?php
get_footer();
