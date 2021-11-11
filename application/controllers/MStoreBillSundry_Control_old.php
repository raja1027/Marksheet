<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreBillSundry_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	public function bill_sundry()
	{
        $this->load->view('Store_module/Masters/Sundry/sundry');
	}

	public function save_bill_sundry_absolute_amt()
	{
		$user_id=$this->input->post('user_id');
		$sun_name=$this->input->post('sun_name');
		$print_name=$this->input->post('print_name');
		$sundry_type=$this->input->post('sundry_type');
		$default_val=$this->input->post('default_val');
		$sundry_nature=$this->input->post('sundry_nature');
		$billSunAppliedAs=$this->input->post('billSunAppliedAs');

		
		$this->MStoreBillSundry_Modal->save_bill_sundry_absolute_amt_mdl($user_id,$sun_name,$print_name,$sundry_type,$default_val,$sundry_nature,$billSunAppliedAs);
		echo "Bill Sundry Detail has been saved..";
		
	}


	public function save_bill_sundry_percentage_amt()
	{
		$user_id=$this->input->post('user_id');
		$sun_name=$this->input->post('sun_name');
		$print_name=$this->input->post('print_name');
		$sundry_type=$this->input->post('sundry_type');
		$default_val=$this->input->post('default_val');
		$sundry_nature=$this->input->post('sundry_nature');
		$billSunAppliedAs=$this->input->post('billSunAppliedAs');
		$percent_of=$this->input->post('percent_of');
		$perc_amt_of=$this->input->post('perc_amt_of');
		$roundSudryAmtChk=$this->input->post('roundSudryAmtChk');
		$roundNearOfVal=$this->input->post('roundNearOfVal');

		
		$this->MStoreBillSundry_Modal->save_bill_sundry_percentage_amt_mdl($user_id,$sun_name,$print_name,$sundry_type,$default_val,$sundry_nature,$billSunAppliedAs,$percent_of,$perc_amt_of,$roundSudryAmtChk,$roundNearOfVal);
		echo "Bill Sundry Detail has been saved..";
		
	}

	
	function fetch_bill_sundry_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreBillSundry_Modal->fetch_bill_sundry_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}
	
}











