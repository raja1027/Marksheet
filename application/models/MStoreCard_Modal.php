<?php

class MStoreCard_Modal extends CI_Model
{
    function verify_card_mdl($cardNo)
    {		
		$query = $this->db->query("CALL verify_card_in_store('".$cardNo."')");
        return $query->result();
    }

    function recharge_members_in_franchise_mdl($m_recharge_amt,$recharge_by,$member_id)
    {		
		$query = $this->db->query("CALL recharge_members_by_admin('".$m_recharge_amt."','".$recharge_by."','".$member_id."')");
    }
	
    function fetch_vendor_ewallet_totamt_mdl($user_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_vendor_ewallet_totamt('".$user_id."')");
        return $query->result();
    }
	
    function fetch_card_vendor_details_mdl($u_id)
    {		
		$query = $this->db->query("CALL fetch_mstore_card_vendor_details('".$u_id."')");
        return $query->result();
    }

    function insert_payment_status($txn_for,$txn_status,$txn_id,$txn_amount,$txn_date_time,$txn_from,$txn_info,$payuMoneyId,$referance_number,$gateway_status,$txn_date)
    {		
		$query = $this->db->query("CALL save_payment_status('".$txn_for."','".$txn_status."','".$txn_id."','".$txn_amount."','".$txn_date_time."','".$txn_from."','".$txn_info."','".$payuMoneyId."','".$referance_number."','".$gateway_status."','".$txn_date."')");
        return $query->result();
    }
	
    function add_in_member_wallet_mdl($last_tran_id,$txn_amount,$txn_date,$txn_date_time,$cust_no,$txn_status1)
    {
		if (mysqli_more_results($this->db->conn_id))
		{
            mysqli_next_result($this->db->conn_id);
        }
		$user_type="1";
		$this->db->query("CALL add_in_vendor_wallet('".$last_tran_id."','".$txn_amount."','".$txn_date."','".$txn_date_time."','".$cust_no."','".$txn_status1."','".$user_type."')");
    }


	
    /* function insert_payment_status($txn_for,$txn_status,$txn_id,$txn_amount,$txn_date_time,$txn_from,$txn_info,$payuMoneyId,$referance_number,$gateway_status,$txn_date)
    {		
		$query = $this->db->query("CALL save_payment_status('".$txn_for."','".$txn_status."','".$txn_id."','".$txn_amount."','".$txn_date_time."','".$txn_from."','".$txn_info."','".$payuMoneyId."','".$referance_number."','".$gateway_status."','".$txn_date."')");
        // return $query->result();
    } */
	
    /* function insert_payment_status($txn_for,$txn_status,$txn_id,$txn_amount,$txn_date_time,$txn_from,$txn_info,$payuMoneyId,$referance_number,$gateway_status,$txn_date)
    {		
		$query = $this->db->query("CALL save_payment_status('".$txn_for."','".$txn_for.",'".$txn_status.",'".$txn_id.",'".$txn_amount.",'".$txn_date_time.",'".$txn_from.",'".$txn_info.",'".$payuMoneyId.",'".$referance_number.",'".$gateway_status."','".$txn_date."')");
        return $query->result();
    } */
    
    /* jhanak Nishad  */
    public function get_multilple_row($table,$params)
    {
         if(!empty($params))
         {
             foreach($params as $key=>$value)
             {
                    $this->db->where(trim($key),trim($value));
             }
         }
            $data =  $this->db->get(trim($table))->result_array();
            return $data;
    }
    
    public function get_wallet($u_id,$user_type)
    {
        $quer1 = $this->db->query("CALL fetch_wallet_data('".$u_id."','INB','".$user_type."')");
        $incoming=$quer1->row_array()['total'];
        $conn = $this->db->conn_id;
        do {
           if ($result = mysqli_store_result($conn))
            {
              mysqli_free_result($result);
            }
           } while (mysqli_more_results($conn) && mysqli_next_result($conn));
 
        $quer2 = $this->db->query("CALL fetch_wallet_data('".$u_id."','OUTB','".$user_type."')");
        $outcoming=$quer2->row_array()['total'];
        $conn = $this->db->conn_id;
        do {
           if ($result = mysqli_store_result($conn))
            {
              mysqli_free_result($result);
            }
           } while (mysqli_more_results($conn) && mysqli_next_result($conn));
        return round(($incoming-$outcoming),2);
    }
    
    public function get_single_object($table,$params,$get_key)
    {
        if(!empty($params))
        {
           foreach($params as $key=>$value)
             {
                 $this->db->where(trim($key),trim($value));
             }
        }
        $data =  $this->db->get(trim($table))->row();
        if(!empty($data))
        {
           return $data->$get_key;
        }
        else
        {
            return null;
        }

    }
    public function get_single_row($table,$params)
    {
        if(!empty($params)):
            foreach($params as $key=>$value)
            {
                $this->db->where(trim($key),trim($value));
            }
       endif;
           $data =  $this->db->get(trim($table))->row_array();
           return $data;
    }
    
    public function insert_row_data($tbl,$params)
    {
       $this->db->insert(trim($tbl),$params);
       return $this->db->insert_id();
    }
        public function update_row_data($table,$where_params,$params)
    {
		if(!empty($where_params))
		{
			foreach($where_params as $w_key=>$w_val)
			{
				$this->db->where(trim($w_key),$w_val);
			}
		}
        if(!empty($params))
        {
            foreach($params as $s_key=>$s_val)
            {
                 $this->db->set(trim($s_key),$s_val);
            }
        }
		return $this->db->update(trim($table));
    }
    public function get_member_wallet($u_id,$type)
    {
        $quer1=$this->db->query("select sum(txn_amount) as total from kisan_wallet where txn_UserId='$u_id' and txn_status='INB' and user_type='$type'");
        $incoming=$quer1->row_array()['total'];
        $quer2=$this->db->query("select sum(txn_amount) as total from kisan_wallet where txn_UserId='$u_id' and txn_status='OUTB' and user_type='$type'");
        $outgoing=$quer2->row_array()['total'];
        return round(($incoming-$outgoing),1);
    }
    
    /* end */
	
}

?>