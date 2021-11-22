<?php
class Login_Modal extends CI_Model
{
	/*--- Login to account ---*/
	function check_login($comp_name,$u_pass)	{		$this->db->select('*');				$this->db->from('login_user');		$array = array('user_id' => $comp_name, 'password' => $u_pass);		$this->db->where($array); 		$query = $this->db->get();        return $result = $query->result();
	}		}
?>