<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStorePurchase_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	function fetch_product_lists_fitered()
	{
		$user_id=$this->input->post('user_id');
		$pros_name=$this->input->post('pros_name');

		$data=$this->MStorePurchase_Modal->fetch_product_lists_fitered_mdl($user_id,$pros_name);
		echo json_encode($data);
	}
	public function purchase()
	{
        $this->load->view('Store_module/Transactions/Purchase/purchase');
	}

	
	public function fetch_all_products_on_search()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStorePurchase_Modal->fetch_all_products_on_search_mdl($user_id);
		echo json_encode($data);
	}
	
	
	function fetch_payment_method_in_option()
	{
		$user_id=$this->input->post('user_id');

		$data=$this->MStoreSale_Modal->fetch_payment_method_in_option_mdl($user_id);
		echo json_encode($data);
	}
	
	function fetch_payment_method_ledger_in_option()
	{
		$user_id=$this->input->post('user_id');
		$payment_method=$this->input->post('payment_method');

		$data=$this->MStoreSale_Modal->fetch_payment_method_ledger_in_option_mdl($user_id,$payment_method);
		echo json_encode($data);
	}
	
	

	
	function fetch_accounts_in_option()
	{
		$user_id=$this->input->post('user_id');

		$data=$this->MStoreSale_Modal->fetch_accounts_in_option_mdl($user_id);
		echo json_encode($data);
	}
	
	

	
	function fetch_bill_series_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreBillSeries_Modal->fetch_bill_series_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}
	

	public function save_purchase()
	{
		$user_id=$this->input->post('user_id');
		$bill_series=$this->input->post('bill_series');
		$voucher_number=$this->input->post('voucher_number');
		$sale_type=$this->input->post('sale_type');
		$mat_center=$this->input->post('mat_center');
		$sale_party=$this->input->post('sale_party');
		$voucher_date=$this->input->post('voucher_date');
		$trans_category=$this->input->post('trans_category');
		$tax_region=$this->input->post('tax_region');

		
		$data=$this->MStorePurchase_Modal->save_purchase_mdl($user_id,$bill_series,$voucher_number,$sale_type,$mat_center,$sale_party,$voucher_date,$trans_category,$tax_region);
		echo json_encode($data);
		
	}

	/* public function save_monitory_trans()
	{
		$user_id=$this->input->post('user_id');
		$last_id=$this->input->post('last_id');
		$transAcc=$this->input->post('transAcc');
		$paying_amt=$this->input->post('paying_amt');
		$ramain_amt=$this->input->post('ramain_amt');
		$voucher_date=$this->input->post('voucher_date');
		$trans_category=$this->input->post('trans_category');
		$sale_party=$this->input->post('sale_party');
		$pro_tot_amt_sum_spn=$this->input->post('pro_tot_amt_sum_spn');
		$payment_method=$this->input->post('payment_method');
		$payment_credit_to_ledger=$this->input->post('payment_credit_to_ledger');

		
		$data=$this->MStoreSale_Modal->save_monitory_trans_mdl($user_id,$last_id,$transAcc,$paying_amt,$ramain_amt,$voucher_date,$trans_category,$sale_party,$pro_tot_amt_sum_spn,$payment_method,$payment_credit_to_ledger);
		echo json_encode($data);
		
	} */

	public function save_purchase_trans2()
	{
		$user_id=$this->input->post('user_id');
		$probarcode=$this->input->post('probarcode');
		$proid=$this->input->post('proid');
		$proqty=$this->input->post('proqty');
		$proprice=$this->input->post('proprice');
		$proamt=$this->input->post('proamt');
		$proigst=$this->input->post('proigst');
		$prosgst=$this->input->post('prosgst');
		$procgst=$this->input->post('procgst');
		$proigstamt=$this->input->post('proigstamt');
		$prosgstamt=$this->input->post('prosgstamt');
		$procgstamt=$this->input->post('procgstamt');
		$progrossamt=$this->input->post('progrossamt');
		$last_id=$this->input->post('last_id');
		$mat_center=$this->input->post('mat_center');

		
		$data=$this->MStorePurchase_Modal->save_purchase_trans2_mdl($user_id,$probarcode,$proid,$proqty,$proprice,$proamt,$proigst,$prosgst,$procgst,$proigstamt,$prosgstamt,$procgstamt,$progrossamt,$last_id,$mat_center);
		echo json_encode($data);
		
	}

	function print_recipt($trans_completed_id)
	{
		//$data=$this->MStoreBillSeries_Modal->print_recipt_mdl($user_id);
		//echo json_encode($data);
		$data['trans_completed_id']=$trans_completed_id;
        $this->load->view('Store_module/Transactions/Purchase/recipt_print',$data);
	}
	
	function fetch_recipt_trn1_in_purchase_page()
	{
		$user_id=$this->input->post('user_id');
		$trans_id=$this->input->post('trans_id');

		$data=$this->MStoreSale_Modal->fetch_recipt_trn1_in_sale_page_mdl($user_id,$trans_id);
		echo json_encode($data);
	}
	

	public function save_purchase_product_stock()
	{
		$user_id=$this->input->post('user_id');
		$probarcode=$this->input->post('probarcode');
		$proid=$this->input->post('proid');
		$proqty=$this->input->post('proqty');
		$mat_center=$this->input->post('mat_center');
		$trans1_id=$this->input->post('last_id');
		$trans2_id=$this->input->post('trans_2_id');
		$in_out=$this->input->post('in_out');

		
		$data=$this->MStorePurchase_Modal->save_purchase_product_stock_mdl($user_id,$probarcode,$proid,$proqty,$mat_center,$trans1_id,$trans2_id,$in_out);
		//echo json_encode($data);
		
	}

/* 	function print_recipt($trans_completed_id)
	{
		//$data=$this->MStoreBillSeries_Modal->print_recipt_mdl($user_id);
		//echo json_encode($data);
		$data['trans_completed_id']=$trans_completed_id;
        $this->load->view('Store_module/Transactions/Sale/recipt_print',$data);
	} */
	
	/* function fetch_recipt_trn1_in_sale_page()
	{
		$user_id=$this->input->post('user_id');
		$trans_id=$this->input->post('trans_id');

		$data=$this->MStoreSale_Modal->fetch_recipt_trn1_in_sale_page_mdl($user_id,$trans_id);
		echo json_encode($data);
	}
	
	
	function fetch_recipt_trn2_in_sale_page()
	{
		$user_id=$this->input->post('user_id');
		$trans_id=$this->input->post('trans_id');

		$data=$this->MStoreSale_Modal->fetch_recipt_trn2_in_sale_page_mdl($user_id,$trans_id);
		echo json_encode($data);
	} */
	
}











