<?php 
get_header();
?>

	<section id="biljetter" class="cf-ticket-section row">
		<a class="cf-btn" href="#">Buy your ticket</a>
		<article class="small-12 medium-12 medium-centered large-8 large-centered columns">
	
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
	<section id="moderatorer" class="cf-moderator-section row">
		<?php get_template_part('templates/page-moderatorer')?>
	</section>
	<section id="talare" class="cf-talare-section row">
		<?php get_template_part('templates/page-talare')?>
	</section>
	<article class="small-12 medium-12 medium-centered large-8 large-centered columns">
		<h2 class="center">Program</h2>
<?php
		if(get_field('titel')) {
?>
		<h2 class="center"><?php the_field('titel'); ?></h2>
<?php
		}

		if(get_field('titel')) {
?>
		<div class="center"><?php the_field('text_under_titel'); ?></div>
<?php
		}
?>
	</article>
	<section id="sponsorer" class="cf-sponsorer-section row">
		<?php echo 'sponsorer här'; ?>
	</section>
</div>
<?php 
get_footer();

	