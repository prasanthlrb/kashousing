<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/news');
	}
	public function category()
	{
		$this->load->view('admin/category');
	}
	public function comment()
	{
		$this->load->view('admin/comment');
	}

	public function cate_view(){
		 $this->load->model('cate_model');
		$this->load->helper('url');

    $list = $this->cate_model->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $cate) {
       $no++;
      $row = array();
      $row[] = $no;
      $row[] = $cate->title;
      
      $row[] = $cate->status;
    
      
      
    $row[] = '&nbsp;&nbsp;<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" onclick="edit_cate('."'".$cate->id."'".')" title="Edit">
    <i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a rel="tooltip" onclick="delete_cate('."'".$cate->id."'".')" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove" ><i class="fa fa-remove"></i>
    </a>';
      // if($cate->photo)
      //  $row[] = '<a href="'.base_url('upload/'.$cate->photo).'" target="_blank"><img src="'.base_url('upload/'.$cate->photo).'" class="img-responsive" /></a>';
      // else
      //  $row[] = '(No photo)';

      //add html for action
     
    
      $data[] = $row;

    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->cate_model->count_all(),
            "recordsFiltered" => $this->cate_model->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
	}

	public function cate_edit($id)
	{
		 $this->load->model('cate_model');
		$data = $this->cate_model->get_by_id($id);
		
		echo json_encode($data);
	}
public function create_cate()
	{
		//$this->_validate();
		 $this->load->model('cate_model');
		
		$data = array(
				'category' => $this->input->post('category'),
				'status' => $this->input->post('status'),
				
				
			);

		// if(!empty($_FILES['photo']['name']))
		// {
		// 	$upload = $this->_do_upload();
		// 	$data['image'] = $upload;
		// }

		$insert = $this->cate_model->save($data);

		echo json_encode(array("status" => TRUE));
	}


	public function update_cate()
	{
		//$this->_validate();
		 $this->load->model('cate_model');
		
		$data = array(
				'category' => $this->input->post('category'),
				'status' => $this->input->post('status'),
				
				
			);

		// if(!empty($_FILES['photo']['name']))
		// {
		// 	$upload = $this->_do_upload();
		// 	$data['image'] = $upload;
		// }
		$this->cate_model->update(array('id' => $this->input->post('id')), $data);
		//$insert = $this->cate->save($data);

		echo json_encode(array("status" => TRUE));
	}
	public function delete_cate($id)
	{	
		 $this->load->model('cate_model');
		$cate_model = $this->cate_model->get_by_id($id);
		$this->cate_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	// blog details
	public function blog_view(){
		 $this->load->model('blog_model');
$this->load->helper('url');

    $list = $this->blog_model->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $blog) {
       $no++;
      $row = array();
      $row[] = $no;
      
      $row[] = $blog->title;
     
      $row[] = $blog->status;
      
      
    $row[] = '&nbsp;&nbsp;<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" onclick="blog_edit('."'".$blog->id."'".')" title="Edit">
    <i class="fa fa-edit"></i></a>&nbsp;&nbsp;<a rel="tooltip" onclick="delete_blog('."'".$blog->id."'".')" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove" ><i class="fa fa-remove"></i>
    </a>';
      // if($blog->photo)
      //  $row[] = '<a href="'.base_url('upload/'.$blog->photo).'" target="_blank"><img src="'.base_url('upload/'.$blog->photo).'" class="img-responsive" /></a>';
      // else
      //  $row[] = '(No photo)';

      //add html for action
     
    
      $data[] = $row;

    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->blog_model->count_all(),
            "recordsFiltered" => $this->blog_model->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
	}

	public function blog_edit($id)
	{
		 $this->load->model('blog_model');
		$data = $this->blog_model->get_by_id($id);
		
		echo json_encode($data);
	}
	function upload_image()  
  {  
       if(isset($_FILES["fileurl"]))  
       {  
            $extension = explode('.', $_FILES['fileurl']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = './assets/property/images/' . $new_name;  
            move_uploaded_file($_FILES['fileurl']['tmp_name'], $destination);  
            return $new_name;  
       }  
  }  
public function create_blog()
	{
		//$this->_validate();
		 $this->load->model('blog_model');
		
		$data = array(
				'title' => $this->input->post('title'),
				'status' => $this->input->post('status'),
				'content' => $this->input->post('content'),
				'url' => $this->upload_image(),
				'create_at' => date('Y-m-d H:i:s'),						
			);

		// if(!empty($_FILES['photo']['name']))
		// {
		// 	$upload = $this->_do_upload();
		// 	$data['image'] = $upload;
		// }

		$insert = $this->blog_model->save($data);

		echo json_encode(array("status" => TRUE));
	}
	public function update_blog()
	{
		//$this->_validate();
		 $this->load->model('blog_model');
		
		$data = array(
				'title' => $this->input->post('title'),
				'status' => $this->input->post('status'),
				'content' => $this->input->post('content'),
				
			);

		// if(!empty($_FILES['photo']['name']))
		// {
		// 	$upload = $this->_do_upload();
		// 	$data['image'] = $upload;
		// }
		$this->blog_model->update(array('id' => $this->input->post('id')), $data);
		//$insert = $this->blog->save($data);

		echo json_encode(array("status" => TRUE));
	}
	public function delete_blog($id)
	{	
		 $this->load->model('blog_model');
		$blog_model = $this->blog_model->get_by_id($id);
		$this->blog_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	// comment
	public function user_view(){
		 $this->load->model('comment_model');
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
		$this->load->model('comment_model');
		$data = $this->user->get_by_id($id);
		
		echo json_encode($data);
	}
public function create_user()
	{
		//$this->_validate();
		$this->load->model('comment_model');
		$this->_validate();
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
		$this->_validate();
		$this->load->model('comment_model');
		
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
		$this->load->model('comment_model');
		$user = $this->user->get_by_id($id);
		$this->user->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	private function _validate()
    {
        $data = array();
        $data['error_string'] = array();
        $data['inputerror'] = array();
        $data['status'] = TRUE;
 
        if($this->input->post('title') == '')
        {
            $data['inputerror'][] = 'title';
            $data['error_string'][] = 'title is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('content') == '')
        {
            $data['inputerror'][] = 'content';
            $data['error_string'][] = 'content is required';
            $data['status'] = FALSE;
        }
 
        if($this->input->post('status') == '')
        {
            $data['inputerror'][] = 'status';
            $data['error_string'][] = 'status is required';
            $data['status'] = FALSE;
        }
 
       
        if($data['status'] === FALSE)
        {
            echo json_encode($data);
            exit();
        }
    }

    public function single_news($id){
    	$this->load->model('blog_model');
    	$data['single_news'] = $this->blog_model->get_single_news($id);
    	$data['slider'] = $this->blog_model->news_slider();
    	$this->load->view('page/single_post',$data);

    }

}