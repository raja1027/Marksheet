<?php

class AdminFranchises_Modal extends CI_Model
{

		
    function update_members_in_admin_mdl($kishan_name,$kishan_dateob,$kishan_father,$mobile_no,$email_id,$kishan_address,$doc_type,$doc_no,$name_of_crop,$tot_land,$tot_cultivable_land,$tot_uncultivable_land,$userpass,$txt_hide_member_id)
    {		
		$query = $this->db->query("CALL update_members_in_admin('".$kishan_name."','".$kishan_dateob."','".$kishan_father."','".$mobile_no."','".$email_id."','".$kishan_address."','".$doc_type."','".$doc_no."','".$name_of_crop."','".$tot_land."','".$tot_cultivable_land."','".$tot_uncultivable_land."','".$userpass."','".$txt_hide_member_id."')");
    }
		
    function recharge_members_in_admin_mdl($recharge_amt_mem,$admin_id,$member_id)
    {		
		$query = $this->db->query("CALL recharge_members_by_admin('".$recharge_amt_mem."','".$admin_id."','".$member_id."')");
    }
		
    function fetch_members_all_details_in_admin_mdl($member_id)
    {		
		$query = $this->db->query("CALL get_kishan_all_profile_info('".$member_id."')");
        return $query->result();
    }
		
    function save_franchise_ledger_mdl($last_party_id)
    {		
		$query = $this->db->query("CALL add_ladger_in_franchise_generation('".$last_party_id."')");
        // return $query->result();
    }
		
    function fetch_all_members_in_admin_mdl()
    {		
		$query = $this->db->query("CALL fetch_all_members_in_admin()");
        return $query->result();
    }
		
    function save_franchises_mdl($franchise_name,$franchise_category,$mob_no,$email_id,$state,$city,$address,$pin_no,$user_name,$password)
    {		
		$query = $this->db->query("CALL save_admin_franchises('".$franchise_name."','".$franchise_category."','".$mob_no."','".$email_id."','".$state."','".$city."','".$address."','".$pin_no."','".$user_name."','".$password."')");
        return $query->result();
    }
		
		
    function update_franchises_mdl($franchise_name,$franchise_category,$mob_no,$email_id,$state,$city,$address,$pin_no,$user_name,$password,$hide_id)
    {		
		$query = $this->db->query("CALL update_admin_franchises('".$franchise_name."','".$franchise_category."','".$mob_no."','".$email_id."','".$state."','".$city."','".$address."','".$pin_no."','".$user_name."','".$password."','".$hide_id."')");
    }
		
		
    function fetch_franchise_product_detail_in_tbody_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_franchise_product_detail('".$user_id."')");

        return $query->result();
    }
		
    function fetch_admin_product_detail_franchise_in_tbody_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_admin_product_detail_in_childs('".$user_id."')");

        return $query->result();
    }
		
		
    function fetch_all_franchise($user_id)
    {		
		$query = $this->db->query("CALL fetch_admin_all_franchises()");

        return $query->result();
    }
		
		
    function fetch_all_franchises_in_tbody_mdl()
    {		
		$query = $this->db->query("CALL fetch_admin_all_franchises()");

        return $query->result();
    }
		
    function fetch_franchise_detail_for_edit_mdl($edit_id)
    {		
		$query = $this->db->query("CALL fetch_admin_franchise_detail_for_edit('".$edit_id."')");

        return $query->result();
    }
		

}

?>