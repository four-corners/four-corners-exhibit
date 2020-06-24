<?php
/**
 * The header for our theme
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Four Corners Exhibit
 * @since 1.0.0
 */

$page_title = '';
if( $post && $post->post_type == 'page' ) {
	$page_title = $post->post_title;
} else if( $cat = get_queried_object() ) {
	if( $cat_parent = $cat->category_parent ) {
		$page_title = get_term( $cat_parent, 'category' )->name . ': ' . $cat->name;
	}
	else {
		$page_title = $cat->name;
	}
}



?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<title>Four Corners Project: <?= $page_title ? $page_title : 'Exhibits'; ?></title>
</head>

<body <?php body_class(); ?>>

	<header id="main-header">
		<a href="<?= get_home_url(); ?>">
			<h3>Exhibits from the</h3>
			<h3>Four Corners Project</h3>
		</a>

		<h3 id="page-title"><?= $page_title; ?></h3>

	</header>
