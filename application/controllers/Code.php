<?php
       
       require_once __DIR__ . '/../../vendor/autoload.php';
use Twilio\Rest\Client;
       
       
class Code extends MY_controller{


    public function __construct()
    {
        parent::__construct();
    }


    public function index(){

// Twilio credentials
$account_sid = 'ACd7bae50ae6127f4e09d1a77c95ee7633';
$auth_token = '11c0c110df830cd16903ab842187b60e';

$twilio = new Client($account_sid, $auth_token);

// Array of contacts to send messages to
$contacts = [
    '+919662597596',
    '+918849967628',
    // Add more contacts here
];

// Message to send
$message = 'Hello, this is a bulk message!';

foreach ($contacts as $contact) {
    try {
        // Send message
        $twilio->messages->create($contact, [
            'from' => '+13343260363',
            'body' => $message,
        ]);
        echo "Message sent to $contact\n";
    } catch (Exception $e) {
        echo "Failed to send message to $contact: {$e->getMessage()}\n";
    }
}

    }
}