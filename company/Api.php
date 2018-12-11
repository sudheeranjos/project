<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Api extends REST_Controller{
	
	public function __construct() { 
		parent::__construct(); 
		$this->load->database();
		$this->load->model('User_Model');		
	}

	function user_get(){

		$id = $this->get('id');

		if( !$id ){
			$this->response("No user id specified", 400);
			exit;
		}

		$result = $this->User_Model->select($id);

		if( $result ){
			$this->response($result, 200);
			exit;
		}else{
			$this->response("Invalid user id", 404);
			exit;
		}
		
	}

	function user_post(){

		$name = $this->post('name');
		$mac_address = $this->post('mac_address');
		$ip_address = $this->post('ip_address');

		$data = array('name'=>$name,'mac_address'=>$mac_address,'ip_address'=>$ip_address);
		$result = $this->User_Model->insert($data);
		
		if( $result ){
			$this->response("User Added", 200);
			exit;
		}else{
			$this->response("Invalid user id", 404);
			exit;
		}
		
	}

	function user_put(){

		$id = $this->put('id');

		if( !$id ){
			$this->response("No user id specified", 400);
			exit;
		}

		$name = $this->put('name');
		$mac_address = $this->put('mac_address');
		$ip_address = $this->put('ip_address');
		
		$data = array('name'=>$name,'mac_address'=>$mac_address,'ip_address'=>$ip_address);
		$result = $this->User_Model->update($id,$data);		
		if( $result ){
			$this->response("User Updated", 200);
			exit;
		}else{
			$this->response("Invalid user id", 404);
			exit;
		}
		
	}

	function user_delete(){

		$id = $this->delete('id');

		if( !$id ){
			$this->response("No user id specified", 400);
			exit;
		}

		$result = $this->User_Model->delete($id);
		if( $result ){
			$this->response("User Deleted", 200);
			exit;
		}else{
			$this->response("Invalid user id", 404);
			exit;
		}
		
	}

}

?>
