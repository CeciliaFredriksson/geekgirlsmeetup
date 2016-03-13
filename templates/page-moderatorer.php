<?php
/**
 * @author	Cecilia Fredriksson
 * @date	2016-03-12
 * @copy	www.ceciliafredriksson.com
 * Template Name: moderatorer
 * @since PACKAGE VERSION 1.0
 */
?>

<h2 class="center">Moderatorer</h2>
<ul class="the-grid">
<?php
	$the_query = new WP_query(
			array(
		'post__not_in' => array($post->ID),
		'post_type' => 'Moderator',
		'order' => 'desc'
			)
	);

	if ($the_query->have_posts()) {
		while ($the_query->have_posts()) {
			$the_query->the_post();
			?>
			<li>
				<a href="<?php the_permalink();?>">
					<figure>
						<div class="image-container">
							<?php the_post_thumbnail(); ?>
						</div>
						<figcaption class="center"><h2><?php the_title(); ?></h2></figcaption>
					</figure>
				</a>
			</li>
<?php
		}
	}
wp_reset_query(); ?>
</ul>