<?php
/**
 * static
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('bootstrap.php');

// valid inputs
if(!isset($_GET['url'])) {
	_error(404);
}

try {
$id = $user->_data['user_id'];
$id_job = $_GET['url'];
	// get static page
	$get_job = $db->query(sprintf(" SELECT job_vacancies.id as id_job, job_vacancies.*, grade_levels.grade, user_firstname,user_picture as picture, job_title, user_biography as about_us
                FROM job_vacancies JOIN users
                ON users.user_id = job_vacancies.id_company JOIN grade_levels ON grade_levels.id = job_vacancies.id_grade AND job_vacancies.id = %s", secure($_GET['url']) )) or _error("SQL_ERROR_THROWEN");
	if($get_job->num_rows == 0) {
		_error(404);
	}
	$job = $get_job->fetch_assoc();
	$job['job_description'] = nl2br($job['job_description']);
	$job['job_description'] = $smarty->fetch('string:'.$job['job_description']);
	
	$job['qualification'] = nl2br($job['qualification']);
	$job['qualification'] = $smarty->fetch('string:'.$job['qualification']);
	if ($user->_logged_in) {
    $get_applier = $db->query("SELECT *
                FROM appliers_job WHERE id_user = $id AND id_job_vacancy = $id_job") or _error("SQL_ERROR");
    $applier = $get_applier->fetch_assoc();	    
	} 
	/* assign variables */
	$smarty->assign('job', $job);
	$smarty->assign('applier', $applier);

} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page header
page_header($system['system_title'].' - '.$job['job_title']);

// page footer
page_footer("job");

?>