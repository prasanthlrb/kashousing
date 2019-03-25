<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	 public function __construct()
  {
    parent::__construct();
    $this->load->library('email');
  }

  public function index(){
  	$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'ssl://smtp.example.com',
    'smtp_port' => 465,
    'smtp_user' => 'email@example.com',
    'smtp_pass' => 'email_password',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content
$htmlContent = '<h1>Sending email via SMTP server</h1>';
$htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

$this->email->to('recipient@example.com');
$this->email->from('sender@example.com','MyWebsite');
$this->email->subject('How to send email via SMTP server in CodeIgniter');
$this->email->message($htmlContent);

//Send email
$this->email->send();
  }

}
