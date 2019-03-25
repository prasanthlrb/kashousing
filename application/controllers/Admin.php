<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function index(){
	$this->load->view('admin/login');
	
}
public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','UserName','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			$username= $this->input->post('username');
			$password= $this->input->post('password');
			$this->load->model('Login_model');
			if($this->Login_model->can_login($username,$password)){
				$session_data=array(

					'username'=>$username);
				$this->session->set_userdata($session_data);				
				//redirect(base_url().'main/enter');
				sleep(4);
				redirect(base_url(). 'admin/dashboard');

			}
			else{

				$this->session->set_flashdata('error','Invalid Username and Password');
				sleep(1);
				redirect(base_url(). 'admin/index');
			}
		}
		else{
			$this->index();
		}
	//$this->load->view('admin/login');
		
	}

	function logout(){
		$this->session->unset_userdata('username');
	redirect(base_url(). 'admin/index');
	}

 	public function dashboard(){
 		$this->load->view('admin/dashboard');

 	}


}