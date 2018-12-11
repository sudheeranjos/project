<?php

class User_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function select($id){
		$this->db->where("id",$id);
		$query = $this->db->get("user");
	          $data = $query->result();
		if( !empty($data) ){
			return $data;
		}else{
			return '';		
		}
	}	
	
	public function insert($data){
		if( $this->db->insert("user", $data) ){
			return true;
		}
	}
	
	public function update($id,$data){
		$this->db->set($data);
		$this->db->where("id", $id);
		if( $this->db->update("user", $data) ){
			return true;		
		}
	}
	
	public function delete($id){
		if ($this->db->delete("user", "id = ".$id)) {
			return true;
		} 
	}
	
}

?>
