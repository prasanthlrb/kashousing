<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller 
{
	function __Construct(){ 
        parent::__Construct(); 
        $this->load->database(); 
        $this->load->helper('url');
        $this->load->model('file');    
     }

	public function index()
	{
		$data['facility'] = $this->file->getFacility();
		$this->load->view('admin/Facility',$data);
	}


	public function ChangeOrder()
	{
		foreach ($this->input->post('value') as $key => $value) {
   		$data["position"]=$key+1;
    	//updatePosition($data, $value);
    	$data = array(
			'position' => $key+1
		);

		$this->file->ChangeOrder(array('id' => $value), $data);
    	
		}
		echo json_encode("Position Changed");
	}


	private function UploadImage()  
	{  
       if(isset($_FILES["pic"]))  
       {  
            $extension = explode('.', $_FILES['pic']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination ='./assets/Facility/' . $new_name;  
            //This path is full Url
            $destination1 =base_url().'assets/Facility/' . $new_name;
            move_uploaded_file($_FILES['pic']['tmp_name'], $destination);  
            return $destination1;  
       } 
	}




	public function Save()
   	{
   	$position1 = $this->file->getCountFacility();
   	$position = $position1 + 1;
   	$extension = explode('.', $_FILES['pic']['name']);
    if($extension[0]=="") {	
	    $data = array(
			'title1' => $this->input->post('title1'),
			'title2' => $this->input->post('title2'),
			'position' => $position,
		);
	}
	else{
		$data = array(
			'title1' => $this->input->post('title1'),
			'title2' => $this->input->post('title2'),
			'position' => $position,
			'url' => $this->UploadImage()
		);

	}
		$this->file->FacilitySave($data);

		// $data1 = "Successfully Added";	
		// echo json_encode($data1);
		redirect('Facility');
  	}


	public function Edit($id)
	{
		$data = $this->file->get_facility_id($id);
		//$this->load->view('editStudent',$data);
		echo json_encode($data);
	}



	public function Update()
	{      	

	$extension = explode('.', $_FILES['pic']['name']);
    if($extension[0]=="") {	
	    $data = array(
			'title1' => $this->input->post('title1'),
			'title2' => $this->input->post('title2'),
		);
	}
	else{
		$data = array(
			'title1' => $this->input->post('title1'),
			'title2' => $this->input->post('title2'),
			'url' => $this->UploadImage()

		);

	}

		$this->file->FacilityUpdate(array('id' => $this->input->post('id')), $data);

		// $data1 = "Successfully Updated";	
		// echo json_encode($data1);
		redirect('Facility');
	}


	public function Delete($id)
	{
    	$this->file->FacilityDelete($id);
		echo json_encode(array("status" => TRUE));
		//redirect('Facility');
	}



}