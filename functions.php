<?php

	// effercio2 by cdharrison
	
	// Menus
	add_action( 'init', 'register_my_menus' );
    function register_my_menus() {
        register_nav_menus(
            array(
                'menu-1' => __( 'Menu 1' ),
                'menu-2' => __( 'Menu 2' )
            )
        );
    }

	// Sidebars
		if ( function_exists( 'register_sidebars' ) )
			register_sidebars( 2 );
	
	// Post Thumbnails
	// We need to add_theme_support to enable their use within the theme.
	if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails
		add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size
	}
	

	// Allow the_post_thumbnail to be displayed with RSS feed items. By default, they won't appear.
	// This can be viewed by visiting /feed/rss/
	
		function insertThumbnailRSS( $content ) {
		   global $post;
		   if ( has_post_thumbnail( $post->ID ) ) {
			   $content = '<p class="image">' . get_the_post_thumbnail( $post->ID, 'medium' ) . '</p>' . $content;
		   }
		   return $content;
		}
		add_filter( 'the_excerpt_rss', 'insertThumbnailRSS' );  
		add_filter( 'the_content_feed', 'insertThumbnailRSS' ); 
?>