<?php 


require_once __DIR__ . '/../../vendor/autoload.php';

use Twilio\Rest\Client;

class W_log extends MY_controller{
    
    
    public function __construct(){
        parent::__construct();
    }
    
}

$sid    = "ACd7bae50ae6127f4e09d1a77c95ee7633";
$token  = "11c0c110df830cd16903ab842187b60e";
$twilio = new Client($sid, $token);

$message = $twilio->messages
->create("whatsapp:+919638515686", // to
    array(
        "from" => "whatsapp:+919662597596",
        "body" => "hwllo unnati"
    )
    );

print($message->sid);

?>