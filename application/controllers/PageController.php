<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/page');
	}
}