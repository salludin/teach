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
	$total = ("SELECT job_vacancies.id, job_vacancies.job_title, job_vacancies.id_company,companies.company_name,companies.picture, province_name, job_vacancies.create_date
                FROM job_vacancies LEFT JOIN  companies ON companies.id = job_vacancies.id_company LEFT JOIN  countries ON countries.id = companies.id_country LEFT JOIN  provinces ON provinces.id = companies.id_province ORDER BY create_date DESC") or _error("SQL_ERROR_THROWEN");

	// get posts
	$rows = array();
	$type = JobPosting;
	$get_rows = $db->query("SELECT job_vacancies.id as id_job, job_vacancies.*, grade_levels.grade, companies.company_name, companies.website, companies.address,companies.postal_code,companies.picture, job_title, about_us
                FROM job_vacancies JOIN companies
                ON companies.id = job_vacancies.id_company JOIN grade_levels

                ON grade_levels.id = job_vacancies.id_grade") or _error("SQL_ERROR_THROWEN");
        if($get_rows->num_rows > 0) {
            while($row = $get_rows->fetch_assoc()) {
                $id = $row['id_job'];

                $rows[] = array(
                    "@type" => $type,
                    "datePosted" => $row['create_date'],
                    "description" => $row['about_us'],
                    "employmentType" => $row['employment_type'],
                    "qualifications" => $row['qualification'],
                    "responsibilities" => $row['job_description'],
                    "hiringOrganization" => (
                        array("@type" => Organization,
                                "name" => $row['company_name'],
                                "sameAs" => $row['website']
                        
                        )),
                    "jobLocation" => (
                        array("@type" => Place,
                                "address" => (
                                array("@type" => PostalAddress,
                                "streetAddress" => $row['address'],
                                "postalCode" => $row['postal_code'],
                                "addressCountry" => ID
                        ))
                        
                        )),
                     "title" => $row['job_title'],
                     "url" => "https://teachin.id/job/$id"
                    
                    );
            }
        }
	$specializations = $company->get_specializations();
	$grades = $company->get_grades();
	$provinces = $company->get_provinces();
	/* assign variables */
	$smarty->assign('specializations', $specializations);
	$smarty->assign('grades', $grades);
	$smarty->assign('provinces', $provinces);
	/* assign variables */
	$smarty->assign('rows', $rows);
	$smarty->assign('view', $_GET['view']);


	return_json($rows);

} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>