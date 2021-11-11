<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreBatch_Control extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	function batchwise_stockin()
	{
		$this->load->view('Store_module/Transactions/Batchwise_stock/stockIn_batch');
	}

	function batchwise_stockout()
	{
		$this->load->view('Store_module/Transactions/Batchwise_stock/stockOut_batch');
	}

	function fetch_stockin_products_details()
	{
		$user_id=$this->input->post('user_id');
		$trans_type=$this->input->post('trans_type');
		$from_date=$this->input->post('from_date');
		$to_date=$this->input->post('to_date');
		$data=$this->MStoreBatch_Modal->fetch_stockin_products_details_mdl($user_id,$trans_type,$from_date,$to_date);
		echo json_encode($data);
	}

	function save_add_batch()
	{
		$user_id=$this->input->post('user_id');
		$txtbatch_no=$this->input->post('txtbatch_no');
		$txtExp_date=$this->input->post('txtExp_date');
		$txtQty=$this->input->post('txtQty');
		$inout_type=$this->input->post('inout_type');
		$txtProId=$this->input->post('txtProId');
		$data=$this->MStoreBatch_Modal->save_add_batch_mdl($user_id,$txtbatch_no,$txtExp_date,$txtQty,$inout_type,$txtProId);
		// echo json_encode($data);
	}

	function fetch_all_batches_of_product()
	{
		$user_id=$this->input->post('user_id');
		$prod_id=$this->input->post('prod_id');
		$inout_type=$this->input->post('inout_type');
		$data=$this->MStoreBatch_Modal->fetch_all_batches_of_product_mdl($user_id,$prod_id,$inout_type);
		echo json_encode($data);
	}


	function check_existance_of_batch()
	{
		$user_id=$this->input->post('user_id');
		$txtbatch_no=$this->input->post('txtbatch_no');
		$data=$this->MStoreBatch_Modal->check_existance_of_batch_mdl($user_id,$txtbatch_no);
		echo json_encode($data);
	}

	
}
