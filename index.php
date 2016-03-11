<?php get_header(); ?>
<div class="page-wrapper clearfix">
	<!-- inkludera sid-teman som loopas ut på index.php -->
	<div class="small-12 medium-7 large-9 columns">
		<section class="small-12 large-8 columns">
			<?php get_template_part('templates/page-ticket'); ?>
		</section>
	</div>
</div>
<?php
	get_footer();
	