<?php
class MStoreLocation_Modal extends CI_Model
{
	/*--- for inserting news---*/
	function save_store_statelocation_do($state_name,$state_code,$state_note)
		$data=array('l_master_type'=>'2','l2'=>$state_name,'l3'=>'1','l4'=>$state_code,'l5'=>$state_note);
		$this->db->insert('location_master',$data);
	}
		


		/* 
		function show_circulars_model($limit, $start, $st = NULL,$cookie_id)
		{
        if ($st == "NIL") $st = "";
        $sql = "select * from circular where circular_title like '%$st%' and site_id=".$cookie_id." limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
		}


    function get_circulars_count($cookie_id)
    {
        $sql = "select * from circular where site_id=".$cookie_id;
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
		
		
		
		
		
		
		
		
		
		/*--- for showing  in edit page---*/
		/* function show_edit_circulars_model($updateID)
		{
			$this->db->select('*');
			$this->db->from('circular');
			$this->db->where('circular_id',$updateID); 
			$query=$this->db->get();
			return $query->result();
		} */
		
		
		
		
	/*------------update_circulars_with_image_do--------*/
		
		/* function update_circulars_with_image_do($circular_title,$hiddenId,$circular_file_name)
		{
				
				$data=array('circular_title'=>$circular_title,'circular_file_name'=>$circular_file_name);
				$this->db->where('circular_id', $hiddenId);
				$this->db->update('circular', $data);
		} */
		
		
		
		
		
		
		
	/*------------update_circulars_without_image_do--------*/
		/* function update_circulars_without_image_do($circular_title,$hiddenId)
		{
				
				$data=array('circular_title'=>$circular_title);
				$this->db->where('circular_id', $hiddenId);
				$this->db->update('circular', $data);
		} */
	
	
	
	
	
	
	/* function delete_circulars_record($delID)
	{
				
				$this->db->where('circular_id',$delID);
				$this->db->delete('circular');	
	} */
?>