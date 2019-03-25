<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller 
{
	function __Construct(){ 
        parent::__Construct(); 
        $this->load->database(); 
        $this->load->helper('url');
        $this->load->helper("file");
        $this->load->model('ProjectModel');    
     }

  public function index()
  {
    $data['contact'] = $this->ProjectModel->getCustomers();
    $this->load->view('admin/Contact',$data);
  }

	public function ContactView($id)
	{
		$data['contactid'] = $this->ProjectModel->getContactID($id);
		$data['contact'] = $this->ProjectModel->getCustomers();
		$this->load->view('admin/ContactView',$data);
	}
	public function ContactView1($id)
	{
		$data['contactid'] = $this->ProjectModel->getContactID($id);
		$data['customerImage'] = $this->ProjectModel->getCustomerImage($id);
		$data['contact'] = $this->ProjectModel->getCustomers();
		$this->load->view('admin/ContactView1',$data);
	}


	private function UploadDocument()  
	{  
       if(isset($_FILES["pic"]))  
       {  
            $extension = explode('.', $_FILES['pic']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination ='./uploads/client_image/' . $new_name;  
            //This path is full Url
            //$destination1 =base_url().'assets/Document/' . $new_name;
            move_uploaded_file($_FILES['pic']['tmp_name'], $destination);  
            return $new_name;  
       } 
	}


	public function CustomerImage($id)
    {
      $data = array(
      'file_name' => $this->UploadDocument(),
      'c_id' => $id
    );

    $this->ProjectModel->CustomerImage($data);
    //$data1 = "Successfully Added";  
    //echo json_encode($data1);
  	redirect('Contact/ContactView1/'.$id);
  }


// public function ContactAjax()
// 	{
// 	$list = $this->ProjectModel->getCustomers();
// 	$data = array();
// 	$no = 0;
// 	foreach ($list as $view) {
// 		$no++;
// 		$row = array();
// 		//$row[] = $view->pro_id;
// 		$row[] = $no;
// 		if($view->status == "Customer")
// 		{
// 		$row[] = '<a href="'.base_url().'Contact/ContactView1/'.$view->id.'" >'.$view->name.'</a>';
// 		}
// 		elseif($view->status == "Client"){
// 		$row[] = '<a href="'.base_url().'Contact/ContactView/'.$view->id.'" >'.$view->name.'</a>';
// 		}
// 		$row[] = $view->mobile;
// 		$row[] = $view->email;
// 		$row[] = '<div class="dropdown">
//     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
//     <span class="caret"></span></button>
//     <ul class="dropdown-menu">
//       <li><a href="javascript:void(0)" onclick="Edit('."'".$view->id."'".')">Edit</a></li>
//       <li><a href="javascript:void(0)" onclick="Delete('."'".$view->id."'".')">Delete</a></li>
//     </ul>
// </div>';
		
// 		$data[] = $row;
// 		}

// 		$output = array(			
// 			"data" => $data,
// 		);
// 		//output to json format
// 		echo json_encode($output) ;
// 	}



  public function Save()
    {
      $data = array(
      'name' => $this->input->post('name'),
      'mobile' => $this->input->post('mobile'),
      'email' => $this->input->post('email'),
      'pass' => $this->input->post('pass'),
      'address' => $this->input->post('address'),
      'pincode' => $this->input->post('pincode'),
      'state' => $this->input->post('state'),
      'status' => $this->input->post('status'),
      'city' => $this->input->post('city')
    );

    $this->ProjectModel->SaveCustomer($data);
    $data1 = "Successfully Added";  
    echo json_encode($data1);
  }

  public function Edit($id)
  {
    $data = $this->ProjectModel->get_customer_id($id);
    echo json_encode($data);
  }

  public function Update()
  {       

    $data = array(
      'name' => $this->input->post('name'),
      'mobile' => $this->input->post('mobile'),
      'email' => $this->input->post('email'),
      'pass' => $this->input->post('pass'),
      'address' => $this->input->post('address'),
      'pincode' => $this->input->post('pincode'),
      'state' => $this->input->post('state'),
      'status' => $this->input->post('status'),
      'city' => $this->input->post('city')
    );

    $this->ProjectModel->UpdateCustomer(array('id' => $this->input->post('id')), $data);

    $data1 = "Successfully Updated";  
    echo json_encode($data1);

  }

  public function Delete($id)
  {
    $this->ProjectModel->DeleteCustomer($id);
    echo json_encode(array("status" => TRUE));
  }
  public function CustomerImageDelete($id)
  {
    $this->ProjectModel->CustomerImageDelete($id);
    echo json_encode(array("status" => TRUE));
  	//$path = "http://localhost/kashousing/uploads/client_image/APPARTMENT_SECOND_FLOOR-1.jpg";
	//delete_files($path);
	// if(delete_files($path)) {
 //     echo 'deleted successfully';
	// }
	// else {
 //     echo 'errors occured';
	// }
  }
	

public function FlitterContact($id)
    {
    if($id!=""){
    	$list = $this->ProjectModel->getCustomersFliter($id);
    }	
    elseif($id=="ShowAll"){
		$list = $this->ProjectModel->getCustomers();
    }

$output = '<table id="table" class="table table-hover">
    <thead>
    <tr>
      <th style="width:5%;">#</th>
      <th style="width:30%;">Name</th>
      <th style="width:25%;">Mobile</th>
      <th style="width:30%;">Email ID</th>
      <th style="width:10%;">Action</th>
    </tr>
    </thead>
    <tbody>';
    $x=0;
       foreach ($list as $key) {
       	$x++;
        $output .='<tr>
        <td>'.$x.'</td>';
        if($key->status == "Client")
        {
			$output .='<td><a href="'.base_url().'Contact/ContactView/'.$key->id.'" >'.$key->name.'</a></td>';
        }
        else{
        	$output .='<td><a href="'.base_url().'Contact/ContactView1/'.$key->id.'" >'.$key->name.'</a></td>';
        }
        $output .='<td>'.$key->mobile.'</td>
        <td>'.$key->email.'</td>
        <td> <div class="dropdown">
     <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
     <span class="caret"></span></button>
     <ul class="dropdown-menu">
       <li><a href="javascript:void(0)" onclick="Edit('.$key->id.')">Edit</a></li>
       <li><a href="javascript:void(0)" onclick="Delete('.$key->id.')">Delete</a></li>
     </ul>
 </div> </td>
      </tr>';
       }
$output .='</tbody>
    <tfoot>
    <tr>
        <th style="width:5%;">#</th>
        <th style="width:30%;">Name</th>
        <th style="width:25%;">Mobile</th>
        <th style="width:30%;">Email ID</th>
        <th style="width:10%;">Action</th>
    </tr>
    </tfoot>
</table>';

          echo $output;

      //return response()->json($materialpay);
    }


public function FlitterContactView($id)
    {
    if($id!=""){
    	$list = $this->ProjectModel->getCustomersFliter($id);
    }	
    elseif($id=="ShowAll"){
		$list = $this->ProjectModel->getCustomers();
    }

$output = '<table id="example" class="table table-hover">
    <thead>
    <tr>
      <th>Name</th>
    </tr>
    </thead>
    <tbody>';
    $x=0;
       foreach ($list as $key) {
       	$x++;
        $output .='<tr>';
        if($key->status == "Client")
        {
			$output .='<td><a href="'.base_url().'Contact/ContactView/'.$key->id.'" >'.$key->name.'</a></td>';
        }
        else{
        	$output .='<td><a href="'.base_url().'Contact/ContactView1/'.$key->id.'" >'.$key->name.'</a></td>';
        }
        $output .='</tr>';
       }
$output .='</tbody>
    <tfoot>
    <tr>
      <th>Name</th>
    </tr>
    </tfoot>
</table>';

          echo $output;

      //return response()->json($materialpay);
    }    


   public function siteInfo(){
    $this->load->model('Client_model');  
     $data['siteInfo']=$this->Client_model->getSiteInfo();
    $this->load->view('admin/siteInfo',$data);
    //echo json_encode($data);
   }

   public function siteUpdate(){
    $this->load->model('Client_model');  
    $data = array(
      'email1' => $this->input->post('email1'),
      'email2' => $this->input->post('email2'),
      'email3' => $this->input->post('email3'),
      'phone1' => $this->input->post('phone1'),
      'address' => $this->input->post('address'),
      'phone2' => $this->input->post('phone2')
    );
    $this->Client_model->UpdateSiteInfo($data);

    redirect('/Contact/siteInfo');
   }
   public function getSiteInfo(){
    $this->load->model('Client_model');  
    //$data['siteInfo']=;
   echo json_encode($this->Client_model->getSiteInfo());
   }


}