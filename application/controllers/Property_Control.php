<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property_Control extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Global_logged_in"))
		{
			redirect("Login_Control/admin_login");
		}
    }

	function fetch_property_details_by_mobile()
	{
		$txt_mobile=$this->input->post('txt_mobile');
		$txt_addi_mobile=$this->input->post('txt_addi_mobile');
		
		$chk['mobile_check_result']=$this->Property_Modal->save_prop_mobile_and_next($txt_mobile,$txt_addi_mobile);
		// $chk['login_check_result']=$this->Login_Modal->check_login($comp_name,$u_pass);
		
		if($chk['mobile_check_result']==TRUE)
		{
			foreach($chk['mobile_check_result'] as $r):
				$prop_id=$r->prop_id;
				
				$this->session->set_userdata("current_prop_id",$prop_id);
				echo $current_prop_id= $this->session->userdata('current_prop_id');
			endforeach;
		}
	}

	function save_prop_mobile_and_next()
	{
		$txt_mobile=$this->input->post('txt_mobile');
		$txt_addi_mobile=$this->input->post('txt_addi_mobile');
		
		$chk['mobile_check_result']=$this->Property_Modal->save_prop_mobile_and_next($txt_mobile,$txt_addi_mobile);
		// $chk['login_check_result']=$this->Login_Modal->check_login($comp_name,$u_pass);
		
		if($chk['mobile_check_result']==TRUE)
		{
			foreach($chk['mobile_check_result'] as $r):
				$prop_id=$r->prop_id;
				
				$this->session->set_userdata("current_prop_id",$prop_id);
				echo $current_prop_id= $this->session->userdata('current_prop_id');
			endforeach;
		}
	}

	function fetch_prop_mobile_and_next()
	{
		$txt_mobile=$this->input->post('txt_mobile');
		$txt_addi_mobile=$this->input->post('txt_addi_mobile');
		
		$chk['mobile_check_result']=$this->Property_Modal->fetch_prop_mobile_and_next($txt_mobile,$txt_addi_mobile);
		
		if($chk['mobile_check_result']==TRUE)
		{
			foreach($chk['mobile_check_result'] as $r):
				$prop_id=$r->prop_id;
				
				$this->session->set_userdata("current_prop_id",$prop_id);
				echo $current_prop_id= $this->session->userdata('current_prop_id');
			endforeach;
		}
	}

	function check_mob_exist()
	{
		$txt_mobile=$this->input->post('txt_mobile');
		
		$data=$this->Property_Modal->check_mob_exist($txt_mobile);
		echo json_encode($data);
		
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

	
	function fetch_dynamic_fields()
	{
		$data=$this->Property_Modal->fetch_dynamic_fields_mdl();
		echo json_encode($data);  ;
	}

	
	function fetch_all_cities()
	{
		// $user_id=$this->input->post('user_id');
		$data=$this->Location_Modal->fetch_all_cities_mdl();
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



	function update_property()
	{
		$ownership=$this->input->post('ownership');

		$location=$this->input->post('location');

		$phone=$this->input->post('phone');

		$exphone=$this->input->post('exphone');

		$pincode=$this->input->post('pincode');

		$paddress=$this->input->post('paddress');

		$cost=$this->input->post('cost');

		$bhk=$this->input->post('bhk');

		$furnishing=$this->input->post('furnishing');

		$floornumbers=$this->input->post('floornumbers');

		$food=$this->input->post('food');

		$religion=$this->input->post('religion');

		$agent=$this->input->post('agent');

		$propertycategory=$this->input->post('propertycategory');

		$propertytype=$this->input->post('propertytype');

		$handleby=$this->input->post('handleby');

		$occupation=$this->input->post('occupation');

		$bcondition=$this->input->post('bcondition');

		$facing=$this->input->post('facing');

		$areasize=$this->input->post('areasize');

		$security_amt=$this->input->post('security_amt');

		$majority=$this->input->post('majority');

		$yesno=$this->input->post('yesno');

		$chk1=$this->input->post('chk1');

		$aboutproperty=$this->input->post('aboutproperty');

		$datevacant=$this->input->post('datevacant');

		$chk_mark_alloted=$this->input->post('chk_mark_alloted');

		$dateallot=$this->input->post('dateallot');

		$dateexpectvac=$this->input->post('dateexpectvac');

		$checked_dynamic_key=$this->input->post('checked_dynamic_key');

		$checked_dynamic_field=$this->input->post('checked_dynamic_field');

		// $checked_dynamic_key=$this->input->post('checked_dynamic_key');

		// $checked_dynamic_field=$this->input->post('checked_dynamic_field');

		$checked_aminities=$this->input->post('checked_aminities');

		$prop_id=$this->input->post('txt_prop_id');

		$config['upload_path'] = './property_images/';

		// $config['allowed_types'] = '*';
		$config['allowed_types'] = 'jpeg|jpg|png';

		$config['max_width']  = '1024909';

		$config['max_height']  = '768909';

		$this->load->library('upload', $config);

		// echo $this->upload->do_upload('file_property');
		if ( ! $this->upload->do_upload('file_property'))
		{
			// echo "nnnn";
			$data=$this->Property_Modal->update_property_no_img_do($ownership,$location,$phone,$exphone,$pincode,$paddress,$cost,$bhk,$furnishing,$floornumbers,$food,$religion,$agent,$propertycategory,$propertytype,$handleby,$occupation,$bcondition,$facing,$areasize,$security_amt,$majority,$yesno,$chk1,$aboutproperty,$datevacant,$chk_mark_alloted,$dateallot,$dateexpectvac,$checked_aminities,$prop_id);

			// redirect("next_to_add_property");
		}
		else
		{
			// echo "yyyy";
			$upload_data = $this->upload->data();
			$file_property=$upload_data['file_name'];

			// echo $file_property=$upload_data['file_property'];

			$data=$this->Property_Modal->update_property_do($ownership,$location,$phone,$exphone,$pincode,$paddress,$cost,$bhk,$furnishing,$floornumbers,$food,$religion,$agent,$propertycategory,$propertytype,$handleby,$occupation,$bcondition,$facing,$areasize,$security_amt,$majority,$yesno,$chk1,$aboutproperty,$datevacant,$chk_mark_alloted,$dateallot,$dateexpectvac,$checked_aminities,$prop_id,$file_property);
			
			if($data=='1')
			{
				
			}

			// redirect("next_to_add_property");
		}

	}




	public function ViewResidencialProperty()
	{

		$search_all = isset($_POST['search_all']) ? $_POST['search_all'] : NULL;
		
		$config = array();
        $config["base_url"] = base_url() . "ViewResidencialProperty";

		$config['total_rows']=$this->Property_Modal->get_ResidencialProperty_count($search_all);

        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        // $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();
		
		$data['search_all']=$search_all;

        // $data['locality_list'] = $this->Location_Modal->get_localities($config["per_page"], $data['page'],$search_all);
        $data['property_list'] = $this->Property_Modal->fetch_ResidencialProperty($config["per_page"], $data['page'],$search_all);
		$this->load->view('ViewResidencialProperties',$data);
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
