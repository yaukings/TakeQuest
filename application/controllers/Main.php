<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in'))
	   {
	     	$session_data = $this->session->userdata('logged_in');
	     	$data['username'] = $session_data['username'];
	    	$this->load->view('userpage/user_head',$data);
	    	$this->load->view('userpage/user_nav');
	    	$this->load->view('userpage/user_home_body');
	    	$this->load->view('userpage/user_footer');
	   }
	   else
	   {
	   	$this->load->model('main_model');
    	$data['result'] = $this->main_model->allquestlist();
		
		$this->load->helper(array('form'));
		$this->load->view('homepage/home_head',$data);
		$this->load->view('homepage/home_nav');
		$this->load->view('homepage/home');
		$this->load->view('homepage/home_footer');
	   }
	}

	public function register_page()
	{
		$this->load->view('homepage/home_head');
		$this->load->view('homepage/home_nav');
		$this->load->view('homepage/sign_up');
		$this->load->view('homepage/home_footer');
	}

	public function registering()
	{
		$username=$this->input->post('username');
    	$password=$this->input->post('password');
		$email=$this->input->post('email');
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');

    	$this->load->model('main_model');
    	$this->main_model->new_user($username,$password,$email,$first_name,$last_name);
    	redirect('../main','refresh');
	}
}
