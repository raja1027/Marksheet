<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreStockIn_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	function stockin()
	{
        $this->load->view('Store_module/Transactions/stock/stockIN');
	}
	

	
	
	
	function fetch_stockin_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$in_out_state=$this->input->post('in_out_state');
		$data=$this->MStoreStockIN_Modal->fetch_stockin_in_tbody_mdl($user_id,$in_out_state);
		echo json_encode($data);  ;
	}

	

	

}




