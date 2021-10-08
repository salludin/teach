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

    if($_GET['user_id'] !== 'NULL'){
    $get_profile = $db->query(sprintf("SELECT * FROM users WHERE user_id = %s", secure($_GET['user_id']))) or _error("SQL_ERROR_THROWEN");
    if($get_profile->num_rows == 0) {
        _error(404);
    }
    $profile = $get_profile->fetch_assoc();
    $user_email = $profile['user_email'];
    $user_phone = $profile['user_phone'];
    $fullname = $profile['user_firstname'] . ' ' . $profile['user_lastname']; 
    }else{
    $user_email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $nohp = $_POST['phone'];

     // kadang ada penulisan no hp 0811 239 345
     $nohp = str_replace(" ","",$nohp);
     // kadang ada penulisan no hp (0274) 778787
     $nohp = str_replace("(","",$nohp);
     // kadang ada penulisan no hp (0274) 778787
     $nohp = str_replace(")","",$nohp);
     // kadang ada penulisan no hp 0811.239.345
     $nohp = str_replace(".","",$nohp);
 
     // cek apakah no hp mengandung karakter + dan 0-9
     if(!preg_match('/[^+0-9]/',trim($nohp))){
         // cek apakah no hp karakter 1-3 adalah +62
         if(substr(trim($nohp), 0, 3)=='+62'){
             $user_phone = trim($nohp);
         }
         // cek apakah no hp karakter 1 adalah 0
         elseif(substr(trim($nohp), 0, 1)=='0'){
             $user_phone = '+62'.substr(trim($nohp), 1);
         }
     }
    }

    $get_event = $db->query(sprintf("SELECT * FROM events  WHERE event_id = %s", secure($_GET['event_id']) )) or _error("SQL_ERROR_THROWEN");
    if($get_event->num_rows == 0) {
        _error(404);
    }
    $event = $get_event->fetch_assoc();
    $event_name = $event['event_title'];
    $event_amount = $event['event_amount'];
    $custom_fields = $user->get_custom_fields( array("for" => "event", "get" => "profile", "node_id" => $event['event_id']));
    foreach ($custom_fields['Price'] as $custom_field) {
    $event_amount = $custom_field['value']+3650;
    }
    foreach ($custom_fields['Link Registration'] as $custom_field) {
    $event_link = $custom_field['value'];
    }
    $event_img = 'https://teachin.id/content/uploads/' . $event['event_cover'] . '';
    $event_date = $event['event_start_date'];
Xendit::setApiKey('xnd_development_yiVQcbbYvEgmbUE9reiJBmXbdm2r0SzjsE16lk3IykQrHbKw1JnToeNbzUwrT6i');
if ($user_phone !== ''){


$params = ['external_id' => $_GET['event_id'] . ' - ' . $_GET['user_id']. ' - ' . $event_name,
    'amount' => $event_amount,
    'payer_email' => $user_email,
    'description' => 'Pendaftaran Event ' . $event_name . '',
    'success_redirect_url' => $event_link,
    'customer' => [
        'given_names' => $fullname,
        'email' => $user_email,
        'mobile_number' => $user_phone
    ],
    'items' => [
            [
                'name' => $event_name,
                'price' => $event_amount,
                'quantity' => 1
            ]
        ],
    'fees' => [
            [
                'type' => 'ADMIN',
                'value' => 3650
            ]
        ]
];
}else{
    $params = ['external_id' => $_GET['event_id'] . ' - ' . $_GET['user_id']. ' - ' . $event_name,
    'amount' => $event_amount,
    'payer_email' => $user_email,
    'description' => 'Pendaftaran Event ' . $event_name . '',
    'success_redirect_url' => $event_link,
    'customer' => [
        'given_names' => $fullname,
        'email' => $user_email
    ],
    'items' => [
            [
                'name' => $event_name,
                'price' => $event_amount,
                'quantity' => 1
            ]
        ],
    'fees' => [
            [
                'type' => 'ADMIN',
                'value' => 3650
            ]
        ]
];
}
$createInvoice = \Xendit\Invoice::create($params);


$id = $createInvoice['id'];
$external_id = $createInvoice['external_id'];
$url = $createInvoice['invoice_url'];
$triggerOn_end = $createInvoice['expiry_date'];
$user_tz = 'Asia/Jakarta';
$schedule_date_end = new DateTime($triggerOn_end, new DateTimeZone($user_tz) );
$schedule_date_end->setTimeZone(new DateTimeZone('Asia/Jakarta'));
$end_date =  $schedule_date_end->format('Y-m-d H:i:s');
$triggerOn_created = $createInvoice['created'];
$schedule_date_created = new DateTime($triggerOn_created, new DateTimeZone($user_tz) );
$schedule_date_created->setTimeZone(new DateTimeZone('Asia/Jakarta'));
$created =  $schedule_date_created->format('Y-m-d H:i:s');
$Name = $createInvoice['customer']['given_names'];
$item_name = $createInvoice['items']['0']['name'];
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
    'variables' => array(
        'Name' => $Name,
        'end_date' => $end_date,
        'order_id' => $external_id,
        'order_date' => $created,
        'item.img' => $event_img,
        'item.name' => $item_name,
        'date' => $event_date,
        'item.price' => $event_amount,
        'link' => $url,
        'total' => $event_amount,

    )
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