<?php
class MStoreStockIN_Modal extends CI_Model
{
    function fetch_stockin_in_tbody_mdl($user_id,$in_out_state)    {				$query = $this->db->query("CALL fetch_mstore_stockin_out('".$user_id."','".$in_out_state."')");        return $query->result();		    }	}
?>