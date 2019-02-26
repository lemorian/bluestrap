<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article  class="card <?php echo implode( ' ', get_post_class() ); ?>"  id="post-<?php the_ID(); ?>">

	<header class="entry-header card-header">

		<?php the_title( '<h1 class="entry-title card-title">', '</h1>' ); ?>

		<h6 class="centry-meta ard-subtitle mb-2 text-muted">
			<?php understrap_posted_on(); ?>
		</h6><!-- .entry-meta -->

	</header><!-- .entry-header Testing-->

	

	<div class="entry-content card-body">
	<?php echo get_the_post_thumbnail( $post->ID, 'large',array( 'class' => 'img-fluid' ) ); ?>
		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
