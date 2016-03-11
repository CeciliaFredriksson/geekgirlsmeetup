<article class="row post">
	<header>
<?php
		$categories = wp_get_object_terms($event->ID, 'event-category');
		if (!empty($categories) && !is_wp_error($categories)) {
?>
			<h2 class="sans-serif">
<?php 
				// Parse categories
				foreach($categories as $category) {
					echo '<a href="' . get_term_link($category->slug, 'event-category') . '">' . esc_html( $category->name ) . '</a> '; 
				}
?>
			</h2>
<?php
		}
?>
		<hr/>
		<h1 class="serif">
			<a href="<?php echo get_permalink($event->ID);?>" title="<?php echo get_the_title($event->ID); ?>">
				<?php echo get_the_title($event->ID); ?>
			</a>
		</h1>
		<hr/>
	</header>
	<p class="event-info">
<?php
		// All the post meta we have added for the event.
		echo $event->post_date ? 
				'<span><i class="fa fa-calendar"></i>'.$event->StartDate.'</span>' : '';

		echo $event->StartTime ? 
				'<span><i class="fa fa-clock-o"></i>'.substr($event->StartTime, 0, -3).'</span>' : '';

		echo get_post_meta($event->ID, 'event-pris', true) ? 
				'<span><i class="fa fa-ticket"></i>'.get_post_meta($event->ID, 'event-pris', true).'</span>' : '';

		echo get_post_meta($event->ID, 'event-ålder', true) ? 
				'<span><i class="fa fa-user-plus"></i>'.get_post_meta($event->ID, 'event-ålder', true).'</span>' : '';
	?>
	</p>
	<p class="event-content">
<?php
	$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id($event->ID), 'full');
	if ($featuredImage[0]) {
?>
		<a class="attachment-post-thumbnail" href="<?php echo get_permalink($event->ID);?>" title="<?php echo get_the_title($event->ID); ?>">
			<img src="<?php echo $featuredImage[0]?>" alt="<?php echo get_the_title($event->ID); ?>"/>
		</a>
		<?php echo $event->post_content;?>
<?php	
	} 
	else {
		echo $event->post_content;
	}
?>			
	</p>
	<p class="event-info-more">
<?php
		// All the post meta we have added for the event.
		echo get_post_meta($event->ID, 'event-regi', true) ? 
				'<span><strong>Regi:</strong> '.get_post_meta($event->ID, 'event-regi', true).'</span>' : '';

		echo get_post_meta($event->ID, 'event-skådespelare', true) ? 
				'<span><strong>Med:</strong> '.get_post_meta($event->ID, 'event-skådespelare', true).'</span>' : '';

		echo get_post_meta($event->ID, 'event-längd', true) ? 
				'<span><strong>Längd:</strong> '.get_post_meta($event->ID, 'event-längd', true).'</span>' : '';
?>
	</p>
</article>
