<?php 
// register custom post type for teams.
function create_post_type() {
	
	// define labels for custom post type
	$labels = array(
		'name' => 'Teamet',
		'singular_name' => 'Team',
		'add_new' => 'Ny medlem',
		'add_new_item' => 'Lägg Till Ny Medlem',
		'edit_item' => 'Redigera team',
		'new_item' => 'Ny Medlem',
		'view_item' => 'View team',
		'search_items' => 'Search teams',
		'not_found' => 'No teams Found',
		'not_found_in_trash' => 'No team found in Trash',
	);
	$args = array (
		'labels' => $labels,
		'public' => true,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
		),
		'taxonomies' => array(
			'post_tag',
		),
		
	);
	register_post_type('team', $args);
}
add_action('init', 'create_post_type');

/**
 * This function creates a metabox to the custom post type
 * @return custom post type with team details
 */
function create_details_meta_box() {
	add_meta_box(
		'details_metabox',
		'Medlems info:',
		'create_details_metabox',
		'Team',
		'normal',
		'default'
	);
}

/**
 * This function will add the metabox to the custom post type
 * @return custom post type with team details
 */ 
function details_metabox($post) {
	echo 'Infon skrivs in här';
}
add_action('add_meta_boxes', 'create_details_meta_box');

/**
 * This function will create the output of the metabox
 * @return input-field in the metabox.
 */ 
function create_details_metabox($post) {
?>
	<form action="" method="post">
<?php
		// add nonce for security
		wp_nonce_field('cecilia_metabox_nonce', 'cecilia_nonce');
		// retrive the metadata values if they exist
		$firstname = get_post_meta($post->ID, 'firstname', true); 
		$lastname = get_post_meta($post->ID, 'lastname', true); 
		$title = get_post_meta($post->ID, 'title', true); 
		$email = get_post_meta($post->ID, 'email', true); 
		$tel = get_post_meta($post->ID, 'tel', true); 
		
		?>
		<p>
			<?php echo 'Förnamn:' ?> <br/>
			<input type="text" name="firstname" value="<?php echo esc_attr( $firstname ) ; ?>" placeholder="Cecilia" /> <br/>
		</p>
		<p>
			<?php echo 'Efternamn:' ?> <br/>
			<input type="text" name="lastname" value="<?php echo esc_attr( $lastname ); ?>" placeholder="Fredriksson" />
		</p>
		<p>
			<?php echo 'Titel:'?> <br/>
			<input type="text" name="title" value="<?php echo esc_attr( $title ); ?>" placeholder="Webbutvecklare" />
		</p>
		<p>
			<?php echo 'Epost-address:' ?> <br/>
			<input type="text" name="email" value="<?php echo esc_attr( $email ); ?>" placeholder="hej@hej.se" />
		</p>
		<p>
			<?php echo 'Tel nr:' ?> <br/>
			<input type="text" name="tel" value="<?php echo esc_attr( $tel ); ?>" placeholder="072 123 123 123" />
		</p>
	</form>
<?php 
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_firstname_value the data you write in input will be saved to this variable.
 * @param $_POST['firstname'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_firstname_value
 */ 
add_action('save_post', 'save_firstname_meta');
function save_firstname_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['firstname'])) {
		$new_firstname_value = ($_POST['firstname']);
		update_post_meta($post_id, 'firstname', $new_firstname_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_lastname_value the data you write in input will be saved to this variable.
 * @param $_POST['lastname'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_lastname_value
 */ 
add_action('save_post', 'save_lastname_meta');
function save_lastname_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['lastname'])) {
		$new_lastname_value = ($_POST['lastname']);
		update_post_meta($post_id, 'lastname', $new_lastname_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_title_value the data you write in input will be saved to this variable.
 * @param $_POST['title'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_title_value
 */ 
add_action('save_post', 'save_title_meta');
function save_title_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['title'])) {
		$new_title_value = ($_POST['title']);
		update_post_meta($post_id, 'title', $new_title_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_email_value the data you write in input will be saved to this variable.
 * @param $_POST['email'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_email_value
 */ 
add_action('save_post', 'save_email_meta');
function save_email_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['email'])) {
		$new_email_value = ($_POST['email']);
		update_post_meta($post_id, 'email', $new_email_value);
	}
}

/**
 * This function will save the data from the input field into a variable
 * @param var $new_tel_value the data you write in input will be saved to this variable.
 * @param $_POST['tel'] value of inputfield.
 * @return saves the information you type into input-field in a variable $new_tel_value
 */ 
add_action('save_post', 'save_tel_meta');
function save_tel_meta( $post_id ) {
	// if the nonce isn't verified, prteam saving
	if(!isset($_POST['cecilia_nonce']) ||
		!wp_verify_nonce($_POST['cecilia_nonce'],
		'cecilia_metabox_nonce')) return;
	if(isset($_POST['tel'])) {
		$new_tel_value = ($_POST['tel']);
		update_post_meta($post_id, 'tel', $new_tel_value);
	}
}
