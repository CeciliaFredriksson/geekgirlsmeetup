<?php 
// register custom post type for teams.
function create_post_type() {
	
	// define labels for custom post type
	$labels = array(
		'name' => 'Moderatorer',
		'singular_name' => 'Moderator',
		'add_new' => 'Ny moderator',
		'add_new_item' => 'Lägg till ny moderator',
		'edit_item' => 'Redigera moderator',
		'new_item' => 'Ny moderator',
		'view_item' => 'Visa moderator',
		'search_items' => 'Sök moderator',
		'not_found' => 'Inga moderatorer hittades',
		'not_found_in_trash' => 'Inga moderatorer hittades i papperkorgen',
	);
	$args = array (
		'labels' => $labels,
		'public' => true,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		
	);
	register_post_type('Moderator', $args);
}
add_action('init', 'create_post_type');

/**
 * This function creates a metabox to the custom post type
 * @return custom post type with team details
 */
function create_socialmedia_meta_box() {
	add_meta_box(
		'socialmedia_metabox',
		'Sociala medier:',
		'create_socialmedia_metabox',
		'Moderator',
		'side',
		'default'
	);
}

/**
 * This function will add the metabox to the custom post type
 * @return custom post type with team details
 */ 
function socialmedia_metabox($post) {
	echo 'Infon skrivs in här';
}
add_action('add_meta_boxes', 'create_socialmedia_meta_box');

/**
 * This function will create the output of the metabox
 * @return input-field in the metabox.
 */ 
function create_socialmedia_metabox($post) {
?>
	<form action="" method="post">
<?php
		// add nonce for security
		wp_nonce_field('cecilia_metabox_nonce', 'cecilia_nonce');
		// retrive the metadata values if they exist
		$website = get_post_meta($post->ID, 'website', true); 
		$twitter = get_post_meta($post->ID, 'twitter', true); 
		$facebook = get_post_meta($post->ID, 'facebook', true); 
		$instagram = get_post_meta($post->ID, 'instagram', true); 
		$linkedin = get_post_meta($post->ID, 'linkedin', true); 
		$snapchat = get_post_meta($post->ID, 'snapchat', true); 
		
		?>
		<p>
			<?php echo 'Website:' ?> <br/>
			<input type="text" name="website" value="<?php echo esc_attr( $website ) ; ?>" placeholder="http://ceciliafredriksson.se" /> <br/>
		</p>
		<p>
			<?php echo 'Facebook:'?> <br/>
			<input type="text" name="facebook" value="<?php echo esc_attr( $facebook ); ?>" placeholder="https://facebook.se/..." />
		</p>
		<p>
			<?php echo 'Instagram:' ?> <br/>
			<input type="text" name="instagram" value="<?php echo esc_attr( $instagram ); ?>" placeholder="http://instagram.se/..." />
		</p>
		<p>
			<?php echo 'Twitter:' ?> <br/>
			<input type="text" name="twitter" value="<?php echo esc_attr( $twitter ); ?>" placeholder="http://twitter.se/..." />
		</p>
		<p>
			<?php echo 'Linkedin:' ?> <br/>
			<input type="text" name="linkedin" value="<?php echo esc_attr( $linkedin ); ?>" placeholder="http://linkedin.se/..." />
		</p>
		<p>
			<?php echo 'Snapchat:' ?> <br/>
			<input type="text" name="snapchat" value="<?php echo esc_attr( $snapchat ); ?>" placeholder="Cecilia" />
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
add_action('save_post', 'save_website_meta');
function save_website_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['website'])) {
		$new_website_value = ($_POST['website']);
		update_post_meta($post_id, 'website', $new_website_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_twitter_value the data you write in input will be saved to this variable.
 * @param $_POST['twitter'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_twitter_value
 */ 
add_action('save_post', 'save_twitter_meta');
function save_twitter_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['twitter'])) {
		$new_twitter_value = ($_POST['twitter']);
		update_post_meta($post_id, 'twitter', $new_twitter_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_facebook_value the data you write in input will be saved to this variable.
 * @param $_POST['facebook'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_facebook_value
 */ 
add_action('save_post', 'save_facebook_meta');
function save_facebook_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['facebook'])) {
		$new_facebook_value = ($_POST['facebook']);
		update_post_meta($post_id, 'facebook', $new_facebook_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_instagram_value the data you write in input will be saved to this variable.
 * @param $_POST['instagram'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_instagram_value
 */ 
add_action('save_post', 'save_instagram_meta');
function save_instagram_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['instagram'])) {
		$new_instagram_value = ($_POST['instagram']);
		update_post_meta($post_id, 'instagram', $new_instagram_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_linkedin_value the data you write in input will be saved to this variable.
 * @param $_POST['linkedin'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_linkedin_value
 */ 
add_action('save_post', 'save_linkedin_meta');
function save_linkedin_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['linkedin'])) {
		$new_linkedin_value = ($_POST['linkedin']);
		update_post_meta($post_id, 'linkedin', $new_linkedin_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_snapchat_value the data you write in input will be saved to this variable.
 * @param $_POST['snapchat'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_snapchat_value
 */ 
add_action('save_post', 'save_snapchat_meta');
function save_snapchat_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['snapchat'])) {
		$new_snapchat_value = ($_POST['snapchat']);
		update_post_meta($post_id, 'snapchat', $new_snapchat_value);
	}
}
