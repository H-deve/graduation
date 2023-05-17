<?php

class place_model extends CI_Model {


function __construct() {
parent::__construct();

}
public function get_danger_place()
{
    $query="select * from danger_place ";
    $data=$this->db->query($query)->result();
    return $data;
}

public function get_newplace()
{
    $query="select * from new_place ";
    $data=$this->db->query($query)->result();
    return $data;
}


public function show_new_place(){

$query = $this->db->get('new_place');
return $query->result();


}


public function delete()
{
    $id=$_GET["id"];
    $this->place_model->delete_D($id);
    redirect(base_url()."Map_co");
}

// Insert json data into database
public function insert_json_in_db($data) {
$this->db->insert('danger_place', $data);
if ($this->db->affected_rows() > 0) {
   // var_dump('amer');
return true;
} else {
   // var_dump('ffffff');
return false;
}
}

public function update_D($id,$data){
$this->db->where('id',$id);
    $query = $this->db->update('new_place',$data);

}

public function delete_D($id){
$this->db->where('id',$id);
    $query = $this->db->delete('new_place');

}

public function get_new_place($id)
{
    $query="select * from new_place where id =".$id;
    $data=$this->db->query($query)->result();
    return $data[0];
}

public function insert_in_db($data) {

$this->db->insert('new_place', $data);
if ($this->db->affected_rows() > 0) {
return true;
} else {
return false;
}

}

    
}
?>