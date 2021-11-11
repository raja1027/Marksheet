<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreBranches_Control extends CI_Controller
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
	
	function dashboard()
	{
        $this->load->view('Store_module/Branches/brances_dashboard');
	}
	
	function add_franchise()
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


	
}
