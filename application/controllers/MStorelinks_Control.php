<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStorelinks_Control extends CI_Controller {

	public function mstore_panel_dashboard()
	{
		$this->load->view('Store_module/home_dashboard');
	}
	
	
	
	public function location_states()
	{
		redirect('MStoreLocation_Control/fetch_store_state_location');
	}
	
	
	
	public function accounts()
	{
		redirect('MStoreAccount_Control/account_group');
	}
	public function ladger()
	{
		redirect('MStoreLadger_Control/ladger');
	}

	public function material()
	{
		redirect('MStoreMaterialctr_Control/material');
	}
}
