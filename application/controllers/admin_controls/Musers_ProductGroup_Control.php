<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musers_ProductGroup_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Origin, Content-Type");
        $json          =  file_get_contents('php://input');
        $this->input   =  json_decode($json,true);
    }
 

	
	function fetch_service_main_group()
	{
		$user_id='4';
		$data=$this->AdminProductGroup_Modal->fetch_service_main_group_mdl($user_id);

		if(!empty($data))
		{
			$data_final['all_data']=$data;
			$data_final['status']='1';
			$data_final['message']='Data Found!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']='';
			$data_final['status']='0';
			$data_final['message']='Data Not Found!';
			
			echo json_encode($data_final);
		}
	}
	
	
	function fetch_product_main_group()
	{
		$user_id='4';
		$data=$this->AdminProductGroup_Modal->fetch_product_main_group_mdl($user_id);
		if(!empty($data))
		{
			$data_final['all_data']=$data;
			$data_final['status']='1';
			$data_final['message']='Data Found!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']='';
			$data_final['status']='0';
			$data_final['message']='Data Not Found!';
			
			echo json_encode($data_final);
		}
	}
	
	
	
	
 	function fetch_child_service_groups()
	{
		$parent_id=$this->input['parent_id'];
		$user_id='4';
		$data=$this->AdminProductGroup_Modal->fetch_child_service_groups_mdl($user_id,$parent_id);
		if(!empty($data))
		{
			$data_final['all_data']=$data;
			$data_final['status']='1';
			$data_final['message']='Data Found!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']='';
			$data_final['status']='0';
			$data_final['message']='Data Not Found!';
			
			echo json_encode($data_final);
		}
	}
	
	
 	function fetch_child_product_groups()
	{
		$user_id='4';
		$parent_id=$this->input['par_id'];
			$data=$this->AdminProductGroup_Modal->fetch_child_product_groups_mdl($user_id,$parent_id);
			if(!empty($data))
			{
				$data_final['all_data']=$data;
				$data_final['status']='1';
				$data_final['message']='Data Found!';
				
				echo json_encode($data_final);
			}
			else
			{
				$data_final['all_data']='';
				$data_final['status']='0';
				$data_final['message']='Data Not Found!';
				
				echo json_encode($data_final);
			}
	}
	

	 
	
	
 	function fetch_products_lists()
	{
		$user_id='4';
		$main_par_id=$this->input['main_par_id'];
		
		$parent_id=$this->input['parent_id'];

		if($parent_id=='')
		{
			$data=$this->AdminProductGroup_Modal->fetch_products_lists_all_mdl($user_id,$parent_id,$main_par_id);
			if(!empty($data))
			{
				$data_final['all_data']=$data;
				$data_final['status']='1';
				$data_final['message']='Data Found!';
				
				echo json_encode($data_final);
			}
			else
			{
				$data_final['all_data']='';
				$data_final['status']='0';
				$data_final['message']='Data Not Found!';
				
				echo json_encode($data_final);
			}
		}
		else
		{
			$data=$this->AdminProductGroup_Modal->fetch_products_lists_mdl($user_id,$parent_id);
			if(!empty($data))
			{
				$data_final['all_data']=$data;
				$data_final['status']='1';
				$data_final['message']='Data Found!';
				
				echo json_encode($data_final);
			}
			else
			{
				$data_final['all_data']='';
				$data_final['status']='0';
				$data_final['message']='Data Not Found!';
				
				echo json_encode($data_final);
			}
		}
	}
	

	
 
 	function save_muser_address()
	{
		$user_id=$this->input['user_id'];
		$house_flat=$this->input['houseflat'];
		$address_line1=$this->input['addressline1'];
		$address_line2=$this->input['addressline2'];
		$fir_name=$this->input['firstname'];
		$lastname=$this->input['lastname'];
		$pincode=$this->input['pincode'];
		$area=$this->input['area'];
		$data=$this->AdminProductGroup_Modal->save_muser_address_mdl($user_id,$house_flat,$address_line1,$address_line2,$fir_name,$lastname,$pincode,$area);
		if(!empty($data))
		{
			$data_final['all_data']=$data;
			$data_final['status']='1';
			$data_final['message']='Data has been Saved!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']='';
			$data_final['status']='0';
			$data_final['message']='Data Not Saved try again!';
			
			echo json_encode($data_final);
		}
	}
	

	
 	
	
 	function fetch_muser_address()
	{
		$user_id=$this->input['user_id'];
		$data=$this->AdminProductGroup_Modal->fetch_muser_address_mdl($user_id);
		if(!empty($data))
		{
			$data_final['all_data']=$data;
			$data_final['status']='1';
			$data_final['message']='Data Found!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']='';
			$data_final['status']='0';
			$data_final['message']='Data Not Found!';
			
			echo json_encode($data_final);
		}
	}
	


 	
	
 	function save_muser_cart_product()
	{
		$user_id=$this->input['user_id'];
		$product_id=$this->input['product_id'];
		$qty=$this->input['qty'];
		$data=$this->AdminProductGroup_Modal->save_muser_cart_product_mdl($user_id,$product_id,$qty);
		if(!empty($data))
		{
			$data_final['all_data']=$data;
			$data_final['status']='1';
			$data_final['message']='Data Saved!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']='';
			$data_final['status']='0';
			$data_final['message']='Data Not Saved!';
			
			echo json_encode($data_final);
		}
	}
	


 	
	
 	function fetch_muser_cart_product()
	{
		$user_id=$this->input['user_id'];
		$data=$this->AdminProductGroup_Modal->fetch_muser_cart_product_mdl($user_id);
		if(!empty($data))
		{
			$data_final['all_data']=$data;
			$data_final['status']='1';
			$data_final['message']='Data Found!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']='';
			$data_final['status']='0';
			$data_final['message']='Data Not Found!';
			
			echo json_encode($data_final);
		}
	}
	

	

 	
	
 	function remove_muser_cart_product()
	{
		// $parent_id=$this->input['parent_id'];
		$user_id=$this->input['user_id'];
		$product_id=$this->input['product_id'];
		$data=$this->AdminProductGroup_Modal->remove_muser_cart_product_mdl($user_id,$product_id);
		if(!empty($data))
		{
			$data_final['all_data']=$data;
			$data_final['status']='1';
			$data_final['message']='Data Removed!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']='';
			$data_final['status']='0';
			$data_final['message']='Data Not Removed!';
			
			echo json_encode($data_final);
		}
	}
	
 
	
 	

	

}




