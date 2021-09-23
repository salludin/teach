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

			// page header
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