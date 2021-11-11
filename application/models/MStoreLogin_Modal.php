<?php
class MStoreLogin_Modal extends CI_Model
{
	/*--- for inserting news---*/
	function check_Mstore_login($comp_name,$u_pass)	{
		$query = $this->db->query("CALL chk_mstore_login('".$comp_name."','".$u_pass."')"); 
		return $query->result();
	}		}
?>