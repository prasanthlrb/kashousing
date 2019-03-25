<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Project_image extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->model('file');
    }
    
    function index(){
        $data = array();
        if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){

            $status=$this->input->post('status');
            $name=$this->input->post('name');


            $filesCount = count($_FILES['userFiles']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'uploads/project_image/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['name'] = $name;
                    $uploadData[$i]['status'] = $status;
                }
            }
            
            if(!empty($uploadData)){
                //Insert file information into the database
                $insert = $this->file->project_insert($uploadData);
                $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }
        }
        //Get files data from database
        $data['files'] = $this->file->getProject();
        //Pass the files data to view
        $this->load->view('admin/project_image', $data);
    }


    public function remove_files($id){

    //$remove_file = $this->file->remove_file($id);
    $this->file->remove_project($id);
    redirect('Project_image');
    }

}