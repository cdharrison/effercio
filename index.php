<?php
/**
 * @package WordPress
 * @subpackage effercio2
 */

get_header(); 

?>

		   <section id="content" class="index">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
				
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium' ) ?>
							<?php endif; ?>
							
							<time datetime="<?php the_time( 'Y-m-d' ) ?>T<?php the_time() ?>-04:00">
								<span class="month"><?php the_time( 'm' ) ?></span>
								<span class="day"><?php the_time( 'd' ) ?></span>
								<span class="year"><?php the_time( 'y' ) ?></span>
							</time>
							
							<header class="title">
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'"><?php the_title(); ?></a></h2>
							</header>
										
							<section class="entry">
								<?php the_content( 'Continue Reading...' ); ?>
							</section>
							
							<section class="post-meta">
								<span class="permalink">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'">#</a>
								</span>
								<span class="comments">
									<?php comments_popup_link(__('Leave a Comment'), __('1 Comment'), __('% Comments'), 'commentslink', __('Comments Off')); ?>
								</span>
								<?php edit_post_link(__('Edit'), '<span class="edit-post-link"> ', '</span>'); ?>
							</section>
								
						</article>
						
							
					<? endwhile; ?>
							
					<section class="browse clearfix">
					
						<?php posts_nav_link(' ','&#8592; Previous Entries','Next Entries &#8594;'); ?>
					
					</section> <!-- /.browse -->
					
				<?php else : ?>
				
					<section class="error">		
					
						<h2>Not Found</h2>
						<p>Sorry, but you are looking for something that isn't here.</p>
						<?php include (TEMPLATEPATH . "/searchform.php"); ?>			
					
					</section> <!-- /.error -->
						
				<?php endif; ?>
		
			</section> <!-- /#content -->

<?php
	get_sidebar();
	get_footer();
?>