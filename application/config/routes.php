<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// $route['default_controller'] = 'MainLinks_Control/admin_login';
$route['default_controller'] = 'Login_Control/admin_login';
$route['admin_login'] = 'Login_Control/admin_login';
$route['check_login'] = 'Login_Control/check_login';

$route['admin_logout'] = 'MainLinks_Control/admin_logout';


$route['admin_home'] = 'MainLinks_Control/admin_home';
$route['Add_Mark_Sheet'] = 'MainLinks_Control/Add_Mark_Sheet';




$route['City'] = 'MainLinks_Control/City';
$route['Locality'] = 'MainLinks_Control/Locality';
$route['Locality/(:num)'] = 'MainLinks_Control/Locality';

$route['fetch_prop_mobile_and_next'] = 'Property_Control/fetch_prop_mobile_and_next';
$route['save_prop_mobile_and_next'] = 'Property_Control/save_prop_mobile_and_next';
$route['check_mob_exist'] = 'Property_Control/check_mob_exist';
$route['next_to_add_property'] = 'MainLinks_Control/next_to_add_property';
$route['ResidencialProperty'] = 'MainLinks_Control/ResidencialProperty';
$route['ViewResidencialProperty'] = 'Property_Control/ViewResidencialProperty';
$route['ViewResidencialProperty/(:num)'] = 'Property_Control/ViewResidencialProperty';

$route['save_new_city'] = 'Location_Control/save_new_city';
$route['btn_update_city'] = 'Location_Control/btn_update_city';
$route['delete_city'] = 'Location_Control/delete_city';
$route['fetch_all_cities'] = 'Location_Control/fetch_all_cities';
$route['fetch_all_location'] = 'Location_Control/fetch_all_location';
$route['get_city_for_edit'] = 'Location_Control/get_city_for_edit';


$route['save_new_locality'] = 'Location_Control/save_new_locality';
$route['update_locality'] = 'Location_Control/update_locality';
$route['delete_locality'] = 'Location_Control/delete_locality';
$route['get_all_localities'] = 'Location_Control/get_all_localities';
$route['get_locality_for_edit'] = 'Location_Control/get_locality_for_edit';
$route['fetch_all_Locality_pagination'] = 'MainLinks_Control/fetch_all_Locality_pagination';
$route['fetch_all_Locality_pagination/(:num)'] = 'MainLinks_Control/fetch_all_Locality_pagination';




$route['product_request'] = 'MStorePurchaseOrder_Control/purchase_order_to_top';
$route['product_request_list'] = 'MStorePurchaseOrder_Control/list_of_product_request';
$route['check_franchise_type'] = 'MStoreSale_Control/chk_franchise_type';
$route['get_parties_in_option'] = 'MStoreSale_Control/fetch_parties_in_option';
$route['find_mobile_address'] = 'MStoreSale_Control/find_mobile_address_details';
$route['list_of_purchase_order_depo'] = 'MStorePurchaseOrder_Control/list_of_purchase_order';
$route['fetch_all_purchase_order_depo'] = 'MStorePurchaseOrder_Control/all_purchase_order_depo';
$route['fetch_order_details_depo'] = 'MStorePurchaseOrder_Control/fetch_order_details1';
$route['depo_child_stockin'] = 'MStorePurchaseOrder_Control/stockin_to_child';
$route['depo_parent_stockout'] = 'MStorePurchaseOrder_Control/stockout_from_parent';
$route['depo_confirm_order'] = 'MStorePurchaseOrder_Control/confirm_order_all';
$route['fetch_all_my_product_request'] = 'MStorePurchaseOrder_Control/all_my_product_request';

