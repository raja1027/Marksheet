<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPurchase_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Adminlogged_in"))
		{
			redirect("admin_login");
		}
    }
	function delete_self_pending_request_product()
	{
		$ord2_id=$this->input->post('ord2_id');
		$order_id=$this->input->post('order_id');
		$total_amt_of_order=$this->input->post('total_amt_of_order');
		$data=$this->DepoPurchseOrder_Modal->delete_self_pending_request_product_mdl($ord2_id,$order_id,$total_amt_of_order);
		echo json_encode($data);  ;
	}
	
	
	function fetch_self_requested_products_by_ord_details()
	{
		$order_id=$this->input->post('order_id');
		$request_to=$this->input->post('request_to');
		$data=$this->DepoPurchseOrder_Modal->fetch_self_requested_products_by_ord_details_mdl($order_id,$request_to);
		echo json_encode($data);  ;
	}
	
	function update_self_pending_request_product()
	{
		$proid=$this->input->post('proid');
		$order_id=$this->input->post('order_id');
		$updated_qty=$this->input->post('updated_qty');
		$updated_tot_price=$this->input->post('updated_tot_price');
		$total_amt_of_order=$this->input->post('total_amt_of_order');
		$data=$this->DepoPurchseOrder_Modal->update_self_pending_request_product_mdl($proid,$order_id,$updated_qty,$updated_tot_price,$total_amt_of_order);
		// echo json_encode($data);  ;
	}

	function fetch_product_details_by_proname_to_add_request()
	{
		$pro_name_add_id=$this->input->post('pro_name_add_id');
		$user_id=$this->input->post('user_id');
		$data=$this->DepoPurchseOrder_Modal->fetch_product_details_by_proname_to_add_request($pro_name_add_id,$user_id);
		echo json_encode($data);  ;
	}
	
	
	function fetch_product_details_by_barcode_to_add_request()
	{
		$barcode_no=$this->input->post('barcode_no');
		$user_id=$this->input->post('user_id');
		$data=$this->DepoPurchseOrder_Modal->fetch_product_details_by_barcode_to_add_request($barcode_no,$user_id);
		echo json_encode($data);  ;
	}
	
	function fetch_order_bill_series_in_series_option()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminSale_Modal->fetch_order_bill_series_in_series_option_mdl($user_id);
		echo json_encode($data);
	}
	
	
	function fetch_billoder_prefix()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminSale_Modal->fetch_billoder_prefix_mdl($user_id);
		echo json_encode($data);
	}

	function srch_party_by_text()
	{
		$user_id=$this->input->post('user_id');
		$srch_sale_party_val=$this->input->post('srch_sale_party_val');
		$ladger_type=$this->input->post('ladger_type');
		$data=$this->AdminSale_Modal->srch_party_by_text_mdl($user_id,$srch_sale_party_val,$ladger_type);
		echo json_encode($data);
	}
	
	
	
	function fetch_bill_prefix()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminSale_Modal->fetch_bill_prefix_mdl($user_id);
		echo json_encode($data);
	}
	
	public function fetch_cities_in_option()
	{
		$state_id=$this->input->post('state_id');
		$data=$this->MStoreLadger_Modal->fetch_cities_in_option_mdl($state_id);
		echo json_encode($data);
	}
	
	public function fetch_states_in_option()
	{
		$data=$this->MStoreLadger_Modal->fetch_states_in_option_mdl();
		echo json_encode($data);
	}
	
	
	function fetch_account_group_in_groupoption1()
	{
		$user_id=$this->input->post('user_id');
		$group_type=$this->input->post('group_type');
		$data=$this->AdminSale_Modal->fetch_account_group_in_sale_purchase_mdl($user_id,$group_type);
		echo json_encode($data);  ;
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
		$member_real_id='';

		$data=$this->AdminSale_Modal->save_new_party_glob_mdl($user_id,$party_parent_group,$new_party_name,$party_mob_no,$party_e_mail,$party_state,$party_city,$party_address,$party_type_of_dealer,$party_gstIn_uin,$party_op_balance,$openBalRdo,$party_prev_yr_bal,$prevBalRdo,$member_type_flag,$member_real_id);
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

		
		$this->AdminSale_Modal->save_sale_product_stock_mdl($user_id,$probarcode,$proid,$proqty,$mat_center,$trans1_id,$trans2_id,$in_out);
		//echo json_encode($data);
		
	}
	

	public function save_sale_trans2()
	{
		$user_id=$this->input->post('user_id');
		$probarcode1=$this->input->post('probarcode');
		$proid1=$this->input->post('proid');
		$proqty1=$this->input->post('proqty');
		$proprice1=$this->input->post('proprice');
		$proamt1=$this->input->post('proamt');
		$proigst1=$this->input->post('proigst');
		$prosgst1=$this->input->post('prosgst');
		$procgst1=$this->input->post('procgst');
		$proigstamt1=$this->input->post('proigstamt');
		$prosgstamt1=$this->input->post('prosgstamt');
		$procgstamt1=$this->input->post('procgstamt');
		$progrossamt1=$this->input->post('progrossamt');
		$prodisamt1=$this->input->post('prodisamt');
		$probatches1=$this->input->post('probatches');
		
		$last_id=$this->input->post('last_id');
		
		
		$splits_probarcode1=explode(",",$probarcode1);

		$splits_proid1=explode(",",$proid1);
		$counts_all_proid1=count($splits_proid1);

		$splits_proqty1=explode(",",$proqty1);

		$splits_proprice1=explode(",",$proprice1);

		$splits_proamt1=explode(",",$proamt1);

		$splits_proigst1=explode(",",$proigst1);

		$splits_prosgst1=explode(",",$prosgst1);

		$splits_procgst1=explode(",",$procgst1);

		$splits_proigstamt1=explode(",",$proigstamt1);

		$splits_prosgstamt1=explode(",",$prosgstamt1);

		$splits_procgstamt1=explode(",",$procgstamt1);

		$splits_progrossamt1=explode(",",$progrossamt1);

		$splits_prodisamt1=explode(",",$prodisamt1);
		
		
		$splits_probatches1=explode(",",$probatches1);
		$counts_all_prodisamt1=count($splits_probatches1);


		for($n=0;$n<$counts_all_prodisamt1;$n++)
		{
			$probatches=$splits_probatches1[$n];
			
			if($probatches!="" && $probatches!="NA")
			{
				$splits_different_batches_probatches1=explode("***",$probatches);
				
				$counts_all_different_batches_probatches1=count($splits_different_batches_probatches1);
				
				for($y=0;$y<$counts_all_different_batches_probatches1;$y++)
				{
					$each_probatches=$splits_different_batches_probatches1[$y];
					$splits_different_probatches1=explode("###",$each_probatches);
					
					// echo $splits_different_probatches1[0]." ".$splits_different_probatches1[1]." ".$splits_different_probatches1[2]." ".$splits_different_probatches1[3]." ".$splits_different_probatches1[4];
					/* for($z=0;$z<5;$z++)
					{
						
					} */
					$proid=$splits_different_probatches1[0];
					$new_batch_no=$splits_different_probatches1[1];
					$new_mfd_date=$splits_different_probatches1[2];
					$new_exp_date=$splits_different_probatches1[3];
					$new_batch_qty=$splits_different_probatches1[4];
					
					$inout_state="1";

					$this->AdminSale_Modal->save_purchase_batches_mdl($last_id,$user_id,$proid,$new_batch_no,$new_mfd_date,$new_exp_date,$new_batch_qty,$inout_state);
				}
			}
		}


		for($m=0;$m<$counts_all_proid1;$m++)
		{
			$probarcode=$splits_probarcode1[$m];
			$proid=$splits_proid1[$m];
			$proqty=$splits_proqty1[$m];
			$proprice=$splits_proprice1[$m];
			$proamt=$splits_proamt1[$m];
			$proigst=$splits_proigst1[$m];
			$prosgst=$splits_prosgst1[$m];
			$procgst=$splits_procgst1[$m];
			$proigstamt=$splits_proigstamt1[$m];
			$prosgstamt=$splits_prosgstamt1[$m];
			$procgstamt=$splits_procgstamt1[$m];
			$progrossamt=$splits_progrossamt1[$m];
			$prodisamt=$splits_prodisamt1[$m];

			$data=$this->AdminSale_Modal->save_purchase_trans2_mdl($user_id,$probarcode,$proid,$proqty,$proprice,$proamt,$proigst,$prosgst,$procgst,$proigstamt,$prosgstamt,$procgstamt,$progrossamt,$last_id,$prodisamt);
			if($m==($counts_all_proid1-1))
			{
				echo "1";
			}
			else
			{
				echo "0";
			}

		}
		// $data=$this->AdminSale_Modal->save_sale_trans2_mdl($user_id,$probarcode,$proid,$proqty,$proprice,$proamt,$proigst,$prosgst,$procgst,$proigstamt,$prosgstamt,$procgstamt,$progrossamt,$last_id,$prodisamt);
		// echo json_encode($data);
		
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
		$payment_from_bank_by='0';
		
		$data=$this->AdminSale_Modal->save_monitory_trans_mdl($user_id,$last_id,$transAcc,$paying_amt,$ramain_amt,$voucher_date,$trans_category,$sale_party,$pro_tot_amt_sum_spn,$payment_method,$payment_credit_to_ledger,$payment_from_bank_by);
		echo json_encode($data);
		
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
		$shipping_charges_amt=$this->input->post('shipping_charges_amt');

		if(function_exists('date_default_timezone_set'))
		{
			date_default_timezone_set("Asia/Kolkata");
		}

		$date = date("d/m/Y");
		$date1 =  date("h:i a");

		$full_date_time=$date." ".$date1;
		
		$data=$this->AdminSale_Modal->save_sale_mdl($user_id,$trans_category,$voucher_number,$mat_center,$sale_party,$srch_sale_party,$mobile_no,$voucher_date,$tax_region,$voucher_prefix,$voucher_last_no,$indent_no,$indent_date,$tot_all_discount_amt,$txt_address,$txt_narration,$pay_recieve_status,$shipping_charges_amt,$full_date_time);
		echo json_encode($data);
		
	}
	
	function fetch_bill_series_all_details_by_id()
	{
		$user_id=$this->input->post('user_id');
		$series_id=$this->input->post('series_id');
		$bill_series_for=$this->input->post('bill_series_for');
		$data=$this->AdminSale_Modal->fetch_bill_series_all_details_by_id_mdl($user_id,$series_id,$bill_series_for);
		echo json_encode($data);
	}

	
	function fetch_bill_series_in_series_option()
	{
		$user_id=$this->input->post('user_id');
		$trans_category=$this->input->post('trans_category');
		$data=$this->AdminSale_Modal->fetch_bill_series_in_series_option_mdl($user_id,$trans_category);
		echo json_encode($data);
	}
	
	
	function fetch_user_region()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminSale_Modal->fetch_user_region_mdl($user_id);
		echo json_encode($data);
	}

	function fetch_sale_party_all_details_by_id()
	{
		$user_id=$this->input->post('user_id');
		$sale_party_id=$this->input->post('sale_party_id');
		$trans_category=$this->input->post('trans_category');
		$data=$this->AdminSale_Modal->fetch_sale_party_all_details_by_id_mdl($user_id,$sale_party_id,$trans_category);
		echo json_encode($data);
	}

	
	function fetch_pros_all_details_by_barcode_filter2()
	{
		$user_id=$this->input->post('user_id');
		$barcode_no=$this->input->post('barcode_no');

		$data=$this->AdminSale_Modal->fetch_pros_all_details_by_barcode_filter2_mdl($user_id,$barcode_no);
		echo json_encode($data);
	}
	
	
	function fetch_pros_all_details_filter2()
	{
		$user_id=$this->input->post('user_id');
		$product_id=$this->input->post('product_id');

		$data=$this->AdminSale_Modal->fetch_pros_all_details_filter2_mdl($user_id,$product_id);
		echo json_encode($data);
	}
	
	
	public function fetch_all_products_on_search()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStorePurchase_Modal->fetch_all_products_on_search_mdl($user_id);
		echo json_encode($data);
	}
	

	function fetch_product_lists_fitered()
	{
		$user_id=$this->input->post('user_id');
		$pros_name=$this->input->post('pros_name');

		$data=$this->MStorePurchase_Modal->fetch_product_lists_fitered_mdl($user_id,$pros_name);
		echo json_encode($data);
	}
	
	function fetch_accounts_in_option()
	{
		$user_id=$this->input->post('user_id');

		$data=$this->AdminSale_Modal->fetch_accounts_in_option_mdl($user_id);
		echo json_encode($data);
	}
	
	
	function fetch_material_center_in_option()
	{
		$user_id=$this->input->post('user_id');

		$data=$this->AdminSale_Modal->fetch_material_center_in_option_mdl($user_id);
		echo json_encode($data);
	}
	
	
	function fetch_payment_method_ledger_in_option()
	{
		$user_id=$this->input->post('user_id');
		$payment_method=$this->input->post('payment_method');

		$data=$this->AdminSale_Modal->fetch_payment_method_ledger_in_option_mdl($user_id,$payment_method);
		echo json_encode($data);
	}
	
	
	function fetch_payment_method_in_option()
	{
		$user_id=$this->input->post('user_id');

		$data=$this->AdminSale_Modal->fetch_payment_method_in_option_mdl($user_id);
		echo json_encode($data);
	}

	function account_group()
	{
        $this->load->view('Store_module/Masters/Account/account_group');
	}
	
	function save_store_account_group()
	{
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$user_id=$this->input->post('user_id');
		
		$this->MStoreAccount_Modal->save_store_account_group_do($group_name,$print_name,$user_id);
		echo "Account Group Record has been Saved";
	}
	
	function save_store_account_group_child()
	{
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$user_id=$this->input->post('user_id');
		$parent_group=$this->input->post('parent_group');
		
		$this->MStoreAccount_Modal->save_store_account_group_child_do($group_name,$print_name,$user_id,$parent_group);
		echo "Account Group Record has been Saved";
		
	}
	
	
	function fetch_account_group_in_tbodytbl()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreAccount_Modal->fetch_account_group_in_tbodytbl_mdl($user_id);
		echo json_encode($data);  ;
	}

	function fetch_account_group_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$lim1=$this->input->post('lim1');
		$lim2=$this->input->post('lim2');
		$data=$this->MStoreAccount_Modal->fetch_account_group_in_tbody_mdl($user_id,$lim1,$lim2);
		echo json_encode($data);  ;
	}

	
	function fetch_account_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreAccount_Modal->fetch_account_group_in_groupoption_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	
	function fetch_account_group_in_edit()
	{
		$edit_id=$this->input->post('edit_id');
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreAccount_Modal->fetch_account_group_in_edit_mdl($user_id,$edit_id);
		echo json_encode($data);  ;
	}
	




	
	function update_store_account_group()
	{
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$user_id=$this->input->post('user_id');
		$hide_id=$this->input->post('hide_id');
		
		$this->MStoreAccount_Modal->update_store_account_group_do($group_name,$print_name,$user_id,$hide_id);
		echo "Account Group Record has been Updated";
		
	}
	


	
	function update_store_account_group_child()
	{
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$parent_group=$this->input->post('parent_group');
		$user_id=$this->input->post('user_id');
		$hide_id=$this->input->post('hide_id');
		
		$this->MStoreAccount_Modal->update_store_account_group_child_do($group_name,$print_name,$parent_group,$user_id,$hide_id);
		echo "Account Group Record has been Updated";
		
	}
	
	function cash_bank_book()
	{
        $this->load->view('Store_module/Admin/Reports/cash_book_page');
	}
	
	function fetch_cashbackCrDr()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$voucher_date1=$this->input->post('voucher_date1');
		$voucher_date2=$this->input->post('voucher_date2');
		$search_btn=$this->input->post('search_btn');
		
		$data=$this->MStoreGlobal_Modal->fetch_cashbackCrDr_mdl($user_id,$sale_purchase_type_id,$voucher_date1,$voucher_date2,$search_btn);
		echo json_encode($data);  
	}

	function fetch_admin_order_cash_bank_book()
	{
		$user_id=$this->input->post('user_id');
		// $sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$voucher_date1=$this->input->post('voucher_date1');
		$voucher_date2=$this->input->post('voucher_date2');
		$search_btn=$this->input->post('search_btn');
		
		$data=$this->MStoreGlobal_Modal->fetch_admin_order_cash_bank_book_mdl($user_id,$voucher_date1,$voucher_date2,$search_btn);
		echo json_encode($data);  
	}


	function fetch_batch_remaining_qty_by_user()
	{
		$user_id=$this->input->post('user_id');
		$prod_id=$this->input->post('prod_id');
		
		$data=$this->MStoreGlobal_Modal->fetch_batch_remaining_qty_by_user($user_id,$prod_id);
		echo json_encode($data);  
	}

}




