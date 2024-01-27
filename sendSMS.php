<?php

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

$message = $_POST["message"];
$phoneNumber = $_POST["phoneNumber"];

$apiURL = "8gxxn1.api.infobip.com";
$apiKey = "3a4acfe8750275120b14a483e5f0ccef-d0045a22-1b2d-47a8-a717-6aee6266c975";

$configuration = new Configuration(host: $apiURL , apiKey : $apiKey);
$api = new SmsApi(config: $configuration);

$destination = new SmsDestination(to:$phoneNumber);

$theMessage = new SmsTextualMessage(
    destinations : [$destination],
    text : $message,
    from : "Syntax Flow"
);
//send SMS Message 
$request = new SmsAdvancedTextualRequest(messages : [$theMessage]);
$reponse = $api->sendSmsMessage($request);

echo 'SMS Message Sent Succes';



?>