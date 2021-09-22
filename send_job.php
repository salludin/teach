<?php
header('Content-Type: application/json');
require_once 'google-api-php-client/vendor/autoload.php';

$client = new Google_Client();

// service_account_file.json is the private key that you created for your service account.
$client->setAuthConfig('teachin-706-f690b3cab67f.json');
$client->addScope('https://www.googleapis.com/auth/indexing');

// Get a Guzzle HTTP Client
$httpClient = $client->authorize();
$endpoint = 'https://indexing.googleapis.com/v3/urlNotifications:publish';

// Define contents here. The structure of the content is described in the next step.
$content = '{
  "url": "https://teachin.id/job-api",
  "type": "URL_UPDATED"
}';

$response = $httpClient->POST($endpoint,[ 'body' => $content ]);
$status_code = $response->getStatusCode();
echo $status_code
?>


