<?php
/**
 * @package WordPress
 * @subpackage effercio2
 */
?>
<!DOCTYPE html>
<html>
	<head profile="http://gmpg.org/xfn/11">
		<meta charset="<?php bloginfo('charset'); ?>" />
		
		<title><?php wp_title( '&laquo;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> Posts" href="<?php bloginfo( 'rss2_url' ); ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> Comments" href="<?php bloginfo( 'comments_rss2_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<meta name="description" content="" /> <?php // This will be something that can be changed via Options in near future. ?>
		<meta name="generator" content="WordPress <?php bloginfo( 'version' ); ?>" />
		<meta name="keywords" content="" /> <?php // This will be something that can be changed via Options in near future. ?>
		
		<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
		
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css" />
		
		<!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		
        <style type="text/css" media="screen">
			@import url('<?php bloginfo( 'stylesheet_url '); ?>');
		</style>

		<?php wp_get_archives( 'type=monthly&format=link' ); ?>
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>        
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