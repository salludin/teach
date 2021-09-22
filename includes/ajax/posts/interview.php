<?php
/**
 * ajax -> users -> settings
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access


// settings
try {
	switch ($_GET['do']) {
		case 'interview':
        $user->request_interview($_POST);
			return_json( array('success' => true, 'message' => __("Your request already sent")) );
		break;
	}
}
catch (Exception $e) {
   echo "Error: " . $e->getMessage();
}