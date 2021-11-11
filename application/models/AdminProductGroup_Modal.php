<?php

class AdminProductGroup_Modal extends CI_Model
{


    function chk_duplicacy_service_mdl($user_id,$service_name)
    {		
		$query = $this->db->query("CALL chk_duplicacy_of_service('".$user_id."','".$service_name."')");

        return $query->result();
		
    }
	
	
	function save_service_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$active_status_flag,$imgpath)
    {		
		$query = $this->db->query("CALL save_admin_service_group('".$user_id."','".$group_name."','".$alias."','".$main_group_state."','".$parent_group_id."','".$active_status_flag."','".$imgpath."')");
		
    }
	
	
	function save_product_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$active_status_flag,$imgpath)
    {		
		$query = $this->db->query("CALL save_admin_product_group('".$user_id."','".$group_name."','".$alias."','".$main_group_state."','".$parent_group_id."','".$active_status_flag."','".$imgpath."')");
		
    }
	
	
	function update_service_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$hide_id,$active_status_flag,$imgpath)
    {		
		$query = $this->db->query("CALL update_admin_service_group('".$user_id."','".$group_name."','".$alias."','".$main_group_state."','".$parent_group_id."',
		'".$hide_id."','".$active_status_flag."','".$imgpath."')");
		
    }
	
	
	
	function update_service_group_without_image_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$hide_id,$active_status_flag)
    {		
		$query = $this->db->query("CALL update_admin_service_group_without_image('".$user_id."','".$group_name."','".$alias."','".$main_group_state."','".$parent_group_id."','".$hide_id."','".$active_status_flag."')");
		
    }
	
	
	function update_product_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$hide_id,$active_status_flag,$imgpath)
    {		
		$query = $this->db->query("CALL update_admin_product_group('".$user_id."','".$group_name."','".$alias."','".$main_group_state."','".$parent_group_id."',
		'".$hide_id."','".$active_status_flag."','".$imgpath."')");
		
    }
	
	
	
	function update_product_group_without_image_mdl($group_name,$alias,$main_group_state,$parent_group_id,$user_id,$hide_id,$active_status_flag)
    {		
		$query = $this->db->query("CALL update_admin_product_group_without_image('".$user_id."','".$group_name."','".$alias."','".$main_group_state."','".$parent_group_id."',
		'".$hide_id."','".$active_status_flag."')");
		
    }
	
		
    function fetch_service_group_in_tbody_mdl($user_id) 
    {		
		$query = $this->db->query("CALL fetch_mstore_service_group_in_tbody('".$user_id."')");

        return $query->result();
    }
		
    function fetch_product_group_in_tbody_mdl($user_id) 
    {		
		$query = $this->db->query("CALL fetch_mstore_product_group_in_tbody('".$user_id."')");

        return $query->result();
    }
    function fetch_service_groups_for_edit_mdl($user_id,$edit_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_service_group_for_edit('".$user_id."','".$edit_id."')");

        return $query->result();
    }

    function fetch_product_groups_for_edit_mdl($user_id,$edit_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_product_group_for_edit('".$user_id."','".$edit_id."')");

        return $query->result();
    }

    function fetch_service_group_in_groupoption_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_service_group_in_groupoption('".$user_id."')");

        return $query->result();
    }
	

    function fetch_product_group_in_groupoption_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_product_group_in_groupoption('".$user_id."')");

        return $query->result();
    }
	
	
	
	
	    function chk_duplicacy_grp_mdl($user_id,$group_name)
    {		
		$query = $this->db->query("CALL chk_duplicacy_of_product_group('".$user_id."','".$group_name."')");

        return $query->result();
		
    }


    function chk_duplicacy_mdl($user_id,$product_name,$product_barcode)
    {		
		$query = $this->db->query("CALL chk_duplicacy_of_product('".$user_id."','".$product_name."','".$product_barcode."')");

        return $query->result();
		
    }
		
    function fetch_service_main_group_mdl($user_id) 
    {		
		$query = $this->db->query("CALL fetch_mstore_service_main_group('".$user_id."')");

        return $query->result();
    }
		
    function fetch_product_main_group_mdl($user_id) 
    {		
		$query = $this->db->query("CALL fetch_mstore_product_main_group('".$user_id."')");

        return $query->result();
    }

		
    function fetch_child_product_groups_mdl($user_id,$parent_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_product_child_groups('".$user_id."','".$parent_id."')");

        return $query->result();
    }


		
    function fetch_products_lists_all_mdl($user_id,$parent_id,$main_par_id)
    {		
		$query = $this->db->query("CALL fetch_products_lists_all('".$user_id."','".$main_par_id."')");

        return $query->result();
    }


		
    function fetch_products_lists_mdl($user_id,$parent_id)
    {		
		$query = $this->db->query("CALL fetch_products_lists_for_app('".$user_id."','".$parent_id."')");

        return $query->result();
    }

 
		
    function save_muser_address_mdlsave_muser_address_mdl($user_id,$house_flat,$address_line1,$address_line2,$fir_name,$lastname,$pincode,$area)
    {		
		$query = $this->db->query("CALL save_muser_address('".$user_id."','".$house_flat."','".$address_line1."','".$address_line2."','".$fir_name."','".$lastname."','".$pincode."','".$area."')");

		if($query)
		{
			return '1';
		}
    }

		
    function fetch_muser_address_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_muser_address('".$user_id."')");

        return $query->result();
    }



		
    function save_muser_cart_product_mdl($user_id,$product_id,$qty)
    {		
		$query = $this->db->query("CALL save_muser_cart_product('".$user_id."','".$product_id."','".$qty."')");

		if($query)
		{
			return '1';
		}
    }



		
    function fetch_muser_cart_product_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_muser_cart_product('".$user_id."')");

        return $query->result();
    }





		
    function remove_muser_cart_product_mdl($user_id,$product_id)
    {		
		$query = $this->db->query("CALL remove_muser_cart_product('".$user_id."',,'".$product_id."')");

		if($query)
		{
			return '1';
		}
    }




}

?>





