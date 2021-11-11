<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location_Control extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Global_logged_in"))
		{
			redirect("Login_Control/admin_login");
		}
    }

	function save_new_city()
	{
		$txt_city=$this->input->post('txt_city');
		
		$data=$this->Location_Modal->save_new_city($txt_city);
		echo "City has been Saved";
		
	}

	function btn_update_city()
	{
		$txt_city=$this->input->post('txt_city');
		$txt_city_id=$this->input->post('txt_city_id');
		
		$data=$this->Location_Modal->btn_update_city($txt_city,$txt_city_id);
		echo $data;
		
	}

	function update_locality()
	{
		$txt_city=$this->input->post('txt_city');
		$txt_locality=$this->input->post('txt_locality');
		$txt_locality_id=$this->input->post('txt_locality_id');
		
		echo $data=$this->Location_Modal->update_locality($txt_city,$txt_locality,$txt_locality_id);
		
		// echo $data1 = str_replace(array("\n", "\r"), '', $data);		
	}

	function delete_city()
	{
		$got_del_id=$this->input->post('got_del_id');
		
		$this->Location_Modal->delete_city($got_del_id);
		echo "City has been Deleted";
		
	}

	function delete_locality()
	{
		$got_del_id=$this->input->post('got_del_id');
		
		$this->Location_Modal->delete_locality($got_del_id);
		echo "City has been Deleted";
		
	}

	
	function fetch_all_cities()
	{
		// $user_id=$this->input->post('user_id');
		$data=$this->Location_Modal->fetch_all_cities_mdl();
		echo json_encode($data);  ;
	}
	
	// function fetch_all_location()
	// {
		// $slt_city=$this->input->post('slt_city');
		// $data=$this->Location_Modal->fetch_all_location_by_citie_mdl($slt_city);
		// echo json_encode($data);  ;
	// }
	function fetch_all_location()
	{
		// $slt_city=$this->input->post('slt_city');
		$data=$this->Location_Modal->get_all_localities_mdl();
		echo json_encode($data);  ;
	}

	
	function get_city_for_edit()
	{
		$got_edit_id=$this->input->post('got_edit_id');
		$data=$this->Location_Modal->get_city_for_edit_mdl($got_edit_id);
		echo json_encode($data);  ;
	}

	
	function get_locality_for_edit()
	{
		$got_edit_id=$this->input->post('got_edit_id');
		$data=$this->Location_Modal->get_locality_for_edit_mdl($got_edit_id);
		echo json_encode($data);  ;
	}



	function save_new_locality()
	{
		$txt_city=$this->input->post('txt_city');
		$txt_locality=$this->input->post('txt_locality');
		
		$this->Location_Modal->save_new_locality($txt_city,$txt_locality);
		echo "Locality has been Saved";
		
	}


	
	function get_all_localities()
	{
		$data=$this->Location_Modal->get_all_localities_mdl();
		echo json_encode($data);  ;
	}

	


	// public function mstore_logout()
	// {
		// $this->session->unset_userdata("MStorelogged_in");
		// $this->session->unset_userdata("MStorelogged_in_depo");
		// redirect('MStore_Control/panel_home');
	// }
	
}
