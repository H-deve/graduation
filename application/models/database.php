<?php
/**
* 
*/
class database extends CI_Model
{
	
	
	public function insertUserDeviceToken($token){

		$sql = "insert into firebase(token) values ('$token')";	
		$data=$this->db->query($sql)->result();
			
		//$success = mysqli_query($com->getDb(), $sql);
		if($sql){
			echo json_encode(array('token' => 1), JSON_PRETTY_PRINT);
		}else{
			echo json_encode(array('token' => 0), JSON_PRETTY_PRINT);
		}	
		return $data[0];
	}
	
	public function getRegisteredToken(){
		
		$sql = "select * from firebase order by id desc limit 1";
		$data=$this->db->query($sql)->result();
		//$result = mysqli_query($com->getDb(), $sql);
		$row = mysqli_fetch_row($result);
		$token = $row[1];
		return $token;
	}	

}




?>