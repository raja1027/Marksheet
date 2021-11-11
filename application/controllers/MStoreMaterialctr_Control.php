<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreMaterialctr_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	public function material()
	{
        $this->load->view('Store_module/Masters/Material_center/material_group');
	}


	public function material_center()
	{
        $this->load->view('Store_module/Masters/Material_center/material_center');
	}

	
	public function fetch_material_center_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreMaterialctr_Group_Modal->fetch_material_ctr_group_in_groupoption_mdl($user_id);
		echo json_encode($data);
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
	
	
	
	public function update_store_material_group_details()
	{
		$user_id=$this->input->post('user_id');
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$hide_id=$this->input->post('hide_id');
		
		$this->MStoreMaterialctr_Group_Modal->update_store_material_group_details_do($user_id,$group_name,$print_name,$hide_id);
		echo "Material Group detail has been updated..";
		
	}
	
	
	public function update_store_materialctr_group_child_details()
	{
		$user_id=$this->input->post('user_id');
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$parent_group=$this->input->post('parent_group');
		$hide_id=$this->input->post('hide_id');
		
		$this->MStoreMaterialctr_Group_Modal->update_store_materialctr_group_child_details_do($user_id,$group_name,$print_name,$parent_group,$hide_id);
		echo "Material Group detail has been updated..";
		
	}
	
	
	public function fetch_material_groups_in_store_mcg_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreMaterialctr_Group_Modal->fetch_material_groups_in_store_mcg_tbody_mdl($user_id);
		echo json_encode($data);
	}
	
	
	public function fetch_material_center_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreMaterialctr_Modal->fetch_material_center_tbody_mdl($user_id);
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
		$user_id=$this->input->post('user_id');
		$material_center_name=$this->input->post('material_center_name');
		$alias=$this->input->post('alias');
		$print_name=$this->input->post('print_name');
		$parent_group=$this->input->post('parent_group');
		$stock_account=$this->input->post('stock_account');
		$reflect_in_bal_sheet=$this->input->post('reflect_in_bal_sheet');
		
		$this->MStoreMaterialctr_Modal->save_store_material_center_details_mdl($material_center_name,$user_id,$alias,$print_name,$parent_group,$stock_account,$reflect_in_bal_sheet);
		echo "Material Center detail has been saved..";
	}

	
	
	
	
	public function update_store_material_gcenter_details()
	{
		$user_id=$this->input->post('user_id');
		$material_center_name=$this->input->post('material_center_name');
		$alias=$this->input->post('alias');
		$print_name=$this->input->post('print_name');
		$parent_group=$this->input->post('parent_group');
		$stock_account=$this->input->post('stock_account');
		$reflect_in_bal_sheet=$this->input->post('reflect_in_bal_sheet');
		$hide_id=$this->input->post('hide_id');
		
		$this->MStoreMaterialctr_Modal->update_store_material_center_details_mdl($material_center_name,$user_id,$alias,$print_name,$parent_group,$stock_account,$reflect_in_bal_sheet,$hide_id);
		echo "Material Center detail has been updated..";
	}

	


	public function fetch_material_group_for_edit()
	{
		$user_id=$this->input->post('user_id');
		$material_group_id=$this->input->post('material_group_id');
		$data=$this->MStoreMaterialctr_Modal->fetch_material_group_for_edit_mdl($user_id,$material_group_id);
		echo json_encode($data);
	}
	
	
	public function fetch_material_center_for_edit()
	{
		$user_id=$this->input->post('user_id');
		$material_center_id=$this->input->post('material_center_id');
		$data=$this->MStoreMaterialctr_Modal->fetch_material_center_for_edit_mdl($user_id,$material_center_id);
		echo json_encode($data);
	}
	
	
	
	public function chk_duplicacy_grp()
	{
		$user_id=$this->input->post('user_id');
		$material_group_name=$this->input->post('material_group_name');
		$data=$this->MStoreMaterialctr_Modal->chk_duplicacy_grp_mdl($user_id,$material_group_name);
		echo json_encode($data);
	}


	public function chk_duplicacy()
	{
		$user_id=$this->input->post('user_id');
		$material_center_name=$this->input->post('material_center_name');
		$data=$this->MStoreMaterialctr_Modal->chk_duplicacy_mdl($user_id,$material_center_name);
		echo json_encode($data);
	}


	
}











