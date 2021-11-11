<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreTansactionType_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	public function TansactionType()
	{
        $this->load->view('Store_module/Masters/tansaction_type/trans_type');
	}

	
	public function fetch_account_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreTaxationType_Modal->fetch_account_group_in_groupoption_mdl($user_id);
		echo json_encode($data);
	}
	

	public function save_region_local_single_tax()
	{
		$user_id=$this->input->post('user_id');
		$trans_type_name=$this->input->post('trans_type_name');
		$trans_type=$this->input->post('trans_type');
		$trans_acc_info=$this->input->post('trans_acc_info');
		$trans_region=$this->input->post('trans_region');
		$taxation_type=$this->input->post('taxation_type');
		$sgst_rate_tax=$this->input->post('sgst_rate_tax');
		$cgst_rate_tax=$this->input->post('cgst_rate_tax');
		$freezTaxOnTransChk=$this->input->post('freezTaxOnTransChk');
		$freezTaxOnTransReturnChk=$this->input->post('freezTaxOnTransReturnChk');
		$invoice_heading=$this->input->post('invoice_heading');
		$invoice_desc=$this->input->post('invoice_desc');

		
		$this->MStoreTaxationType_Modal->save_region_local_single_tax_mdl($user_id,$trans_type_name,$trans_type,$trans_acc_info,$trans_region,$taxation_type,$sgst_rate_tax,$cgst_rate_tax,$freezTaxOnTransChk,$freezTaxOnTransReturnChk,$invoice_heading,$invoice_desc);
		echo "Transaction Type detail has been saved..";
		
	}

	public function update_region_local_single_tax()
	{
		$hide_id=$this->input->post('hide_id');
		$user_id=$this->input->post('user_id');
		$trans_type_name=$this->input->post('trans_type_name');
		$trans_type=$this->input->post('trans_type');
		$trans_acc_info=$this->input->post('trans_acc_info');
		$trans_region=$this->input->post('trans_region');
		$taxation_type=$this->input->post('taxation_type');
		$sgst_rate_tax=$this->input->post('sgst_rate_tax');
		$cgst_rate_tax=$this->input->post('cgst_rate_tax');
		$freezTaxOnTransChk=$this->input->post('freezTaxOnTransChk');
		$freezTaxOnTransReturnChk=$this->input->post('freezTaxOnTransReturnChk');
		$invoice_heading=$this->input->post('invoice_heading');
		$invoice_desc=$this->input->post('invoice_desc');

		
		$this->MStoreTaxationType_Modal->update_region_local_single_tax_mdl($user_id,$trans_type_name,$trans_type,$trans_acc_info,$trans_region,$taxation_type,$sgst_rate_tax,$cgst_rate_tax,$freezTaxOnTransChk,$freezTaxOnTransReturnChk,$invoice_heading,$invoice_desc,$hide_id);
		echo "Transaction Type detail has been updated..";
		
	}


	public function save_region_central_single_tax()
	{
		$user_id=$this->input->post('user_id');
		$trans_type_name=$this->input->post('trans_type_name');
		$trans_type=$this->input->post('trans_type');
		$trans_acc_info=$this->input->post('trans_acc_info');
		$trans_region=$this->input->post('trans_region');
		$taxation_type=$this->input->post('taxation_type');
		$igst_rate_tax=$this->input->post('igst_rate_tax');
		$freezTaxOnTransChk=$this->input->post('freezTaxOnTransChk');
		$freezTaxOnTransReturnChk=$this->input->post('freezTaxOnTransReturnChk');
		$invoice_heading=$this->input->post('invoice_heading');
		$invoice_desc=$this->input->post('invoice_desc');

		
		$this->MStoreTaxationType_Modal->save_region_central_single_tax_mdl($user_id,$trans_type_name,$trans_type,$trans_acc_info,$trans_region,$taxation_type,$igst_rate_tax,$freezTaxOnTransChk,$freezTaxOnTransReturnChk,$invoice_heading,$invoice_desc);
		echo "Transaction Type detail has been saved..";
		
	}



	public function save_multi_tax_transType()
	{
		$user_id=$this->input->post('user_id');
		$trans_type_name=$this->input->post('trans_type_name');
		$trans_type=$this->input->post('trans_type');
		$trans_acc_info=$this->input->post('trans_acc_info');
		$trans_region=$this->input->post('trans_region');
		$taxation_type=$this->input->post('taxation_type');
		$invoice_heading=$this->input->post('invoice_heading');
		$invoice_desc=$this->input->post('invoice_desc');

		
		$this->MStoreTaxationType_Modal->save_multi_tax_transType_mdl($user_id,$trans_type_name,$trans_type,$trans_acc_info,$trans_region,$taxation_type,$invoice_heading,$invoice_desc);
		echo "Transaction Type detail has been saved..";
		
	}



	public function save_itemwise_tax_transType()
	{
		$user_id=$this->input->post('user_id');
		$trans_type_name=$this->input->post('trans_type_name');
		$trans_type=$this->input->post('trans_type');
		$trans_acc_info=$this->input->post('trans_acc_info');
		$trans_region=$this->input->post('trans_region');
		$taxation_type=$this->input->post('taxation_type');
		
		$calTaxOnMrpChk=$this->input->post('calTaxOnMrpChk');
		$incluTaxItemPriceChk=$this->input->post('incluTaxItemPriceChk');
		$calTaxOnPerMrp=$this->input->post('calTaxOnPerMrp');
		$tax_onmrpMode=$this->input->post('tax_onmrpMode');
		$adjTaxSalePurchaseAccChk=$this->input->post('adjTaxSalePurchaseAccChk');
		$igst_tax_account_to_save_tax=$this->input->post('igst_tax_account_to_save_tax');
		$sgst_tax_account_to_save_tax=$this->input->post('sgst_tax_account_to_save_tax');
		$cgst_tax_account_to_save_tax=$this->input->post('cgst_tax_account_to_save_tax');
		
		$invoice_heading=$this->input->post('invoice_heading');
		$invoice_desc=$this->input->post('invoice_desc');

		
		$this->MStoreTaxationType_Modal->save_itemwise_tax_transType_mdl($user_id,$trans_type_name,$trans_type,$trans_acc_info,$trans_region,$taxation_type,$calTaxOnMrpChk,$incluTaxItemPriceChk,$calTaxOnPerMrp,$tax_onmrpMode,$adjTaxSalePurchaseAccChk,$igst_tax_account_to_save_tax,$sgst_tax_account_to_save_tax,$cgst_tax_account_to_save_tax,$invoice_heading,$invoice_desc);
		echo "Transaction Type detail has been saved..";
		
	}

	
	public function fetch_trans_type_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreTaxationType_Modal->fetch_trans_type_in_tbody_mdl($user_id);
		echo json_encode($data);
	}

	
	public function fetch_trans_type_for_edit()
	{
		$user_id=$this->input->post('user_id');
		$trans_type_id=$this->input->post('trans_type_id');
		$data=$this->MStoreTaxationType_Modal->fetch_trans_type_for_edit_mdl($user_id,$trans_type_id);
		echo json_encode($data);
	}


	
}











