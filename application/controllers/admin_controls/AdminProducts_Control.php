<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProducts_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Adminlogged_in"))
		{
			redirect("admin_login");
		}
    }

	function add_new_product_to_request()
	{
		$user_id=$this->input->post('user_id');
		$order1_id=$this->input->post('order1_id');
		$request_to_id=$this->input->post('request_to_id');
		$pro_id=$this->input->post('pro_id');
		$barcode_no=$this->input->post('barcode_no');
		$pro_qty=$this->input->post('pro_qty');
		$pro_price=$this->input->post('pro_price');
		$pro_tot_amt=$this->input->post('pro_tot_amt');
		$all_Old_pro_tot_amt=$this->input->post('all_Old_pro_tot_amt');
		$all_new_pro_tot_amt=$this->input->post('all_new_pro_tot_amt');
		$data=$this->DepoPurchseOrder_Modal->add_new_product_to_request_mdl($user_id,$order1_id,$request_to_id,$pro_id,$barcode_no,$pro_qty,$pro_price,$pro_tot_amt,$all_new_pro_tot_amt);
	}
	
	function fetch_all_admin_products_on_search()
	{
		$user_id=$this->input->post('user_id');
		// $pros_name=$this->input->post('pros_name');

		$data=$this->MStoreSale_Modal->fetch_admin_product_lists_fitered_mdl($user_id);
		echo json_encode($data);
	}
	public function fetch_account_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreTaxationType_Modal->fetch_account_group_in_groupoption_mdl($user_id);
		echo json_encode($data);
	}
	
	public function chk_duplicacy()
	{
		$user_id=$this->input->post('user_id');
		$product_name=$this->input->post('product_name');
		$product_barcode=$this->input->post('product_barcode');
		$data=$this->MStoreProductGroup_Modal->chk_duplicacy_mdl($user_id,$product_name,$product_barcode);
		echo json_encode($data);
	}



	function Product()
	{
        $this->load->view('Store_module/Masters/Product/products');
	}

	function product_report()
	{
        $this->load->view('Store_module/Transactions/Report/product_report');
	}
	
	function fetch_product_detail_inreport_tbody()
	{
		$user_id=$this->input->post('user_id');
		$short_by=$this->input->post('short_by');
		$search_btn=$this->input->post('search_btn');
		$data=$this->MStoreProducts_Modal->fetch_product_detail_inreport_tbody_mdl($user_id,$short_by,$search_btn);
		echo json_encode($data);
	}

	function fetch_unit_in_groupoption()
	{
		$data=$this->MStoreProducts_Modal->fetch_unit_in_groupoption_mdl();
		echo json_encode($data);
	}

	function fetch_service_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProducts_Modal->fetch_service_group_in_groupoption_mdl($user_id);
		echo json_encode($data);
	}

	function fetch_product_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreProducts_Modal->fetch_product_group_in_groupoption_mdl($user_id);
		echo json_encode($data);
	}

	function fetch_admin_mat_ctr_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProducts_Modal->fetch_admin_mat_ctr_in_groupoption_mdl($user_id);
		echo json_encode($data);
	}

	function fetch_tax_category_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProducts_Modal->fetch_tax_category_in_groupoption_mdl($user_id);
		echo json_encode($data);
	}

	function fetch_service_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProducts_Modal->fetch_service_in_tbody_mdl($user_id);
		echo json_encode($data);
	} 


	function fetch_product_in_tbody2()
	{
		$user_id=$this->input->post('user_id');
		$productsg_id=$this->input->post('productsg_id');
		$data=$this->AdminProducts_Modal->fetch_product_in_tbody2_mdl($user_id,$productsg_id);
		echo json_encode($data);
	}

	function fetch_product_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProducts_Modal->fetch_product_in_tbody_mdl($user_id);
		echo json_encode($data);
	}


	function btn_save_service()
	{
		

		$chk['data_chk']=$this->AdminProductGroup_Modal->chk_duplicacy_service_mdl($user_id,$service_name);
		
		if($chk['data_chk']==TRUE)
		{
			foreach($chk['data_chk'] as $r):
				$chk_dupli=$r->chk_dupli;
				if($chk_dupli==0)
				{
				//---------------//
				$config['upload_path']="./vendor_image";
				$config['allowed_types']='gif|jpg|png';
				$this->load->library('upload',$config);
				
				
					if($this->upload->do_upload("vend_img"))
					{
						$data = array('upload_data' => $this->upload->data());
					
						$vendor_name=$this->input->post('vendor_name');
						$user_id=$this->input->post('user_id');

						$service_group=$this->input->post('service_group');
						$contact_no=$this->input->post('contact_no');
						$place=$this->input->post('place');
						$description=$this->input->post('description');
						$imgpath=$data['upload_data']['file_name'];
						
						$data_saved=$this->AdminProducts_Modal->btn_save_service_mdl($vendor_name,$service_group,$contact_no,$place,$description,$user_id,$imgpath);
				
						// $config2['upload_path']="./vendor_image";
						// $config2['allowed_types']='gif|jpg|png';
						// $this->upload->initialize($config2);
						// $this->load->library('upload',$config2);
						
						// if($this->upload->do_upload("vend_img"))
						// {
							// $data2 = array('upload_data' => $this->upload->data());
							// $imgpath2=$data2['upload_data']['file_name'];
							
						
 							// $data_saved=$this->AdminProducts_Modal->btn_save_service_mdl($service_name,$service_group,$contact_no,$place,$description,$user_id,$imgpath,$imgpath2);
						// }
						
					}
					else
					{
						echo "402";
					}
				}
				else
				{
					echo "406";
				}
			endforeach;
		}
		
		// echo json_encode($data);
	}
	

	function btn_save_product()
	{
		
		$product_name=$this->input->post('product_name');
		$product_barcode=$this->input->post('product_barcode');
		$user_id=$this->input->post('user_id');

		$chk['data_chk']=$this->MStoreProductGroup_Modal->chk_duplicacy_mdl($user_id,$product_name,$product_barcode);
		
		if($chk['data_chk']==TRUE)
		{
			foreach($chk['data_chk'] as $r):
				$chk_dupli=$r->chk_dupli;
				if($chk_dupli==0)
				{
				//---------------//
				$config['upload_path']="./upload_admin_product";
				$config['allowed_types']='gif|jpg|png';
				$this->load->library('upload',$config);
					if($this->upload->do_upload("prod_img"))
					{
						$data = array('upload_data' => $this->upload->data());
					
						$alias=$this->input->post('alias');
						$product_group=$this->input->post('product_group');
						$unit=$this->input->post('unit');
						$unit_detail=$this->input->post('unit_detail');
						$shelf_no=$this->input->post('shelf_no');
						$manufacturing_purchase_price=$this->input->post('manufacturing_purchase_price');
						$mrp_price=$this->input->post('mrp_price');
						$cust_sales_price=$this->input->post('cust_sales_price');
						$kishan_sales_price=$this->input->post('kishan_sales_price');
						$sale_profit=$this->input->post('sale_profit');
						$distribution_price=$this->input->post('distribution_price');
						$Stockist_sale_profit=$this->input->post('Stockist_sale_profit');
						$sb_sale_profit=$this->input->post('sb_sale_profit');
						$tax_cat=$this->input->post('tax_cat');
						$hsn_code=$this->input->post('hsn_code');
						$mat_center=$this->input->post('mat_center');
						$open_stock_qty=$this->input->post('open_stock_qty');
						$min_stock=$this->input->post('min_stock');
						$reorder_level=$this->input->post('reorder_level');
						$reorder_qty=$this->input->post('reorder_qty');
						$supply_type=$this->input->post('supply_type');
						$description=$this->input->post('description');
						$tax_included_sale=$this->input->post('tax_included_sale_flag');
						$per_rupee_flag='0';
						$user_id=$this->input->post('user_id');
						$batch_enable=$this->input->post('batch_enable_flag');
						$imgpath=$data['upload_data']['file_name'];
						
						$data_saved=$this->AdminProducts_Modal->btn_save_product_mdl($product_name,$product_barcode,$alias,$product_group,$unit,$unit_detail,$manufacturing_purchase_price,$mrp_price,$cust_sales_price,$kishan_sales_price,$sale_profit,$distribution_price,$Stockist_sale_profit,$sb_sale_profit,$tax_cat,$hsn_code,$mat_center,$open_stock_qty,$min_stock,$reorder_level,$reorder_qty,$supply_type,$description,$tax_included_sale,$per_rupee_flag,$user_id,$batch_enable,$imgpath,$shelf_no);
						
						// echo json_encode($data_saved);
					}
					else
					{
						echo "402";
					}
				}
				else
				{
					echo "406";
				}
			endforeach;
		}
		
		// echo json_encode($data);
	}
	
	function save_product_stock()
	{
		$user_id=$this->input->post('user_id');
		$product_id=$this->input->post('pro_last_id');
		$product_barcode=$this->input->post('product_barcode');
		$open_stock_qty=$this->input->post('open_stock_qty');
		$mat_center_id=$this->input->post('mat_center_id');
		
		$this->MStoreProducts_Modal->btn_save_product_stock_mdl($user_id,$product_id,$product_barcode,$open_stock_qty,$mat_center_id);
		echo "Product_stock Details has been Saved";
	}
	
	function btn_update_product1()
	{
		$product_id=$this->input->post('phide_id');
		$product_name=$this->input->post('product_name');
		$product_barcode=$this->input->post('product_barcode');
		$alias=$this->input->post('alias');
		$product_group=$this->input->post('product_group');
		$unit=$this->input->post('unit');
		$shelf_no=$this->input->post('shelf_no');
		$manufacturing_purchase_price=$this->input->post('manufacturing_purchase_price');
		$mrp_price=$this->input->post('mrp_price');
		$sales_price=$this->input->post('sales_price');
		$sale_profit=$this->input->post('sale_profit');
		$distribution_price=$this->input->post('distribution_price');
		$Stockist_sale_profit=$this->input->post('Stockist_sale_profit');
		$sb_sale_profit=$this->input->post('sb_sale_profit');
		$tax_cat=$this->input->post('tax_cat');
		$hsn_code=$this->input->post('hsn_code');
		$mat_center=$this->input->post('mat_center');
		$open_stock_qty=$this->input->post('open_stock_qty');
		$min_stock=$this->input->post('min_stock');
		$reorder_level=$this->input->post('reorder_level');
		$reorder_qty=$this->input->post('reorder_qty');
		$supply_type=$this->input->post('supply_type');
		$description=$this->input->post('description');
		$tax_included_sale=$this->input->post('tax_included_sale');
		$per_rupee_flag=$this->input->post('per_rupee_flag');
		$user_id=$this->input->post('user_id');
		$batch_enable=$this->input->post('batch_enable_flag');
		$unit_detail=$this->input->post('unit_detail');

				//---------------//
				$config['upload_path']="./upload_admin_product";
				$config['allowed_types']='gif|jpg|png';
				$this->load->library('upload',$config);
					if($this->upload->do_upload("prod_img"))
					{
						$data = array('upload_data' => $this->upload->data());
						
						$imgpath=$data['upload_data']['file_name'];
						
						$this->AdminProducts_Modal->btn_update_product_mdl($product_name,$product_barcode,$alias,$product_group,$unit,$shelf_no,$manufacturing_purchase_price,$mrp_price,$sales_price,$sale_profit,$distribution_price,$Stockist_sale_profit,$sb_sale_profit,$tax_cat,$hsn_code,$mat_center,$open_stock_qty,$min_stock,$reorder_level,$reorder_qty,$supply_type,$description,$tax_included_sale,$per_rupee_flag,$user_id,$product_id,$batch_enable,$unit_detail,$imgpath);
						echo "Product Details has been updated";
					}
					else
					{
						// echo "402";
						$this->AdminProducts_Modal->btn_update_product_without_image_mdl($product_name,$product_barcode,$alias,$product_group,$unit,$shelf_no,$manufacturing_purchase_price,$mrp_price,$sales_price,$sale_profit,$distribution_price,$Stockist_sale_profit,$sb_sale_profit,$tax_cat,$hsn_code,$mat_center,$open_stock_qty,$min_stock,$reorder_level,$reorder_qty,$supply_type,$description,$tax_included_sale,$per_rupee_flag,$user_id,$product_id,$batch_enable,$unit_detail);
						echo "Product Details has been updated";
					}
		 
	}
	
	
	function btn_update_service()
	{
		$service_id=$this->input->post('hide_id');
		$vendor_name=$this->input->post('vendor_name');
		$user_id=$this->input->post('user_id');

		$service_group=$this->input->post('service_group');
		$contact_no=$this->input->post('contact_no');
		$place=$this->input->post('place');
		$description=$this->input->post('description');
		
		//---------------//
		$config['upload_path']="./vendor_image";
		$config['allowed_types']='gif|jpg|png';
		$this->load->library('upload',$config);
		if($this->upload->do_upload("vend_img"))
		{
			$data = array('upload_data' => $this->upload->data());
			
			$imgpath=$data['upload_data']['file_name'];
			
			$this->AdminProducts_Modal->btn_update_service_mdl($service_id,$vendor_name,$service_group,$contact_no,$place,$description,$imgpath);
			echo "Service Details has been updated";
		}
		else
		{
			$this->AdminProducts_Modal->btn_update_service_without_image_mdl($service_id,$vendor_name,$service_group,$contact_no,$place,$description);
			echo "Service Details has been updated!";
		}
		 
	}
	
	
	function fetch_service_in_edit()
	{
		$service_id=$this->input->post('service_id');
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProducts_Modal->fetch_service_in_edit_mdl($user_id,$service_id);
		echo json_encode($data);  
	}
	
	
	function fetch_product_in_edit()
	{
		$product_id=$this->input->post('product_id');
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProducts_Modal->fetch_product_in_edit_mdl($user_id,$product_id);
		echo json_encode($data);  
	}
	
	function fetch_products_expiration_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$today=$this->input->post('today');
		$datefrommonthago=$this->input->post('datefrommonthago');
		$data=$this->AdminProducts_Modal->products_expiration_in_tbody_mdl($user_id,$today,$datefrommonthago);
		echo json_encode($data);  
	}
	
	
	
	function active_inactive_prod()
	{
		$splited_prod_id=$this->input->post('splited_prod_id');
		$enable_status=$this->input->post('enable_status');

		$data=$this->AdminProducts_Modal->active_inactive_prod_mdl($splited_prod_id,$enable_status);
		echo "Active Status Updated!";  
	}
	
	
	
	function active_inactive_vendor()
	{
		$splited_prod_id=$this->input->post('splited_prod_id');
		$enable_status=$this->input->post('enable_status');

		$data=$this->AdminProducts_Modal->active_inactive_vendor_mdl($splited_prod_id,$enable_status);
		echo "Active Status Updated!";  
	}
	
	


}




