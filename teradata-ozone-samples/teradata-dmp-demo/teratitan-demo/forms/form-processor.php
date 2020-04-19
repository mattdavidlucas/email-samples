<?php  

// Redirect to Thank You Page
$redirectURL = $_POST['redirect'];
header("Location: " . $redirectURL);

// Form Data
$firstName    = $_POST['first-name'];
$lastName     = $_POST['last-name'];
$emailAddress = $_POST['email-address'];
$phoneNumber  = $_POST['phone-number'];

// Authentication
$auth = '';

// Header
$headers = array(
	"Accept: application/json",
	"Content-Type: application/json"
);

// Base REST URL
$restURL = 'https://sslc.teradatadmc.com/techservices/api/rest/v6/';

// Request Paths
$createUserPath = 'user/create';
$getUserPath    = 'user/getByEmail';
$updateUserPath = 'user/updateProfile';
$messagePath    = 'message/sendSingle';

// Recipient ID
$recipientId;

/*
** Get User
*/
$getUserURL = $restURL . $getUserPath . '?email=' . $emailAddress;

$getUser = curl_init();
curl_setopt($getUser, CURLOPT_URL, $getUserURL);
curl_setopt($getUser, CURLOPT_HTTPHEADER, $headers);
curl_setopt($getUser, CURLOPT_USERPWD, $auth);
curl_setopt($getUser, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($getUser, CURLOPT_RETURNTRANSFER, true);

$response    = curl_exec($getUser);
$content     = json_decode($response, true);
$recipientId = $content["id"];

curl_close($getUser);

if ($recipientId == NULL) {
	/*
	** Create User
	*/
	$createUserURL  = $restURL . $createUserPath . '?email=' . $emailAddress . '&mobileNumber=' . $phoneNumber;
	$createUserData = '[{"name": "user.FirstName", "value": "' . $firstName .'"},{"name": "user.LastName", "value": "' . $lastName . '"}]';

	$createUser = curl_init();
	curl_setopt($createUser, CURLOPT_URL, $createUserURL);
	curl_setopt($createUser, CURLOPT_POST, true);
	curl_setopt($createUser, CURLOPT_POSTFIELDS, $createUserData);
	curl_setopt($createUser, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($createUser, CURLOPT_USERPWD, $auth);
	curl_setopt($createUser, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($createUser, CURLOPT_RETURNTRANSFER, true);

	$response    = curl_exec($createUser);
	$content     = json_decode($response, true);
	$recipientId = $content["id"];

	curl_close($createUser);
} else {
	/*
	** Update Profile
	*/
	$updateUserURL  = $restURL . $updateUserPath . '?userId=' . $recipientId;
	$updateUserData = '[{"name": "user.FirstName", "value": "' . $firstName .'"},{"name": "user.LastName", "value": "' . $lastName .'"},{"name": "user.MobileNumber", "value": "' . $phoneNumber .'"}]';

	$updateUser = curl_init();
	curl_setopt($updateUser, CURLOPT_URL, $updateUserURL);
	curl_setopt($updateUser, CURLOPT_POST, true);
	curl_setopt($updateUser, CURLOPT_POSTFIELDS, $updateUserData);
	curl_setopt($updateUser, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($updateUser, CURLOPT_USERPWD, $auth);
	curl_setopt($updateUser, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($updateUser, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($updateUser);
	$content  = json_decode($response, true);

	curl_close($updateUser);	
}

echo $recipientId;

/*
** Send HTML Message
*/
$messageID = 4000060098;

$sendMsgURL = $restURL . $messagePath . '?messageId=' . $messageID . '&recipientId=' . $recipientId;
$sendMsgData = '{"parameters":[{"name":"name","value":"null"}]}';

$sendMsg = curl_init();
curl_setopt($sendMsg, CURLOPT_URL, $sendMsgURL);
curl_setopt($sendMsg, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($sendMsg, CURLOPT_POSTFIELDS, $sendMsgData);
curl_setopt($sendMsg, CURLOPT_HTTPHEADER, $headers);
curl_setopt($sendMsg, CURLOPT_USERPWD, $auth);
curl_setopt($sendMsg, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($sendMsg, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($sendMsg);
$content  = json_decode($response, true);

curl_close($sendMsg);

/*
** Send SMS Message
*/
$smsMessageID = 4000060542;

$sendSMSURL  = $restURL . $messagePath . '?messageId=' . $smsMessageID . '&recipientId=' . $recipientId;
$sendSMSData = '{"parameters":[{"name":"name","value":"null"}]}';

echo $sendSMSURL;

$sendSMS = curl_init();
curl_setopt($sendSMS, CURLOPT_URL, $sendSMSURL);
curl_setopt($sendSMS, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($sendSMS, CURLOPT_POSTFIELDS, $sendSMSData);
curl_setopt($sendSMS, CURLOPT_HTTPHEADER, $headers);
curl_setopt($sendSMS, CURLOPT_USERPWD, $auth);
curl_setopt($sendSMS, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($sendSMS, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($sendSMS);
$content  = json_decode($response, true);

curl_close($sendSMS);

?>