<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ||
	 is_active_sidebar( 'sidebar-4' )) :
?>

	<aside class="widget-area" role="complementary">
		<div class="container">
			<div class="row">
				<?php
				if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
					<div class="col-12 col-lg-3 widget-column footer-widget-1">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				<?php }
				if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
					<div class="col-12 col-lg-6 widget-column footer-widget-2">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div>
				<?php }
				if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
					<div class="col-12 col-lg-3 widget-column footer-widget-3">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					</div>
				<?php } ?>
				</div>
		</div>
	</aside><!-- .widget-area -->

<?php endif; ?>
