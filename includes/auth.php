<?php

add_action('wp_ajax_auth', 'nbAuth');
add_action('wp_ajax_nopriv_auth', 'nbAuth');

add_action('wp_ajax_auth_reset_password', 'nbAuthResetPassword');
add_action('wp_ajax_nopriv_auth_reset_password', 'nbAuthResetPassword');

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
	
	wp_send_json([ 'status' => 'success' , 'response' => $user_signon ]);
}

function nbAuthResetPassword() {
	if ( ! email_exists( $_POST['email'] ) ) {
        wp_send_json($response = [ 'status' => 'failure' , 'message' => 'Email ID Doesn\'t exist' ]);
    }

    // Trigger WordPress password reset email
    $user = get_user_by('email', $_POST['email']);
    if( $user ) {
        $reset = retrieve_password( $user->user_login );
        if ( is_wp_error( $reset ) )
			wp_send_json($response = [ 'status' => 'failure' , 'message' => $reset->get_error_message() ]);
        else
			wp_send_json($response = [ 'status' => 'success' , 'message' => 'Password reset email sent successfully to '.$_POST['email'].'.' ]);
    }
	
	wp_send_json($response = [ 'status' => 'success' ]);
}