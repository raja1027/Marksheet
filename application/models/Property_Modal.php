<?php
class Property_Modal extends CI_Model
	/*--- for inserting news---*/
	function save_new_city($txt_city)
		$data=array('city_name'=>$txt_city);
		$this->db->insert('city',$data);
	}
		$data=array('location_name'=>$txt_locality,'city_id'=>$txt_city);
		$this->db->insert('location',$data);
	}
		$data=array('u_id'=>$user_id,'account_group_name'=>$group_name,'ag_print_name'=>$print_name,'parent_id'=>$parent_group);
		$this->db->insert('account_group_master',$data);
	}

?>