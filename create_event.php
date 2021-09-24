<?php
/**
 * blogs
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');



// user access
if(!$system['system_public']) {
	user_access();
}

try {

	// get view content
	switch ($_GET['view']) {
		case 'new':
			// user access
			user_access();
			// get custom fields
			$smarty->assign('custom_fields', $user->get_custom_fields( array("for" => "event") ));
			// page header
			// get events categories
			$categories = $user->get_events_categories();
			/* assign variables */
			$smarty->assign('categories', $categories);	
			page_header(__("Create New Event"));
			break;

		default:
			_error(404);
			break;
	}
	/* assign variables */
	$smarty->assign('view', $_GET['view']);

	
} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("create_event");

?>