$route['admin_purchase_summary'] = 'admin_controls/AdminMainControl/admin_purchase_summary';
$route['all_admin_debtors_list'] = 'admin_controls/AdminMainControl/admin_all_debtors_list';
$route['all_admin_creditors_list'] = 'admin_controls/AdminMainControl/admin_all_creditors_list';
$route['admin_cash_book'] = 'admin_controls/AdminPurchase_Control/cash_bank_book';
$route['fetch_self_requested_products_details'] = 'admin_controls/AdminPurchase_Control/fetch_self_requested_products_by_ord_details';
$route['update_self_request_pending_products'] = 'admin_controls/AdminPurchase_Control/update_self_pending_request_product';
$route['delete_self_request_pending_products'] = 'admin_controls/AdminPurchase_Control/delete_self_pending_request_product';
$route['fetch_product_details_by_barcode_add_to_request'] = 'admin_controls/AdminPurchase_Control/fetch_product_details_by_barcode_to_add_request';
$route['fetch_product_details_by_proname_add_to_request'] = 'admin_controls/AdminPurchase_Control/fetch_product_details_by_proname_to_add_request';
$route['recharge_members_in_franchise'] = 'MStoreCard_Control/recharge_members_in_franchise';

$route['fetch_self_requested_products_details_f'] = 'MStorePurchaseOrder_Control/fetch_self_requested_products_by_ord_details';
$route['update_self_request_pending_products_f'] = 'MStorePurchaseOrder_Control/update_self_pending_request_product';
$route['delete_self_request_pending_products_f'] = 'MStorePurchaseOrder_Control/delete_self_pending_request_product';
$route['fetch_product_details_by_barcode_add_to_request_f'] = 'MStorePurchaseOrder_Control/fetch_product_details_by_barcode_to_add_request';
$route['fetch_product_details_by_proname_add_to_request_f'] = 'MStorePurchaseOrder_Control/fetch_product_details_by_proname_to_add_request';

$route['products_expiration_in_tbody_store'] = 'MStoreGlobal_Control/fetch_products_expiration_in_tbody_store';
$route['register_member'] = 'MStoreGlobal_Control/register_member';
$route['wallet_recharge'] = 'MStoreCard_Control/recharge_wallet';
$route['fetch_vendor_ewallet_totamt'] = 'MStoreCard_Control/fetch_vendor_ewallet_totamt';
$route['verify_card'] = 'MStoreCard_Control/verify_card';
$route['redirectGetway'] = 'MStoreCard_Control/redirectGetway';
$route['getKisanName'] =   'MStoreCard_Control/getKisanName';
$route['kisanRecharge'] =   'MStoreCard_Control/kisanRecharge_action';
$route['fetch_member_wallet_details'] =   'admin_controls/AdminMainControl/fetch_member_wallet_details';
$route['sale_save_on_member_wallet'] =   'admin_controls/AdminMainControl/sale_save_on_member_wallet';
$route['fetch_members_all_details_in_admin'] =   'admin_controls/AdminMainControl/fetch_members_all_details_in_admin';
$route['update_members_in_admin'] =   'admin_controls/AdminMainControl/update_members_in_admin';

$route['paymentFailed/(:num)']     = 'MStoreCard_Control/online_payments_failure/$1';
$route['paymentSuccess/(:num)']    = 'MStoreCard_Control/online_payments_success/$1';

 
//------------ users ------------//
$route['musr_service_group'] = 'admin_controls/Musers_ProductGroup_Control/fetch_service_main_group';
$route['musr_product_group'] = 'admin_controls/Musers_ProductGroup_Control/fetch_product_main_group';
$route['fetch_child_product_groups'] = 'admin_controls/Musers_ProductGroup_Control/fetch_child_product_groups';
$route['fetch_products_lists'] = 'admin_controls/Musers_ProductGroup_Control/fetch_products_lists';

$route['save_muser_address'] = 'admin_controls/Musers_ProductGroup_Control/save_muser_address';
$route['fetch_muser_address'] = 'admin_controls/Musers_ProductGroup_Control/fetch_muser_address';
$route['save_muser_cart_product'] = 'admin_controls/Musers_ProductGroup_Control/save_muser_cart_product';
$route['fetch_muser_cart_product'] = 'admin_controls/Musers_ProductGroup_Control/fetch_muser_cart_product';
$route['remove_muser_cart_product'] = 'admin_controls/Musers_ProductGroup_Control/remove_muser_cart_product';


// $route['musr_products'] = 'admin_controls/Musers_ProductGroup_Control/fetch_product_in_tbody';
// $route['musr_services'] = 'admin_controls/Musers_ProductGroup_Control/fetch_service_in_tbody';
// $route['fetch_child_service_groups'] = 'admin_controls/Musers_ProductGroup_Control/fetch_child_service_groups';
 



