<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function index(){
	$this->load->view('admin/clientlogin');
	
}
public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','UserName','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			$username= $this->input->post('username');
			$password= $this->input->post('password');
			$this->load->model('Login_model');
			if($this->Login_model->can_login1($username,$password)){
				$session_data=array(

					'username'=>$username);
				$this->session->set_userdata($session_data);				
				//redirect(base_url().'main/enter');
				sleep(4);
				$list=$this->Login_model->get_id($username);
				foreach ($list as $id1) {
					$id=$id1->id;
				}
				
 				redirect(base_url(). 'Page/client_gallery/'.$id);

			}
			else{

				$this->session->set_flashdata('error','Invalid Username and Password');
				sleep(1);
				redirect(base_url(). 'Login/index');
			}
		}
		else{
			$this->index();
		}
	//$this->load->view('admin/login');
		
	}

	function logout(){
		$this->session->unset_userdata('username');
	redirect(base_url(). 'Login/index');
	}

 	// public function dashboard(){
 	// 	$this->load->model('Login_model');
 	// 	$username= "8883191962";
		// $id=$this->Login_model->get_id($username);
		// print_r($id);
		// $getdata=$this->Login_model->get_img($id);
 	// 	$this->load->view('page/client_gallery',$getdata);

 	// }


}