<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreSale_Control extends CI_Controller
{

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }
	public function sale_save_on_member_wallet()
	{
		$trans_1_id=$this->input->post('trans_1_id');
		$ewalletAmount=$this->input->post('ewalletAmount');
		$voucher_date=$this->input->post('voucher_date');
		$member_panel_id=$this->input->post('member_panel_id');
		$user_id=$this->input->post('user_id');
		$tran_status="2";
		$user_type="0";
		$data=$this->MStoreSale_Modal->sale_save_on_member_wallet_mdl($trans_1_id,$ewalletAmount,$voucher_date,$member_panel_id,$tran_status,$user_type,$user_id);
		// echo json_encode($data);
	}

	public function fetch_member_wallet_details()
	{
		$username=$this->input->post('username');
		$data=$this->MStoreSale_Modal->fetch_member_wallet_details_mdl($username);
		echo json_encode($data);
	}
	public function sale()
	{
        $this->load->view('Store_module/Transactions/Sale/sale');
	}

	public function sale_modify_return()
	{
        $this->load->view('Store_module/Transactions/Sale/sale_edit');
	}

	public function purchase_modify_return()
	{
        $this->load->view('Store_module/Transactions/Sale/purchase_edit');
	}
	
	public function sale_return()
	{
        $this->load->view('Store_module/Transactions/Sale/sale_return');
	}
	
	public function purchase_return()
	{
        $this->load->view('Store_module/Transactions/Sale/purchase_return');
	}

	
	public function delete_old_transaction2()
	{
		$user_id=$this->input->post('user_id');
		$trn1_id=$this->input->post('trn1_id');
		$trn_2_id=$this->input->post('trn_2_id');
		$data=$this->MStoreSale_Modal->delete_old_transaction2_mdl($user_id,$trn1_id,$trn_2_id);
		// echo json_encode($data);
	}
	
	public function save_updated_sale_purchase_product()
	{
		$user_id=$this->input->post('user_id');
		$trn1_id=$this->input->post('trn1_id');
		$trn_2_id=$this->input->post('trn_2_id');
		$id_of_party=$this->input->post('id_of_party');
		$proc_id=$this->input->post('proc_id');
		$prod_qty=$this->input->post('prod_qty');
		$data=$this->MStoreSale_Modal->save_updated_sale_purchase_product_mdl($user_id,$trn1_id,$trn_2_id,$id_of_party,$proc_id,$prod_qty);
		// echo json_encode($data);
	}
	
	public function update_sale()
	{
		$user_id=$this->input->post('user_id');
		$trans1ID=$this->input->post('trans1ID');
		$tot_all_discount_amt=$this->input->post('tot_all_discount_amt');
		$txt_narration=$this->input->post('txt_narration');
		$data=$this->MStoreSale_Modal->update_sale_mdl($user_id,$trans1ID,$tot_all_discount_amt,$txt_narration);
		// echo json_encode($data);
	}
	
	public function update_monitory_trans()
	{
		$user_id=$this->input->post('user_id');
		$trans1ID=$this->input->post('last_id');
		$paying_amt=$this->input->post('paying_amt');
		$ramain_amt=$this->input->post('ramain_amt');
		$pro_tot_amt_sum_spn=$this->input->post('pro_tot_amt_sum_spn');
		$payment_method=$this->input->post('payment_method');
		$payment_credit_to_ledger=$this->input->post('payment_credit_to_ledger');
		$payment_from_bank_by=$this->input->post('payment_from_bank_by');
		$data=$this->MStoreSale_Modal->update_monitory_trans_mdl($user_id,$trans1ID,$paying_amt,$ramain_amt,$pro_tot_amt_sum_spn,$payment_method,$payment_credit_to_ledger,$payment_from_bank_by);
		// echo json_encode($data);
	}
	
	public function fetch_sale_purchase_trans1_details()
	{
		$user_id=$this->input->post('user_id');
		$voucher_number=$this->input->post('voucher_number');
		$trans_category=$this->input->post('trans_category');
		$data=$this->MStoreSale_Modal->fetch_sale_purchase_trans1_details_mdl($user_id,$voucher_number,$trans_category);
		echo json_encode($data);
	}
	
	public function fetch_sale_purchase_trans2_details()
	{
		$user_id=$this->input->post('user_id');
		$voucher_number=$this->input->post('voucher_number');
		$data=$this->MStoreSale_Modal->fetch_sale_purchase_trans2_details_mdl($user_id,$voucher_number);
		echo json_encode($data);
	}
	
	
	public function fetch_all_products_on_search()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreSale_Modal->fetch_all_products_on_search_mdl($user_id);
		echo json_encode($data);
	}
	
	public function chk_franchise_type()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreSale_Modal->chk_franchise_type($user_id);
		echo json_encode($data);
	}
	
	public function fetch_parties_in_option()
	{
		$franchise_type=$this->input->post('franchise_type');
		$data=$this->MStoreSale_Modal->fetch_parties_in_option_mdl($franchise_type);
		echo json_encode($data);
	}
	
	public function find_mobile_address_details()
	{
		$parent_id=$this->input->post('parent_id');
		$data=$this->MStoreSale_Modal->find_mobile_address_details_mdl($parent_id);
		echo json_encode($data);
	}
	
	function fetch_order_bill_series_in_series_option()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreSale_Modal->fetch_order_bill_series_in_series_option_mdl($user_id);
		echo json_encode($data);
	}
	
	function fetch_bill_series_in_series_option()
	{
		$user_id=$this->input->post('user_id');
		$trans_category=$this->input->post('trans_category');
		$data=$this->MStoreSale_Modal->fetch_bill_series_in_series_option_mdl($user_id,$trans_category);
		echo json_encode($data);
	}
	
	function save_member_payment_status()
	{
		$user_id=$this->input->post('user_id');
		$last_id=$this->input->post('last_id');
		$member_id=$this->input->post('member_id');
		$sale_party=$this->input->post('sale_party');
		$mem_e_wallet=$this->input->post('mem_e_wallet');
		$pay_by_ewallet_status=$this->input->post('pay_by_ewallet_status');
		$e_wallet_add_to_me=$this->input->post('e_wallet_add_to_me');
		$this->MStoreSale_Modal->save_member_payment_status_mdl($user_id,$last_id,$member_id,$sale_party,$mem_e_wallet,$pay_by_ewallet_status,$e_wallet_add_to_me);
	}
	
	
	function srch_party_by_text()
	{
		$user_id=$this->input->post('user_id');
		$srch_sale_party_val=$this->input->post('srch_sale_party_val');
		$ladger_type=$this->input->post('ladger_type');
		$data=$this->MStoreSale_Modal->srch_party_by_text_mdl($user_id,$srch_sale_party_val,$ladger_type);
		echo json_encode($data);
	}
	
	function fetch_seller_name()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreSale_Modal->fetch_seller_name_mdl($user_id);
		echo json_encode($data);
	}
	
	function fetch_real_bv()
	{
		$data=$this->MStoreSale_Modal->fetch_real_bv_mdl();
		echo json_encode($data);
	}
	
	function fetch_billoder_prefix()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreSale_Modal->fetch_billoder_prefix_mdl($user_id);
		echo json_encode($data);
	}
	
	function fetch_bill_prefix()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreSale_Modal->fetch_bill_prefix_mdl($user_id);
		echo json_encode($data);
	}
	

	
	function fetch_bill_series_all_details_by_id()
	{
		$user_id=$this->input->post('user_id');
		$series_id=$this->input->post('series_id');
		$bill_series_for=$this->input->post('bill_series_for');
		$data=$this->MStoreSale_Modal->fetch_bill_series_all_details_by_id_mdl($user_id,$series_id,$bill_series_for);
		echo json_encode($data);
	}


	
	function fetch_sale_party_all_details_by_id()
	{
		$user_id=$this->input->post('user_id');
		$sale_party_id=$this->input->post('sale_party_id');
		$trans_category=$this->input->post('trans_category');
		$data=$this->MStoreSale_Modal->fetch_sale_party_all_details_by_id_mdl($user_id,$sale_party_id,$trans_category);
		echo json_encode($data);
	}

	function fetch_sale_party_all_details_by_id_in_recipt()
	{
		$user_id=$this->input->post('user_id');
		$sale_party_id=$this->input->post('sale_party_id');
		$trans_category=$this->input->post('trans_category');
		$trans_id=$this->input->post('trans_id');
		$data=$this->MStoreSale_Modal->fetch_sale_party_all_details_by_id_in_recipt_mdl($user_id,$sale_party_id,$trans_category,$trans_id);
		echo json_encode($data);
	}

	function fetch_recipt_trn1_in_purchase_page()
	{
		$user_id=$this->input->post('user_id');
		$trans_id=$this->input->post('trans_id');

		$data=$this->MStoreSale_Modal->fetch_recipt_trn1_in_sale_page_mdl($user_id,$trans_id);
		echo json_encode($data);
	}
	function fetch_user_region()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreSale_Modal->fetch_user_region_mdl($user_id);
		echo json_encode($data);
	}

	
	function fetch_bill_seriesCount_from_transaction_initbl()
	{
		$user_id=$this->input->post('user_id');
		$series_id=$this->input->post('series_id');
		$trans_category=$this->input->post('trans_category');
		$data=$this->MStoreSale_Modal->fetch_bill_seriesCount_from_transaction_initbl_mdl($user_id,$series_id,$trans_category);
		echo json_encode($data);
	}

	
	function fetch_product_lists_fitered()
	{
		$user_id=$this->input->post('user_id');
		$pros_name=$this->input->post('pros_name');

		$data=$this->MStoreSale_Modal->fetch_product_lists_fitered_mdl($user_id,$pros_name);
		echo json_encode($data);
	}
	
	function fetch_all_admin_products_on_search()
	{
		$user_id=$this->input->post('user_id');
		// $pros_name=$this->input->post('pros_name');

		$data=$this->MStoreSale_Modal->fetch_admin_product_lists_fitered_mdl($user_id);
		echo json_encode($data);
	}
	
	
	function fetch_pros_all_details_filter2()
	{
		$user_id=$this->input->post('user_id');
		$product_id=$this->input->post('product_id');

		$data=$this->MStoreSale_Modal->fetch_pros_all_details_filter2_mdl($user_id,$product_id);
		echo json_encode($data);
	}
	
	function fetch_pros_admin_details_filter2()
	{
		$user_id=$this->input->post('user_id');
		$product_id=$this->input->post('product_id');

		$data=$this->MStoreSale_Modal->fetch_pros_admin_details_filter2_mdl($user_id,$product_id);
		echo json_encode($data);
	}
	
	
	function fetch_pros_all_details_by_barcode_filter2()
	{
		$user_id=$this->input->post('user_id');
		$barcode_no=$this->input->post('barcode_no');

		$data=$this->MStoreSale_Modal->fetch_pros_all_details_by_barcode_filter2_mdl($user_id,$barcode_no);
		echo json_encode($data);
	}
	
	
	function fetch_pros_ttl_qty()
	{
		$user_id=$this->input->post('user_id');
		$pros_id=$this->input->post('pros_id');

		$data=$this->MStoreSale_Modal->fetch_pros_ttl_qty_mdl($user_id,$pros_id);
		echo json_encode($data);
	}
	
	
	function fetch_admin_prod_ttl_qty()
	{
		$parent_id=$this->input->post('parent_id');
		$pros_id=$this->input->post('pros_id');

		$data=$this->MStoreSale_Modal->fetch_admin_prod_ttl_qty_mdl($parent_id,$pros_id);
		echo json_encode($data);
	}
	
	
	function fetch_material_center_in_option()
	{
		$user_id=$this->input->post('user_id');

		$data=$this->MStoreSale_Modal->fetch_material_center_in_option_mdl($user_id);
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
	

	public function save_sale()
	{
		$user_id=$this->input->post('user_id');
		$trans_category=$this->input->post('trans_category');
		$voucher_number=$this->input->post('voucher_number');
		$mat_center=$this->input->post('mat_center');
		$sale_party=$this->input->post('sale_party');
		$srch_sale_party=$this->input->post('srch_sale_party');
		$mobile_no=$this->input->post('mobile_no');
		$voucher_date=$this->input->post('voucher_date');
		$tax_region=$this->input->post('tax_region');
		$voucher_prefix=$this->input->post('voucher_prefix');
		$voucher_last_no=$this->input->post('voucher_last_no');
		$indent_no=$this->input->post('indent_no');
		$indent_date=$this->input->post('indent_date');
		$tot_all_discount_amt=$this->input->post('tot_all_discount_amt');
		$txt_address=$this->input->post('txt_address');
		$txt_narration=$this->input->post('txt_narration');
		$pay_recieve_status=$this->input->post('pay_recieve_status');

		
		$data=$this->MStoreSale_Modal->save_sale_mdl($user_id,$trans_category,$voucher_number,$mat_center,$sale_party,$srch_sale_party,$mobile_no,$voucher_date,$tax_region,$voucher_prefix,$voucher_last_no,$indent_no,$indent_date,$tot_all_discount_amt,$txt_address,$txt_narration,$pay_recieve_status);
		echo json_encode($data);
		
	}
	public function save_order()
	{
		$user_id=$this->input->post('user_id');
		$franchise_type=$this->input->post('franchise_type');
		$sale_party=$this->input->post('sale_party');
		$voucher_number=$this->input->post('voucher_number');
		$voucher_date=$this->input->post('voucher_date');
		$indent_no=$this->input->post('indent_no');
		$indent_date=$this->input->post('indent_date');
		$mat_center=$this->input->post('mat_center');
		$voucher_prefix=$this->input->post('voucher_prefix');
		$voucher_last_no=$this->input->post('voucher_last_no');

		$data=$this->MStoreSale_Modal->save_order_mdl($user_id,$franchise_type,$sale_party,$voucher_number,$voucher_date,$indent_no,$indent_date,$mat_center,$voucher_prefix,$voucher_last_no);
		echo json_encode($data);
		
	}
	public function save_sale_return()
	{
		$user_id=$this->input->post('user_id');
		$trans_category=$this->input->post('trans_category');
		$voucher_number=$this->input->post('voucher_number');
		$mat_center=$this->input->post('mat_center');
		$sale_party=$this->input->post('sale_party');
		$srch_sale_party=$this->input->post('srch_sale_party');
		$mobile_no=$this->input->post('mobile_no');
		$voucher_date=$this->input->post('voucher_date');
		$tax_region=$this->input->post('tax_region');
		$voucher_prefix=$this->input->post('voucher_prefix');
		$voucher_last_no=$this->input->post('voucher_last_no');
		$indent_no=$this->input->post('indent_no');
		$indent_date=$this->input->post('indent_date');
		$tot_all_discount_amt=$this->input->post('tot_all_discount_amt');
		$txt_address=$this->input->post('txt_address');
		$txt_narration=$this->input->post('txt_narration');
		$pay_recieve_status=$this->input->post('pay_recieve_status');

		
		$data=$this->MStoreSale_Modal->save_sale_return_mdl($user_id,$trans_category,$voucher_number,$mat_center,$sale_party,$srch_sale_party,$mobile_no,$voucher_date,$tax_region,$voucher_prefix,$voucher_last_no,$indent_no,$indent_date,$tot_all_discount_amt,$txt_address,$txt_narration,$pay_recieve_status);
		echo json_encode($data);
		
	}

	public function pur_order_payments()
	{
		$user_id=$this->input->post('user_id');
		$last_id=$this->input->post('last_id');
		// $pay_type=$this->input->post('pay_type');
		$paying_amt=$this->input->post('paying_amt');

		// $payment_method=$this->input->post('payment_method');
		// $payment_credit_to_ledger=$this->input->post('payment_credit_to_ledger');
		$txt_narration=$this->input->post('txt_narration');
		$this->MStoreSale_Modal->pur_order_payments_mdl($user_id,$last_id,$paying_amt,$txt_narration);
		echo "done";
	}


	public function save_monitory_trans()
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
		$payment_from_bank_by=$this->input->post('payment_from_bank_by');

		
		$data=$this->MStoreSale_Modal->save_monitory_trans_mdl($user_id,$last_id,$transAcc,$paying_amt,$ramain_amt,$voucher_date,$trans_category,$sale_party,$pro_tot_amt_sum_spn,$payment_method,$payment_credit_to_ledger,$payment_from_bank_by);
		echo json_encode($data);
		
	}

	public function save_order2()
	{
		$user_id=$this->input->post('user_id');
		$sale_party=$this->input->post('sale_party');
		$order1_id=$this->input->post('last_id');
		$probarcode=$this->input->post('probarcode');
		$proid=$this->input->post('proid');
		$proqty=$this->input->post('proqty');
		$proprice=$this->input->post('proprice');
		$proamt=$this->input->post('proamt');
		
		$this->MStoreSale_Modal->save_order2_mdl($user_id,$sale_party,$order1_id,$probarcode,$proid,$proqty,$proprice,$proamt);
		echo "done";
		
	}

	public function save_batch_transaction()
	{
		$user_id=$this->input->post('user_id');
		$batch_proid=$this->input->post('batch_proid');
		$batch_no=$this->input->post('batch_no');
		$mfg=$this->input->post('mfg');
		$expd=$this->input->post('expd');
		$qty=$this->input->post('qty');
		$mrp=$this->input->post('mrp');
		$salep=$this->input->post('salep');
		$inout_state=$this->input->post('inout_state');
		
		$data=$this->MStoreSale_Modal->save_batch_transaction_mdl($user_id,$batch_proid,$batch_no,$mfg,$expd,$qty,$mrp,$salep,$inout_state);
		
	}
	public function save_sale_trans2()
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
		$prodisamt=$this->input->post('prodisamt');

		
		$data=$this->MStoreSale_Modal->save_sale_trans2_mdl($user_id,$probarcode,$proid,$proqty,$proprice,$proamt,$proigst,$prosgst,$procgst,$proigstamt,$prosgstamt,$procgstamt,$progrossamt,$last_id,$prodisamt);
		echo json_encode($data);
		
	}

	function print_recipt($trans_completed_id)
	{
		//$data=$this->MStoreBillSeries_Modal->print_recipt_mdl($user_id);
		//echo json_encode($data);
		$data['trans_completed_id']=$trans_completed_id;
        $this->load->view('Store_module/Transactions/Sale/recipt_print',$data);
	}
	
	function fetch_recipt_trn1_in_sale_page()
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
	}
	
	
	public function save_sale_product_stock()
	{
		$user_id=$this->input->post('user_id');
		$probarcode=$this->input->post('p_barcode');
		$proid=$this->input->post('p_id');
		$proqty=$this->input->post('p_qty');
		$mat_center=$this->input->post('mat_center');
		$trans1_id=$this->input->post('last_id');
		$trans2_id=$this->input->post('trans_2_id');
		$in_out=$this->input->post('in_out');

		
		$this->MStoreSale_Modal->save_sale_product_stock_mdl($user_id,$probarcode,$proid,$proqty,$mat_center,$trans1_id,$trans2_id,$in_out);
		//echo json_encode($data);
		
	}
	
	function fetch_sale_data_onChart()
	{
		$user_id=$this->input->post('user_id');
		$trans_id=$this->input->post('trans_id');

		$data=$this->MStoreSale_Modal->fetch_sale_data_onChart_mdl($user_id,$trans_id);
		echo json_encode($data);
	}
	
	function save_new_party_glob()
	{
		$user_id=$this->input->post('user_id');
		$party_parent_group=$this->input->post('party_parent_group');
		$new_party_name=$this->input->post('new_party_name');
		$party_mob_no=$this->input->post('party_mob_no');
		$party_e_mail=$this->input->post('party_e_mail');
		$party_state=$this->input->post('party_state');
		$party_city=$this->input->post('party_city');
		$party_address=$this->input->post('party_address');
		$party_type_of_dealer=$this->input->post('party_type_of_dealer');
		$party_gstIn_uin=$this->input->post('party_gstIn_uin');
		$party_op_balance=$this->input->post('party_op_balance');
		$openBalRdo=$this->input->post('openBalRdo');
		$party_prev_yr_bal=$this->input->post('party_prev_yr_bal');
		$prevBalRdo=$this->input->post('prevBalRdo');
		$member_type_flag=$this->input->post('member_type_flag');
		$member_real_id=$this->input->post('member_real_id');

		$data=$this->MStoreSale_Modal->save_new_party_glob_mdl($user_id,$party_parent_group,$new_party_name,$party_mob_no,$party_e_mail,$party_state,$party_city,$party_address,$party_type_of_dealer,$party_gstIn_uin,$party_op_balance,$openBalRdo,$party_prev_yr_bal,$prevBalRdo,$member_type_flag,$member_real_id);
		echo json_encode($data);
	}
	
	
	function fetch_account_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$group_type=$this->input->post('group_type');
		$data=$this->MStoreSale_Modal->fetch_account_group_in_sale_purchase_mdl($user_id,$group_type);
		echo json_encode($data);  ;
	}
	
}