$route['save_user_signup'] = 'admin_controls/Musers_login_signup_Control/save_user_signup';
$route['check_user_login'] = 'admin_controls/Musers_login_signup_Control/check_user_login';
$route['chk_user_send_otp_signup'] = 'admin_controls/Musers_login_signup_Control/chk_user_send_otp_signup';
$route['fetch_muser_profile'] = 'admin_controls/Musers_login_signup_Control/fetch_muser_profile';
$route['chk_user_send_otp_forget_pass'] = 'admin_controls/Musers_login_signup_Control/chk_user_send_otp_forget_pass';
$route['update_muser_password'] = 'admin_controls/Musers_login_signup_Control/update_muser_password';
$route['update_muser_acc_details'] = 'admin_controls/Musers_login_signup_Control/update_muser_acc_details';

//	function cred_deb_trans_details($new_party_id)


//------------ admin ------------//
// $route['admin_login'] = 'admin_controls/AdminLoginControl/Admin_control_login_page';
$route['admin_login_do'] = 'admin_controls/AdminLoginControl/Admin_control_login';
// $route['admin_home'] = 'admin_controls/AdminMainControl/home';
$route['admin_product_group'] = 'admin_controls/AdminMainControl/product_group';
$route['admin_service_group'] = 'admin_controls/AdminMainControl/service_group';
$route['admin_products'] = 'admin_controls/AdminMainControl/products';
$route['admin_services'] = 'admin_controls/AdminMainControl/services';
$route['admin_account_group'] = 'admin_controls/AdminMainControl/account_group';
$route['admin_accounts'] = 'admin_controls/AdminMainControl/accounts';
$route['admin_material_ctrl_group'] = 'admin_controls/AdminMainControl/material_group';
$route['admin_material_ctrls'] = 'admin_controls/AdminMainControl/material_center';
$route['admin_bv_setting'] = 'admin_controls/AdminMainControl/bv_setting';
$route['franchise'] = 'admin_controls/AdminMainControl/all_franchises';
$route['franchise_stockout_sale'] = 'admin_controls/AdminMainControl/report_franchises_sale';
$route['list_of_purchase_order_admin'] = 'admin_controls/AdminMainControl/purchase_order_admin';
$route['admin_stckinOut'] = 'admin_controls/AdminMainControl/stckinOut_admin';
$route['fetch_stockiout_in_admin'] = 'admin_controls/AdminStockControl/admin_fetch_stockiout';
$route['franchise_products_details'] = 'admin_controls/AdminMainControl/franchise_products';
$route['admin_franchise_products_details'] = 'admin_controls/AdminMainControl/admin_products_on_franchise_details';
$route['admin_notification_product_expiration'] = 'admin_controls/AdminMainControl/admin_product_expiration';
$route['products_expiration_in_tbody'] = 'admin_controls/AdminProducts_Control/fetch_products_expiration_in_tbody';
$route['product_issue_to_francise'] = 'admin_controls/AdminMainControl/issue_prod_to_franchise';
$route['purchase_admin_product'] = 'admin_controls/AdminMainControl/purchase_admin_self_product';
$route['all_members_list'] = 'admin_controls/AdminMainControl/all_members_list';
$route['fetch_all_members_in_admin'] = 'admin_controls/AdminMainControl/fetch_all_members_in_admin';
$route['recharge_members_in_admin'] = 'admin_controls/AdminMainControl/recharge_members_in_admin';
$route['fetch_batch_remaining_qty_by_user'] = 'admin_controls/AdminPurchase_Control/fetch_batch_remaining_qty_by_user';














//------- admin Purchase order --------//
$route['fetch_all_purchase_order_admin'] = 'admin_controls/AdminPurchseOrderControl/fetch_all_purchase_order';
$route['fetch_order_details'] = 'admin_controls/AdminPurchseOrderControl/fetch_order_details1';
$route['confirm_order'] = 'admin_controls/AdminPurchseOrderControl/confirm_order_all';
$route['child_stockin'] = 'admin_controls/AdminPurchseOrderControl/stockin_to_child';
$route['parent_stockout'] = 'admin_controls/AdminPurchseOrderControl/stockout_from_parent';

