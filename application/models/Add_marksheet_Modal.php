<?php
class Add_marksheet_Modal extends CI_Model{	function add_marksheet_do($student_name,$student_class,$roll_no,$maths_marks,$phy_marks,$chem_marks,$hindi_marks,$english_marks,$passport_size_photo,$total_ontained_marks,$total_score_percentage)    {				$query = $this->db->query("insert into student_profile_with_marks(stud_name,class,roll_no,passport_size_image,maths_marks,phy_marks,chem_marks,hindi_marks,english_marks,total_ontained_marks,total_score_percentage) values('".$student_name."','".$student_class."','".$roll_no."','".$passport_size_photo."','".$maths_marks."','".$phy_marks."','".$chem_marks."','".$hindi_marks."','".$english_marks."','".$total_ontained_marks."','".$total_score_percentage."')");		if ($query !== FALSE)		{			return "Saved";		}    }		    function fetch_getstudents_count($search_all)    {		        $sql = "select * from student_profile_with_marks where stud_name like '%$search_all%' order by total_ontained_marks desc";        $query = $this->db->query($sql);        return $query->num_rows();    }		function fetch_getstudents($limit, $start, $search_all)    {				if ($search_all == "NULL") $search_all = "";		$sql = "SELECT * FROM student_profile_with_marks WHERE stud_name like '%$search_all%' order by total_ontained_marks desc limit " . $start . ", " . $limit;		$query = $this->db->query($sql);		return $query->result();    }			    function fetch_getstudents_count_param($search_all,$stud_name,$class,$roll_no,$total_score_percentage)    {		        $sql = "select * from student_profile_with_marks where stud_name like '%$search_all%' and stud_name like '%$stud_name%' and class like '%$class%' and roll_no like '%$roll_no%' and total_score_percentage like '%$total_score_percentage%' order by total_ontained_marks desc";        $query = $this->db->query($sql);        return $query->num_rows();    }		function fetch_getstudents_param($limit, $start,$search_all,$stud_name,$class,$roll_no,$total_score_percentage)    {				if ($search_all == "NULL") $search_all = "";		$sql = "SELECT * FROM student_profile_with_marks WHERE stud_name like '%$search_all%' and stud_name like '%$stud_name%' and class like '%$class%' and roll_no like '%$roll_no%' and total_score_percentage like '%$total_score_percentage%' order by total_ontained_marks desc limit 0,1000 ";		$query = $this->db->query($sql);		return $query->result();    }		}
?>