<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

	<div id="content" class="single">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<div class="post single" id="post-<?php the_ID(); ?>">
			<h2 class="title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content(__('Read the rest of this page &raquo;')); ?>
			</div>
            


			<div class="vcard">
				<p class="n"><span class="given-name">Chris</span> <span class="family-name">Harrison</span></p>
				<p class="title">Senior Designer</p>
				<p class="org"><a href="http://powerserve.net">PowerServe</a></p>
				<div class="adr">
					<p class="street-address">959 Broad Street</p>
					<p class="extended-address">Suite 300</p>
					<span class="locality">Augusta</span>, <span class="region">Georgia</span> <span class="postal-code">30901</span>
				</div>
				<p class="tel"><strong class="type">GrandCentral</strong> - (706) 955-4263</p>
                <p class="tel"><strong class="type">Work</strong> - (706) 826-1506 [115]</p>
				<p class="tel"><strong class="type">Fax</strong> - (706) 826-1507</p>
				
				<dl class="im">
					<dt>AIM</dt>
					<dd><a class="url" href="aim:goim?screenname=psicdharrison">psicdharrison</a></dd>
					<dt>MSN</dt>
					<dd><a class="url" href="msnim:chat?contact=chris@cdharrison.com">chris@cdharrison.com</a></dd>
					<dt>gTalk</dt>
					<dd><a class="url" href="gtalk:chat?jid=chris@cdharrison.com">chris@cdharrison.com</a></dd>
				</dl>
				
			</div>
            
            <embed src="http://embed.grandcentral.com/webcall/095c87075d3d2efd15ad29d9fc5d9c9b" width="142" height="54" wmode="transparent"></embed>
            
		</div>
		
	<?php endwhile; endif; ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
