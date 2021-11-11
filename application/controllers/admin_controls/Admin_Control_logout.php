<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Control_logout extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
    }

	public function admin_logout()
	{
		$this->session->unset_userdata("Adminlogged_in");
		redirect('admin_login');
	}
	
}
