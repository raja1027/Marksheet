<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreProducts_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }

	function Product()
	{
        $this->load->view('Store_module/Masters/Product/products');
	}
	
	function fetch_unit_in_groupoption()
	{
		$data=$this->MStoreProducts_Modal->fetch_unit_in_groupoption_mdl();
		echo json_encode($data);  ;
	}

	function fetch_product_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreProducts_Modal->fetch_product_group_in_groupoption_mdl($user_id);
		echo json_encode($data);  ;
	}

	function fetch_tax_category_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreProducts_Modal->fetch_tax_category_in_groupoption_mdl($user_id);
		echo json_encode($data);  ;
	}

	function fetch_product_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreProducts_Modal->fetch_product_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}


	function btn_save_product()
	{
		$product_name=$this->input->post('product_name');
		$product_barcode=$this->input->post('product_barcode');
		$alias=$this->input->post('alias');
		$print_name=$this->input->post('print_name');
		$product_group=$this->input->post('product_group');
		$unit=$this->input->post('unit');
		$open_stock_qty=$this->input->post('open_stock_qty');
		$open_stock_val=$this->input->post('open_stock_val');
		$min_op_stock=$this->input->post('min_op_stock');
		$tax_cat=$this->input->post('tax_cat');
		$hsn_code=$this->input->post('hsn_code');
		$sales_price=$this->input->post('sales_price');
		$purchase_price=$this->input->post('purchase_price');
		$mrp_price=$this->input->post('mrp_price');
		$min_sales_price=$this->input->post('min_sales_price');
		$sales_discount=$this->input->post('sales_discount');
		$purchase_discount=$this->input->post('purchase_discount');
		$sale_profit=$this->input->post('sale_profit');
		$supply_type=$this->input->post('supply_type');
		$description=$this->input->post('description');
		$user_id=$this->input->post('user_id');
		
		$this->MStoreProducts_Modal->btn_save_product_mdl($product_name,$product_barcode,$alias,$print_name,$product_group,$unit,$open_stock_qty,$open_stock_val,$min_op_stock,$tax_cat,$hsn_code,$sales_price,$purchase_price,$mrp_price,$min_sales_price,$sales_discount,$purchase_discount,$sale_profit,$supply_type,$description,$user_id);
		echo "Product Details has been Saved";
		
	}
	
	/* function save_store_account_group_child()
	{
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$user_id=$this->input->post('user_id');
		$parent_group=$this->input->post('parent_group');
		
		$this->MStoreAccount_Modal->save_store_account_group_child_do($group_name,$print_name,$user_id,$parent_group);
		echo "Account Group Record has been Saved";
		
	}
	
	
	
	function fetch_account_group_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreAccount_Modal->fetch_account_group_in_tbody_mdl($user_id);
		echo json_encode($data);  ;
	}

	
	function fetch_account_group_in_groupoption()
	{
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreAccount_Modal->fetch_account_group_in_groupoption_mdl($user_id);
		echo json_encode($data);  ;
	}
	
	
	function fetch_account_group_in_edit()
	{
		$edit_id=$this->input->post('edit_id');
		$user_id=$this->input->post('user_id');
		$data=$this->MStoreAccount_Modal->fetch_account_group_in_edit_mdl($user_id,$edit_id);
		echo json_encode($data);  ;
	}
	




	
	function update_store_account_group()
	{
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$user_id=$this->input->post('user_id');
		$hide_id=$this->input->post('hide_id');
		
		$this->MStoreAccount_Modal->update_store_account_group_do($group_name,$print_name,$user_id,$hide_id);
		echo "Account Group Record has been Updated";
		
	}
	


	
	function update_store_account_group_child()
	{
		$group_name=$this->input->post('group_name');
		$print_name=$this->input->post('print_name');
		$parent_group=$this->input->post('parent_group');
		$user_id=$this->input->post('user_id');
		$hide_id=$this->input->post('hide_id');
		
		$this->MStoreAccount_Modal->update_store_account_group_child_do($group_name,$print_name,$parent_group,$user_id,$hide_id);
		echo "Account Group Record has been Updated";
		
	} */
	

}




