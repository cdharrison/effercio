<?php
/**
 * @package WordPress
 * @subpackage effercio
 */
?>
			<div id="sidebar">
				<ul>
				<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
						
					<?php /* If this is a 404 page */ if (is_404()) { ?>
					
					<?php /* If this is a category archive */ } elseif (is_category()) { ?>
						
						<li id="details">
							<h2>category<em>archives</em></h2>
							<p>You are currently browsing the archives for the <strong><?php single_cat_title(''); ?></strong> category.</p>
						</li>
						
					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						
						<li id="details">
							<h2>daily<em>archives</em></h2>
							<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> archives
							for the day <?php the_time('l, F jS, Y'); ?>.</p>
						</li>
						
					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			
						<li id="details">
							<h2>monthly<em>archives</em></h2>
							<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> archives
							for <?php the_time('F, Y'); ?>.</p>
						</li>
		
			 		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					
						<li id="details">
							<h2>yearly<em>archives</em></h2>
							<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> archives
							for the year <?php the_time('Y'); ?>.</p>
						</li>
							
					<?php /* If this is a search results page */ } elseif (is_search()) { ?>
						
						<li id="details">
							<h2>search<em>results</em></h2>
							<p>You have searched the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> archives
							for <strong>'<?php echo wp_specialchars($s); ?>'</strong>.</p>
						</li>
						
					<?php /* If this is a single entry */ } elseif (is_single()) { ?>
					
						<li id="details">
						
							<h2>entry<em>details</em></h2>
							<p style="margin-bottom:10px;">You are currently reading an entry in the <strong><?php echo bloginfo('name'); ?></strong> archives entitled
							"<?php the_title(); ?>". It was originally posted on <span class="date"><?php the_time('m.d.Y') ?></span> at
							<span class="time"><?php the_time() ?></span>, by <span class="user"><?php the_author() ?></span>.
							It's been filed under the following section(s) of the site: <?php the_category(', ') ?></p>
							
						</li>
					
					<?php } else { ?>

						<li id="about">
							<p><?php bloginfo('description'); ?></p>
						</li>

						<li id="categories">
							<ul>
							<?php wp_list_categories('title_li=&show_count=0&exclude=asides'); ?>
							</ul>
						</li>

					<?php } ?>
						
				<?php endif; ?>

                <li id="meta">
                    <h2>meta<em>stuff</em></h2>
                    <ul class="meta">
                        <?php wp_register("<li class=\"register\">","</li>"); ?>
                        <li class="login"><?php wp_loginout(); ?></li>
                        <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS 2.0'); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
                        <li class="rss"><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
                        <?php wp_meta(); ?>
                    </ul>
                </li>

				</ul>
			</div>