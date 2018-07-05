<?php get_header(); ?>
<?php
/*
Template Name: Home page
*/
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="container bg-white mb-3">
				<?php get_template_part( 'template-parts/home/slider' ); ?>
				<?php get_template_part( 'template-parts/home/banners' ); ?>				
			</div>

			<div class="container bg-white">
				<h2>DESTAQUES</h2>
				<div class="row">
					<div class="col-12 col-lg-6">
						<?php get_template_part( 'template-parts/home/destaques_random' ); ?>										
					</div>
					<div class="col-12 col-lg-6"></div>
				</div>
			</div>
		<?php endwhile; endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
