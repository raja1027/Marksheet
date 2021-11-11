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

	public function fetch_account_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreTaxationType_Modal->fetch_account_group_in_groupoption_mdl($user_id);
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

	function fetch_product_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->AdminProducts_Modal->fetch_product_in_tbody_mdl($user_id);
		echo json_encode($data);
	}


	function btn_save_product()
	{
		$product_name=$this->input->post('product_name');
		$product_barcode=$this->input->post('product_barcode');
		$alias=$this->input->post('alias');
		$product_group=$this->input->post('product_group');
		$unit=$this->input->post('unit');
		$expiry_date=$this->input->post('expiry_date');
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
		$batch_enable=$this->input->post('batch_enable');
		
		$data=$this->AdminProducts_Modal->btn_save_product_mdl($product_name,$product_barcode,$alias,$product_group,$unit,$expiry_date,$manufacturing_purchase_price,$mrp_price,$sales_price,$sale_profit,$distribution_price,$Stockist_sale_profit,$sb_sale_profit,$tax_cat,$hsn_code,$mat_center,$open_stock_qty,$min_stock,$reorder_level,$reorder_qty,$supply_type,$description,$tax_included_sale,$per_rupee_flag,$user_id,$batch_enable);
		
		echo json_encode($data);
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
		$product_id=$this->input->post('hide_id');
		$product_name=$this->input->post('product_name');
		$product_barcode=$this->input->post('product_barcode');
		$alias=$this->input->post('alias');
		$product_group=$this->input->post('product_group');
		$unit=$this->input->post('unit');
		$expiry_date=$this->input->post('expiry_date');
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
		$batch_enable=$this->input->post('batch_enable');
		$unit_detail=$this->input->post('unit_detail');
		
		$this->AdminProducts_Modal->btn_update_product_mdl($product_name,$product_barcode,$alias,$product_group,$unit,$expiry_date,$manufacturing_purchase_price,$mrp_price,$sales_price,$sale_profit,$distribution_price,$Stockist_sale_profit,$sb_sale_profit,$tax_cat,$hsn_code,$mat_center,$open_stock_qty,$min_stock,$reorder_level,$reorder_qty,$supply_type,$description,$tax_included_sale,$per_rupee_flag,$user_id,$product_id,$batch_enable,$unit_detail);
		echo "Product Details has been updated";
		
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
	
	


}




