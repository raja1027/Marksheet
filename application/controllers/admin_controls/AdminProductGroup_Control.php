<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProductGroup_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Adminlogged_in"))
		{
			redirect("admin_login");
		}
    }

	public function chk_duplicacy_grp()
	{
		$user_id=$this->input->post('user_id');
		$group_name=$this->input->post('group_name');
		$data=$this->MStoreProductGroup_Modal->chk_duplicacy_grp_mdl($user_id,$group_name);
		echo json_encode($data);
	}


	function Product_group()
	{
        $this->load->view('Store_module/Masters/Product_group/product_group');
	}
	
	
	
	function fetch_tax_category()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProductGroup_Modal->fetch_tax_category_mdl($user_id);
		echo json_encode($data);  ;
	}


	function save_product_group()
	{
		//---------------//
		$config['upload_path']="./upload_group";
        $config['allowed_types']='gif|jpg|png';
        $this->load->library('upload',$config);
        if($this->upload->do_upload("grp_img"))
		{
			$data = array('upload_data' => $this->upload->data());
			
			$group_name=$this->input->post('group_name');
			$alias=$this->input->post('alias');
			$main_group_state=$this->input->post('main_group_flag');
			$parent_group_id=$this->input->post('parent_group');
			$active_status_flag=$this->input->post('active_state_flag');
			$imgpath=$data['upload_data']['file_name'];

			$user_id=$this->input->post('puser_id');
			$this->AdminProductGroup_Modal->save_product_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$active_status_flag,$imgpath);
			echo "Product Group has been Saved";
			
		}
		else
		{
			echo "Try Again";
		}
		//---------------//
		
		
		
		/* $group_name=$this->input->post('group_name');
		$alias=$this->input->post('alias');
		$main_group_state=$this->input->post('main_group_state');
		$parent_group_id=$this->input->post('parent_group_id');
		$active_status_flag=$this->input->post('active_status_flag');

		$user_id=$this->input->post('user_id');
		$this->AdminProductGroup_Modal->save_product_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$active_status_flag);
		echo "Product Group has been Saved"; */
	}


	function save_service_group()
	{
		//---------------//
		$config['upload_path']="./upload_service_group";
        $config['allowed_types']='gif|jpg|png';
        $this->load->library('upload',$config);
        if($this->upload->do_upload("grp_img"))
		{
			$data = array('upload_data' => $this->upload->data());
			
			$group_name=$this->input->post('group_name');
			$alias=$this->input->post('alias');
			$main_group_state=$this->input->post('main_group_flag');
			$parent_group_id=$this->input->post('parent_group');
			$active_status_flag=$this->input->post('active_state_flag');
			$imgpath=$data['upload_data']['file_name'];

			$user_id=$this->input->post('user_id');
			$this->AdminProductGroup_Modal->save_service_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$active_status_flag,$imgpath);
			echo "Service Group has been Saved";
			
		}
		else
		{
			echo "Try Again";
		}
		//---------------//
		
		
		
		/* $group_name=$this->input->post('group_name');
		$alias=$this->input->post('alias');
		$main_group_state=$this->input->post('main_group_state');
		$parent_group_id=$this->input->post('parent_group_id');
		$active_status_flag=$this->input->post('active_status_flag');

		$user_id=$this->input->post('user_id');
		$this->AdminProductGroup_Modal->save_product_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$active_status_flag);
		echo "Product Group has been Saved"; */
	}


	function update_product_group()
	{
		$group_name=$this->input->post('group_name');
		$alias=$this->input->post('alias');

		$main_group_state=$this->input->post('main_group_flag');
		$parent_group_id=$this->input->post('parent_group');
		$active_status_flag=$this->input->post('active_state_flag');

		$hide_id=$this->input->post('hide_id');
		$user_id=$this->input->post('puser_id');


		//---------------//
		$config['upload_path']="./upload_group";
        $config['allowed_types']='gif|jpg|png';
        $this->load->library('upload',$config);
        if($this->upload->do_upload("grp_img"))
		{
			$data = array('upload_data' => $this->upload->data());
			
			$imgpath=$data['upload_data']['file_name'];

			$this->AdminProductGroup_Modal->update_product_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$hide_id,$active_status_flag,$imgpath);
			echo "Product Group has been Updated";
		}
		else
		{
			$this->AdminProductGroup_Modal->update_product_group_without_image_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$hide_id,$active_status_flag);
			echo "Product Group has been Updated";
		}
		//---------------//

	}
	
	

	function update_service_group()
	{
			
		$group_name=$this->input->post('group_name');
		$alias=$this->input->post('alias');

		$main_group_state=$this->input->post('main_group_flag');
		$parent_group_id=$this->input->post('parent_group');
		$active_status_flag=$this->input->post('active_state_flag');

		$hide_id=$this->input->post('hide_id');
		$user_id=$this->input->post('user_id');

		//---------------//
		$config['upload_path']="./upload_service_group";
        $config['allowed_types']='gif|jpg|png';
        $this->load->library('upload',$config);
        if($this->upload->do_upload("grp_img"))
		{
			$data = array('upload_data' => $this->upload->data());

			$imgpath=$data['upload_data']['file_name'];

			$this->AdminProductGroup_Modal->update_service_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$hide_id,$active_status_flag,$imgpath);
			echo "Product Group has been Updated";
			
		}
		else
		{
			$this->AdminProductGroup_Modal->update_service_group_without_image_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$hide_id,$active_status_flag);
			echo "Product Group has been Updated!";
		}
		//---------------//

	}
	
	
	function fetch_service_group_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProductGroup_Modal->fetch_service_group_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	
	function fetch_product_group_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProductGroup_Modal->fetch_product_group_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	function fetch_service_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProductGroup_Modal->fetch_service_group_in_groupoption_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	
	function fetch_product_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProductGroup_Modal->fetch_product_group_in_groupoption_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	
 	function fetch_product_groups_for_edit()
	{
		$edit_id=$this->input->post('edit_id');
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProductGroup_Modal->fetch_product_groups_for_edit_mdl($user_id,$edit_id);
		echo json_encode($data);  ;
	}
	

	
 	function fetch_service_groups_for_edit()
	{
		$edit_id=$this->input->post('edit_id');
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProductGroup_Modal->fetch_service_groups_for_edit_mdl($user_id,$edit_id);
		echo json_encode($data);  ;
	}
	




	/* public function chk_duplicacy_grp()
	{
		$user_id=$this->input->post('user_id');
		$group_name=$this->input->post('group_name');
		$data=$this->AdminProductGroup_Modal->chk_duplicacy_grp_mdl($user_id,$group_name);
		echo json_encode($data);
	} */


	public function chk_duplicacy()
	{
		$user_id=$this->input->post('user_id');
		$product_name=$this->input->post('product_name');
		$data=$this->AdminProductGroup_Modal->chk_duplicacy_mdl($user_id,$product_name);
		echo json_encode($data);
	}

	

}




