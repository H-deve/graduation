<?php
class SendNotification{ 	
 	
	public function __construct(){		
	}
	
	public function sendPushNotificationToGCMSever($token, $message){
		
		include_once 'config.php';
		
        $path_to_firebase_cm = 'https://fcm.googleapis.com/fcm/send';
		
		$fields = array(
            'to' => $token,
            'notification' => array('title' => 'Working Good', 'body' => 'That is all we want'),
            'data' => array('message' => $message)
        );
 
        $headers = array(
            'Authorization:key=' . 'AAAALZi18PA:APA91bHco_xKOBemaBoxAj0gzPbpWNmYnJ0Ft7GCmwBBetkH2KUk_MRocBMTqpeHKdn4qumeWNGhtfyZLwiGmv1ZaQWgbIboRQqPp-Kl0rOlD-ms5jCsDtOS243ugin46NDCBu7h0EK4',
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
 }