<?php 
get_header();
?>
<div class="page-wrapper clearfix">
	<section class="cf-ticket-section row">
		<a class="cf-btn" href="#">Buy your ticket</a>
		<article class="small-12 medium-8 medium-centered columns">
	
<?php
			if(have_posts()) {
				while(have_posts()) {
					the_post();
					the_content();
				}
			} else {
?>
				<!-- 404 -->
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
<?php
			}
?>
		</article>
	</section>
	<section class="cf-moderator-section row">
		<?php get_template_part('templates/page-moderatorer')?>
	</section>
	<section class="cf-talare-section row">
		<?php get_template_part('templates/page-talare')?>
	</section>
</div>
<?php 
get_footer();

	