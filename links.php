<?php
/**
 * @package WordPress
 * @subpackage effercio2
 */
/*
	Template Name: Links
*/
?>
<?php get_header(); ?>

            <section id="content" class="single-page links-template">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
				
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'medium' ) ?>
							<?php endif; ?>
							
							<section id="social">
							    <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_permalink(); ?>" data-count="horizontal" data-text="Check out <?php the_title(); ?> on <?php bloginfo( 'name' ); ?>" data-via="cdharrison">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
							    <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo rawurlencode(get_permalink()); ?>&amp;layout=standard&amp;show-faces=true&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=dark" scrolling="no" frameborder="0" allowTransparency="true" id="facebook-like"></iframe>
							</section>
							
							<header class="title">
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'"><?php the_title(); ?></a></h2>
							</header>
										
							<section class="entry">
								<?php the_content( 'Continue Reading...' ); ?>
							</section>
							
							
                 			<ul class="links">
                                <?php get_links_list(); ?>
                            </ul>
                            
                            <?php wp_link_pages(); ?>
							
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
					
				<?php else : ?>
				
					<section class="error">		
					
						<h2>Not Found</h2>
						<p>Sorry, but you are looking for something that isn't here.</p>
						<?php include( TEMPLATEPATH . "/searchform.php" ); ?>			
					
					</section> <!-- /.error -->
						
				<?php endif; ?>
		
			</section> <!-- /#content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
