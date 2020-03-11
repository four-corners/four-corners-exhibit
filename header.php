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
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="main-header">
		<a href="<?= get_home_url(); ?>">
			<h3>Exhibits from the</h3>
			<h3>Four Corners Project</h3>
		</a>

		<?php if( $post->post_type == 'page' ) { ?>

			<h3 id="page-title"><?= $post->post_title; ?></h3>

		<?php } ?>

	</header>
