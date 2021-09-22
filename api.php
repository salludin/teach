<?php
/**
 * api
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap|bootloader
if($_GET['do'] == "oauth") {
	require('bootloader.php');
} else {
	require('bootstrap.php');
}

try {

	// initialize the return array
	$return = array();

	switch ($_GET['do']) {
		case 'oauth':
			// user access
			user_access();

			// valid inputs
			if(!isset($_GET['app_id']) || is_empty($_GET['app_id'])) {
				_error(404);
			}
			
			// oauth app
			$user->oauth_app($_GET['app_id']);
			break;

		case 'authorize':
			// valid inputs
			if(!isset($_GET['app_id']) || is_empty($_GET['app_id'])) {
				return_json( array('error' => true, 'message' => "Bad Request, invalid app_id") );
			}
			if(!isset($_GET['app_secret']) || is_empty($_GET['app_secret'])) {
				return_json( array('error' => true, 'message' => "Bad Request, invalid app_secret") );
			}
			if(!isset($_GET['auth_key']) || is_empty($_GET['auth_key'])) {
				return_json( array('error' => true, 'message' => "Bad Request, invalid auth_key") );
			}

			// authorize app
			$access_token = $user->authorize_app($_GET['app_id'], $_GET['app_secret'], $_GET['auth_key']);
			return_json( array('access_token' => $access_token) );
			break;

		case 'get_user_info':
			// valid inputs
			if(!isset($_GET['access_token']) || is_empty($_GET['access_token'])) {
				return_json( array('error' => true, 'message' => "Bad Request, invalid access_token") );
			}
			
			// access app
			$user_id = $user->access_app($_GET['access_token']);

			// get user
			$get_user = $db->query(sprintf("SELECT 
				user_id, 
				user_name, 
				user_email, 
				user_firstname, 
				user_lastname, 
				user_gender, 
				user_birthdate, 
				user_picture, 
				user_cover, 
				user_registered, 
				user_verified, 
				user_relationship, 
				user_biography,
				user_website
				FROM users WHERE user_id = %s", secure($user_id, 'int') )) or _error("SQL_ERROR_THROWEN");
			if($get_user->num_rows > 0) {
				while($user = $get_user->fetch_assoc()) {
					$user['profile_picture'] = get_picture($user['profile_picture'], $user['user_gender']);
					$user['profile_cover'] = $system['system_uploads']."/".$user['profile_cover'];
					$return['user_info'] = $user;
				}
			}

			// return & exit
			return_json($return);
			break;
			
		case 'sign_up':

			
			$jsondata = file_get_contents("php://input"); 
			$data = json_decode($jsondata, true);
            /* generate verification code */
        $email_verification_code = ($system['activation_enabled'] && $system['activation_type'] == "email")? get_hash_token() : 'null';
        $phone_verification_code = ($system['activation_enabled'] && $system['activation_type'] == "sms")? get_hash_key(6, true) : 'null';
        $password = "Teachin2021";
			// insert user
            $db->query(sprintf("INSERT INTO users (user_name, user_email, user_phone, user_password, user_firstname, user_lastname, user_gender, user_registered, user_email_verification_code, user_phone_verification_code, user_privacy_newsletter) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, '1')", secure($data['username']), secure($data['email']), secure($data['phone']), secure(_password_hash($password)), secure(ucwords($data['first_name'])), secure(ucwords($data['last_name'])), secure($data['gender']), secure($date), secure($email_verification_code), secure($phone_verification_code) )) or _error("SQL_ERROR_THROWEN");
        /* get user_id */
        $user_id = $db->insert_id;
        /* send activation */
        if($system['activation_enabled']) {
            if($system['activation_type'] == "email") {
                /* prepare activation email */
                $subject = __("Just one more step to get started on")." ".$system['system_title'];
                $body = get_email_template("activation_email", $subject, ["first_name" => $args['first_name'], "last_name" => $args['last_name'], "email_verification_code" => $email_verification_code]);
                /* send email */
                if(!_email($args['email'], $subject, $body['html'])) {
                    throw new Exception(__("Activation email could not be sent").", ".__("But you can login now"));
                }
            }
        }
        /* auto connect */
        $user->auto_friend($user_id);
        $user->auto_follow($user_id);
        $user->auto_like($user_id);
        $user->auto_join($user_id);
			// return & exit
			return_json( array('error' => false, 'message' => "success") );
			break;
		
		default:
			return_json( array('error' => true, 'message' => "Bad Request, invalid parameters") );
			break;
	}

} catch (Exception $e) {
	if($_GET['do'] == "oauth") {
		_error(__("Error"), $e->getMessage());
	} else {
		return_json( array('error' => true, 'message' => $e->getMessage()) );
	}
}

?>