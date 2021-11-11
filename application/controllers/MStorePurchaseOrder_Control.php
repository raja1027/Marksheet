<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStorePurchaseOrder_Control extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	
	/*------------------------------*/
	
	function purchase_order_to_top()
	{
        $this->load->view('Store_module/Transactions/Purchase/purchase_order');
	}

	function list_of_purchase_order()
	{
        $this->load->view('Store_module/Transactions/Order/product_request_to_me_list');
	}

	function list_of_product_request()
	{
        $this->load->view('Store_module/Transactions/Order/product_request_list');
	}



	
	function add_new_product_to_request()
	{
		$user_id=$this->input->post('user_id');
		$order1_id=$this->input->post('order1_id');
		$request_to_id=$this->input->post('request_to_id');
		$pro_id=$this->input->post('pro_id');
		$barcode_no=$this->input->post('barcode_no');
		$pro_qty=$this->input->post('pro_qty');
		$pro_price=$this->input->post('pro_price');
		$pro_tot_amt=$this->input->post('pro_tot_amt');
		$all_Old_pro_tot_amt=$this->input->post('all_Old_pro_tot_amt');
		$all_new_pro_tot_amt=$this->input->post('all_new_pro_tot_amt');
		$data=$this->DepoPurchseOrder_Modal->add_new_product_to_request_mdl($user_id,$order1_id,$request_to_id,$pro_id,$barcode_no,$pro_qty,$pro_price,$pro_tot_amt,$all_new_pro_tot_amt);
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
	
	function all_purchase_order_depo()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->DepoPurchseOrder_Modal->all_purchase_order_depo_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	
	function all_my_product_request()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->DepoPurchseOrder_Modal->all_my_product_request($user_id);
		echo json_encode($data);  ;
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
	

	
	function fetch_order_details1()
	{
		$order_id=$this->input->post('order_id');
		$user_id=$this->input->post('user_id');
		$data=$this->DepoPurchseOrder_Modal->fetch_order_details_mdl($order_id,$user_id);
		echo json_encode($data);  ;
	}


	/* -------------- */

	function confirm_order_all()
	{
		$order_id=$this->input->post('order_id');
		$this->DepoPurchseOrder_Modal->confirm_order_all_mdl($order_id);
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
		$this->DepoPurchseOrder_Modal->stockin_to_child_mdl($child_id,$proid,$bcode,$pqty,$in_out_state,$mat_ctr,$order_id);
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
		$this->DepoPurchseOrder_Modal->stockout_from_parent_mdl($user_id,$proid,$bcode,$pqty,$in_out_state,$mat_ctr,$order_id);
		// echo json_encode($data);  ;
	}




	/* function add_franchise()
	{
        $this->load->view('Store_module/Branches/All_branch/add_branch');
	}
	
	function save_franchise()
	{
		$user_id=$this->input->post('user_id');
		$franchise_name=$this->input->post('franchise_name');
		$franchise_code=$this->input->post('franchise_code');
		$franchise_uname=$this->input->post('franchise_uname');
		$main_group=$this->input->post('main_group');
		$parent_group=$this->input->post('parent_group');
		$state=$this->input->post('state');
		$city=$this->input->post('city');
		$f_y_beg_date=$this->input->post('f_y_beg_date');
		$full_address=$this->input->post('full_address');
		$it_pan=$this->input->post('it_pan');
		$contact_no=$this->input->post('contact_no');
		$email_id=$this->input->post('email_id');
		$fax=$this->input->post('fax');
		$gst_in=$this->input->post('gst_in');
		$sale_bill_prefix=$this->input->post('sale_bill_prefix');
		$purchase_bill_prefix=$this->input->post('purchase_bill_prefix');
		$passw=$this->input->post('passw');
		
		
		$data=$this->MStoreBranches_Modal->save_franchise_mdl($user_id,$franchise_name,$franchise_code,$franchise_uname,$main_group,$parent_group,$state,$city,$f_y_beg_date,$full_address,$it_pan,$contact_no,$email_id,$fax,$gst_in,$sale_bill_prefix,$purchase_bill_prefix,$passw);
	}
	
	function update_franchise()
	{
		$user_id=$this->input->post('user_id');
		$franchise_name=$this->input->post('franchise_name');
		$franchise_code=$this->input->post('franchise_code');
		$franchise_uname=$this->input->post('franchise_uname');
		$main_group=$this->input->post('main_group');
		$parent_group=$this->input->post('parent_group');
		$state=$this->input->post('state');
		$city=$this->input->post('city');
		$f_y_beg_date=$this->input->post('f_y_beg_date');
		$full_address=$this->input->post('full_address');
		$it_pan=$this->input->post('it_pan');
		$contact_no=$this->input->post('contact_no');
		$email_id=$this->input->post('email_id');
		$fax=$this->input->post('fax');
		$gst_in=$this->input->post('gst_in');
		$sale_bill_prefix=$this->input->post('sale_bill_prefix');
		$purchase_bill_prefix=$this->input->post('purchase_bill_prefix');
		$passw=$this->input->post('passw');
		$hide_id=$this->input->post('hide_id');
		
		
		$data=$this->MStoreBranches_Modal->update_franchise_mdl($user_id,$franchise_name,$franchise_code,$franchise_uname,$main_group,$parent_group,$state,$city,$f_y_beg_date,$full_address,$it_pan,$contact_no,$email_id,$fax,$gst_in,$sale_bill_prefix,$purchase_bill_prefix,$passw,$hide_id);
	}
	
	
	function fetch_all_stockist()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreBranches_Modal->fetch_all_stockist_mdl($user_id);
		echo json_encode($data);
	}

	function fetch_franchise_all_details()
	{
		$user_id=$this->input->post('user_id');
		$edit_id=$this->input->post('edit_id');
		$data=$this->MStoreBranches_Modal->fetch_franchise_all_details_mdl($user_id,$edit_id);
		echo json_encode($data);
	}


	function fetch_franchises_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$lim1=$this->input->post('lim1');
		$lim2=$this->input->post('lim2');
		$txt_search_acc=$this->input->post('txt_search_acc');

		$data=$this->MStoreBranches_Modal->fetch_franchises_in_tbody_mdl($user_id,$lim1,$lim2,$txt_search_acc);
		echo json_encode($data);
	}
 */

	
}
