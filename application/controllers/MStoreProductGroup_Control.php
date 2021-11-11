<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreProductGroup_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	function Product_group()
	{
        $this->load->view('Store_module/Masters/Product_group/product_group');
	}
	
	
	
	function fetch_tax_category()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreProductGroup_Modal->fetch_tax_category_mdl($user_id);
		echo json_encode($data);  ;
	}


	function save_product_group()
	{
		$group_name=$this->input->post('group_name');
		$alias=$this->input->post('alias');
		$main_group_state=$this->input->post('main_group_state');
		$parent_group_id=$this->input->post('parent_group_id');
		$sale_acc=$this->input->post('sale_acc');
		$purchase_acc=$this->input->post('purchase_acc');
		$stock_acc=$this->input->post('stock_acc');
		$enable_hsn_state=$this->input->post('enable_hsn_state');
		$hsn_code=$this->input->post('hsn_code');
		$enable_ax_state=$this->input->post('enable_ax_state');
		$tax_category=$this->input->post('tax_category');
		$user_id=$this->input->post('user_id');
		
		$this->MStoreProductGroup_Modal->save_product_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$sale_acc,$purchase_acc,$stock_acc,$enable_hsn_state,$hsn_code,$enable_ax_state,$tax_category,$user_id);
		echo "Product Group has been Saved";
		
	}


	function update_product_group()
	{
		$group_name=$this->input->post('group_name');
		$alias=$this->input->post('alias');
		$main_group_state=$this->input->post('main_group_state');
		$parent_group_id=$this->input->post('parent_group_id');
		$sale_acc=$this->input->post('sale_acc');
		$purchase_acc=$this->input->post('purchase_acc');
		$stock_acc=$this->input->post('stock_acc');
		$enable_hsn_state=$this->input->post('enable_hsn_state');
		$hsn_code=$this->input->post('hsn_code');
		$enable_ax_state=$this->input->post('enable_ax_state');
		$tax_category=$this->input->post('tax_category');
		$user_id=$this->input->post('user_id');
		$hide_id=$this->input->post('hide_id');
		
		$this->MStoreProductGroup_Modal->update_product_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$sale_acc,$purchase_acc,$stock_acc,$enable_hsn_state,$hsn_code,$enable_ax_state,$tax_category,$user_id,$hide_id);
		echo "Product Group has been Updated";
		
	}
	
	
	function fetch_product_group_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreProductGroup_Modal->fetch_product_group_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	function fetch_product_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreProductGroup_Modal->fetch_product_group_in_groupoption_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	
 	function fetch_product_groups_for_edit()
	{
		$edit_id=$this->input->post('edit_id');
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreProductGroup_Modal->fetch_product_groups_for_edit_mdl($user_id,$edit_id);
		echo json_encode($data);  ;
	}
	




	public function chk_duplicacy_grp()
	{
		$user_id=$this->input->post('user_id');
		$group_name=$this->input->post('group_name');
		$data=$this->MStoreProductGroup_Modal->chk_duplicacy_grp_mdl($user_id,$group_name);
		echo json_encode($data);
	}


	public function chk_duplicacy()
	{
		$user_id=$this->input->post('user_id');
		$product_name=$this->input->post('product_name');
		$product_barcode=$this->input->post('product_barcode');
		$data=$this->MStoreProductGroup_Modal->chk_duplicacy_mdl($user_id,$product_name,$product_barcode);
		echo json_encode($data);
	}

	

}




