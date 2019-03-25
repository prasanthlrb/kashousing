<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DynamicProject extends CI_Controller 
{
	function __Construct(){ 
        parent::__Construct(); 
        $this->load->database(); 
        $this->load->helper('url');
        $this->load->model('ProjectModel');    
     }


	public function index()
	{
		$data['customer'] = $this->ProjectModel->getCustomers();
		$this->load->view('admin/DynamicProject',$data);
	}

	public function Pay()
	{
		$this->load->view('admin/viewProjectPay');
	}
	public function ViewPay()
	{
		$this->load->view('admin/viewProjectPay1');
	}

	public function AddCart()
	{
		$this->load->library('cart');
		$data = array(
        	'name'      	=> $this->input->post('name'),
        	'parent'     	=> $this->input->post('parent'),
        	'display'   	=> $this->input->post('display'),
        	'month'    		=> $this->input->post('month'),
        	'days'        	=> $this->input->post('days'),
        	'payment'    	=> $this->input->post('payment')
		);
		$this->cart->insert($data);
		redirect('DynamicProject');
	}


}