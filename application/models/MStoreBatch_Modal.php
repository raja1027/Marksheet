<?php

class MStoreBatch_Modal extends CI_Model
{
    function fetch_stockin_products_details_mdl($user_id,$trans_type,$from_date,$to_date)
    {		
		$query = $this->db->query("CALL fetch_mstore_stockin_products_batch_details('".$user_id."','".$trans_type."','".$from_date."','".$to_date."')");
        return $query->result();
    }
	
    function save_add_batch_mdl($user_id,$txtbatch_no,$txtExp_date,$txtQty,$inout_type,$txtProId)
    {		
		$query = $this->db->query("CALL save_mstore_batch_stock_details('".$user_id."','".$txtbatch_no."','".$txtExp_date."','".$txtQty."','".$inout_type."','".$txtProId."')");
    }
	
    function fetch_all_batches_of_product_mdl($user_id,$prod_id,$inout_type)
    {		
		$query = $this->db->query("CALL save_mstore_all_batch_stock_of_product('".$user_id."','".$prod_id."')");
 		return $query->result();
   }
	
    function check_existance_of_batch_mdl($user_id,$txtbatch_no)
    {		
		$query = $this->db->query("CALL check_mstore_existance_of_batch('".$user_id."','".$txtbatch_no."')");
 		return $query->result();
   }
	
	
}

?>