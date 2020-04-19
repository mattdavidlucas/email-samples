<?php

include 'dmc.php';

$soap_url = 'https://sslc.teradatadmc.com/techservices/api/soap/v2/?wsdl';
$soap_settings = [
    'login' => '',
    'password' => '',
];
$fault_trace = false;
$benchmark = true;

$dmc = new DMC( $soap_url, $soap_settings, $fault_trace, $benchmark );

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailaddress = $_POST['email'];
$phone = $_POST['phone'];

$messageID = 4000028870;

$response = $dmc->get_user_by_email($emailaddress);
$userID = $response->id;

$dmc->send_single_message( $messageID, $userID );

print_r($response);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teratitan</title>
</head>
<body>

<h1>Thank you!</h1>

<p><?php echo $userID; ?></p>
	
</body>
</html>