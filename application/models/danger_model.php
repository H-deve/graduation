<?php 


class danger_model extends CI_Model {

public function show_Dplace(){

$query = $this->db->get('danger_place');
return $query->result();

}

public function insert_D($data){

	$query = $this->db->insert('danger_place', $data);

}

public function update_D($id,$data){
$this->db->where('id',$id);
	$query = $this->db->update('danger_place',$data);

}

public function delete_D($id){
$this->db->where('id',$id);
	$query = $this->db->delete('danger_place');

}
public function get_place($id)
{
	$query="select * from danger_place where id =".$id;
	$data=$this->db->query($query)->result();
	return $data[0];
}
}
?>