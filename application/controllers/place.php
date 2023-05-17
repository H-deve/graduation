<?php
require(APPPATH.'libraries/REST_Controller.php');
class place extends REST_Controller {

public function __construct() {
parent::__construct();
$this->load->model("place_model");
}

public function Danger_get()
{
    //echo "llllll";
    $data=$this->place_model->get_danger_place();
     var_dump($data);die();
    $this->response($data,200);
   
    
  
}
public function newplace_get()
{
    //echo "llllll";
    $data=$this->place_model->get_newplace();
    // var_dump($data);die();
    $this->response($data,200);
   
    
  
}

public function index_get(){

	

$this->load->view('Map_view');



}
// Load view page
//public function index() {
//$this->load->view("view_form");
//}

// Fetch user data and convert data into json
public function data_submitted_post() {

// Store user submitted data in array
	//var_dump( $_POST["latidue_place"]);
	 $input_data = json_decode(trim(file_get_contents('php://input')));
		// var_dump($input_data);
		 $latidue = $input_data->latidue; 
		// var_dump($username);die();
		 $longitude =$input_data->longitude;
		  $description=$input_data->description;
$data = array(
'latidue' => $latidue,
'longitude' => $longitude,
'description' => $description,
);
//var_dump($data);
// Converting $data in json
$json_data['location_info'] = json_encode($data);

// Send json encoded data to model
$return = $this->place_model->insert_json_in_db($data);
if ($return == true) {
$data['result_msg'] = 'Json data successfully inserted into database !';
} else {
$data['result_msg'] = 'Please configure your database correctly';
}

// Load view to show message
//$this->load->view("view_form", $data);
//}
}
public function save_post(){

	$data = array(
'latidue' => $this->post('latidue'),

'longitude' => $this->post('longitude'),
'place_name' => $this->post('place_name'),
'type' => $this->post('type'),
'description' => $this->post('description'),
);

 $this->place_model->insert_in_db($data);

$data['message'] = 'Data Inserted Successfully';
redirect(base_url()."Map_co");
}


 public function update_post()
{
	
		
	$data = array(
                    'latidue' =>  $this->input->get('latidue'),
                    'longitude' =>  $this->input->get('longitude'),
                    'description' =>  $this->input->get('description'),
                    'danger_date' => $this->input->get('danger_date')
                );
                //var_dump($this->db);

                $this->db->insert('new_place',$data);
	
}

 public function delete_post($id)
{
	
		$this->load->model('place_model');
//var_dump($data);
 $this->place_model->delete_D($id);
 redirect(base_url()."Map_co");

}


}









?>
