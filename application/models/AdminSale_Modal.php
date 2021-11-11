<?php

class AdminSale_Modal extends CI_Model
{
		
    function delete_old_transaction2_mdl($user_id,$trn1_id,$trn_2_id)
    {		
		$query = $this->db->query("CALL delete_old_transaction2('".$user_id."','".$trn1_id."','".$trn_2_id."')");

        // return $query->result();
    }
		
    function update_monitory_trans_mdl($user_id,$trans1ID,$paying_amt,$ramain_amt,$pro_tot_amt_sum_spn,$payment_method,$payment_credit_to_ledger,$payment_from_bank_by)
    {		
		$query = $this->db->query("CALL update_monitory_trans('".$user_id."','".$trans1ID."','".$paying_amt."','".$ramain_amt."','".$pro_tot_amt_sum_spn."','".$payment_method."','".$payment_credit_to_ledger."','".$payment_from_bank_by."')");

        // return $query->result();
    }
		
    function update_sale_mdl($user_id,$trans1ID,$tot_all_discount_amt,$txt_narration)
    {		
		$query = $this->db->query("CALL update_sale('".$user_id."','".$trans1ID."','".$tot_all_discount_amt."','".$txt_narration."')");

        // return $query->result();
    }
		
    function save_updated_sale_purchase_product_mdl($user_id,$trn1_id,$trn_2_id,$id_of_party,$proc_id,$prod_qty)
    {		
		$query = $this->db->query("CALL save_updated_sale_purchase_product('".$user_id."','".$trn1_id."','".$trn_2_id."','".$id_of_party."','".$proc_id."','".$prod_qty."')");

        // return $query->result();
    }
	
    function fetch_sale_purchase_trans1_details_mdl($user_id,$voucher_number,$trans_category)
    {		
		$query = $this->db->query("CALL fetch_sale_purchase_trans1_details('".$user_id."','".$voucher_number."','".$trans_category."')");

        return $query->result();
    }
		
    function fetch_sale_purchase_trans2_details_mdl($user_id,$voucher_number)
    {		
		$query = $this->db->query("CALL fetch_sale_purchase_trans2_details('".$user_id."','".$voucher_number."')");

        return $query->result();
    }
		
    function fetch_order_bill_series_in_series_option_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_porder_bill_no_count('".$user_id."')");

