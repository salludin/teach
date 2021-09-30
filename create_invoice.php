<?php

/**
 * InvoiceExample.php
 * php version 7.2.0
 *
 * @category Example
 * @package  Xendit/Examples
 * @author   Ellen <ellen@xendit.co>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://api.xendit.co
 */

use Xendit\Xendit;

require 'vendor/autoload.php';
require('bootloader.php');
    $get_profile = $db->query(sprintf("SELECT * FROM users WHERE user_id = %s", secure($_GET['user_id']))) or _error("SQL_ERROR_THROWEN");
    if($get_profile->num_rows == 0) {
        _error(404);
    }
    $profile = $get_profile->fetch_assoc();
    $user_email = $profile['user_email'];
    $user_phone = $profile['user_phone'];
    $fullname = $profile['user_firstname'] . ' ' . $profile['user_lastname'];
    $get_event = $db->query(sprintf("SELECT * FROM events  WHERE event_id = %s", secure($_GET['event_id']) )) or _error("SQL_ERROR_THROWEN");
    if($get_event->num_rows == 0) {
        _error(404);
    }
    $event = $get_event->fetch_assoc();
    $event_name = $event['event_title'];
    $event_amount = $event['event_amount'];
Xendit::setApiKey('xnd_development_yiVQcbbYvEgmbUE9reiJBmXbdm2r0SzjsE16lk3IykQrHbKw1JnToeNbzUwrT6i');

$params = ['external_id' => $_GET['event_id'] . ' - ' . $_GET['user_id']. ' - ' . $event_name,
    'payer_email' => $user_email,
    'customer' => [
        'given_names' => $fullname,
        'email' => $user_email,
        'mobile_number' => $user_phone
    ],
    'items' => [
        'name' => $event_name,
        'quantity' => 1,
        'price' => $event_amount
    ],
    'fees' => [
        'type' => 'ADMIN',
        'value' => 3650
    ],
    'description' => 'Pendaftaran Event ' . $event_name . '',
    'amount' => $event_amount
];

$createInvoice = \Xendit\Invoice::create($params);


$id = $createInvoice['id'];
$external_id = $createInvoice['external_id'];
$url = $createInvoice['invoice_url'];
$end_date = $createInvoice['expiry_date'];
$Name = $createInvoice['given_names'];
$item_name = $createInvoice['name'];
$subject = 'Informasi Pembayaran Event ' . $event_name . '';

//$body = get_email_template("notification_payment_email", $subject, ["first_name" => $profile['first_name'], "last_name" => $profile['last_name'], "email_verification_code" => $url]);
                /* send email */
//$send_email = _email($user_email, $subject, $body['html'], $body['html']);

// integrasi sendpulse //

require 'sendpulse/vendor/autoload.php';

use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;

define('API_USER_ID', 'ff9c835aa7da718ad006ee4bc029ef92');
define('API_SECRET', 'bf6cc366d6c2e01c837ff517c8a19cfb');
define('PATH_TO_ATTACH_FILE', __FILE__);

$SPApiClient = new ApiClient(API_USER_ID, API_SECRET, new FileStorage());

$email = array(
    'subject' => $subject,
    'template' => array(
        'id' => '662224',
    ),
    'variables' => array(
        'Name' => $Name,
        'end_date' => $end_date,
        'order_id' => $external_id,
        'item.name' => $item_name,
        'item.price' => $event_amount,

    ),
    'from' => array(
        'name' => 'Teachin.id',
        'email' => 'admin@teachin.id',
    ),
    'to' => array(
        array(
            'email' => $user_email,
        ),
    ),
);
var_dump($SPApiClient->smtpSendMail($email));


header('Location: '.$url);