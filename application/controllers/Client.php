<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model('Client_model','gallery');
    $this->load->model('ProjectModel');
    $this->load->helper('url');
  }






  public function video_view(){
    $this->load->model('Videos');
$this->load->helper('url');

    $list = $this->Videos->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $Videos) {
      $no++;
      $row = array();
      $row[] = $no;
      
      $row[] = $Videos->name;
     
      
      
      $row[] = '&nbsp;&nbsp;<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" onclick="video_edit('."'".$Videos->id."'".')" title="Edit">
    <i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a rel="tooltip" onclick="delete_video('."'".$Videos->id."'".')" title="Remove" class="table-action remove" href="javascript:void(0)"  title="Remove" ><i class="fa fa-remove"></i>
    </a>';
     
    
      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Videos->count_all(),
            "recordsFiltered" => $this->Videos->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
  }
  public function video_edit($id)
  {
    $this->load->model('Videos');
    $data = $this->Videos->get_by_id($id);
    
    echo json_encode($data);
  }
public function create_video()
  {
    //$this->_validate();
    $this->load->model('Videos');
    $data = array(
        'name' => $this->input->post('name'),
        
        'url' => $this->input->post('url'),
        
        
      );

    // if(!empty($_FILES['photo']['name']))
    // {
    //  $upload = $this->_do_upload();
    //  $data['image'] = $upload;
    // }

    $insert = $this->Videos->save($data);

    echo json_encode(array("status" => TRUE));
  }
  public function update_video()
  {
    //$this->_validate();
     $this->load->model('Videos');
    $data = array(
         'name' => $this->input->post('name'),
        
        'url' => $this->input->post('url'),
        
      );

    // if(!empty($_FILES['photo']['name']))
    // {
    //  $upload = $this->_do_upload();
    //  $data['image'] = $upload;
    // }
    $this->Videos->update(array('id' => $this->input->post('id')), $data);
    //$insert = $this->user->save($data);

    echo json_encode(array("status" => TRUE));
  }
  public function delete_video($id)
  { 
     $this->load->model('Videos');
    $Videos = $this->Videos->get_by_id($id);
    $this->Videos->delete_by_id($id);
    echo json_encode(array("status" => TRUE));
  }
public function img_galley(){
  $this->load->view('admin/image_upload');
}


}
