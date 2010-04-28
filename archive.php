<?php
/**
 * @package WordPress
 * @subpackage effercio
 */

	get_header();

?>

	<div id="content">

		<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		 
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h3 class="title"><?php echo single_cat_title(); ?> archives</h3>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h3 class="title">Archive for <?php the_time('F jS, Y'); ?></h3>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h3 class="title">Archive for <?php the_time('F, Y'); ?></h3>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h3 class="title">Archive for <?php the_time('Y'); ?></h3>
			<?php /* If this is a search */ } elseif (is_search()) { ?>
				<h3 class="title">Search Results</h3>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h3 class="title">Author Archive</h3>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h3 class="title">Blog Archives</h3>
			<?php } ?>
		
			<?php while (have_posts()) : the_post(); ?>


				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'"><?php the_title(); ?></a></h2>
					<script src="http://feeds.feedburner.com/~s/cdharrison?i=<?php the_permalink() ?>" type="text/javascript" charset="utf-8"></script>
					<p class="metadata">
						<span class="date"><?php the_time('m.d.Y') ?></span> at
						<span class="time"><?php the_time() ?></span> by
						<span class="user"><?php the_author() ?></span>
					</p>
				
					<div class="entry">
						<?php the_content("<p class=\"continue\">" . __('Read the Rest of','') . " '" . the_title('', '', false) . "'</p>"); ?>
					</div>
					
					<div class="tools">
						<span class="comments"><?php comments_popup_link(__('Respond'), __('Comments (1)'), __('Comments (%)'), 'commentslink', __('Comments off')); ?></span>
						<?php edit_post_link(__('Edit'), '<span class="edit_post_link"> ', '</span>'); ?>
						<span class="permalink"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'">Permalink</a></span>
					</div>
				</div>

		
			<?php endwhile; ?>
	
	
		
		<div class="navigation clearfix">
			<?php posts_nav_link('|','Previous Entries','Next Entries'); ?> 
		</div>

	<?php else : ?>

		<h2>Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php
	get_sidebar();
	get_footer();
?>