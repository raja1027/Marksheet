<?php
class Login_Modal extends CI_Model
{
	/*--- for inserting news---*/
	function check_login($comp_name,$u_pass)	{
		$query = $this->db->query("select * from login_user where user_id='".$comp_name."' and password='".$u_pass."'"); 
		return $query->result();
	}		}
?>