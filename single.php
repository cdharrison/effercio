<?php
/**
 * @package WordPress
 * @subpackage effercio
 */
?>
<?php get_header(); ?>

	<div id="content" class="single">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="browse top clearfix">
			<?php posts_nav_link(' &#151; ','Previous Entries','Next Entries'); ?> 
		</div>
	
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2 class="title"><?php the_title(); ?></h2>
			<p class="metadata">
				<span class="date"><?php the_time('m.d.Y') ?></span> at
				<span class="time"><?php the_time() ?></span> by
				<span class="user"><?php the_author() ?></span>
			</p>
		
			<div class="entry">
				<?php the_content("<p class=\"continue\">" . __('Read the Rest of','') . " '" . the_title('', '', false) . "'</p>"); ?>
			</div>
			
            <div class="tags">
            	<?php the_tags( '<strong>Tags:</strong> ', ', ', ''); ?>
            </div>
            
			<?php wp_link_pages(); ?>
			
			<div class="tools">
				<?php edit_post_link(__('Edit'), '<span class="edit_post_link"> ', '</span>'); ?>
				<span class="permalink"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'">Permalink</a></span>
			</div>
		</div>

		<div id="comments">
			<?php comments_template(); ?>
		</div>

		<!--
		<?php trackback_rdf(); ?>
		-->
	
	<?php endwhile; ?>
	
		<div class="browse bottom clearfix">
			<?php posts_nav_link(' &#151; ','Previous Entries','Next Entries'); ?> 
		</div>
	
	<? else : ?>
	
	
		<div class="post">
			<h2 class="title">Oops.</h2>
			<div class="entry">
				<h2 class="title">We seem to be experimenting some techmological differences.</h2>
				<p>But seriously... you've either stumbled upon a page that's been removed from the site,
				visited an outdated link, or maybe something more sinister is afoot. Regardless,
				what you're looking for isn't here. Fear not, though:</p>
			</div>
			
			<div class="search">
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</div>
		</div>

	<?php endif; ?>
	</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>


