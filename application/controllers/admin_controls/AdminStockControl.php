<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminStockControl extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Adminlogged_in"))
		{
			redirect("admin_login");
		}
    }
	
	function admin_fetch_stockiout()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminStock_Modal->admin_fetch_stockiout_mdl($user_id);
		echo json_encode($data);  ;
	}

	function fetch_pros_ttl_qty()
	{
		$user_id=$this->input->post('user_id');
		$pros_id=$this->input->post('pros_id');
		$data=$this->AdminStock_Modal->fetch_pros_ttl_qty_mdl($user_id,$pros_id);
		echo json_encode($data);  ;
	}

	
	/* function fetch_order_details1()
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
	} */


}




