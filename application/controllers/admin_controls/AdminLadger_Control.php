<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLadger_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Adminlogged_in"))
		{
			redirect("admin_login");
		}
    }

	public function ladger()
	{
        $this->load->view('Store_module/Admin/Masters/ladger/ladger');
	}



	
	public function chk_duplicacy()
	{
		$user_id=$this->input->post('user_id');
		$ladger_name=$this->input->post('ladger_name');
		$data=$this->MStoreLadger_Modal->chk_duplicacy_mdl($user_id,$ladger_name);
		echo json_encode($data);
	}
	
	public function fetch_account_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreLadger_Modal->fetch_account_group_in_groupoption_mdl($user_id);
		echo json_encode($data);
	}
	
	
	public function fetch_ladgers_in_store_acc_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreLadger_Modal->fetch_ladgers_in_store_acc_tbody_mdl($user_id);
		echo json_encode($data);
	}
	
	
	
	public function fetch_states_in_option()
	{
		$data=$this->MStoreLadger_Modal->fetch_states_in_option_mdl();
		echo json_encode($data);
	}
	
	
	public function fetch_cities_in_option()
	{
		$state_id=$this->input->post('state_id');
		$data=$this->MStoreLadger_Modal->fetch_cities_in_option_mdl($state_id);
		echo json_encode($data);
	}
	
	public function fetch_ladger_for_edit()
	{
		$ladger_id=$this->input->post('ladger_id');
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreLadger_Modal->fetch_ladger_for_edit_mdl($ladger_id,$user_id);
		echo json_encode($data);
	}
	
	
	
	public function save_store_ladger_details()
	{
		$user_id=$this->input->post('user_id');
		$ladger_name=$this->input->post('ladger_name');
		$alias=$this->input->post('alias');
		$print_name=$this->input->post('print_name');
		$parent_group=$this->input->post('parent_group');
		$op_balance=$this->input->post('op_balance');
		$openBalRdo=$this->input->post('openBalRdo');
		$prev_yr_bal=$this->input->post('prev_yr_bal');
		$prevBalRdo=$this->input->post('prevBalRdo');
		$state=$this->input->post('state');
		$city=$this->input->post('city');
		$type_of_dealer=$this->input->post('type_of_dealer');
		$gstIn_uin=$this->input->post('gstIn_uin');
		$address=$this->input->post('address');
		$aadhaar_no=$this->input->post('aadhaar_no');
		$it_pan=$this->input->post('it_pan');
		$e_mail=$this->input->post('e_mail');
		$mob_no=$this->input->post('mob_no');
		/* $fax=$this->input->post('fax');
		$transport=$this->input->post('transport'); */
		$pin_code=$this->input->post('pin_code');
		$tin=$this->input->post('tin');
		$tele_no=$this->input->post('tele_no');
		$contact_person=$this->input->post('contact_person');
		$cst=$this->input->post('cst');
		$lst=$this->input->post('lst');
		$service_tax_number=$this->input->post('service_tax_number');
		/* $lbt_no=$this->input->post('lbt_no');
		$ie_no=$this->input->post('ie_no'); */
		
		$this->MStoreLadger_Modal->save_store_ladger_details_do($user_id,$ladger_name,$alias,$print_name,$parent_group,$op_balance,$openBalRdo,$prev_yr_bal,$prevBalRdo,$state,$city,$type_of_dealer,$gstIn_uin,$address,$aadhaar_no,$it_pan,$e_mail,$mob_no,$pin_code,$tin,$tele_no,$contact_person,$cst,$lst,$service_tax_number);
		echo "Account detail has been saved..";
		
	}
	
	
	
	public function update_store_ladger_details()
	{
		$user_id=$this->input->post('user_id');
		$ladger_name=$this->input->post('ladger_name');
		$alias=$this->input->post('alias');
		$print_name=$this->input->post('print_name');
		$parent_group=$this->input->post('parent_group');
		$op_balance=$this->input->post('op_balance');
		$openBalRdo=$this->input->post('openBalRdo');
		$prev_yr_bal=$this->input->post('prev_yr_bal');
		$prevBalRdo=$this->input->post('prevBalRdo');
		$state=$this->input->post('state');
		$city=$this->input->post('city');
		$type_of_dealer=$this->input->post('type_of_dealer');
		$gstIn_uin=$this->input->post('gstIn_uin');
		$address=$this->input->post('address');
		$aadhaar_no=$this->input->post('aadhaar_no');
		$it_pan=$this->input->post('it_pan');
		$e_mail=$this->input->post('e_mail');
		$mob_no=$this->input->post('mob_no');
		/* $fax=$this->input->post('fax');
		$transport=$this->input->post('transport'); */
		$pin_code=$this->input->post('pin_code');
		$tin=$this->input->post('tin');
		$tele_no=$this->input->post('tele_no');
		$contact_person=$this->input->post('contact_person');
		$cst=$this->input->post('cst');
		$lst=$this->input->post('lst');
		$service_tax_number=$this->input->post('service_tax_number');
		/* $lbt_no=$this->input->post('lbt_no');
		$ie_no=$this->input->post('ie_no'); */
		$hide_id=$this->input->post('hide_id');
		
		/* 		$this->MStoreLadger_Modal->save_store_ladger_details_do($user_id,$ladger_name,$alias,$print_name,$parent_group,$op_balance,$openBalRdo,$prev_yr_bal,$prevBalRdo,$state,$city,$type_of_dealer,$gstIn_uin,$address,$aadhaar_no,$it_pan,$e_mail,$mob_no,$fax,$transport,$pin_code,$tin,$tele_no,$contact_person,$cst,$lst,$service_tax_number,$lbt_no,$ie_no); */
		
		
		$this->MStoreLadger_Modal->update_store_ladger_details_do($user_id,$ladger_name,$alias,$print_name,$parent_group,$op_balance,$openBalRdo,$prev_yr_bal,$prevBalRdo,$state,$city,$type_of_dealer,$gstIn_uin,$address,$aadhaar_no,$it_pan,$e_mail,$mob_no,$pin_code,$tin,$tele_no,$contact_person,$cst,$lst,$service_tax_number,$hide_id);
		echo "Ladger detail has been updated..";
		
	}
	
}











