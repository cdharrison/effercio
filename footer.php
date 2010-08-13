<?php
/**
 * @package WordPress
 * @subpackage effercio
 */
?>

			<footer>
			
			    <nav>
				    <?php wp_nav_menu( array('menu' => 'Footer Nav' )); ?>
			    </nav>
			
				<ul id="credits">
					<!-- Support Wordpress by keeping this link intact. -->
					<li class="wp">Proudly powered by <a href="http://wordpress.org" title="WordPress">WordPress</a>.</li>
					<!-- Easiest way to say thanks for this theme is to keep the link to my site.
						 If you feel compelled to remove it, though, you won't hurt my feelings. -->
					<li class="theme-author">
						<strong>Effercio 2&alpha;</strong> theme by
						<a href="http://cdharrison.com" title="Chris Harrison">Chris Harrison</a>
					</li>
					<li class="entries rss"><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
					<li class="comments rss"><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
				</ul>
				
				<?php wp_footer(); ?>
				
				<?php echo get_num_queries(); ?>
				
			</footer>
			
		</section> <!-- /#container -->
        
	</body>
</html>
