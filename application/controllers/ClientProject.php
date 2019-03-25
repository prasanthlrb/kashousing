<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientProject extends CI_Controller 
{
	function __Construct(){ 
        parent::__Construct(); 
        $this->load->database(); 
        $this->load->helper('url');
        $this->load->model('ProjectModel');    
     }


public function index()
	{
		$data['maincat'] = $this->ProjectModel->getProjectMainCat();
		$data['subcat'] = $this->ProjectModel->getProjectSubCat();
		$this->load->view('client/viewProject',$data);
	}




}