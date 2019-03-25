<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewProject extends CI_Controller {
    function  __construct() {
        parent::__construct();
        $this->load->model('file');
        //$this->load->model("Property_area");
    }
    

public function index(){
	$this->load->view('client/viewProject');
}


}