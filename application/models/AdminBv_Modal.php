<?phpclass AdminBv_Modal extends CI_Model{		    function bv_update_mdl($our_prod_amt,$our_prod_bv,$other_prod_amt,$other_prod_bv)    {				$query = $this->db->query("CALL update_admin_bv('".$our_prod_amt."','".$our_prod_bv."','".$other_prod_amt."','".$other_prod_bv."')");    }				    function bv_fetch_mdl()    {				$query = $this->db->query("CALL fetch_admin_bv()");        return $query->result();    }		}?>