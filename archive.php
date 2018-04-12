<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div class="archive-menu">
		<?php
			the_archive_title( '<div class="archive-title">', '</div>' );
			if ( is_category() ) {
				$category = get_category( get_query_var('cat') );
				if ( ! empty( $category ) )
					echo '<a href="' . get_category_feed_link( $category->cat_ID ) . '" class="rss-header" title="' . sprintf( __( 'Subscribe to this category', 'appthemes' ), $category->name ) . '" rel="nofollow"><i class="fa fa-rss-square"></i></a>';
			} else if (  is_tag() ) {
				$tag_id = get_query_var('tag_id');
				echo '<a href="' . get_tag_feed_link( $tag_id) . '" class="rss-header" title="Subscribe to this tag" rel="nofollow"><i class="fa fa-rss-square"></i></a>';
			} else if ( is_author() ) {
				echo '<a href="feed" class="rss-header" title="Subscribe to this author" rel="nofollow"><i class="fa fa-rss-square"></i></a>';
			}
		?>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content-excerpt', get_post_format() );

			endwhile;

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php // get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
