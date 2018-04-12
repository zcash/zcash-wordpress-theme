<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in Search Results and for Recent Posts in Front Page panels.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( 'post' === get_post_type() ) : ?>
			<a href="<?php echo get_permalink(); ?>">
				<div class="date-wrapper"><?php echo get_the_date('<p>M</p><p>d</p>'); ?></div>
			</a>
		<?php endif; ?>

	<div class="info-wrapper">
		<?php if ( is_front_page() && ! is_home() ) {

			// The excerpt is being displayed within a front page section, so it's a lower hierarchy than h2.
			the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
		} else {
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		} ?>

		<?php the_excerpt(); ?>
		<p>
			<?php the_tags(); ?>
		</p>
	</div>

</article><!-- #post-## -->
