<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreTax_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Adminlogged_in"))
		{
			redirect("admin_login");
		}
    }

	public function tax()
	{
        $this->load->view('Store_module/Masters/tax/tax_category');
	}

	
	public function fetch_account_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreTax_Modal->fetch_account_group_in_groupoption_mdl($user_id);
		echo json_encode($data);
	}
	

	public function save_store_tax_details()
	{
		$user_id=$this->input->post('user_id');
		$tax_name=$this->input->post('tax_name');
		$igst_rate_tax=$this->input->post('igst_rate_tax');
		$igst_acount=$this->input->post('igst_acount');
		$sgst_rate_tax=$this->input->post('sgst_rate_tax');
		$sgst_acount=$this->input->post('sgst_acount');
		$cgst_rate_tax=$this->input->post('cgst_rate_tax');
		$cgst_acount=$this->input->post('cgst_acount');
		$apply_in_mrp=$this->input->post('apply_in_mrp');

		
		$this->MStoreTax_Modal->save_store_tax_details_do($user_id,$tax_name,$igst_rate_tax,$igst_acount,$sgst_rate_tax,$sgst_acount,$cgst_rate_tax,$cgst_acount,$apply_in_mrp);
		echo "Tax detail has been saved..";
		
	}

	public function update_store_tax_details()
	{
		$hide_id=$this->input->post('hide_id');
		$user_id=$this->input->post('user_id');
		$tax_name=$this->input->post('tax_name');
		$igst_rate_tax=$this->input->post('igst_rate_tax');
		$igst_acount=$this->input->post('igst_acount');
		$sgst_rate_tax=$this->input->post('sgst_rate_tax');
		$sgst_acount=$this->input->post('sgst_acount');
		$cgst_rate_tax=$this->input->post('cgst_rate_tax');
		$cgst_acount=$this->input->post('cgst_acount');
		$apply_in_mrp=$this->input->post('apply_in_mrp');

		
		$this->MStoreTax_Modal->update_store_tax_details_do($user_id,$tax_name,$igst_rate_tax,$igst_acount,$sgst_rate_tax,$sgst_acount,$cgst_rate_tax,$cgst_acount,$apply_in_mrp,$hide_id);
		echo "Tax detail has been Updated..";
		
	}

	function fetch_tax_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreTax_Modal->fetch_tax_in_tbody_mdl($user_id);
		echo json_encode($data);
	}

	function fetch_tax_for_edit()
	{
		$user_id=$this->input->post('user_id');
		$new_tax_id=$this->input->post('new_tax_id');
		$data=$this->MStoreTax_Modal->fetch_tax_for_edit_mdl($user_id,$new_tax_id);
		echo json_encode($data);
	}

	/* public function material_center()
	{
        $this->load->view('Store_module/Masters/Material_center/material_center');
	}

	
	
	
	
	public function save_store_material_group_details()
	{
		$user_id=$this->input->post('user_id');
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');

		
		$this->MStoreMaterialctr_Group_Modal->save_store_material_group_do($user_id,$group_name,$print_name);
		echo "Material Group detail has been saved..";
		
	}
	
	
	
	public function save_store_materialctr_group_child_details()
	{
		$user_id=$this->input->post('user_id');
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$parent_group=$this->input->post('parent_group');
		
		$this->MStoreMaterialctr_Group_Modal->save_store_materialctr_group_child_do($user_id,$group_name,$print_name,$parent_group);
		echo "Material Group detail has been saved..";
		
	}
	
	
	public function fetch_material_groups_in_store_mcg_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreMaterialctr_Group_Modal->fetch_material_groups_in_store_mcg_tbody_mdl($user_id);
		echo json_encode($data);
	}
	


	public function fetch_stock_account_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreMaterialctr_Modal->fetch_stock_account_in_groupoption_mdl($user_id);
		echo json_encode($data);
	}
	
	
	
	
	
	public function save_store_material_gcenter_details()
	{
		echo $user_id=$this->input->post('user_id');
		$material_center_name=$this->input->post('material_center_name');
		$alias=$this->input->post('alias');
		$print_name=$this->input->post('print_name');
		$parent_group=$this->input->post('parent_group');
		$stock_account=$this->input->post('stock_account');
		$reflect_in_bal_sheet=$this->input->post('reflect_in_bal_sheet');
		
		$this->MStoreMaterialctr_Modal->save_store_material_center_details_mdl($material_center_name,$user_id,$alias,$print_name,$parent_group,$stock_account,$reflect_in_bal_sheet);
		echo "Material Center detail has been saved..";
	}
 */


	
}











