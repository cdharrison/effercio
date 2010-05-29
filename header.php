<?php
/**
 * @package WordPress
 * @subpackage effercio
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Posts" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Comments" href="<?php bloginfo('comments_rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<meta name="description" content="" /> <?php // This will be something that can be changed via Options in near future. ?>
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
		<meta name="keywords" content="" /> <?php // This will be something that can be changed via Options in near future. ?>
		
		<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
		
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css" />
		
        <style type="text/css" media="screen">
			@import url('<?php bloginfo('stylesheet_url'); ?>');
		</style>	

		<?php wp_get_archives('type=monthly&format=link'); ?>
		<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>
		<?php wp_head(); ?>        
	</head>

	<body>
	    <div id="container">
			<div id="masthead">
				<div id="search">
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				</div>

				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<p class="description"><?php bloginfo('description'); ?></p>
				
			</div>
	
			<div id="navigation">
				<ul>
					<li class="page_item<?php if(is_home()) { ?> current_page_item<? } ?><?php if(is_single()) { ?> current_page_item<? } ?>"><a href="<?php bloginfo('url'); ?>" title="Home">Home</a></li>
					<?php wp_list_pages('title_li=&depth=1'); ?>
				</ul>
			</div>