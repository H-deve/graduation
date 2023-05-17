<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
 
class Map_co extends CI_Controller{


	public function __construct(){
	parent::__construct();
	$this->load->model('place_model');
}


    public function index(){
    	$data['da'] = $this->place_model->show_new_place();

$this->load->view('places_view', $data);

    }





public function update_Dplace(){

	$id=$_GET["id"];
	$data["da"]=$this->place_model->get_new_place($id);
	$this->load->view("update_new_place",$data);
}

    
	//$this->load->model('show_lat',$data);
public function save_update()
{
	$id=$_GET["id"];
	$data = array(
		            'place_name' => $this->input->get('place_name'),
		            'type'=> $this->input->get('type'),
                    'latidue' => $this->input->get('latidue'),
                    'longitude' => $this->input->get('longitude'),
                    'description' => $this->input->get('description'),
                );
	//var_dump($data);die();
	$this->place_model->update_D($id,$data);
	redirect(base_url()."Map_co/index",$data);
}
public function delete()
{
	$id=$_GET["id"];
	$this->place_model->delete_D($id);
	redirect(base_url()."Map_co");
}

public function delete_Dplace($id){
$this->load->model('place_model');
//var_dump($data);
 $this->danger_model->delete_D($id);
	}
public function show_placse(){


$this->load->view('places_view');

}

public function show_update_new_place(){


$this->load->view('update_new_place');
}

public function show_insert(){


$this->load->view('insert_form');
}
//var_dump($data);
public function show_update(){

$this->load->view('update_view');
}



  
}

?>