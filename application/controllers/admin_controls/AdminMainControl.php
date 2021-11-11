<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMainControl extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Adminlogged_in"))
		{
			redirect("admin_login");
		}
    }
	
	
	function fetch_recipt_trn2_in_sale_page()
	{
		$user_id=$this->input->post('user_id');
		$trans_id=$this->input->post('trans_id');

		$data=$this->MStoreSale_Modal->fetch_recipt_trn2_in_sale_page_mdl($user_id,$trans_id);
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


	function fetch_sale_Purchase_details_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
			$transid=$this->input->post('transid');
		$data=$this->MStoreGlobal_Modal->fetch_sale_Purchase_details_in_tbody_md($user_id,$sale_purchase_type_id,$transid);
		echo json_encode($data); 
	}


	function fetch_prev_bal()
	{
		$user_id=$this->input->post('user_id');
		$tran1Id=$this->input->post('tran1Id');
		$par_id=$this->input->post('par_id');
		$data=$this->MStoreGlobal_Modal->fetch_prev_bal_mdl($user_id,$tran1Id,$par_id);
		echo json_encode($data);  ;
	}


	function print_recipt($trans_completed_id)
	{
		$data['trans_completed_id']=$trans_completed_id;
        $this->load->view('Store_module/Admin/Reports/recipt_print',$data);
	}
	
	function puchase_summary_details($tranid)
	{
		$data['tranid']=$tranid;
        $this->load->view('Store_module/Admin/Reports/Purchase_summary_deatils',$data);
	}

	function fetch_Sale_summary_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');

		$data=$this->MStoreGlobal_Modal->fetch_Sale_summary_in_tbody_mdl($user_id,$sale_purchase_type_id);
		echo json_encode($data);  
	}

	function fetch_cre_deb_payments()
	{
		$user_id=$this->input->post('user_id');
		$party_id=$this->input->post('party_id');
		$data=$this->MStoreGlobal_Modal->fetch_cre_deb_payments_mdl($user_id,$party_id);
		echo json_encode($data);
	}
	

	function update_pay_recive_amount_by_pay_recive_amount()
	{
		$user_id=$this->input->post('user_id');
		$trans_det_id=$this->input->post('trans_det_id');
		$txtpayRecieveAmt=$this->input->post('txtpayRecieveAmt');
		$txtpayRecieved_new_balAmt=$this->input->post('txtpayRecieved_new_balAmt');
		$Party_id=$this->input->post('Party_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$payment_method=$this->input->post('payment_method');
		$payment_credit_to_ledger=$this->input->post('payment_credit_to_ledger');
		
		$this->MStoreGlobal_Modal->update_pay_recive_amount_by_pay_recive_amount_mdl($user_id,$trans_det_id,$txtpayRecieveAmt,$txtpayRecieved_new_balAmt,$Party_id,$sale_purchase_type_id,$payment_method,$payment_credit_to_ledger);
	}


	function fetch_new_payment_details()
	{
		$user_id=$this->input->post('user_id');
		$invoice_id=$this->input->post('invoice_id');
		
		$data=$this->MStoreGlobal_Modal->fetch_new_payment_details_mdl($user_id,$invoice_id);
		echo json_encode($data);  
	}


	function fetch_old_payment_details()
	{
		$user_id=$this->input->post('user_id');
		$trans1_fetch_id=$this->input->post('trans1_fetch_id');
		$payRecParty_id=$this->input->post('payRecParty_id');
		
		$data=$this->MStoreGlobal_Modal->fetch_old_payment_details_mdl($user_id,$trans1_fetch_id,$payRecParty_id);
		echo json_encode($data);  
	}


	function fetch_payrecive_remaing_trn1Id()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$payRecParty_id=$this->input->post('payRecParty_id');
		$data=$this->MStoreGlobal_Modal->fetch_payrecive_remaing_trn1Id_mdl($user_id,$sale_purchase_type_id,$payRecParty_id);
		echo json_encode($data);
	}

	function fetch_updated_payment_detail()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$par_id=$this->input->post('par_id');
		
		$data=$this->MStoreGlobal_Modal->fetch_updated_payment_detail_mdl($user_id,$sale_purchase_type_id,$par_id);
		echo json_encode($data);
	}
	
	function fetch_payment_method_ledger_in_option()
	{
		$user_id=$this->input->post('user_id');
		$payment_method=$this->input->post('payment_method');

		$data=$this->MStoreSale_Modal->fetch_payment_method_ledger_in_option_mdl($user_id,$payment_method);
		echo json_encode($data);
	}
	
	
	function fetch_payment_method_in_option()
	{
		$user_id=$this->input->post('user_id');

		$data=$this->MStoreSale_Modal->fetch_payment_method_in_option_mdl($user_id);
		echo json_encode($data);
	}
	
	
	function fetch_cre_deb_details_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$party_id=$this->input->post('party_id');
		$data=$this->MStoreGlobal_Modal->fetch_cre_deb_details_in_tbody_mdl($user_id,$party_id);
		echo json_encode($data);
	}
	
	function fetch_cre_details_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$party_id=$this->input->post('party_id');
		$data=$this->MStoreGlobal_Modal->fetch_cre_details_in_tbody_mdl($user_id,$party_id);
		echo json_encode($data);
	}
 	
	function fetch_last_transid()
	{
		$user_id=$this->input->post('user_id');
		$party_id=$this->input->post('party_id');
		$data=$this->MStoreGlobal_Modal->fetch_last_transid_mdl($user_id,$party_id);
		echo json_encode($data);
	}

	
	function fetch_all_admin_debtors()
	{
		$data=$this->MStoreGlobal_Modal->fetch_all_admin_debtors_mdl();
		echo json_encode($data);
	}

	
	function cred_deb_trans_details($new_party_id)
	{
		$data['new_party_id']=$new_party_id;
        $this->load->view('Store_module/Admin/Reports/transaction_details_debtors',$data);
	}
	
	function deb_trans_details($new_party_id)
	{
		$data['new_party_id']=$new_party_id;
        $this->load->view('Store_module/Admin/Reports/transaction_details_creditors',$data);
	}
	
	
	
	function fetch_cre_deb_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$trans_cate=$this->input->post('trans_cate');
		$creditor_debtor_type=$this->input->post('creditor_debtor_type');
		$data=$this->MStoreGlobal_Modal->fetch_cre_deb_in_tbody_mdl($user_id,$trans_cate,$creditor_debtor_type);
		echo json_encode($data);
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
	
	function fetch_Sale_details_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$voucher_number=$this->input->post('voucher_number');
		$srch_sale_party=$this->input->post('srch_sale_party');
		$voucher_date1=$this->input->post('voucher_date1');
		$voucher_date2=$this->input->post('voucher_date2');
		$search_btn=$this->input->post('search_btn');
		
		
		$data=$this->MStoreGlobal_Modal->fetch_Sale_details_in_tbody_mdl($user_id,$sale_purchase_type_id,$voucher_number,$srch_sale_party,$voucher_date1,$voucher_date2,$search_btn);
		echo json_encode($data);  
	}
	
	public function fetch_members_all_details_in_admin()
	{
		$member_id=$this->input->post('member_id');
		$data=$this->AdminFranchises_Modal->fetch_members_all_details_in_admin_mdl($member_id);
		echo json_encode($data);
	}
	
	public function update_members_in_admin()
	{
		$kishan_name=$this->input->post('kishan_name');
		$kishan_dateob=$this->input->post('kishan_dateob');
		$kishan_father=$this->input->post('kishan_father');
		$mobile_no=$this->input->post('mobile_no');
		$email_id=$this->input->post('email_id');
		$kishan_address=$this->input->post('kishan_address');
		$doc_type=$this->input->post('doc_type');
		$doc_no=$this->input->post('doc_no');
		$name_of_crop=$this->input->post('name_of_crop');
		$tot_land=$this->input->post('tot_land');
		$tot_cultivable_land=$this->input->post('tot_cultivable_land');
		$tot_uncultivable_land=$this->input->post('tot_uncultivable_land');
		$userpass=$this->input->post('userpass');
		$txt_hide_member_id=$this->input->post('txt_hide_member_id');
		$data=$this->AdminFranchises_Modal->update_members_in_admin_mdl($kishan_name,$kishan_dateob,$kishan_father,$mobile_no,$email_id,$kishan_address,$doc_type,$doc_no,$name_of_crop,$tot_land,$tot_cultivable_land,$tot_uncultivable_land,$userpass,$txt_hide_member_id);
		// echo json_encode($data);
	}


	function admin_purchase_summary()
	{
        $this->load->view('Store_module/Admin/Reports/Purchase_summary');
	}

	function admin_all_creditors_list()
	{
        $this->load->view('Store_module/Admin/Reports/creditors');
	}

	function admin_all_debtors_list()
	{
        $this->load->view('Store_module/Admin/Reports/debtors');
	}

	function home()
	{
        $this->load->view('Store_module/Admin/dashboard_home');
	}

	function product_group()
	{
        $this->load->view('Store_module/Admin/Masters/Product_group/product_group');
	}
	
	function service_group()
	{
        $this->load->view('Store_module/Admin/Masters/service_group/service_group');
	}
	
	function products()
	{
        $this->load->view('Store_module/Admin/Masters/Product/products');
	}
	
	function services()
	{
        $this->load->view('Store_module/Admin/Masters/service/services');
	}
	
	function account_group()
	{
        $this->load->view('Store_module/Admin/Masters/Account/account_group');
	}
	
	function accounts()
	{
        $this->load->view('Store_module/Admin/Masters/ladger/ladger');
	}
	
	function material_group()
	{
        $this->load->view('Store_module/Admin/Masters/Material_center/material_group');
	}
	
	function material_center()
	{
        $this->load->view('Store_module/Admin/Masters/Material_center/material_center');
	}
	
	function bv_setting()
	{
        $this->load->view('Store_module/Admin/Settings/bv');
	}
	
	function all_franchises()
	{
        $this->load->view('Store_module/Admin/Franchises/franchises_page');
	}
	
	function franchise_products()
	{
        $this->load->view('Store_module/Admin/Franchises/franchises_products');
	}
	
	function purchase_order_admin()
	{
        $this->load->view('Store_module/Admin/Inventory/purchase_order');
	}
	
	function stckinOut_admin()
	{
        $this->load->view('Store_module/Admin/Stock/stockINOUT');
	}
	
	function admin_products_on_franchise_details()
	{
        $this->load->view('Store_module/Admin/Franchises/admin_products_on_franchise');
	}
	
	function admin_product_expiration()
	{
        $this->load->view('Store_module/Admin/Notifications/product_expiration');
	}
	
	function issue_prod_to_franchise()
	{
        $this->load->view('Store_module/Admin/Inventory/product_issue_franchise');
	}
	
	function purchase_admin_self_product()
	{
        $this->load->view('Store_module/Admin/Inventory/purchase');
	}
	
	function all_members_list()
	{
        $this->load->view('Store_module/Admin/Reports/members_list');
	}
	
	function report_franchises_sale()
	{
        $this->load->view('Store_module/Admin/Reports/franchise_stockout_sale');
	}
	
	function recharge_members_in_admin()
	{
		$recharge_amt_mem=$this->input->post('recharge_amt_mem');
		$admin_id=$this->input->post('admin_id');
		$member_id=$this->input->post('member_id');
		$data=$this->AdminFranchises_Modal->recharge_members_in_admin_mdl($recharge_amt_mem,$admin_id,$member_id);
		echo json_encode($data);  ;
	}
	
	function fetch_all_members_in_admin()
	{
		// $user_id=$this->input->post('user_id');
		$data=$this->AdminFranchises_Modal->fetch_all_members_in_admin_mdl();
		echo json_encode($data);  ;
	}
	
	function fetch_all_franchise()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminFranchises_Modal->fetch_all_franchise($user_id);
		echo json_encode($data);  ;
	}
	
	function fetch_franchise_product_detail_in_tbody()
	{
		$user_id=$this->input->post('franchise_id');
		$data=$this->AdminFranchises_Modal->fetch_franchise_product_detail_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	function fetch_admin_product_detail_franchise_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminFranchises_Modal->fetch_admin_product_detail_franchise_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}

}




