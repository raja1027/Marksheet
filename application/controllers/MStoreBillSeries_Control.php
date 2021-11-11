<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreBillSeries_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	public function bill_series()
	{
        $this->load->view('Store_module/Masters/Bill_series/bill_series');
	}

	public function save_bill_series_detail_autometic()
	{
		$user_id=$this->input->post('user_id');
		$bill_series_name=$this->input->post('bill_series_name');
		$bill_series_for=$this->input->post('bill_series_for');
		$voucher_numering=$this->input->post('voucher_numering');
		$send_sms=$this->input->post('send_sms');
		$send_email=$this->input->post('send_email');
		$print_voucher_on_save=$this->input->post('print_voucher_on_save');
		$print_barcode_on_save=$this->input->post('print_barcode_on_save');
		$show_opt_fields=$this->input->post('show_opt_fields');
		$v_number_prefix=$this->input->post('v_number_prefix');
		$prefix_simple_text=$this->input->post('prefix_simple_text');
		$v_number_midText=$this->input->post('v_number_midText');
		$midText_simple_text=$this->input->post('midText_simple_text');
		$v_number_postfix=$this->input->post('v_number_postfix');
		$postfix_simple_text=$this->input->post('postfix_simple_text');

		
		$this->MStoreBillSeries_Modal->save_bill_series_detail_autometic_mdl($user_id,$bill_series_name,$bill_series_for,$voucher_numering,$send_sms,$send_email,$print_voucher_on_save,$print_barcode_on_save,$show_opt_fields,$v_number_prefix,$prefix_simple_text,$v_number_midText,$midText_simple_text,$v_number_postfix,$postfix_simple_text);
		echo "Bill Series Detail has been saved..";
		
	}


	public function save_bill_series_detail_manual()
	{
		$user_id=$this->input->post('user_id');
		$bill_series_name=$this->input->post('bill_series_name');
		$bill_series_for=$this->input->post('bill_series_for');
		$voucher_numering=$this->input->post('voucher_numering');
		$send_sms=$this->input->post('send_sms');
		$send_email=$this->input->post('send_email');
		$print_voucher_on_save=$this->input->post('print_voucher_on_save');
		$print_barcode_on_save=$this->input->post('print_barcode_on_save');
		$show_opt_fields=$this->input->post('show_opt_fields');

		
		$this->MStoreBillSeries_Modal->save_bill_series_detail_manual_mdl($user_id,$bill_series_name,$bill_series_for,$voucher_numering,$send_sms,$send_email,$print_voucher_on_save,$print_barcode_on_save,$show_opt_fields);
		echo "Bill Series Detail has been saved..";
		
	}

	
	function fetch_bill_series_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreBillSeries_Modal->fetch_bill_series_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}
	
}