//------- admin account group --------//
$route['fetch_admin_account_group_in_groupoption'] = 'admin_controls/AdminAccount_Control/fetch_account_group_in_groupoption';
$route['fetch_admin_account_group_in_tbodytbl'] = 'admin_controls/AdminAccount_Control/fetch_account_group_in_tbodytbl';
$route['fetch_admin_account_group_in_edit'] = 'admin_controls/AdminAccount_Control/fetch_account_group_in_edit';
$route['save_admin_account_group'] = 'admin_controls/AdminAccount_Control/save_store_account_group';
$route['save_admin_account_group_child'] = 'admin_controls/AdminAccount_Control/save_store_account_group_child';
$route['update_admin_account_group'] = 'admin_controls/AdminAccount_Control/update_store_account_group';
$route['update_admin_account_group_child'] = 'admin_controls/AdminAccount_Control/update_store_account_group_child';

//------- admin account --------//
$route['fetch_admin_states_in_option'] = 'admin_controls/AdminLadger_Control/fetch_states_in_option';
$route['fetch_admin_cities_in_option'] = 'admin_controls/AdminLadger_Control/fetch_cities_in_option';
$route['fetch_admin_account_group_in_acc_groupoption'] = 'admin_controls/AdminLadger_Control/fetch_account_group_in_groupoption';
$route['chk_admin_acc_duplicacy'] = 'admin_controls/AdminLadger_Control/chk_duplicacy';
$route['fetch_admin_ladgers_in_store_acc_tbody'] = 'admin_controls/AdminLadger_Control/fetch_ladgers_in_store_acc_tbody';
$route['save_admin_ladger_details'] = 'admin_controls/AdminLadger_Control/save_store_ladger_details';
$route['update_admin_ladger_details'] = 'admin_controls/AdminLadger_Control/update_store_ladger_details';
$route['fetch_admin_ladger_for_edit'] = 'admin_controls/AdminLadger_Control/fetch_ladger_for_edit';

//------- admin product group  --------//
$route['fetch_admin_service_group_in_groupoption'] = 'admin_controls/AdminProductGroup_Control/fetch_service_group_in_groupoption';
$route['fetch_admin_product_group_in_groupoption'] = 'admin_controls/AdminProductGroup_Control/fetch_product_group_in_groupoption';
$route['fetch_admin_account_in_product_groupoption'] = 'AdminProducts_Control/fetch_account_in_groupoption';
$route['fetch_admin_tax_category_in_product'] = 'admin_controls/AdminProductGroup_Control/fetch_tax_category';
$route['fetch_admin_product_group_in_tbody'] = 'admin_controls/AdminProductGroup_Control/fetch_product_group_in_tbody';
$route['fetch_admin_service_group_in_tbody'] = 'admin_controls/AdminProductGroup_Control/fetch_service_group_in_tbody';
$route['fetch_admin_product_groups_for_edit'] = 'admin_controls/AdminProductGroup_Control/fetch_product_groups_for_edit';
$route['fetch_admin_service_groups_for_edit'] = 'admin_controls/AdminProductGroup_Control/fetch_service_groups_for_edit';
$route['save_admin_product_group'] = 'admin_controls/AdminProductGroup_Control/save_product_group';
$route['save_admin_service_group'] = 'admin_controls/AdminProductGroup_Control/save_service_group';
$route['update_admin_product_group'] = 'admin_controls/AdminProductGroup_Control/update_product_group';
$route['update_admin_service_group'] = 'admin_controls/AdminProductGroup_Control/update_service_group';

