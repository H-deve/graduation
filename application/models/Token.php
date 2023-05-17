<?php

/**
* 
*/
class Token extends CI_Model
{
	
	function __construct(argument)
	{
		
     if(isset($_POST['token'])){	
	 $token = $_POST['token'];

    //include_once 'database.php';	
    $deviceTokenRegistration = new Database();
    $deviceTokenRegistration->insertUserDeviceToken($token);



			}
}


?>