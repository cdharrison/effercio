<?php
/**
 * @package WordPress
 * @subpackage effercio
 */
?>
<?php get_header(); ?>

	<div id="content" class="single">
	
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2 class="title"><?php _e('Not Found'); ?></h2>
			<p><?php _e('We seem to be experimenting some techmological differences.'); ?></p>
			
			<h3><?php _e('Search'); ?></h3>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>

		</div>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
