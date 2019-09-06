<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	/**

	 */

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->helper('form');
		
		$this->load->view('contact_us');


	}

	public function send_mail() {
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
		$this->form_validation->set_rules('subject', 'Subject', 'required|min_length[5]');
		$this->form_validation->set_rules('message', 'Message', 'required|min_length[1]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');


		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('contact_us');
        }else{
			$this->load->view('contact_us');
			$this->mail();
		}


	}

	public function mail(){
								//$this->load->library(array('email','session'));
					            
								$this->load->library('email');

								$config['protocol'] = 'sendmail';
								$config['mailpath'] = '/usr/sbin/sendmail';
								$config['charset'] = 'utf-8';
								$config['wordwrap'] = TRUE;
								$config['mailtype'] = 'text';
			
								$config['smtp_host'] = "smtp";
								$config['smtp_user'] = "";
								$config['smtp_pass'] = "";
								$config['smtp_port'] = "";
								$config['smtp_timeout'] = 5;
								
								$this->email->initialize($config);
			
								$name = $this->input->post('name');
								$email = $this->input->post('email');
								$subject = $this->input->post('subject');
								$message = 'Name : '.$name."\n E-mail : ".$email."\n".'Subject : '.$subject ."\n".'Message :' .$this->input->post('message');
								$this->email->from('hello@coirgreencoco.com', 'coirgreencoco.com');
								
								$dev_email = $this->config->item('dev_email');
								$admin_email = $this->config->item('admin_email');
								$this->email->to($admin_email);
								
								if($dev_email){
									$this->email->bcc($dev_email);
								}
								
								
								$this->email->subject('This e-mail sent via coirgreencoco.com contact form ');
								$this->email->message($message);
								//$this->email->send();
								if($this->email->send())
								{
									$this->session->set_flashdata('send_email', "Message sent!");
									redirect(current_url());
									//echo "email sent";
								}else{
									 $this->session->set_flashdata('send_email', "Message not sent! Try again");
									
								} 
								
								//$this->session->set_flashdata('success', "message sent");
								//$this->session->set_flashdata('error', "message not sent");
	}
}