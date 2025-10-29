<?php

add_action('wp_ajax_auth', 'nbAuth');
add_action('wp_ajax_nopriv_auth', 'nbAuth');

function nbAuth() {
	$info = array();
    $info['user_login'] = sanitize_text_field($_POST['email']);
    $info['user_password'] = sanitize_text_field($_POST['password']);
    $info['remember'] = true;

	$user_signon = wp_signon($info, false);

	wp_set_auth_cookie($user_signon->ID, true);
	wp_set_current_user($user_signon->ID);
	// wp_redirect(home_url());
	do_action('wp_login', 'test1', $user->data);
	
	wp_send_json($response = [ 'status' => 'success' , 'response' => $user_signon ]);
}