<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller 
{
	function __Construct(){ 
        parent::__Construct(); 
        $this->load->database(); 
        $this->load->helper('url');
        $this->load->model('ProjectModel');    
     }

//View
	public function index()
	{
		$data['customer'] = $this->ProjectModel->getCustomers();
		$data['project'] = $this->ProjectModel->getProject();
		$this->load->view('admin/Project',$data);
	}
	public function ProjectItem($id)
	{
		$data['project'] = $this->ProjectModel->getProjectID($id);
		$data['maincat'] = $this->ProjectModel->getProjectMainCat();
		$data['subcat'] = $this->ProjectModel->getProjectSubCat();
		$data['projectitem'] = $this->ProjectModel->getProjectItem();
		$this->load->view('admin/ProjectItem',$data);
	}

	public function ProjectImage($id)
	{
		$data['image'] = $this->ProjectModel->getProjectImages($id);
		$data['id'] = $id;
		$this->load->view('admin/ProjectImage',$data);
	}

	public function MainCat()
	{
		$data['maincat'] = $this->ProjectModel->getProjectMainCat();
		$this->load->view('admin/ProjectMainCat',$data);
	}

	public function SubCat()
	{
		$data['maincat'] = $this->ProjectModel->getProjectMainCat();
		$data['subcat'] = $this->ProjectModel->getProjectSubCat();
		$this->load->view('admin/ProjectSubCat',$data);
	}

	public function Customers()
	{
		$data['customer'] = $this->ProjectModel->getCustomers();
		$this->load->view('admin/customer',$data);
	}

//Save
	public function Save()
   	{
	    $data = array(
			'name' => $this->input->post('name'),
			'client_id' => $this->input->post('client_id'),
			'address' => $this->input->post('address'),
			'pincode' => $this->input->post('pincode'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city')
		);

		$this->ProjectModel->Save($data);
		$data1 = "Successfully Added";	
		echo json_encode($data1);
  	}

  	public function SaveProjectItem()
   	{
	    $data = array(
			'project_id' => $this->input->post('project_id'),
			'maincat' => $this->input->post('maincat'),
			'subcat' => $this->input->post('subcat'),
			'title' => $this->input->post('title'),
			'des' => $this->input->post('des')
		);

		$this->ProjectModel->SaveProjectItem($data);
		$data1 = "Successfully Added";	
		echo json_encode($data1);
  	}

  	public function SaveCustomer()
   	{
	    $data = array(
			'name' => $this->input->post('name'),
			'mobile' => $this->input->post('mobile'),
			'email' => $this->input->post('email'),
			'user' => $this->input->post('user'),
			'pass' => $this->input->post('pass'),
			'address' => $this->input->post('address'),
			'pincode' => $this->input->post('pincode'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city')
		);

		$this->ProjectModel->SaveCustomer($data);
		$data1 = "Successfully Added";	
		echo json_encode($data1);
  	}

  	public function SaveMainCat()
   	{
   		
	    $data = array(
			'cat' => $this->input->post('cat')
		);

		$this->ProjectModel->SaveMainCat($data);

		$data1 = "Successfully Added";	
		echo json_encode($data1);
  	}

  	public function SaveSubCat()
   	{
   		
	    $data = array(
			'maincat' => $this->input->post('maincat'),
			'subcat' => $this->input->post('subcat')
		);

		$this->ProjectModel->SaveSubCat($data);

		$data1 = "Successfully Added";	
		echo json_encode($data1);
  	}

private function UploadDocument()  
	{  
       if(isset($_FILES["pic"]))  
       {  
            $extension = explode('.', $_FILES['pic']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination ='./projectimages/' . $new_name;  
            //This path is full Url
            //$destination1 =base_url().'assets/Document/' . $new_name;
            move_uploaded_file($_FILES['pic']['tmp_name'], $destination);  
            return $new_name;  
       } 
	}

  	public function SaveProjectImage()
   	{
   		
	    $data = array(
			'item_id' => $this->input->post('id'),
			'url' => $this->UploadDocument()
		);

		$this->ProjectModel->SaveProjectImage($data);

		$data1 = "Successfully Added";	
		echo json_encode($data1);
  	}


//Edit
	public function Edit($id)
	{
		$data = $this->ProjectModel->get_by_id($id);
		echo json_encode($data);
	}

	public function EditMainCat($id)
	{
		$data = $this->ProjectModel->get_maincat_id($id);
		echo json_encode($data);
	}

	public function EditSubCat($id)
	{
		$data = $this->ProjectModel->get_subcat_id($id);
		echo json_encode($data);
	}

	public function ChangeSubCat($id)
	{
		$data = $this->ProjectModel->ChangeSubCat($id);
		//$output .= '<option value="">SELECT</option';
    	foreach ($data as $key) {
        	$output .='<option value="'.$key->id.'">'.$key->subcat.'</option>';
    	}
	    echo $output;
	}

	public function EditCustomer($id)
	{
		$data = $this->ProjectModel->get_customer_id($id);
		echo json_encode($data);
	}

	public function EditProjectItem($id)
	{
		$data = $this->ProjectModel->get_projectitem_id($id);
		echo json_encode($data);
	}

//update
	public function Update()
	{      	

        $data = array(
			'name' => $this->input->post('name'),
			'client_id' => $this->input->post('client_id'),
			'address' => $this->input->post('address'),
			'pincode' => $this->input->post('pincode'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city')
		);

		$this->ProjectModel->Update(array('id' => $this->input->post('id')), $data);

		$data1 = "Successfully Updated";	
		echo json_encode($data1);

	}

	public function UpdateProjectItem()
	{      	

        $data = array(
			'project_id' => $this->input->post('project_id'),
			'maincat' => $this->input->post('maincat'),
			'subcat' => $this->input->post('subcat'),
			'title' => $this->input->post('title'),
			'des' => $this->input->post('des')
		);

		$this->ProjectModel->UpdateProjectItem(array('id' => $this->input->post('id')), $data);

		$data1 = "Successfully Updated";	
		echo json_encode($data1);

	}

	public function UpdateCustomer()
	{      	

        $data = array(
			'name' => $this->input->post('name'),
			'mobile' => $this->input->post('mobile'),
			'email' => $this->input->post('email'),
			'user' => $this->input->post('user'),
			'pass' => $this->input->post('pass'),
			'address' => $this->input->post('address'),
			'pincode' => $this->input->post('pincode'),
			'state' => $this->input->post('state'),
			'city' => $this->input->post('city')
		);

		$this->ProjectModel->UpdateCustomer(array('id' => $this->input->post('id')), $data);

		$data1 = "Successfully Updated";	
		echo json_encode($data1);

	}

	public function UpdateMainCat()
	{      	

        $data = array(
			'cat' => $this->input->post('cat'),
		);

		$this->ProjectModel->UpdateMainCat(array('id' => $this->input->post('id')), $data);

		$data1 = "Successfully Updated";	
		echo json_encode($data1);

	}
	
	public function UpdateSubCat()
	{      	

        $data = array(
			'maincat' => $this->input->post('maincat'),
			'subcat' => $this->input->post('subcat')
		);

		$this->ProjectModel->UpdateSubCat(array('id' => $this->input->post('id')), $data);

		$data1 = "Successfully Updated";	
		echo json_encode($data1);

	}

//Delete
	public function Delete($id)
	{
    	$this->ProjectModel->Delete($id);
		echo json_encode(array("status" => TRUE));
	}

	public function DeleteMainCat($id)
	{
    	$this->ProjectModel->DeleteMainCat($id);
		echo json_encode(array("status" => TRUE));
	}

	public function DeleteSubCat($id)
	{
    	$this->ProjectModel->DeleteSubCat($id);
		echo json_encode(array("status" => TRUE));
	}

	public function DeleteCustomer($id)
	{
    	$this->ProjectModel->DeleteCustomer($id);
		echo json_encode(array("status" => TRUE));
	}

	public function DeleteProjectItem($id)
	{
    	$this->ProjectModel->DeleteProjectItem($id);
		echo json_encode(array("status" => TRUE));
	}

	public function DeleteProjectImage($id)
	{
    	$this->ProjectModel->DeleteProjectImage($id);
		echo json_encode(array("status" => TRUE));
	}



}