<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	 public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model','user');
  }

public function index(){
	$this->load->view('admin/user');
	
}

public function user_view(){
$this->load->helper('url');

    $list = $this->user->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $user) {
       $no++;
      $row = array();
      $row[] = $no;
      
      $row[] = $user->name;
      $row[] = $user->username;
      $row[] = $user->role;
      
      
    $row[] = '&nbsp;&nbsp;<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" onclick="user_edit('."'".$user->id."'".')" title="Edit">
    <i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a rel="tooltip" onclick="delete_user('."'".$user->id."'".')" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove" ><i class="fa fa-remove"></i>
    </a>';
      // if($user->photo)
      //  $row[] = '<a href="'.base_url('upload/'.$user->photo).'" target="_blank"><img src="'.base_url('upload/'.$user->photo).'" class="img-responsive" /></a>';
      // else
      //  $row[] = '(No photo)';

      //add html for action
     
    
      $data[] = $row;

    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->user->count_all(),
            "recordsFiltered" => $this->user->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
	}

	public function user_edit($id)
	{
		$data = $this->user->get_by_id($id);
		
		echo json_encode($data);
	}
public function create_user()
	{
		//$this->_validate();
		
		$data = array(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'role' => $this->input->post('role'),
				'password' => $this->input->post('password'),
				
			);

		// if(!empty($_FILES['photo']['name']))
		// {
		// 	$upload = $this->_do_upload();
		// 	$data['image'] = $upload;
		// }

		$insert = $this->user->save($data);

		echo json_encode(array("status" => TRUE));
	}
	public function update_user()
	{
		//$this->_validate();
		
		$data = array(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'role' => $this->input->post('role'),
				'password' => $this->input->post('password'),
				
			);

		// if(!empty($_FILES['photo']['name']))
		// {
		// 	$upload = $this->_do_upload();
		// 	$data['image'] = $upload;
		// }
		$this->user->update(array('id' => $this->input->post('id')), $data);
		//$insert = $this->user->save($data);

		echo json_encode(array("status" => TRUE));
	}
	public function delete_user($id)
	{	
		$user = $this->user->get_by_id($id);
		$this->user->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}