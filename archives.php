<?php
/**
 * @package WordPress
 * @subpackage effercio2
 */
/*
Template Name: Archives
*/

	get_header();

?>


	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2 class="title"><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content("<p class=\"continue\">" . __('Read the Rest of','') . " '" . the_title('', '', false) . "'</p>"); ?>

            	<ul>
                	<li>
                        <h4>Browse Archives by Month:</h4>
                        <ul>
                            <?php wp_get_archives('type=monthly'); ?>
                        </ul>
                	</li>
                    <li>
                    	<h4>Browse Archives by Category/Subject:</h4>
                        <ul>
                        <?php wp_list_cats(); ?>
                        </ul>

					</li>
                    <li>
                    	<h4>Browse Archives by Tag:</h4>
                        <?php wp_tag_cloud(); ?>
                    </li>
				</ul>

			</div>

			<!--
			<?php trackback_rdf(); ?>
			-->

		</div>

	<?php endwhile; endif; ?>
	</div>

<?php
	get_sidebar();
	get_footer();
?>
