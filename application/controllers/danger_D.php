<?php
require(APPPATH.'libraries/REST_Controller.php');

class danger_D extends REST_Controller {

public function __construct(){
	parent::__construct();
	$this->load->model('danger_model');
}

	public function display_Dplace_get(){

	$data['da'] = $this->danger_model->show_Dplace();
$this->load->view('danger_view', $data);

}

function token_post()
{
	if(isset($_POST['token'])){	
	$token = $_POST['token'];

    	
    $deviceTokenRegistration = new Database();
    $deviceTokenRegistration->insertUserDeviceToken($token);

}

}

function servertofirebase_post()
{
	$this->load->library("sendnotification");
	if(isset($_POST['token']) && isset($_POST['message'])){
	
	$token = $_POST['token'];
	$message = array("FCM" => $_POST['message']);
	
	
	$jsonString = $this->sendnotification->sendPushNotificationToGCMSever($token, $message);

	$jsonObject = json_decode($jsonString);


}
}
public function delete_get()
{
	$id=$_GET["id"];
	$this->danger_model->delete_D($id);
	redirect(base_url()."danger_D/display_Dplace");
}



	public function insert_Dplace_get(){



$data = array(
                    'latidue' => $this->input->get('latidue'),
                    'longitude' => $this->input->get('longitude'),
                    'description' => $this->input->get('description'),
                    'danger_date' => $this->input->get('danger_date')
                );
/*$data = array(
'latidue' => 222.7,
'longitude' => 44.7,
'description' =>'haha'
	);*/
//var_dump($data);
 $this->danger_model->insert_D($data);
	}



public function update_Dplace_get(){

	$id=$_GET["id"];
	$data["place"]=$this->danger_model->get_place($id);
	$this->load->view("update_view",$data);
/*$this->load->model('danger_model');
$data = array(
'latidue' => 447.7,
'longitude' => 5667.7,
'description' =>'Voodoo'
	);
//var_dump($data);
 $this->danger_model->update_D($id,$data);
*/
	}

public function save_update_get()
{
	$id=$_GET["id"];
	$data = array(
                    'latidue' => $this->input->get('latidue'),
                    'longitude' => $this->input->get('longitude'),
                    'description' => $this->input->get('description'),
                );
	//var_dump($data);die();
	$this->danger_model->update_D($id,$data);
	redirect(base_url()."danger_D/display_Dplace");
}
public function delete_Dplace_get($id){
$this->load->model('danger_model');
//var_dump($data);
 $this->danger_model->delete_D($id);
	}
/*public function insert_Dplace(){

 $this->danger_model->insert_D('danger_place',$data);

	}*/










/*showe forms */

	public function show_insert_get(){


$this->load->view('insert_form');
}
//var_dump($data);
public function show_update_get(){

$this->load->view('update_view');
}
public function show_delete_get(){

$this->load->view('delete_view');
}
}
?>