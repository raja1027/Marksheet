<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreGlobal_Control extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }


	function backup_db()
	{
		$this->load->dbutil();
		$db_format=array('format'=>'zip','filename'=>'my_db_backup.sql');
		$backup=& $this->dbutil->backup($db_format);
		$dbname='backup-on'.date('Y-m-d').'.zip';
		$save='assets/db_backup/'.$dbname;
		write_file($save,$backup);
		// system('zip -j -P pass '.$dbname.' '.$save.' ');
		force_download($dbname,$backup);
		
	}


	function fetch_total_trn_graph()
	{
		$user_id=$this->input->post('user_id');
		$trn_type=$this->input->post('trn_type');
		$data=$this->MStoreGlobal_Modal->fetch_total_trn_graph_mdl($user_id,$trn_type);
		echo json_encode($data);
	}

	function fetch_royalty_to_admin_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$voucher_date1=$this->input->post('voucher_date1');
		$voucher_date2=$this->input->post('voucher_date2');
		$data=$this->MStoreGlobal_Modal->fetch_royalty_to_admin_in_tbody_mdl($user_id,$voucher_date1,$voucher_date2);
		echo json_encode($data);
	}

	function bell_notifications_prosid()
	{
		$user_id=$this->input->post('user_id');

		$data=$this->MStoreGlobal_Modal->bell_notifications_prosid_mdl($user_id);
		echo json_encode($data);
	}



	function bell_notifications_prosqtys()
	{
		$user_id=$this->input->post('user_id');
		$prosid=$this->input->post('prosid');

		$data=$this->MStoreGlobal_Modal->bell_notifications_prosqtys_mdl($user_id,$prosid);
		echo json_encode($data);
	}
	
	function fetch_bell_expiry_product_details()
	{
		$user_id=$this->input->post('user_id');

		$data=$this->MStoreGlobal_Modal->fetch_bell_expiry_product_details_mdl($user_id);
		echo json_encode($data);
	}
	
	
	/*------------------------------*/
	
	function cred_deb_trans_details($new_party_id)
	{
		$data['new_party_id']=$new_party_id;
        $this->load->view('Store_module/Transactions/sundry/transaction_details',$data);
	}
	
	function fetch_cre_deb_details_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$party_id=$this->input->post('party_id');
		$data=$this->MStoreGlobal_Modal->fetch_cre_deb_details_in_tbody_mdl($user_id,$party_id);
		echo json_encode($data);
	}
	
	function fetch_last_transid()
	{
		$user_id=$this->input->post('user_id');
		$party_id=$this->input->post('party_id');
		$data=$this->MStoreGlobal_Modal->fetch_last_transid_mdl($user_id,$party_id);
		echo json_encode($data);
	}
	
	
	function fetch_cre_deb_payments()
	{
		$user_id=$this->input->post('user_id');
		$party_id=$this->input->post('party_id');
		$data=$this->MStoreGlobal_Modal->fetch_cre_deb_payments_mdl($user_id,$party_id);
		echo json_encode($data);
	}
	
	function creditors_lists()
	{
        $this->load->view('Store_module/Transactions/sundry/creditors');
	}
	
	function royalty()
	{
        $this->load->view('Store_module/Transactions/Royalty/royalty_to_admin');
	}
	
	function debtors_lists()
	{
        $this->load->view('Store_module/Transactions/sundry/debtors');
	}
	
	function pay_remaining()
	{
        $this->load->view('Store_module/Transactions/PayRemain/Pay_Remain');
	}
	
	
	function receive_remaining()
	{
        $this->load->view('Store_module/Transactions/PayRemain/Receive_Remain');
	}
	
	function debtors_report()
	{
        $this->load->view('Store_module/Transactions/Report/debtors_report');
	}
	
	function creditors_report()
	{
        $this->load->view('Store_module/Transactions/Report/creditors_report');
	}
	
	function product_expiration()
	{
        $this->load->view('Store_module/Transactions/Notification/product_expiration');
	}
	
	function fetch_cre_deb_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$trans_cate=$this->input->post('trans_cate');
		$creditor_debtor_type=$this->input->post('creditor_debtor_type');
		$data=$this->MStoreGlobal_Modal->fetch_cre_deb_in_tbody_mdl($user_id,$trans_cate,$creditor_debtor_type);
		echo json_encode($data);
	}
	
	function fetch_pay_remaing_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$party_type=$this->input->post('party_type');
		$data=$this->MStoreGlobal_Modal->fetch_PayRemain_in_tbody_mdl($user_id,$sale_purchase_type_id,$party_type);
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

	function fetch_updated_payment_detail()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$par_id=$this->input->post('par_id');
		
		$data=$this->MStoreGlobal_Modal->fetch_updated_payment_detail_mdl($user_id,$sale_purchase_type_id,$par_id);
		echo json_encode($data);
	}
	/*------------------------------*/



	
	function sale_summary()
	{
        $this->load->view('Store_module/Transactions/Report/Sale_summary');
	}
	function sale_summary_details($tranid)
	{
		$data['tranid']=$tranid;
        $this->load->view('Store_module/Transactions/Report/Sale_summary_deatils',$data);
	}	
	function puchase_summary()
	{
        $this->load->view('Store_module/Transactions/Report/Purchase_summary');
	}
	
	function puchase_summary_details($tranid)
	{
		$data['tranid']=$tranid;
        $this->load->view('Store_module/Transactions/Report/Purchase_summary_deatils',$data);
	}
	
	function sale_detail()
	{
        $this->load->view('Store_module/Transactions/Report/Sale_detail');
	}
	
	function cash_book()
	{
        $this->load->view('Store_module/Transactions/Report/cash_book_page');
	}
	
	function wallet_details()
	{
        $this->load->view('Store_module/Transactions/Report/wallet_details_report');
	}
	
	function puchase_detail()
	{
        $this->load->view('Store_module/Transactions/Report/Purchase_detail');
	}
	/* function fetch_pay_remaing_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$data=$this->MStoreGlobal_Modal->fetch_PayRemain_in_tbody_mdl($user_id,$sale_purchase_type_id);
		echo json_encode($data);  
	} */
	function fetch_Sale_summary_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');

		$data=$this->MStoreGlobal_Modal->fetch_Sale_summary_in_tbody_mdl($user_id,$sale_purchase_type_id);
		echo json_encode($data);  
	}
	
	function fetch_Purchase_summary_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$data=$this->MStoreGlobal_Modal->fetch_Purchase_summary_in_tbody_md($user_id,$sale_purchase_type_id);
		echo json_encode($data); 
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
	
	function fetch_Purchase_details_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$data=$this->MStoreGlobal_Modal->fetch_Purchase_details_in_tbody_md($user_id,$sale_purchase_type_id);
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
        $this->load->view('Store_module/Transactions/Report/recipt_print',$data);
	}
	
	function print_recipt2($trans_completed_id)
	{
		$data['trans_completed_id']=$trans_completed_id;
        $this->load->view('Store_module/Transactions/Report/recipt_print2',$data);
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

	function fetch_date_wise_clear_credit()
	{
		$user_id=$this->input->post('user_id');
		$sale_purchase_type_id=$this->input->post('sale_purchase_type_id');
		$voucher_date1=$this->input->post('voucher_date1');
		$voucher_date2=$this->input->post('voucher_date2');
		
		$data=$this->MStoreGlobal_Modal->fetch_date_wise_clear_credit($user_id,$sale_purchase_type_id,$voucher_date1,$voucher_date2);
		echo json_encode($data);  
	}

	function fetch_date_wise_wallet_details()
	{
		$user_id=$this->input->post('user_id');
		$voucher_date1=$this->input->post('voucher_date1');
		$voucher_date2=$this->input->post('voucher_date2');
		
		$data=$this->MStoreGlobal_Modal->fetch_date_wise_wallet_details($user_id,$voucher_date1,$voucher_date2);
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

	function fetch_new_payment_details()
	{
		$user_id=$this->input->post('user_id');
		$invoice_id=$this->input->post('invoice_id');
		
		$data=$this->MStoreGlobal_Modal->fetch_new_payment_details_mdl($user_id,$invoice_id);
		echo json_encode($data);  
	}

	function fetch_debtors_report_tbody()
	{
		$user_id=$this->input->post('user_id');
		$short_by=$this->input->post('short_by');
		$search_btn=$this->input->post('search_btn');
		$trans_category=$this->input->post('trans_category');
		$party_type=$this->input->post('party_type');
		
		$data=$this->MStoreGlobal_Modal->fetch_debtors_report_mdl($user_id,$short_by,$search_btn,$trans_category,$party_type);
		echo json_encode($data);  
	}

	function fetch_count_of_products()
	{
		$user_id=$this->input->post('user_id');
		
		$data=$this->MStoreGlobal_Modal->fetch_count_of_products_mdl($user_id);
		echo json_encode($data);  
	}

	function fetch_count_of_accounts()
	{
		$user_id=$this->input->post('user_id');
		
		$data=$this->MStoreGlobal_Modal->fetch_count_of_accounts_mdl($user_id);
		echo json_encode($data);  
	}

	function fetch_products_expiration_in_tbody_store()
	{
		$user_id=$this->input->post('user_id');
		$today=$this->input->post('today');
		$datefrommonthago=$this->input->post('datefrommonthago');
		$data=$this->AdminProducts_Modal->products_expiration_in_tbody_mdl($user_id,$today,$datefrommonthago);
		echo json_encode($data);  
	}
	
}
