<?php
/**
 * @package WordPress
 * @subpackage effercio
 */

	get_header(); 

?>

   <div id="content" class="home">
   	<h3>Latest<em>Stuff</em></h3>
   
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
	
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'"><?php the_title(); ?></a></h2>
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
					<span class="permalink"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'">Permalink</a></span>
					<?php edit_post_link(__('Edit'), '<span class="edit_post_link"> ', '</span>'); ?>
				</div>
			</div>
					
		<? endwhile; ?>
					
			<div class="browse bottom clearfix">
				<?php posts_nav_link(' &#151; ','Previous Entries','Next Entries'); ?> 
			</div>
		
	<?php else : ?>
	
		<div <?php post_class() ?>
	
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			
		</div>
			
	<?php endif; ?>


	
	
	</div>

<?php
	get_sidebar();
	get_footer();
?>