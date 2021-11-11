<?php

class MStoreGlobal_Modal extends CI_Model
{
    function fetch_all_admin_debtors_mdl()
    {		
		$query = $this->db->query("CALL fetch_all_admin_debtors()");

        return $query->result();
    }
	
    function fetch_total_trn_graph_mdl($user_id,$trn_type)
    {		
		$query = $this->db->query("CALL fetch_mstore_total_trn_graph_details('".$user_id."','".$trn_type."')");

        return $query->result();
    }
	
    function fetch_royalty_to_admin_in_tbody_mdl($user_id,$voucher_date1,$voucher_date2)
    {		
		$query = $this->db->query("CALL fetch_mstore_royalty_to_admin('".$user_id."','".$voucher_date1."','".$voucher_date2."')");

        return $query->result();
    }
	
    function bell_notifications_prosid_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_bell_notifications_prosid('".$user_id."')");

        return $query->result();
    }
	
    function bell_notifications_prosqtys_mdl($user_id,$prosid)
    {		
		$query = $this->db->query("CALL fetch_mstore_bell_notifications_prosqtys('".$user_id."','".$prosid."')");

        return $query->result();
    }
	
    function fetch_last_transid_mdl($user_id,$party_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_cre_deb_last_transid('".$user_id."','".$party_id."')");

        return $query->result();
    }
	
    function fetch_cre_details_in_tbody_mdl($user_id,$party_id)
    {		
		$query = $this->db->query("CALL get_admin_creditor_transaction_details('".$party_id."')");

        return $query->result();
    }
	
	
    function fetch_cre_deb_details_in_tbody_mdl($user_id,$party_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_cre_deb_details('".$user_id."','".$party_id."')");

        return $query->result();
    }
	
    function fetch_cre_deb_payments_mdl($user_id,$party_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_cre_deb_payments('".$user_id."','".$party_id."')");

        return $query->result();
    }
	
    function fetch_cre_deb_in_tbody_mdl($user_id,$trans_cate,$creditor_debtor_type)
    {		
		$query = $this->db->query("CALL fetch_mstore_creditors_debtors_list('".$creditor_debtor_type."','".$user_id."','".$trans_cate."')");

        return $query->result();
    }
	
    function fetch_bell_expiry_product_details_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_bell_notifications_expiry_date('".$user_id."')");

        return $query->result();
    }
	
	/*-----------------------------------------------------------------------------------------------------------*/	

	function fetch_PayRemain_in_tbody_mdl($user_id,$sale_purchase_type_id,$party_type)
    {		
		$query = $this->db->query("CALL fetch_mstore_payremaning_details_by_party('".$user_id."','".$sale_purchase_type_id."','".$party_type."')");
        return $query->result();
    }
	
	function fetch_payrecive_remaing_trn1Id_mdl($user_id,$sale_purchase_type_id,$payRecParty_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_payrecive_remaing_trn1Id('".$user_id."','".$sale_purchase_type_id."','".$payRecParty_id."')");
        return $query->result();
    }
	
	function update_pay_recive_amount_by_pay_recive_amount_mdl($user_id,$trans_det_id,$txtpayRecieveAmt,$txtpayRecieved_new_balAmt,$Party_id,$sale_purchase_type_id,$payment_method,$payment_credit_to_ledger)
    {		
		$query = $this->db->query("CALL update_mstore_pay_recive_amount_by_pay_recive_amount('".$user_id."','".$trans_det_id."','".$txtpayRecieveAmt."','".$txtpayRecieved_new_balAmt."','".$Party_id."','".$sale_purchase_type_id."','".$payment_method."','".$payment_credit_to_ledger."')");
        // return $query->result();
    }
	
	function fetch_updated_payment_detail_mdl($user_id,$sale_purchase_type_id,$par_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_updated_payment_detail('".$user_id."','".$sale_purchase_type_id."','".$par_id."')");
        return $query->result();
    }

	/*-----------------------------------------------------------------------------------------------------------*/	



	function fetch_Sale_summary_in_tbody_mdl($user_id,$sale_purchase_type_id)
    {		
		//$query = $this->db->query("CALL fetch_mstore_sale_summary_intbody('".$user_id."','".$sale_purchase_type_id."')");
		$query = $this->db->query("CALL fetch_mstore_purchase_sale_summary('".$user_id."','".$sale_purchase_type_id."')");

        return $query->result();
		
    }
	
	  function fetch_Purchase_summary_in_tbody_md($user_id,$sale_purchase_type_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_purchase_summary_intbody('".$user_id."','".$sale_purchase_type_id."')");

        return $query->result();
		
    }
	
	  function fetch_Sale_details_in_tbody_mdl($user_id,$sale_purchase_type_id,$voucher_number,$srch_sale_party,$voucher_date1,$voucher_date2,$search_btn)
    {		
		$query = $this->db->query("CALL fetch_mstore_filtered_sale_purchase_summery_details('".$user_id."','".$sale_purchase_type_id."','".$voucher_date1."','".$voucher_date2."','".$voucher_number."','".$srch_sale_party."','".$search_btn."','0','1000')");

        return $query->result();
		
    }
	
		  function fetch_Purchase_details_in_tbody_md($user_id,$sale_purchase_type_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_purchase_details_intbody('".$user_id."','".$sale_purchase_type_id."')");

        return $query->result();
		
    }
		function fetch_sale_Purchase_details_in_tbody_md($user_id,$sale_purchase_type_id,$transid)
    {		
		$query = $this->db->query("CALL fetch_mstore_sale_purchase_summary_details('".$user_id."','".$sale_purchase_type_id."','".$transid."')");

        return $query->result();
    }
	
	function fetch_prev_bal_mdl($user_id,$tran1Id,$par_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_trans_summary_prev_bal('".$user_id."','".$tran1Id."','".$par_id."')");

        return $query->result();
    }
	
	function fetch_cashbackCrDr_mdl($user_id,$sale_purchase_type_id,$voucher_date1,$voucher_date2,$search_btn)
    {		
		$query = $this->db->query("CALL fetch_mstore_cash_bank_book('".$user_id."','".$sale_purchase_type_id."','".$voucher_date1."','".$voucher_date2."')");

        return $query->result();
    }
	
	function fetch_admin_order_cash_bank_book_mdl($user_id,$voucher_date1,$voucher_date2,$search_btn)
    {		
		$query = $this->db->query("CALL fetch_admin_order_cash_bank_book('".$user_id."','".$voucher_date1."','".$voucher_date2."')");

        return $query->result();
    }
	
	function fetch_date_wise_clear_credit($user_id,$sale_purchase_type_id,$voucher_date1,$voucher_date2)
    {		
		$query = $this->db->query("CALL fetch_date_wise_clear_credit('".$user_id."','".$sale_purchase_type_id."','".$voucher_date1."','".$voucher_date2."')");

        return $query->result();
    }
	
	function fetch_date_wise_wallet_details($user_id,$voucher_date1,$voucher_date2)
    {		
		$query = $this->db->query("CALL fetch_date_wise_wallet_details('".$user_id."','".$voucher_date1."','".$voucher_date2."')");

        return $query->result();
    }
	
	function fetch_old_payment_details_mdl($user_id,$trans1_fetch_id,$payRecParty_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_old_payment_details_dr_cr('".$user_id."','".$trans1_fetch_id."','".$payRecParty_id."')");

        return $query->result();
    }
	
	function fetch_new_payment_details_mdl($user_id,$invoice_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_new_payment_details_dr_cr('".$user_id."','".$invoice_id."')");

        return $query->result();
    }
	
	function fetch_count_of_products_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_count_of_products('".$user_id."')");

        return $query->result();
    }
	
	function fetch_count_of_accounts_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_count_of_accounts('".$user_id."')");

        return $query->result();
    }
	
	
	function fetch_batch_remaining_qty_by_user($user_id,$prod_id)
    {		
		$query = $this->db->query("CALL fetch_batch_remaining_qty_by_user('".$user_id."','".$prod_id."')");

        return $query->result();
    }
	
	
	function fetch_debtors_report_mdl($user_id,$short_by,$search_btn,$trans_category,$party_type)
	{
		if($short_by==0)
		{
			$query = $this->db->query("CALL fetch_mstore_party_detail_inreport_by_par_name('".$user_id."','".$short_by."','".$search_btn."','".$trans_category."','".$party_type."')");
			return $query->result();
		}
		else if($short_by==1)
		{
			$query = $this->db->query("CALL fetch_mstore_party_detail_inreport_by_state('".$user_id."','".$short_by."','".$search_btn."','".$trans_category."','".$party_type."')");
			return $query->result();
		}
		/* else if($short_by==2)
		{
			$query = $this->db->query("CALL fetch_mstore_product_detail_inreport_quantity('".$user_id."','".$short_by."','".$search_btn."','".$trans_category."')");
			return $query->result();
		}
		else if($short_by==3)
		{
			$query = $this->db->query("CALL fetch_mstore_product_detail_inreport_price('".$user_id."','".$short_by."','".$search_btn."','".$trans_category."')");
			return $query->result();
		}
		else if($short_by==4)
		{
			$query = $this->db->query("CALL fetch_mstore_product_detail_inreport_demand('".$user_id."','".$short_by."','".$search_btn."','".$trans_category."')");
			return $query->result();
		} */
    }	 

	
}

?>