<?php get_header(); ?>
<div class="page-wrapper clearfix">
	
	<section class="small-12 medium-7 large-9 columns">
		<article class="small-12 large-8 columns">
<?php 
			if(have_posts()) {
				while (have_posts()) {
					the_post();	
					
				}
			}
?>
		</article>
		<section class="small-12 large-4 columns">
			
		</section>
	</section>
</div>
<?php 
get_footer();
