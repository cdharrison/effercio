<?php
/**
 * @package WordPress
 * @subpackage effercio
 */
?>
<?php get_header(); ?>

	<div id="content" class="single">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2 class="title"><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content("<p class=\"continue\">" . __('Read the Rest of','') . " '" . the_title('', '', false) . "'</p>"); ?>
			</div>

			<?php wp_link_pages(); ?>
			
			<div class="tools">
				<?php edit_post_link(__('Edit'), '<span class="edit_post_link"> ', '</span>'); ?>
				<span class="permalink"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'">Permalink</a></span>
			</div>
		</div>
		
		<!--
		<?php trackback_rdf(); ?>
		-->
	<?php endwhile; endif; ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
