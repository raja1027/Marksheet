<?php

class MStoreStockOut_Modal extends CI_Model

{

	/*--- for inserting news---*/

	function save_store_account_group_do($group_name,$print_name,$user_id)
	{

		$data=array('u_id'=>'1','account_group_name'=>$group_name,'ag_print_name'=>$print_name,'parent_flag'=>'1');

		$this->db->insert('account_group_master',$data);

	}
	
	
	function save_store_account_group_child_do($group_name,$print_name,$user_id,$parent_group)
	{

		$data=array('u_id'=>'1','account_group_name'=>$group_name,'ag_print_name'=>$print_name,'parent_id'=>$parent_group);

		$this->db->insert('account_group_master',$data);

	}

		
    function fetch_account_group_in_groupoption_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_acc_group_in_option_ag('".$user_id."')");

        return $query->result();
		
    }

    function fetch_account_group_in_tbody_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_stockin_out('".$user_id."','2')");

        return $query->result();
		
    }

	
    function fetch_states_in_option_mdl()
    {		
		$query = $this->db->query("CALL fetch_all_states()");

        return $query->result();
		
    }

	
	
    function fetch_cities_in_option_mdl($state_id)
    {		
		$query = $this->db->query("CALL fetch_cities_by_state($state_id)");

        return $query->result();
    }
	
	
    function fetch_account_group_in_edit_mdl($user_id,$edit_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_accgroup_for_edit($edit_id,$user_id)");

        return $query->result();
    }
	
	
	
	

	
    function save_store_account_details_do($user_id,$account_name,$alias,$print_name,$parent_group,$op_balance,$openBalRdo,$prev_yr_bal,$prevBalRdo,$state,$city,$type_of_dealer,$gstIn_uin,$address,$aadhaar_no,$it_pan,$e_mail,$mob_no,$fax,$transport,$pin_code,$tin,$tele_no,$contact_person,$cst,$lst,$service_tax_number,$lbt_no,$ie_no)
    {		
		$query = $this->db->query("CALL save_store_account_details('".$user_id."','".$account_name."','".$alias."','".$print_name."','".$parent_group."','".$op_balance."','".$openBalRdo."','".$prev_yr_bal."','".$prevBalRdo."','".$state."','".$city."','".$type_of_dealer."','".$gstIn_uin."','".$address."','".$aadhaar_no."','".$it_pan."','".$e_mail."','".$mob_no."','".$fax."','".$transport."','".$pin_code."','".$tin."','".$tele_no."','".$contact_person."','".$cst."','".$lst."','".$service_tax_number."','".$lbt_no."','".$ie_no."')");

        //return "Account detail has been saved..";
		
    }

	

	
    function update_store_account_group_do($group_name,$print_name,$user_id,$hide_id)
    {		
		$query = $this->db->query("CALL update_store_account_group('".$group_name."','".$print_name."','".$user_id."','".$hide_id."')");
    }

    function update_store_account_group_child_do($group_name,$print_name,$parent_group,$user_id,$hide_id)
    {		
		$query = $this->db->query("CALL update_store_account_group_child('".$group_name."','".$print_name."','".$parent_group."','".$user_id."','".$hide_id."')");
    }

	
	
	
	

}

?>