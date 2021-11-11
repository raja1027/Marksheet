<?php
class AdminLogin_Modal extends CI_Model{
	/*--- for inserting news---*/
	function check_admin_login($comp_name,$u_pass)	{
		$query = $this->db->query("CALL chk_admin_login('".$comp_name."','".$u_pass."')"); 
		return $query->result();
	}		}
?>