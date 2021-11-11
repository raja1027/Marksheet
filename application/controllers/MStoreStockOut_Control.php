<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreStockOut_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	function stockout()
	{
        $this->load->view('Store_module/Transactions/stock/stockOUT');
	}
	
	function save_store_account_group()
	{
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$user_id=$this->input->post('user_id');
		
		$this->MStoreStockOut_Modal->save_store_account_group_do($group_name,$print_name,$user_id);
		echo "Account Group Record has been Saved";
		
	}
	
	function save_store_account_group_child()
	{
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$user_id=$this->input->post('user_id');
		$parent_group=$this->input->post('parent_group');
		
		$this->MStoreStockOut_Modal->save_store_account_group_child_do($group_name,$print_name,$user_id,$parent_group);
		echo "Account Group Record has been Saved";
		
	}
	
	
	
	function fetch_account_group_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreStockOut_Modal->fetch_account_group_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}

	
	function fetch_account_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreStockOut_Modal->fetch_account_group_in_groupoption_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	
	function fetch_account_group_in_edit()
	{
		$edit_id=$this->input->post('edit_id');
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreStockOut_Modal->fetch_account_group_in_edit_mdl($user_id,$edit_id);
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
	

}




