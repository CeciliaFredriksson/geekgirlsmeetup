<?php 
// register custom post type for teams.
function create_second_post_type() {
	
	// define labels for custom post type
	$labels = array(
		'name' => 'Talare',
		'singular_name' => 'Talare',
		'add_new' => 'Ny talare',
		'add_new_item' => 'Lägg till ny talare',
		'edit_item' => 'Redigera talare',
		'new_item' => 'Ny talare',
		'view_item' => 'Visa talare',
		'search_items' => 'Sök talare',
		'not_found' => 'Inga talare hittades',
		'not_found_in_trash' => 'Inga talare hittades i papperkorgen',
	);
	$args = array (
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-microphone',
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		
	);
	register_post_type('Talare', $args);
}
add_action('init', 'create_second_post_type');

/**
 * This function creates a metabox to the custom post type
 * @return custom post type with team details
 */
function create_social_media_meta_box() {
	add_meta_box(
		'social_media_metabox',
		'Sociala medier:',
		'create_social_media_metabox',
		'Talare',
		'side',
		'default'
	);
}

/**
 * This function will add the metabox to the custom post type
 * @return custom post type with team details
 */ 
function social_media_metabox($post) {
	echo 'Infon skrivs in här';
}
add_action('add_meta_boxes', 'create_social_media_meta_box');

/**
 * This function will create the output of the metabox
 * @return input-field in the metabox.
 */ 
function create_social_media_metabox($post) {
?>
	<form action="" method="post">
<?php
		// add nonce for security
		wp_nonce_field('cecilia_metabox_nonce', 'cecilia_nonce');
		// retrive the metadata values if they exist
		$website2 = get_post_meta($post->ID, 'website2', true); 
		$twitter2 = get_post_meta($post->ID, 'twitter2', true); 
		$facebook2 = get_post_meta($post->ID, 'facebook2', true); 
		$instagram2 = get_post_meta($post->ID, 'instagram2', true); 
		$linkedin2 = get_post_meta($post->ID, 'linkedin2', true); 
		$snapchat2 = get_post_meta($post->ID, 'snapchat2', true); 
		
		?>
		<p>
			<?php echo 'Website:' ?> <br/>
			<input type="text" name="website2" value="<?php echo esc_attr( $website2 ) ; ?>" placeholder="http://ceciliafredriksson.se" /> <br/>
		</p>
		<p>
			<?php echo 'Facebook:'?> <br/>
			<input type="text" name="facebook2" value="<?php echo esc_attr( $facebook2 ); ?>" placeholder="https://facebook.se/..." />
		</p>
		<p>
			<?php echo 'Instagram:' ?> <br/>
			<input type="text" name="instagram2" value="<?php echo esc_attr( $instagram2 ); ?>" placeholder="http://instagram.se/..." />
		</p>
		<p>
			<?php echo 'Twitter:' ?> <br/>
			<input type="text" name="twitter2" value="<?php echo esc_attr( $twitter2 ); ?>" placeholder="http://twitter.se/..." />
		</p>
		<p>
			<?php echo 'Linkedin:' ?> <br/>
			<input type="text" name="linkedin2" value="<?php echo esc_attr( $linkedin2 ); ?>" placeholder="http://linkedin.se/..." />
		</p>
		<p>
			<?php echo 'Snapchat:' ?> <br/>
			<input type="text" name="snapchat2" value="<?php echo esc_attr( $snapchat2 ); ?>" placeholder="https://www.snapchat.com/add/cecilia_cocos" />
		</p>
	</form>
<?php 
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_website_value the data you write in input will be saved to this variable.
 * @param $_POST['website'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_website_value
 */ 
add_action('save_post', 'save_website2_meta');
function save_website2_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['website2'])) {
		$new_website2_value = ($_POST['website2']);
		update_post_meta($post_id, 'website2', $new_website2_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_twitter_value the data you write in input will be saved to this variable.
 * @param $_POST['twitter'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_twitter_value
 */ 
add_action('save_post', 'save_twitter2_meta');
function save_twitter2_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['twitter2'])) {
		$new_twitter2_value = ($_POST['twitter2']);
		update_post_meta($post_id, 'twitter2', $new_twitter2_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_facebook2_value the data you write in input will be saved to this variable.
 * @param $_POST['facebook2'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_facebook2_value
 */ 
add_action('save_post', 'save_facebook2_meta');
function save_facebook2_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['facebook2'])) {
		$new_facebook2_value = ($_POST['facebook2']);
		update_post_meta($post_id, 'facebook2', $new_facebook2_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_instagram2_value the data you write in input will be saved to this variable.
 * @param $_POST['instagram2'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_instagram2_value
 */ 
add_action('save_post', 'save_instagram2_meta');
function save_instagram2_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['instagram2'])) {
		$new_instagram2_value = ($_POST['instagram2']);
		update_post_meta($post_id, 'instagram2', $new_instagram2_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_linkedin2_value the data you write in input will be saved to this variable.
 * @param $_POST['linkedin2'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_linkedin2_value
 */ 
add_action('save_post', 'save_linkedin2_meta');
function save_linkedin2_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['linkedin2'])) {
		$new_linkedin2_value = ($_POST['linkedin2']);
		update_post_meta($post_id, 'linkedin2', $new_linkedin2_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_snapchat2_value the data you write in input will be saved to this variable.
 * @param $_POST['snapchat2'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_snapchat2_value
 */ 
add_action('save_post', 'save_snapchat2_meta');
function save_snapchat2_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['snapchat2'])) {
		$new_snapchat2_value = ($_POST['snapchat2']);
		update_post_meta($post_id, 'snapchat2', $new_snapchat2_value);
	}
}
