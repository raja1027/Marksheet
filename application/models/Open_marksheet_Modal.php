<?php
class Open_marksheet_Modal extends CI_Model{	    function fetch_getstudents_count($search_all,$short_by,$short_field)    {				$this->db->select('*');		$this->db->from('student_profile_with_marks');		$this->db->like('stud_name', $search_all);		$this->db->order_by($short_field, $short_by);		$query = $this->db->get();        return $query->num_rows();    }		function fetch_getstudents($limit, $start, $search_all,$short_by,$short_field)    {				if ($search_all == "NULL") $search_all = "";						$this->db->select('*');		$this->db->from('student_profile_with_marks');		$this->db->like('stud_name', $search_all);		$this->db->order_by($short_field, $short_by);		$this->db->limit($limit, $start);				$query = $this->db->get();		return $query->result();    }		}
?>