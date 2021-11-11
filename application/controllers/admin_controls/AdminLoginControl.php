<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLoginControl extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if($this->session->userdata("Adminlogged_in"))
		{
			redirect("admin_home");
		}
    }

	function Admin_control_login_page()
	{
        $this->load->view('Store_module/Admin/store_login');
	}

	function Admin_control_login()
	{
		$comp_name=$this->input->post('comp_name');
		$u_pass=$this->input->post('u_pass');
		
		$chk=array();
		$chk['login_check_result']=$this->AdminLogin_Modal->check_admin_login($comp_name,$u_pass);
		
		if($chk['login_check_result']==TRUE)
		{
			foreach($chk['login_check_result'] as $r):
				$login_user_id=$r->user_id;
				$login_main_id=$r->main_id;
				
				$this->session->set_userdata("Adminlogged_in",$login_user_id);
				
				$loginid= $this->session->userdata('Adminlogged_in');
				
				echo $loginid;
				redirect('admin_home');
			endforeach;
		}
		else
		{
			$this->session->set_flashdata('flashSuccess', 'Invalid User Name or Password Please try again!');
			$this->load->view('Store_module/Admin/store_login');
		}
	}



}




