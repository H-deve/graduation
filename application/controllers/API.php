<?php
/**
* 
*/
require(APPPATH.'libraries/REST_Controller.php');
class API extends REST_Controller
{

	public function __construct() {
parent::__construct();
$this->load->model("database");
	$this->load->libraries("SendNotification");

}
	function token_post()
	{
		
		



	if(isset($_POST['token'])){	
	$token = $_POST['token'];

    	
    $deviceTokenRegistration = $this->load->model('database');
    $deviceTokenRegistration->insertUserDeviceToken($token);

}

}
function servertofirebase_post(){

/*$this->load->view('Admin');*/

if(isset($_POST['token']) && isset($_POST['message'])){
	
	$token = $_POST['token'];
	$message = array("FCM" => $_POST['message']);
	
	$serverObject = new SendNotification();	
	$jsonString = $serverObject->sendPushNotificationToGCMSever($token, $message);

	$jsonObject = json_decode($jsonString);



}


}


}


?>