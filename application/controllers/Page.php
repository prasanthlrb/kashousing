<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	
	public function index()
	{
        //$this->load->view('page/home');
        $this->load->model('Client_model');  
        $data['siteInfo']=$this->Client_model->getSiteInfo();
        $this->load->model('File');
        $data['completed_project'] = $this->File->completed_project();
        $data['on_going__project'] = $this->File->on_going__project();
        $this->load->view('page/home',$data);
	}

	public function about(){
		$this->load->view('page/about');
	}

	public function ourmaterial(){
		$this->load->view('page/ourmaterial');
	}
	
	public function facilities(){
        $this->load->model('File');
        $data['fac'] = $this->File->getFacility();
        $this->load->view('page/facilities',$data);
	}
	public function contact(){
        $this->load->model('Client_model');  
        $data['siteInfo']=$this->Client_model->getSiteInfo();
		$this->load->view('page/contact',$data);
	}
	public function buyerguide(){
		$this->load->view('page/buyerguide');
	}
	public function gallery(){
		$this->load->view('page/gallery');
	}
	public function image_gallery(){
		$this->load->model('File');
		$data['getdata'] = $this->File->getdata();
		$this->load->view('page/img_gallery',$data);
	}
    public function client_gallery(){
        $id=$this->uri->segment(3);
        $this->load->model('File');
       $files['files']=$this->File->getimg($id);
        //print_r($files);
        $this->load->view('page/client_gallery',$files);
    }
	public function news(){
		$this->load->model('Blog_model');

		$data['news_rows'] = $this->Blog_model->news_row();
		$data['news_sliders'] = $this->Blog_model->news_slider();
		$this->load->view('page/news',$data);
	}
	public function single_post(){
		$this->load->view('page/single_post');
	}
	public function sketchfab(){
		$this->load->model('Gallery_model');
		$data['sketchfab'] = $this->Gallery_model->get_sketch();
		$this->load->view('page/sketchfab',$data);
	}
	public function videos(){
		$this->load->model('Gallery_model');
		$data['videos'] = $this->Gallery_model->get_videos();
		$this->load->view('page/videos',$data);
	}
	public function Property(){
		$this->load->model("Property_area");
		$this->load->model('blog_model');
		$data['new_prop'] = $this->Property_area->get_prop();
		$data['new_files'] = $this->Property_area->get_files();
		 $data['new_file']= $this->Property_area->get_land_file();
		$data['new_lands'] = $this->Property_area->get_lands();
		$data['slider'] = $this->blog_model->news_slider();
		$this->load->view('page/Property',$data);

	}

public function mail_contact()
{

$this->load->library('email');

//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'mail.lrbtech.in',
    'smtp_port' => 587,
    'smtp_user' => 'info@lrbtech.in',
    'smtp_pass' => 'Google2017@',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");    
    

    $name=$this->input->post('name');
  	$email=$this->input->post('email');
  	$mobile=$this->input->post('mobile');
  	$subject=$this->input->post('subject');
  	$comments=$this->input->post('comments');


$msg="Subject : ".$subject." <br> Name : ".$name." <br> Mobile Number : ".$mobile." <br> Email ID : ".$email." <br> Message : ".$comments."
      ";

$this->email->from('info@lrbtech.in','KAS HOUSING');
$this->email->to('kashousing@gmail.com');
$this->email->cc('kashousing@gmail.com');
$this->email->subject('Enquiry From Contact Page');
$this->email->message($msg);

//$this->email->attach('/path/to/file1.png'); // attach file
//$this->email->attach('/path/to/file2.pdf');

//Send email
if ($this->email->send())
    $data= "Mail Sent!";
else
    $data= "There is error in sending mail!";

echo json_encode($data);
}

public function mail_contact1()
{

$this->load->library('email');

//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'mail.lrbtech.in',
    'smtp_port' => 587,
    'smtp_user' => 'info@lrbtech.in',
    'smtp_pass' => 'Google2017@',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");    
    

    $name=$this->input->post('name');
  	$mobile=$this->input->post('mobile');
  	$comments=$this->input->post('comments');


$msg="Name : ".$name." <br> Mobile Number : ".$mobile." <br> Message : ".$comments."
      ";

$this->email->from('info@lrbtech.in','KAS HOUSING');
$this->email->to('kashousing@gmail.com');
$this->email->cc('kashousing@gmail.com');
$this->email->subject('Enquiry From Property Page');
$this->email->message($msg);

//$this->email->attach('/path/to/file1.png'); // attach file
//$this->email->attach('/path/to/file2.pdf');

//Send email
if ($this->email->send())
    $data= "Mail Sent!";
else
    $data= "There is error in sending mail!";

echo json_encode($data);
}


    public function ajax_autocomplete(){
    	$this->load->database();
    	$this->load->model('Blog_model');
        $searchText = $_GET['term'];
        $availableResults = $this->Blog_model->get_autocomplete_results($searchText);
         
        if(!empty($availableResults)){     
            $data['response'] = 'true'; //If username exists set true
            $data['message'] = array();       
            foreach ($availableResults as $key => $value) {                
                $data['message'][] = array(  
                    'label' => $value->title,
                    'value' => $value->title,
                    'id'=>$value->id
                );
            }        
        }else{
            $data['response'] = 'false';
        }
        
        echo json_encode($data); 
     }

     public function ajax1(){
    	$this->load->database();
    	$this->load->model('Blog_model');
        $searchText = $_GET['term'];
        $availableResults = $this->Blog_model->get_autocomplete_results1($searchText);
         
        if(!empty($availableResults)){     
            $data['response'] = 'true'; //If username exists set true
            $data['message'] = array();       
            foreach ($availableResults as $key => $value) {                
                $data['message'][] = array(  
                    'label' => $value->prop_named,
                    'value' => $value->prop_named,
                    'id'=>$value->id
                );
            }        
        }else{
            $data['response'] = 'false';
        }
        
        echo json_encode($data); 
     }


	
}
