<?php
require "Services/Twilio.php";

$user = $_REQUEST['contact_name'];

$twilio_id = "AC47a15f480c217de54ac1402b33b4576c";
$twilio_token = "bed328b198cf8e7cd2296f5ce599efd5";
$from= '+13233125041';
$to= '+15624135630';
$options = 'http://www.example.com/twilioTest/options.xml';

$twilio_client = new Services_Twilio($twilio_id, $twilio_token);

try {
	$twilio_call = $twilio_client->account->calls->create($from, $to, $options);
		echo "Start call to: ".$user."<br/>";
	} catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }


$twilio_sms = $twilio_client->account->sms_messages->create($from, $to, "$user, your order is ready!"
);

echo "Sent message to $user";
?>

 


