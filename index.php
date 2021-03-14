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

	$cats = get_terms( array(
		'taxonomy' => 'category',
		'hide_empty' => false,
		'parent' => 0,
		'exclude' => 1
	) );
	if ( $cats ) {
		foreach( $cats as $cat ) { ?>
			<div class="cat">
				<a href="<?= get_category_link( $cat ); ?>"><?= $cat->name; ?></a>
				<?php $sub_cats = get_terms( array(
					'taxonomy' => 'category',
					'hide_empty' => false,
					'parent' => $cat->term_id
				) );
				if( $sub_cats && sizeof( $sub_cats ) > 1 ) { ?>
					<div class="sub-cats">
						<?php foreach( $sub_cats as $sub_cat ) { ?>
							<a href="<?= get_category_link( $sub_cat ); ?>"><?= $sub_cat->name; ?></a>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		<?php }
	} else { ?>
		<h2>No photos to exhibit.</h2>
	<?php } ?>
</main>

<?php
get_footer();
