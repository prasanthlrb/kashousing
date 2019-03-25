<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	 public function __construct()
  {
    parent::__construct();
    $this->load->model('Gallery_model','gallery');
  }
	public function index()
	{
		$this->load->view('admin/sketchfab');
    $this->load->helper('url');
	}
	public function videos()
	{
		$this->load->view('admin/videos');
	}
	public function images()
	{
		$this->load->view('admin/gallery');
	}

	public function sketchfab_view(){
$this->load->helper('url');

    $list = $this->gallery->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $gallery) {
      $no++;
      $row = array();
      $row[] = $no;
      
      $row[] = $gallery->name;
      $row[] = $gallery->area;
      
      
      $row[] = '&nbsp;&nbsp;<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" onclick="sketchfab_edit('."'".$gallery->id."'".')" title="Edit">
    <i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a rel="tooltip" onclick="delete_sketchfab('."'".$gallery->id."'".')" title="Remove" class="table-action remove" href="javascript:void(0)" onclick="sketchfab_edit('."'".$gallery->id."'".')" title="Remove" ><i class="fa fa-remove"></i>
    </a>';
     
    
      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->gallery->count_all(),
            "recordsFiltered" => $this->gallery->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
	}
  public function sketchfab_edit($id)
  {
    $data = $this->gallery->get_by_id($id);
    
    echo json_encode($data);
  }
public function create_sketchfab()
  {
    //$this->_validate();
    
    $data = array(
        'name' => $this->input->post('name'),
        'area' => $this->input->post('area'),
        'url' => $this->input->post('url'),
        
        
      );

    // if(!empty($_FILES['photo']['name']))
    // {
    //  $upload = $this->_do_upload();
    //  $data['image'] = $upload;
    // }

    $insert = $this->gallery->save($data);

    echo json_encode(array("status" => TRUE));
  }
  public function update_sketchfab()
  {
    //$this->_validate();
    
    $data = array(
         'name' => $this->input->post('name'),
        'area' => $this->input->post('area'),
        'url' => $this->input->post('url'),
        
      );

    // if(!empty($_FILES['photo']['name']))
    // {
    //  $upload = $this->_do_upload();
    //  $data['image'] = $upload;
    // }
    $this->gallery->update(array('id' => $this->input->post('id')), $data);
    //$insert = $this->user->save($data);

    echo json_encode(array("status" => TRUE));
  }
  public function delete_sketchfab($id)
  { 
    $gallery = $this->gallery->get_by_id($id);
    $this->gallery->delete_by_id($id);
    echo json_encode(array("status" => TRUE));
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
