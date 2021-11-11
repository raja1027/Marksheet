<?php

class MStoreProductGroup_Modal extends CI_Model
{

		
    function fetch_tax_category_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_alltax_category('".$user_id."')");

        return $query->result();
    }

	
	
	function save_product_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$sale_acc,$purchase_acc,$stock_acc,$enable_hsn_state,$hsn_code,$enable_ax_state,$tax_category,$user_id)
    {		
		$query = $this->db->query("CALL save_mstore_product_group('".$user_id."','".$group_name."','".$alias."','".$main_group_state."','".$parent_group_id."','".$sale_acc."','".$purchase_acc."','".$stock_acc."','".$enable_hsn_state."','".$hsn_code."','".$enable_ax_state."','".$tax_category."')");
		
    }
	
	
	function update_product_group_mdl($group_name,$alias,$main_group_state,$parent_group_id,$sale_acc,$purchase_acc,$stock_acc,$enable_hsn_state,$hsn_code,$enable_ax_state,$tax_category,$user_id,$hide_id)
    {		
		$query = $this->db->query("CALL update_mstore_product_group('".$user_id."','".$group_name."','".$alias."','".$main_group_state."','".$parent_group_id."','".$sale_acc."','".$purchase_acc."','".$stock_acc."','".$enable_hsn_state."','".$hsn_code."','".$enable_ax_state."','".$tax_category."','".$hide_id."')");
		
    }
	
		
    function fetch_product_group_in_tbody_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_product_group_in_tbody('".$user_id."')");

        return $query->result();
    }
    function fetch_product_groups_for_edit_mdl($user_id,$edit_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_product_group_for_edit('".$user_id."','".$edit_id."')");

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



}

?>