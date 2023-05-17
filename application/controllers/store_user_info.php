<?php
require(APPPATH.'libraries/REST_Controller.php');
class store_user_info extends REST_Controller {

public function __construct() {
parent::__construct();
$this->load->model("store_user_model");
}

// Load view page
//public function index() {
//$this->load->view("view_form");
//}

// Fetch user data and convert data into json
public function data_submitted_post() {

// Store user submitted data in array
$data = array(
//'id' => $this->input->post('id_user'),
'username' => $this->input->post('username'),
'password' => $this->input->post('password'),
'F_name' => $this->input->post('F_name'),
'L_name'=>$this->input->post('L_name'),
'Email'=>$this->input->post('Email'),
'number_of_follower'=>$this->input->post('number_of_follower'),

);

// Converting $data in json
$json_data['user_info'] = json_encode($data);

// Send json encoded data to model
$return = $this->store_user_model->insert_json_in_db($json_data);
if ($return == true) {
$data['result_msg'] = 'Json data successfully inserted into database !';
} else {
$data['result_msg'] = 'Please configure your database correctly';
}

// Load view to show message
//$this->load->view("view_form", $data);
//}

}


}


?>