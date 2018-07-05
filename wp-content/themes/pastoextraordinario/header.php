<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

  <link href="<?php bloginfo( 'template_url' ); ?>/assets/dist/css/main.min.css" rel="stylesheet" />


<?php wp_head(); ?>
</head>
<?php if(twentyseventeen_is_frontpage()) { ?>
	<body <?php body_class(); echo 'style="background-image: url('. get_field("background") .')"'; ?> >
<?php } else { ?>
	<body <?php body_class(); ?> >
<?php } ?>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-4">
					<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
				</div>

				<div class="col-6 col-lg-8">
					<?php if ( has_nav_menu( 'top' ) ) : ?>
						<div class="navigation-top">
							<div class="wrap">
								<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
							</div><!-- .wrap -->
						</div><!-- .navigation-top -->
					<?php endif; ?>

					<form action="/" method="get">
						<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
						<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
					</form>
				</div>

				



			</div>
		</div>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
