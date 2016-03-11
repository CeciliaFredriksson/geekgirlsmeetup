<?php 
get_header();
?>
<div class="page-wrapper clearfix">
	
	<article class="small-12 medium-7 large-6 columns end">
		
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
</div>
<?php 
get_footer();

	