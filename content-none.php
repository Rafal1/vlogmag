<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ProfitMag
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Nic nie znaleziono', 'profitmag' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'profitmag' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Żaden wpis nie spełnia kryteriów wyszukiwania. Zmień je i spróbuj ponownie.', 'profitmag' ); ?></p>
			

		<?php else : ?>

			<p><?php _e( 'Nie odnaleziono żądanej treści. Spróbuj ją wyszukać.', 'profitmag' ); ?></p>
			

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
