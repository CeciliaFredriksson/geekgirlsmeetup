<?php
/**
 * The template for displaying a single event
 *
 * @package Event Organiser (plug-in)
 * @since 1.0.0
 */
get_header(); ?>
<div class="page-wrapper clearfix">
	<aside class="show-for-medium-up medium-5 large-3 columns">
		<?php get_template_part('templates/page-sidebar'); ?>
	</aside>
	<section class="small-12 medium-7 large-9 columns">
		<article class="small-12 large-8 columns">
<?php 
			if(have_posts()) {
				while (have_posts()) {
					the_post();	
					get_template_part('entry');
				}
			}
?>
		</article>
		<section class="small-12 large-4 columns">
			<?php get_template_part('templates/page-flyers'); ?>
			<div class="row margin-top-medium">
				<div class="small-6 large-7 columns posters">
					<?php get_template_part('templates/page-opera'); ?>		
				</div>
				<div class="small-6 large-5 columns posters">
					<?php get_template_part('templates/page-kids'); ?>
				</div>
			</div>
			
			
		</section>
	</section>
</div>
<?php 
get_footer();
