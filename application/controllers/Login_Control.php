<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Control extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		if($this->session->userdata("Global_logged_in"))
		{
			redirect("admin_home");
		}
		$this->load->library("pagination");
    }

	public function admin_login()
	{
		$this->load->view('login.php');
	}

	
	
	function check_login()
	{
		$comp_name=$this->input->post('Userid');
		$u_pass=$this->input->post('password');
		
		$chk=array();
		$chk['login_check_result']=$this->Login_Modal->check_login($comp_name,$u_pass);
		
		if($chk['login_check_result']==TRUE)
		{
			foreach($chk['login_check_result'] as $r):
				$login_user_id=$r->id;
				
				$this->session->set_userdata("Global_logged_in",$login_user_id);
				
				$loginid= $this->session->userdata('Global_logged_in');
				
				echo "1";
				
			endforeach;
		}
		else
		{
			// echo "2";
			// $this->session->set_flashdata('flashSuccess', 'Invalid User Name or Password Please try again!');
			// $this->load->view('Store_module/store_login');
		}
	}
	
}
