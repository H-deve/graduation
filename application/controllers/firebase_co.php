<?php

/**
* 
*/
class firebase_co extends CI_Controller
{
	public function insertUserDevice(){


    $this->load->model('firebase_model');
$this->firebase_model->insertUserDeviceToken('firbase',$token);

	}


	public function getRegistered(){

$this->firebase_model->getRegisteredToken('firbase');

	}

	public function sendPushNotificationToGCMSever($token, $message){
		
		//include_once 'config.php';
		

if(isset($_POST['token']) && isset($_POST['message'])){
	
	$token = $_POST['token'];
	$message = array("FCM" => $_POST['message']);
	
	$serverObject = new SendNotification();	
	$jsonString = $serverObject->sendPushNotificationToGCMSever($token, $message);


	$jsonObject = json_decode($jsonString);
}
        $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';
		
		$fields = array(
            'to' => $token,
            'notification' => array('title' => 'Working Good', 'body' => 'That is all we want'),
            'data' => array('message' => $message)
        );
 
        $headers = array(
            'Authorization:key=' . AAAALZi18PA:APA91bHco_xKOBemaBoxAj0gzPbpWNmYnJ0Ft7GCmwBBetkH2KUk_MRocBMTqpeHKdn4qumeWNGhtfyZLwiGmv1ZaQWgbIboRQqPp-Kl0rOlD-ms5jCsDtOS243ugin46NDCBu7h0EK4,
            'Content-Type:application/json'
        );		
		$ch = curl_init();
 
        curl_setopt($ch, CURLOPT_URL, $path_to_firebase_cm); 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 ); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    
        $result = curl_exec($ch);
       
        curl_close($ch);

        return $result;
	}

public function admin_view_dash(){


$this->load->view('admin_dash');
	//$this->load->view('admin_fcm');
}


public function admin_view(){


//$this->load->view('admin_dash');
	$this->load->view('admin_fcm');
}
}
?>