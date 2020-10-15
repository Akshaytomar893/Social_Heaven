<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_Heaven_Controller extends CI_Controller 
{

	public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('Social_heaven_model');
		$this->load->database();
		$this->load->library('session');
    }
	
	public function index()
	{
		$_SESSION['error']="";
		$this->load->view('Home' ,  $_SESSION['error']);
	}

	public function doLogin()
	{
		$mail=$this->input->post('mail');
		$password=$this->input->post('pswrd');
		$result=$this->Social_heaven_model->login($mail , $password);
		$num_row=$result->num_rows();
		if($num_row==0){
			$error="Invalid Login Crendentials. Please Try Again.";
			$this->session->set_userdata('error' , $error);
			$this->load->view('Home',  $_SESSION['error']);

		}
		else{
			$this->load->view('dashboard');
		}
		

	}
	public function doSignup()
	{
		$form_data=$this->input->post();
		$result=$this->Social_heaven_model->signUp($form_data);
		if($result)
		{
			$this->load->view('dashboard');
		}
		else
		{
			$error="OOPS !! Couldn't Sign Up . Please Try Again Later.";
			$this->session->set_userdata('error' , $error);
			$this->load->view('Home', $_SESSION['error']);

		}


	}
	public function validateMail()
	{
		$check_valid_mail=$this->input->post('datapost');
		$result=$this->Social_heaven_model->validMail($check_valid_mail);
		$num_row=$result->num_rows();
		if($num_row==0){
			echo "*This User Does Not Exist . Please Enter A Valid Mail Id";
		}
		
		
	}
}
