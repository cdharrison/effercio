<?php
/**
 * @package WordPress
 * @subpackage effercio2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		
		<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>

		<meta name="description" content="" /> <?php // This will be something that can be changed via Options in near future. ?>
		<meta name="generator" content="WordPress <?php bloginfo( 'version' ); ?>" />
		<meta name="keywords" content="" /> <?php // This will be something that can be changed via Options in near future. ?>
		
		<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
		
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css" />
		
		<!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		
		<link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> Posts" href="<?php bloginfo( 'rss2_url' ); ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> Comments" href="<?php bloginfo( 'comments_rss2_url' ); ?>" />
		
        <?php
            /* We add some JavaScript to pages with the comment form
             * to support sites with threaded comments (when in use).
             */
            if ( is_singular() && get_option( 'thread_comments' ) )
                wp_enqueue_script( 'comment-reply' );
        
            /* Always have wp_head() just before the closing </head>
             * tag of your theme, or you will break many plugins, which
             * generally use this hook to add elements to <head> such
             * as styles, scripts, and meta tags.
             */
            wp_head();
        ?>
      
	</head>

	<body>
	    <section id="container">
			<header id="masthead">
				<h1 id="logo">
					<a href="<?php echo get_option( 'home' ); ?>/"><?php bloginfo('name'); ?></a>
				</h1>
				<p class="description"><?php bloginfo( 'description' ); ?></p>

				<div id="search">
					<?php include ( TEMPLATEPATH . '/searchform.php' ); ?>
				</div>
				
			</header>
	
			<nav>
				<?php wp_nav_menu( array('menu' => 'Main Nav' )); ?>
			</nav>