<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
	}
	
	public function index(){
		$query = $this->db->get("user");
		$data['users'] = $query->result();
		$this->load->view('user/index',$data);
	}
	
	public function add()	{
		$data['error'] = "";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('ip_address', 'IP Address', 'trim|required|valid_ip');
		$this->form_validation->set_rules('mac_address', 'MAC Address', 'required');
		if( $this->input->method() == 'post' ){
			$this->load->model('User_Model');
			$name = $this->input->post('name');
			$ip_address = $this->input->post('ip_address');
			$mac_address = $this->input->post('mac_address');
			$mac_addr_check = preg_match('/^([a-fA-F0-9]{2}[:|\-]?){5}[a-fA-F0-9]{2}$/', $mac_address);
			if( $mac_addr_check ){
				$user_data = array('name'=>$name,'ip_address'=>$ip_address,'mac_address'=>$mac_address);
				if( $this->form_validation->run() == true ){
					$this->User_Model->insert($user_data);
					redirect('user', 'refresh');
				}
			}else{
				$data['error'] = "Invalid MAC address";
			}
		}
         		$this->load->view('user/add',$data);
	}
	
	public function edit( $id = NULL ){
		$data['error'] = "";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('ip_address', 'IP Address', 'trim|required|valid_ip');
		$this->form_validation->set_rules('mac_address', 'MAC Address', 'required');
		if( $this->input->method() == 'post' ){
			$this->load->model('User_Model');
			$id = $this->input->post('id');
			$name = $this->input->post('name');
			$ip_address = $this->input->post('ip_address');
			$mac_address = $this->input->post('mac_address');
			$mac_addr_check = preg_match('/^([a-fA-F0-9]{2}[:|\-]?){5}[a-fA-F0-9]{2}$/', $mac_address);
			if( $mac_addr_check == 1 ){
				$user_data = array('name'=>$name,'ip_address'=>$ip_address,'mac_address'=>$mac_address);
				if( $this->form_validation->run() == true ){
					$this->User_Model->update($id,$user_data);
					redirect('user', 'refresh');
				}
			}else{
				$data['error'] = "Invalid MAC Address";
			}
		}
		$this->db->where( "id", $id );
		$query = $this->db->get("user");
		$data['user'] = $query->result();
         		$this->load->view('user/edit',$data);
	}

	public function delete( $id = NULL ){
		$this->load->model('User_Model');
		$this->User_Model->delete($id);
		$query = $this->db->get("user");
		$data['users'] = $query->result();
		$this->load->view('user/index',$data);
	}

}

?>