//------- admin products  --------//
$route['fetch_admin_tax_category_in_groupoption'] = 'admin_controls/AdminProducts_Control/fetch_tax_category_in_groupoption';
$route['fetch_admin_product_group_in_groupoption_product'] = 'admin_controls/AdminProducts_Control/fetch_product_group_in_groupoption';
$route['fetch_admin_service_group_in_groupoption_service'] = 'admin_controls/AdminProducts_Control/fetch_service_group_in_groupoption';
$route['fetch_all_unit_in_groupoption'] = 'admin_controls/AdminProducts_Control/fetch_unit_in_groupoption';
$route['admin_save_service'] = 'admin_controls/AdminProducts_Control/btn_save_service';
$route['admin_save_product'] = 'admin_controls/AdminProducts_Control/btn_save_product';
$route['admin_save_product_stock'] = 'admin_controls/AdminProducts_Control/save_product_stock';
$route['admin_update_product1'] = 'admin_controls/AdminProducts_Control/btn_update_product1';
$route['admin_update_service'] = 'admin_controls/AdminProducts_Control/btn_update_service';
$route['fetch_admin_product_in_tbody'] = 'admin_controls/AdminProducts_Control/fetch_product_in_tbody';
$route['fetch_admin_product_in_tbody2'] = 'admin_controls/AdminProducts_Control/fetch_product_in_tbody2';
$route['fetch_admin_service_in_tbody'] = 'admin_controls/AdminProducts_Control/fetch_service_in_tbody';
$route['fetch_admin_product_in_edit'] = 'admin_controls/AdminProducts_Control/fetch_product_in_edit';
$route['fetch_admin_service_in_edit'] = 'admin_controls/AdminProducts_Control/fetch_service_in_edit';
$route['active_inactive_prod'] = 'admin_controls/AdminProducts_Control/active_inactive_prod';
$route['active_inactive_vendor'] = 'admin_controls/AdminProducts_Control/active_inactive_vendor';

//------- admin mat center group --------//
$route['fetch_admin_material_center_group_in_groupoption'] = 'admin_controls/AdminMaterialctr_Control/fetch_material_center_group_in_groupoption';
$route['admin_mat_ctr_grp_chk_duplicacy_grp'] = 'admin_controls/AdminMaterialctr_Control/chk_duplicacy_grp';
$route['fetch_admin_material_groups_in_store_mcg_tbody'] = 'admin_controls/AdminMaterialctr_Control/fetch_material_groups_in_store_mcg_tbody';
$route['save_admin_material_group_details'] = 'admin_controls/AdminMaterialctr_Control/save_store_material_group_details';
$route['save_admin_materialctr_group_child_details'] = 'admin_controls/AdminMaterialctr_Control/save_store_materialctr_group_child_details';
$route['fetch_admin_material_group_for_edit'] = 'admin_controls/AdminMaterialctr_Control/fetch_material_group_for_edit';
$route['update_admin_material_group_details'] = 'admin_controls/AdminMaterialctr_Control/update_store_material_group_details';
$route['update_admin_materialctr_group_child_details'] = 'admin_controls/AdminMaterialctr_Control/update_store_materialctr_group_child_details';

//------- admin mat center  --------//
$route['fetch_admin_stock_account_in_groupoption'] = 'admin_controls/AdminMaterialctr_Control/fetch_stock_account_in_groupoption';
$route['fetch_admin_material_center_tbody'] = 'admin_controls/AdminMaterialctr_Control/fetch_material_center_tbody';
$route['save_admin_material_gcenter_details'] = 'admin_controls/AdminMaterialctr_Control/save_store_material_gcenter_details';
$route['fetch_admin_material_center_for_edit'] = 'admin_controls/AdminMaterialctr_Control/fetch_material_center_for_edit';
$route['update_admin_material_gcenter_details'] = 'admin_controls/AdminMaterialctr_Control/update_store_material_gcenter_details';
$route['chk_admin_material_ctr_duplicacy'] = 'admin_controls/AdminMaterialctr_Control/chk_duplicacy';

//------- admin franchise  --------//
$route['update_franchise'] = 'admin_controls/AdminFranchises_Control/update_franchises';
$route['save_franchise'] = 'admin_controls/AdminFranchises_Control/save_franchises';
$route['save_franchise_ledger'] = 'admin_controls/AdminFranchises_Control/save_franchise_ledger';
$route['fetch_all_franchises'] = 'admin_controls/AdminFranchises_Control/fetch_all_franchises_in_tbody';
$route['fetch_franchise_for_edit'] = 'admin_controls/AdminFranchises_Control/fetch_franchise_detail_for_edit';

//------- admin settings  --------//
$route['fetch_bv'] = 'admin_controls/AdminBV_Control/bv_fetch';
$route['update_bv'] = 'admin_controls/AdminBV_Control/bv_update';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