        return $query->result();
    }
		
    function fetch_bill_series_in_series_option_mdl($user_id,$trans_category)
    {		
		$query = $this->db->query("CALL fetch_mstore_bill_no_count('".$user_id."','".$trans_category."')");

        return $query->result();
    }
		
    function chk_franchise_type($user_id)
    {		
		$query = $this->db->query("CALL chk_franchise_type('".$user_id."')");

        return $query->result();
    }
		
    function fetch_all_products_on_search_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_all_products_on_search('".$user_id."')");

        return $query->result();
    }
	
    function fetch_parties_in_option_mdl($franchise_type)
    {		
		$query = $this->db->query("CALL fetch_all_parties_in_option('".$franchise_type."')");

        return $query->result();
    }
	
    function find_mobile_address_details_mdl($parent_id)
    {		
		$query = $this->db->query("CALL fetch_parent_party_mobile_address_details('".$parent_id."')");

        return $query->result();
    }
	
	
    function save_member_payment_status_mdl($user_id,$last_id,$member_id,$sale_party,$mem_e_wallet,$pay_by_ewallet_status,$e_wallet_add_to_me)
    {		
		$query = $this->db->query("CALL fetch_mstore_member_payment_status('".$user_id."','".$last_id."','".$member_id."','".$sale_party."','".$mem_e_wallet."','".$pay_by_ewallet_status."','".$e_wallet_add_to_me."')");
    }
	
	
    function srch_party_by_text_mdl($user_id,$srch_sale_party_val,$ladger_type)
    {		
		$query = $this->db->query("CALL fetch_mstore_srch_party_by_text('".$user_id."','".$srch_sale_party_val."','".$ladger_type."')");

        return $query->result();
    }
	
    function fetch_seller_name_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_seller_name('".$user_id."')");

        return $query->result();
    }
	
    function fetch_real_bv_mdl()
    {		
		$query = $this->db->query("CALL fetch_real_bv()");

        return $query->result();
    }
	
	
    function fetch_billoder_prefix_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_order_bill_prefix('".$user_id."')");

        return $query->result();
    }
	
	
    function fetch_bill_prefix_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_sale_bill_prefix('".$user_id."')");

        return $query->result();
    }

    function fetch_sale_party_all_details_by_id_mdl($user_id,$sale_party_id,$trans_category)
    {		
		$query = $this->db->query("CALL fetch_mstore_sale_party_all_details_by_id_mdl('".$user_id."','".$sale_party_id."','".$trans_category."')");

        return $query->result();
    }

    function fetch_sale_party_all_details_by_id_in_recipt_mdl($user_id,$sale_party_id,$trans_category,$trans_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_sale_party_all_details_by_id_in_recipt('".$user_id."','".$sale_party_id."','".$trans_category."','".$trans_id."')");

        return $query->result();
    }

    function fetch_user_region_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_user_region('".$user_id."')");

        return $query->result();
    }

    function fetch_bill_seriesCount_from_transaction_initbl_mdl($user_id,$series_id,$trans_category)
    {		
		$query = $this->db->query("CALL fetch_bill_seriesCount_from_transaction_initbl('".$user_id."','".$series_id."','".$trans_category."')");

        return $query->result();
    }


    function fetch_admin_product_lists_fitered_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_admin_product_lists_fitered('".$user_id."')");

        return $query->result();
    }

    function fetch_product_lists_fitered_mdl($user_id,$pros_name)
    {		
		$query = $this->db->query("CALL fetch_product_lists_fitered('".$user_id."','".$pros_name."')");

        return $query->result();
    }


    function fetch_pros_admin_details_filter2_mdl($user_id,$product_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_pros_admin_details_filter2('".$user_id."','".$product_id."')");

        return $query->result();
    }

    function fetch_pros_all_details_filter2_mdl($user_id,$product_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_pros_all_details_filter2('".$user_id."','".$product_id."')");

        return $query->result();
    }


    function fetch_pros_all_details_by_barcode_filter2_mdl($user_id,$barcode_no)
    {		
		$query = $this->db->query("CALL fetch_mstore_pros_all_details_by_barcode_filter2('".$user_id."','".$barcode_no."')");

        return $query->result();
    }


    function fetch_pros_ttl_qty_mdl($user_id,$pros_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_pros_ttl_qty('".$user_id."','".$pros_id."')");

        return $query->result();
    }


    function fetch_admin_prod_ttl_qty_mdl($parent_id,$pros_id)
    {		
		$query = $this->db->query("CALL fetch_admin_prod_ttl_qty('".$parent_id."','".$pros_id."')");

        return $query->result();
    }


    function fetch_material_center_in_option_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_material_center_in_option('".$user_id."')");

        return $query->result();
    }


    function fetch_payment_method_in_option_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_payment_method_category('".$user_id."')");

        return $query->result();
    }

    function fetch_payment_method_ledger_in_option_mdl($user_id,$payment_method)
    {		
		$query = $this->db->query("CALL fetch_payment_method_ledger('".$user_id."','".$payment_method."')");

        return $query->result();
    }



    function fetch_accounts_in_option_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_all_sale_party_ladger('".$user_id."')");

        return $query->result();
    }



    function fetch_recipt_trn1_in_sale_page_mdl($user_id,$trans_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_recipt_trn1_in_sale_page('".$user_id."','".$trans_id."')");

        return $query->result();
    }


    function fetch_recipt_trn2_in_sale_page_mdl($user_id,$trans_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_recipt_trn2_in_sale_page('".$user_id."','".$trans_id."')");

        return $query->result();
    }

	function save_order_mdl($user_id,$franchise_type,$sale_party,$voucher_number,$voucher_date,$indent_no,$indent_date,$mat_center,$voucher_prefix,$voucher_last_no)
    {		
		$query = $this->db->query("CALL save_order1('".$user_id."','".$franchise_type."','".$sale_party."','".$voucher_number."','".$voucher_date."','".$indent_no."','".$indent_date."','".$mat_center."','".$voucher_prefix."','".$voucher_last_no."')");
		
		
		$query2 = $this->db->query("CALL get_mstore_order1_lastid('".$user_id."','".$franchise_type."','".$sale_party."')");
		return $query2->result();
   }



	function save_sale_mdl($user_id,$trans_category,$voucher_number,$mat_center,$sale_party,$srch_sale_party,$mobile_no,$voucher_date,$tax_region,$voucher_prefix,$voucher_last_no,$indent_no,$indent_date,$tot_all_discount_amt,$txt_address,$txt_narration,$pay_recieve_status,$shipping_charges_amt,$full_date_time)
    {		
		$query = $this->db->query("CALL save_trans1('".$user_id."','".$trans_category."','".$voucher_number."','".$mat_center."','".$sale_party."','".$srch_sale_party."','".$mobile_no."','".$voucher_date."','".$tax_region."','".$voucher_prefix."','".$voucher_last_no."','".$indent_no."','".$indent_date."','".$tot_all_discount_amt."','".$txt_address."','".$txt_narration."','".$pay_recieve_status."','".$shipping_charges_amt."','".$full_date_time."')");
		
		
		$query2 = $this->db->query("CALL get_mstore_trans1_lastid('".$user_id."','".$sale_party."','".$srch_sale_party."')");
		return $query2->result();
   }
	
	function save_sale_return_mdl($user_id,$trans_category,$voucher_number,$mat_center,$sale_party,$srch_sale_party,$mobile_no,$voucher_date,$tax_region,$voucher_prefix,$voucher_last_no,$indent_no,$indent_date,$tot_all_discount_amt,$txt_address,$txt_narration,$pay_recieve_status)
    {		
		$query = $this->db->query("CALL save_trans1_return('".$user_id."','".$trans_category."','".$voucher_number."','".$mat_center."','".$sale_party."','".$srch_sale_party."','".$mobile_no."','".$voucher_date."','".$tax_region."','".$voucher_prefix."','".$voucher_last_no."','".$indent_no."','".$indent_date."','".$tot_all_discount_amt."','".$txt_address."','".$txt_narration."','".$pay_recieve_status."')");
		
		
		$query2 = $this->db->query("CALL get_mstore_trans1_lastid('".$user_id."','".$voucher_number."')");
		return $query2->result();
   }
	
	function pur_order_payments_mdl($user_id,$last_id,$paying_amt,$txt_narration)
    {		
		$query = $this->db->query("CALL save_pur_order_payments('".$user_id."','".$last_id."','".$paying_amt."','".$txt_narration."')");
	}
	
	function save_monitory_trans_mdl($user_id,$last_id,$transAcc,$paying_amt,$ramain_amt,$voucher_date,$trans_category,$sale_party,$pro_tot_amt_sum_spn,$payment_method,$payment_credit_to_ledger,$payment_from_bank_by)
    {		
		$query = $this->db->query("CALL save_mstore_monitory_trans('".$user_id."','".$last_id."','".$transAcc."','".$paying_amt."','".$ramain_amt."','".$voucher_date."','".$trans_category."','".$sale_party."','".$pro_tot_amt_sum_spn."','".$payment_method."','".$payment_credit_to_ledger."','".$payment_from_bank_by."')");
	}
	
	
	function save_order2_mdl($user_id,$sale_party,$order1_id,$probarcode,$proid,$proqty,$proprice,$proamt)
    {		
		if (mysqli_more_results($this->db->conn_id))
		{
			mysqli_next_result($this->db->conn_id);
		}
		$query = $this->db->query("CALL save_order2('".$sale_party."','".$user_id."','".$order1_id."','".$probarcode."','".$proid."','".$proqty."','".$proprice."','".$proamt."')");

		$rawdata=$query->result();

		if($rawdata==TRUE)
		{
			foreach($rawdata as $r):
				$trans_2_id=$r->trans_2_id;
				
				$in_out1="1";
				$in_out2="2";
				if (mysqli_more_results($this->db->conn_id))
				{
					mysqli_next_result($this->db->conn_id);
				}
				
				$this->db->query("CALL save_mstore_sale_product_stock('".$user_id."','".$probarcode."','".$proid."','".$proqty."','".$in_out1."','".$order1_id."','".$trans_2_id."')");
				if (mysqli_more_results($this->db->conn_id))
				{
					mysqli_next_result($this->db->conn_id);
				}
				
				$this->db->query("CALL save_mstore_sale_product_stock('".$sale_party."','".$probarcode."','".$proid."','".$proqty."','".$in_out2."','".$order1_id."','".$trans_2_id."')");
			endforeach;
		}
	}
	
	function save_batch_transaction_mdl($user_id,$batch_proid,$batch_no,$mfg,$expd,$qty,$mrp,$salep,$inout_state)
    {		
		$query = $this->db->query("CALL save_batch_transaction('".$user_id."','".$batch_proid."','".$batch_no."','".$mfg."','".$expd."','".$qty."','".$mrp."','".$salep."','".$inout_state."')");

	}
	
	function save_sale_trans2_mdl($user_id,$probarcode,$proid,$proqty,$proprice,$proamt,$proigst,$prosgst,$procgst,$proigstamt,$prosgstamt,$procgstamt,$progrossamt,$last_id,$prodisamt)
    {		
		$query = $this->db->query("CALL save_trans2('".$user_id."','".$probarcode."','".$proid."','".$proqty."','".$proprice."','".$proamt."','".$proigst."','".$prosgst."','".$procgst."','".$proigstamt."','".$prosgstamt."','".$procgstamt."','".$progrossamt."','".$last_id."','".$prodisamt."')");

		$query2 = $this->db->query("CALL fetch_trans2_save_last_id('".$user_id."','".$probarcode."','".$proid."','".$last_id."')");
        return $query2->result();
	}
	
	function save_sale_product_stock_mdl($user_id,$probarcode,$proid,$proqty,$mat_center,$trans1_id,$trans2_id,$in_out)
    {		
		$query = $this->db->query("CALL save_mstore_sale_product_stock('".$user_id."','".$probarcode."','".$proid."','".$proqty."','".$in_out."','".$mat_center."','".$trans1_id."','".$trans2_id."')");
		
    }
	
	
    function fetch_sale_data_onChart_mdl($user_id,$trans_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_sale_data_onChart('".$user_id."','".$trans_id."')");

        return $query->result();
    }
	
    function save_new_party_glob_mdl($user_id,$party_parent_group,$new_party_name,$party_mob_no,$party_e_mail,$party_state,$party_city,$party_address,$party_type_of_dealer,$party_gstIn_uin,$party_op_balance,$openBalRdo,$party_prev_yr_bal,$prevBalRdo,$member_type_flag,$member_real_id)
    {		
		$query = $this->db->query("CALL save_mstore_new_party_glob('".$user_id."','".$party_parent_group."','".$new_party_name."','".$party_mob_no."','".$party_e_mail."','".$party_state."','".$party_city."','".$party_address."','".$party_type_of_dealer."','".$party_gstIn_uin."','".$party_op_balance."','".$openBalRdo."','".$party_prev_yr_bal."','".$prevBalRdo."','".$member_type_flag."','".$member_real_id."')");
         return $query->result();
   }

    function fetch_account_group_in_sale_purchase_mdl($user_id,$group_type)
    {		
		$query = $this->db->query("CALL save_mstore_account_group_in_sale_purchase('".$user_id."','".$group_type."')");

        return $query->result();
    }


    function save_purchase_batches_mdl($last_id,$user_id,$proid,$new_batch_no,$new_mfd_date,$new_exp_date,$new_batch_qty,$inout_state)
    {		
		$query = $this->db->query("CALL save_purchase_batches('".$user_id."','".$last_id."','".$proid."','".$new_batch_no."','".$new_mfd_date."','".$new_exp_date."','".$new_batch_qty."','".$inout_state."')");

    }


    function save_purchase_trans2_mdl($user_id,$probarcode,$proid,$proqty,$proprice,$proamt,$proigst,$prosgst,$procgst,$proigstamt,$prosgstamt,$procgstamt,$progrossamt,$last_id,$prodisamt)
    {		
		$query = $this->db->query("CALL save_purchase_trans2('".$user_id."','".$probarcode."','".$proid."','".$proqty."','".$proprice."','".$proamt."','".$proigst."','".$prosgst."','".$procgst."','".$proigstamt."','".$prosgstamt."','".$procgstamt."','".$progrossamt."','".$last_id."','".$prodisamt."')");
		$rawdata=$query->result();
		
		if($rawdata==TRUE)
		{
			foreach($rawdata as $r):
				$trans_2_id=$r->trans_2_id;
				/* $p_qty=$r->p_qty;
				$p_t2_id=$r->p_t2_id;
				$p_barcode=$r->p_barcode; */
				
				$in_out="1";
				if (mysqli_more_results($this->db->conn_id))
				{
					mysqli_next_result($this->db->conn_id);
				}
				
				$query = $this->db->query("CALL save_mstore_sale_product_stock('".$user_id."','".$probarcode."','".$proid."','".$proqty."','".$in_out."','".$last_id."','".$trans_2_id."')");
			endforeach;
		}

    }


}

?>