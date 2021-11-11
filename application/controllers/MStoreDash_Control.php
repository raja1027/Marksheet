<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreDash_Control extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	function mstore_panel_dashboard()
	{
		$this->load->view('Store_module/home_dashboard');
	}
}
