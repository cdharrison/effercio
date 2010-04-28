<?php
/**
 * @package WordPress
 * @subpackage effercio
 */
?>
<?php get_header(); ?>

   <div id="content" class="search">

	<?php if (have_posts()) : ?>
    
    	<div <?php post_class() ?>>

			<h2 class="title">Search Results</h2>
			<p>Below are the posts that match your search criteria. If it's not quite what you were looking for,
			you could always searching for something else:</p>

			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		
			<div style="clear:both;"></div>
            
            <ol class="searchresults">
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <strong>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
                </strong> &#0151;
                <span class="metadata">
                    <span class="date">Posted on <?php the_time('m.d.Y') ?> at <?php the_time() ?></span> &middot;
                    <span class="respond"><?php comments_popup_link(__('Respond'), __('Comments (1)'), __('Comments (%)'), 'commentslink', __('Comments off')); ?></span>
                    <?php edit_post_link(__('Edit'), ' &middot; <span class="edit"> ', '</span>'); ?>
                </span>
            </li>
            <?php endwhile; ?>
            </ol>
            
			<div class="browse bottom clearfix">
				<?php posts_nav_link(' &#151; ','Previous Entries','Next Entries'); ?> 
			</div>

        </div>

	<?php else : ?>
    
    	<div <?php post_class() ?>>

			<h2 class="title">No posts found.</h2>
            <p>How about searching for something else?</p>
            
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>

		</div>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>