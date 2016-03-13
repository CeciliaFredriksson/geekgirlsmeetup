<?php get_header();
/**
 * The template for displaying a single talare
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
					$talare_website = get_post_meta($post->ID, 'website2', true);
					$talare_facebook = get_post_meta($post->ID, 'facebook2', true);
					$talare_instagram = get_post_meta($post->ID, 'instagram2', true);
					$talare_twitter = get_post_meta($post->ID, 'twitter2', true);
					$talare_linkedin = get_post_meta($post->ID, 'linkedin2', true);
					$talare_snapchat = get_post_meta($post->ID, 'snapchat2', true);
?>
					<div class="small-12 columns">
						<ul class="social-media-icons">
<?php
							if($talare_website !== '') {
?>
								<li class="website">
									<a href="<?php $talare_website; ?>">website</a>
								</li>
<?php
							}
							if($talare_facebook !== '') {
?>
								<li class="facebook">
									<a href="<?php $talare_facebook; ?>">facebook</a>
								</li>
<?php
							}
							if($talare_instagram !== '') {
?>
								<li class="instagram">
									<a href="<?php $talare_instagram; ?>">instagram</a>
								</li>
<?php
							}
							if($talare_twitter !== '') {
?>
								<li class="twitter">
									<a href="<?php $talare_twitter; ?>">twitter</a>
								</li>
<?php
							}
							if($talare_linkedin !== '') {
?>
								<li class="linkedin">
									<a href="<?php $talare_linkedin; ?>">linkedin</a>
								</li>
<?php
							}
							if($talare_snapchat !== '') {
?>
								<li class="snapchat">
									<a href="<?php $talare_snapchat; ?>">snapchat</a>
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
