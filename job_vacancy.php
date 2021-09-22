<?php
/**
 * market
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('bootstrap.php');



// page header
page_header($system['system_title'].' - '.__("Job Vacancies"));

try {
    switch ($_GET['view']) {
        case 'find':
			// page header
			page_header(__("Find Jobs"));
			if(!isset($_POST['submit'])) {
				redirect('/job-vacancies');
			}
			$jobs = $user->search_jobs($_POST['query'], $_POST['id_specialization'], $_POST['id_grade'], $_POST['id_province']);
			$smarty->assign('jobs', $jobs);
			break;

    }
	// get view content
	$_GET['view'] = (isset($_GET['view']))? $_GET['view'] : '';
	//var_dump($_GET);exit;
	// get products

	$params['selected_page'] = ( (int) $_GET['page'] == 0) ? 1 : $_GET['page'];
	$total = ("SELECT job_vacancies.id, job_vacancies.job_title, job_vacancies.id_company,companies.company_name,companies.picture, city.name as province_name, job_vacancies.create_date
                FROM job_vacancies LEFT JOIN  companies ON companies.id = job_vacancies.id_company LEFT JOIN city ON city.id = companies.id_city LEFT JOIN  countries ON countries.id = companies.id_country ORDER BY create_date DESC") or _error("SQL_ERROR_THROWEN");

	// get posts
	$rows = array();
	$get_rows = $db->query("SELECT job_vacancies.id, job_vacancies.job_title, users.user_picture as picture, job_vacancies.id_company,companies.company_name, city.name as province_name, job_vacancies.create_date
                FROM job_vacancies LEFT JOIN  users ON users.user_id = job_vacancies.id_company LEFT JOIN companies ON companies.id = job_vacancies.id_company LEFT JOIN city ON city.id = companies.id_city WHERE users.user_picture IS NOT NULL ORDER BY create_date DESC") or _error("SQL_ERROR_THROWEN");
        if($get_rows->num_rows > 0) {
            while($row = $get_rows->fetch_assoc()) {
                $rows[] = $row;
            }
        }
	$specializations = $user->get_specializations();
	$grades = $user->get_grades();
	/*$provinces = $user->get_provinces();/*
	/* assign variables */
	$smarty->assign('specializations', $specializations);
	$smarty->assign('grades', $grades);
	/*$smarty->assign('provinces', $provinces);/*
	/* assign variables */
	$smarty->assign('rows', $rows);
	$smarty->assign('view', $_GET['view']);

} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}
// page footer
page_footer("job_vacancy");

?>