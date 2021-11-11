<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPurchseOrderControl extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Adminlogged_in"))
		{
			redirect("admin_login");
		}
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
	

	
/* 	function fetch_admin_prod_ttl_qty()
	{
		$parent_id=$this->input->post('parent_id');
		$pros_id=$this->input->post('pros_id');

		$data=$this->MStoreSale_Modal->fetch_admin_prod_ttl_qty_mdl($parent_id,$pros_id);
		echo json_encode($data);
	}
	 */

	public function save_order2()
	{
		$user_id=$this->input->post('user_id');

		$sale_party=$this->input->post('sale_party');
		$order1_id=$this->input->post('last_id');
		
		
		$probarcode1=$this->input->post('probarcode');
		$proid1=$this->input->post('proid');
		$proqty1=$this->input->post('proqty');
		$proprice1=$this->input->post('proprice');
		$proamt1=$this->input->post('proamt');
		
		$probatches1=$this->input->post('probatches');
		
		
		$splits_probarcode1=explode(",",$probarcode1);

		$splits_proid1=explode(",",$proid1);
		$counts_all_proid1=count($splits_proid1);

		$splits_proqty1=explode(",",$proqty1);

		$splits_proprice1=explode(",",$proprice1);

		$splits_proamt1=explode(",",$proamt1);

		//-------------- batches code starts here ------------//

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
					
					$proid=$splits_different_probatches1[0];
					$new_batch_no=$splits_different_probatches1[1];
					$new_mfd_date=$splits_different_probatches1[2];
					$new_exp_date=$splits_different_probatches1[3];
					$new_batch_qty=$splits_different_probatches1[4];
					
					$inout_state1="1";
					$inout_state2="2";

					$this->AdminSale_Modal->save_purchase_batches_mdl($order1_id,$user_id,$proid,$new_batch_no,$new_mfd_date,$new_exp_date,$new_batch_qty,$inout_state1);
					
					$this->AdminSale_Modal->save_purchase_batches_mdl($order1_id,$sale_party,$proid,$new_batch_no,$new_mfd_date,$new_exp_date,$new_batch_qty,$inout_state2);
				}
			}
		}

		//-------------- batches code ends here ------------//
		
		for($m=0;$m<$counts_all_proid1;$m++)
		{
			$probarcode=$splits_probarcode1[$m];
			$proid=$splits_proid1[$m];
			$proqty=$splits_proqty1[$m];
			$proprice=$splits_proprice1[$m];
			$proamt=$splits_proamt1[$m];

			// $data=$this->AdminSale_Modal->save_purchase_trans2_mdl($user_id,$probarcode,$proid,$proqty,$proprice,$proamt,$proigst,$prosgst,$procgst,$proigstamt,$prosgstamt,$procgstamt,$progrossamt,$order1_id,$prodisamt);

			$this->AdminSale_Modal->save_order2_mdl($sale_party,$user_id,$order1_id,$probarcode,$proid,$proqty,$proprice,$proamt);



			if($m==($counts_all_proid1-1))
			{
				echo "1";
			}
			else
			{
				echo "0";
			}

		}
		
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

	/* public function pur_order_payments()
	{
		$user_id=$this->input->post('user_id');
		$last_id=$this->input->post('last_id');
		// $pay_type=$this->input->post('pay_type');
		$paying_amt=$this->input->post('paying_amt');
		$ramain_amt=$this->input->post('ramain_amt');

		$payment_method=$this->input->post('payment_method');
		$payment_credit_to_ledger=$this->input->post('payment_credit_to_ledger');
		$txt_narration=$this->input->post('txt_narration');
		$this->MStoreSale_Modal->pur_order_payments_mdl($user_id,$last_id,$paying_amt,$txt_narration,$ramain_amt,$payment_method,$payment_credit_to_ledger);
		echo "done";
	} */
	
	public function fetch_batches_by_prod_id_on_sale()
	{
		$prod_id=$this->input->post('prod_id');
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreSale_Modal->fetch_batches_by_prod_id_on_sale_mdl($prod_id,$user_id);
		echo json_encode($data);
	}

	public function pur_order_payments()
	{
		$user_id=$this->input->post('user_id');
		$last_id=$this->input->post('last_id');
		$paying_amt=$this->input->post('paying_amt');
		$payment_method=$this->input->post('payment_method');
		$payment_credit_to_ledger=$this->input->post('payment_credit_to_ledger');
		$ramain_amt=$this->input->post('ramain_amt');

		$txt_narration=$this->input->post('txt_narration');
		$challan_no=$this->input->post('challan_no');
		$vehical_no=$this->input->post('vehical_no');
		$builty_no=$this->input->post('builty_no');
		$dispatch_date=$this->input->post('dispatch_date');
		$dispatch_from=$this->input->post('dispatch_from');

		$this->AdminPurchseOrder_Modal->pur_order_payments_mdl($user_id,$last_id,$paying_amt,$txt_narration,$challan_no,$vehical_no,$builty_no,$dispatch_date,$dispatch_from,$payment_method,$payment_credit_to_ledger,$ramain_amt);
		// echo "done";
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

		$data=$this->AdminPurchseOrder_Modal->save_order_mdl($user_id,$franchise_type,$sale_party,$voucher_number,$voucher_date,$indent_no,$indent_date,$mat_center,$voucher_prefix,$voucher_last_no);
		echo json_encode($data);
	}
	
	function fetch_pros_all_details_by_barcode_filter2()
	{
		$user_id=$this->input->post('user_id');
		$barcode_no=$this->input->post('barcode_no');

		$data=$this->AdminPurchseOrder_Modal->fetch_pros_all_details_by_barcode_filter2_mdl($user_id,$barcode_no);
		echo json_encode($data);
	}
	
	
	function fetch_admin_prod_ttl_qty()
	{
		$parent_id=$this->input->post('parent_id');
		$pros_id=$this->input->post('pros_id');

		$data=$this->AdminPurchseOrder_Modal->fetch_admin_prod_ttl_qty_mdl($parent_id,$pros_id);
		echo json_encode($data);
	}

	function fetch_pros_all_details_filter2()
	{
		$user_id=$this->input->post('user_id');
		$product_id=$this->input->post('product_id');

		$data=$this->AdminPurchseOrder_Modal->fetch_pros_all_details_filter2_mdl($user_id,$product_id);
		echo json_encode($data);
	}
	
	function fetch_all_admin_products_on_search()
	{
		$user_id=$this->input->post('user_id');
		// $pros_name=$this->input->post('pros_name');

		$data=$this->AdminPurchseOrder_Modal->fetch_admin_product_lists_fitered_mdl($user_id);
		echo json_encode($data);
	}

	function fetch_material_center_in_option()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminPurchseOrder_Modal->fetch_material_center_in_option_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	function find_mobile_address_details()
	{
		$its_id=$this->input->post('its_id');
		$data=$this->AdminPurchseOrder_Modal->find_mobile_address_details_mdl($its_id);
		echo json_encode($data);  ;
	}
	
	function fetch_parties_in_option()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminPurchseOrder_Modal->fetch_parties_in_option_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	function fetch_all_purchase_order()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminPurchseOrder_Modal->fetch_all_purchase_order_mdl($user_id);
		echo json_encode($data);  ;
	}

	
	function fetch_order_details1()
	{
		$order_id=$this->input->post('order_id');
		$user_id=$this->input->post('user_id');
		$data=$this->AdminPurchseOrder_Modal->fetch_order_details_mdl($order_id,$user_id);
		echo json_encode($data);  ;
	}

	function confirm_order_all()
	{
		$order_id=$this->input->post('order_id');
		$this->AdminPurchseOrder_Modal->confirm_order_all_mdl($order_id);
		// echo json_encode($data);  ;
	}

	function stockin_to_child()
	{
		$child_id=$this->input->post('child_id');
		$proid=$this->input->post('proid');
		$bcode=$this->input->post('bcode');
		$pqty=$this->input->post('pqty');
		$order_id=$this->input->post('order_id');
		$in_out_state='1';
		$mat_ctr=$this->input->post('mat_ctr');
		$this->AdminPurchseOrder_Modal->stockin_to_child_mdl($child_id,$proid,$bcode,$pqty,$in_out_state,$mat_ctr,$order_id);
		// echo json_encode($data);  ;
	}

	function stockout_from_parent()
	{
		$user_id=$this->input->post('user_id');
		$proid=$this->input->post('proid');
		$bcode=$this->input->post('bcode');
		$pqty=$this->input->post('pqty');
		$order_id=$this->input->post('order_id');
		$in_out_state='2';
		$mat_ctr="1";
		$this->AdminPurchseOrder_Modal->stockout_from_parent_mdl($user_id,$proid,$bcode,$pqty,$in_out_state,$mat_ctr,$order_id);
		// echo json_encode($data);  ;
	}


}




