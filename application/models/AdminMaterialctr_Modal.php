<?php
class AdminMaterialctr_Modal extends CI_Model
{
	/*--- for inserting material center group ---*/
	function save_store_material_center_details_mdl($material_center_name,$user_id,$alias,$print_name,$parent_group,$stock_account,$reflect_in_bal_sheet)
		$query = $this->db->query("CALL save_mstore_material_center('".$material_center_name."','".$user_id."','".$alias."','".$print_name."','".$parent_group."','".$stock_account."','".$reflect_in_bal_sheet."')");
		$query = $this->db->query("CALL update_mstore_material_center('".$material_center_name."','".$user_id."','".$alias."','".$print_name."','".$parent_group."','".$stock_account."','".$reflect_in_bal_sheet."','".$hide_id."')");
?>