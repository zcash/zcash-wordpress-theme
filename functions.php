<?php
function child_theme_enqueue_styles() {

    $parent_style = 'twentyseventeen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

// // Filter the except length to 20 words.
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// Remove ReadMore link from index
function child_theme_setup() {
	remove_filter( 'excerpt_more', 'twentyseventeen_excerpt_more' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );

if ( ! function_exists( 'twentyseventeen_posted_on' ) ) :
/**
 * Integrate Co-Authors Plus with TwentySeventeen by replacing twentyseventeen_posted_on() with this function
 */
function twentyseventeen_posted_on() {
	$pubDate = get_the_date();
	$modDate = get_the_modified_date();
	if ($modDate > $pubDate) {
		$postDates = '<span class="entry-date">'.$pubDate.' &bull; Updated: '.$modDate.'</span>';
	} else {
		$postDates = '<span class="entry-date">'.$pubDate.'</span>';
	}
    if ( function_exists( 'coauthors_posts_links' ) ) :
        printf( __( '%3$s <span class="meta-sep">|</span> %2$s', 'twentyseventeen' ),
            'meta-prep meta-prep-author',
            sprintf( '<a href="%1$s" title="%2$s" rel="bookmark" class="posted-on">%3$s</a>',
                get_permalink(),
                esc_attr( get_the_time() ),
                $postDates
            ),
            coauthors_posts_links( null, null, null, null, false )
        );
    else:
        printf( __( '%3$s <span class="meta-sep">|</span> %2$s', 'twentyseventeen' ),
            'meta-prep meta-prep-author',
            sprintf( '<a href="%1$s" title="%2$s" rel="bookmark" class="posted-on"><span class="entry-date">%3$s</span></a>',
                get_permalink(),
                esc_attr( get_the_time() ),
                $postDates
            ),
            sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
                get_author_posts_url( get_the_author_meta( 'ID' ) ),
                esc_attr( sprintf( __( 'View all posts by %s', 'twentyseventeen' ), get_the_author() ) ),
                get_the_author()
            )
        );
    endif;
}
endif;

//enqueues our locally supplied font awesome stylesheet
function enqueue_zcash_stylesheets(){
	wp_enqueue_style('font-open-sans', get_stylesheet_directory_uri() . '/css/font-open-sans.css');
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','enqueue_zcash_stylesheets');

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function zcash_custom_header_setup() {
	add_theme_support( 'custom-header', array(
        'default-image'          => '',
        'default-text-color'     => 'FFFFFF',
        'width'                  => 190,
        'height'                 => 84,
        'flex-width'             => true,
        'flex-height'            => true,
	) );
}
add_action( 'after_setup_theme', 'zcash_custom_header_setup' );

remove_action( 'wp_head', 'feed_links', 2 );
add_action('wp_head', 'addBackPostFeed');
function addBackPostFeed() {
    echo '<link rel="alternate" type="application/rss+xml" title="RSS 2.0 Feed" href="'.get_bloginfo('rss2_url').'" />'; 
}

/**
 * Auto-subscribe or unsubscribe an Edit Flow user group when a post changes status
 * @see http://editflow.org/extend/auto-subscribe-user-groups-for-notifications/
 */
function efx_auto_subscribe_usergroup( $new_status, $old_status, $post ) {
    global $edit_flow;
 
    if ( ( 'pending' == $new_status ) || ( 'published' == $new_status ) ) {
        $usergroup_ids_to_follow = array(
               168
            );
        $edit_flow->notifications->follow_post_usergroups( $post->ID, $usergroup_ids_to_follow, true );
    }
 
    // Return true to send the email notification
    return $new_status;
}
add_filter( 'ef_notification_status_change', 'efx_auto_subscribe_usergroup', 10, 3 );

add_filter( 'wp_nav_menu_items', 'custom_menu_item', 10, 2 );
function custom_menu_item ( $items, $args ) {
    if ($args->theme_location == 'top') {
        $items = '<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item"><a href="'.esc_url( home_url( '/' ) ).'">Home</a></li> ' . $items;
		$items .= '<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-search-box">' . get_search_form( false ) . '</li>';
return $items;
	}
    return $items;
}

?>