<?php get_header();
/**
 * The template for displaying a single moderators
 *
 * @author	Cecilia Fredriksson
 * @date	2016-03-12
 * @copy	www.ceciliafredriksson.com
 * @since PACKAGE VERSION 1.0
 */
?>
<section class="row center padding-large-topbottom">
	<?php
	

	if (have_posts()) {
		while (have_posts()) {
			the_post();
			?>
			
				<div>
					<?php the_post_thumbnail(); ?>
				</div>
					<h2>Om <?php the_title(); ?></h2></figcaption>
					<div class="small-12 medium-8 medium-centered columns">
						<?php the_content(); ?>
					</div>
<?php
					$moderator_website = get_post_meta($post->ID, 'website', true);
					$moderator_facebook = get_post_meta($post->ID, 'facebook', true);
					$moderator_instagram = get_post_meta($post->ID, 'instagram', true);
					$moderator_twitter = get_post_meta($post->ID, 'twitter', true);
					$moderator_linkedin = get_post_meta($post->ID, 'linkedin', true);
					$moderator_snapchat = get_post_meta($post->ID, 'snapchat', true);
?>
					<div class="small-12 columns">
						<ul class="social-media-icons">
<?php
							if($moderator_website !== '') {
?>
								<li class="website">
									<a href="<?php $moderator_website; ?>">website</a>
								</li>
<?php
							}
							if($moderator_facebook !== '') {
?>
								<li class="facebook">
									<a href="<?php $moderator_facebook; ?>">facebook</a>
								</li>
<?php
							}
							if($moderator_instagram !== '') {
?>
								<li class="instagram">
									<a href="<?php $moderator_instagram; ?>">instagram</a>
								</li>
<?php
							}
							if($moderator_twitter !== '') {
?>
								<li class="twitter">
									<a href="<?php $moderator_twitter; ?>">twitter</a>
								</li>
<?php
							}
							if($moderator_linkedin !== '') {
?>
								<li class="linkedin">
									<a href="<?php $moderator_linkedin; ?>">linkedin</a>
								</li>
<?php
							}
							if($moderator_snapchat !== '') {
?>
								<li class="snapchat">
									<a href="<?php $moderator_snapchat; ?>">snapchat</a>
								</li>
<?php
							}
?>
						</ul>
					</div>				
			
<?php
		}
	}
	?>
</section>
<?php
get_footer();
