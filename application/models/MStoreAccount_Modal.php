<?php
class MStoreAccount_Modal extends CI_Model
{
	/*--- for inserting news---*/
	function save_store_account_group_do($group_name,$print_name,$user_id)
		$data=array('u_id'=>$user_id,'account_group_name'=>$group_name,'ag_print_name'=>$print_name,'parent_flag'=>'1');
		$this->db->insert('account_group_master',$data);
	}
		$data=array('u_id'=>$user_id,'account_group_name'=>$group_name,'ag_print_name'=>$print_name,'parent_id'=>$parent_group);
		$this->db->insert('account_group_master',$data);
	}
		
?>