<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreCard_Control extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("MStorelogged_in"))
		{
			redirect("MStore_Control/panel_home");
		}
    }


	function recharge_members_in_franchise()
	{
		$m_recharge_amt=$this->input->post('m_recharge_amt');
		$recharge_by=$this->input->post('recharge_by');
		$member_id=$this->input->post('member_id');

		$data=$this->MStoreCard_Modal->recharge_members_in_franchise_mdl($m_recharge_amt,$recharge_by,$member_id);
		// echo json_encode($data);
	}

	function verify_card()
	{
		$cardNo=$this->input->post('cardNo');

		$data=$this->MStoreCard_Modal->verify_card_mdl($cardNo);
		echo json_encode($data);
	}

	function fetch_vendor_ewallet_totamt()
	{
		$user_id=$this->input->post('user_id');

		$data=$this->MStoreCard_Modal->fetch_vendor_ewallet_totamt_mdl($user_id);
		echo json_encode($data);
	}

	function fetch_total_trn_graph()
	{
		$user_id=$this->input->post('user_id');
		$trn_type=$this->input->post('trn_type');
		$data=$this->MStoreGlobal_Modal->fetch_total_trn_graph_mdl($user_id,$trn_type);
		echo json_encode($data);
	}

	function getKisanName()
	{
	  $para['cust_card']=$this->input->get('cardNo',true); 
	  $fetch=$this->MStoreCard_Modal->get_single_row("cust_info",$para);
	  if($fetch)
	  {
	      $mobile=$fetch['cust_mobile'];
	      //$accessKey=rand(1111,9999);
	      $data['status']=0;
	      //$this->session->set_userdata('accessKey',$accessKey);
	      //$data['key']=$accessKey;
	      $data['name']=$fetch['cust_name'];
	      $data['profile']=$fetch['picture'];
	  }
	  else
	  {
	      $data['status']=1;
	  }
	  echo json_encode($data);
	}
	
	public function kisanRecharge_action()
	{
	   $cust_card=$this->input->post('cardNo'); 
	   $amount=$this->input->post('amount');
	   if($amount>0)
	   {
	       $u_id=$this->session->userdata("MStorelogged_in");
	       $my_balance=$this->MStoreCard_Modal->get_wallet($u_id,'0');
	       if($my_balance>=$amount)
	       {
	           $data=$this->MStoreCard_Modal->get_single_row('cust_info',['cust_card'=>$cust_card]);
	           if($data)
	           {
	            $para['txn_for']=$data['cust_regNo'];
                $para['txn_status']='success';
                $para['txn_id']=substr(hash('sha256', mt_rand() . microtime()), 0, 20);
                $para['txn_amount']=$amount;
                $para['txn_date_time']=date("Y-m-d H:i:s");
                $para['created_on']=date("Y-m-d H:i:s");
                $para['txn_from']=$u_id;
                $para['txn_info']='Wallet Recharge From Vender';
                $para['payuMoneyId']=rand(111111111,999999999);
                $para['referance_number']=$para['payuMoneyId'];
                $para['gateway_status']='Success';  //cancelled by user or other
                $para['txn_date']=date("Y-m-d");
                $para['fromtxn']="Vender";
                $id=$this->MStoreCard_Modal->insert_row_data('kisan_transaction',$para);
                $param['txn_id']=$id;
                $param['txn_amount']=$amount;
                $param['txn_date']=date("Y-m-d");
                $param['txn_date_time']=date("Y-m-d H:i:s");
                $param['txn_UserId']=$data['cust_regNo'];
                $param['user_type']=1;
                $param['txn_status']='INB';
                $params['txn_id']=$id;
                $params['txn_amount']=$amount;
                $params['txn_date']=date("Y-m-d");
                $params['txn_date_time']=date("Y-m-d H:i:s");
                $params['txn_UserId']=$u_id;
                $params['txn_status']='OUTB';
                $this->MStoreCard_Modal->update_row_data('cust_info',['cust_regNo'=>$data['cust_regNo']],['cust_status'=>0]);
                $this->MStoreCard_Modal->insert_row_data('kisan_wallet',$param);
                $this->MStoreCard_Modal->insert_row_data('kisan_wallet',$params);
	              $this->session->set_flashdata('flashSuccess','Wallet Recharge Successfull'); 
	           }
	           else
	           {
	             $this->session->set_flashdata('flashSuccess','Invalid Card No.');  
	           }
	       }
	       else
	       {
	         $this->session->set_flashdata('flashSuccess','You not have sufficient balance');  
	       }
	       
	   }
	   else
	   {
	       $this->session->set_flashdata('flashSuccess','Enter Valid Amount');
	   }
	   redirect(base_url('wallet_recharge'),'refresh');
	}
	
	function recharge_wallet()
	{
	    // $this->session->unset_userdata('accessKey');
	    // $u_id=$this->session->userdata("MStorelogged_in");
	    // $data['wallet']=$this->MStoreCard_Modal->get_wallet($u_id,'0');
        // $this->load->view('Store_module/CardWallet/recharge_wallet',$data);
        $this->load->view('Store_module/CardWallet/recharge_wallet');
	}

	function redirectGetway()
	{
		$data=array();
		$rechargable_amount=$this->input->post('rechargable_amount');
		if($rechargable_amount>0)
		{
		$u_id=$this->session->userdata("MStorelogged_in");
		$data['vend_details']=$this->MStoreCard_Modal->fetch_card_vendor_details_mdl($u_id);
		
		$vend_name=$data['vend_details'][0]->vend_name;
		$email_id=$data['vend_details'][0]->email_id;
		$mobile_no=$data['vend_details'][0]->mobile_no;
		$reg_id=$data['vend_details'][0]->reg_id;
		
		$all_data['datas']=array("vend_name"=>$vend_name,"email_id"=>$email_id,"mobile_no"=>$mobile_no,"reg_id"=>$reg_id,"rechargable_amount"=>$rechargable_amount);
		
        $this->load->view('Store_module/CardWallet/paymentGateway',$all_data);
		}
		else
		{
		   $this->session->set_flashdata('flashSuccess','Enter Valid Amount');
		   redirect(base_url('wallet_recharge'),'refresh');
		   
		}
	}




     public function online_payments_success($cust_no)
     {
		$result=$_POST;
		$txn_for=$cust_no;
		$txn_status=$result['status'];
		$txn_id=$result['txnid'];
		$txn_amount=$result['amount'];
		$txn_date_time=$result['addedon'];
		$txn_from=$result['bankcode'];
		$txn_info=$result['productinfo'];
		$payuMoneyId=$result['payuMoneyId'];
		$referance_number=$result['bank_ref_num'];
		$gateway_status=$result['field9'];  //cancelled by user or other
		$txn_date=date("Y-m-d");
		
		$data=array();
		$data['transdetails']=$this->MStoreCard_Modal->insert_payment_status($txn_for,$txn_status,$txn_id,$txn_amount,$txn_date_time,$txn_from,$txn_info,$payuMoneyId,$referance_number,$gateway_status,$txn_date);
		
		// echo $data['transdetails'];
		// $param['last_tran_id']=$this->MStoreCard_Modal->insert_row_data('kisan_transaction',$para);
		if($data['transdetails']==TRUE)
		{
			foreach($data['transdetails'] as $r):
				$last_tran_id=$r->last_tran_id;
				
				$txn_status1='1';
				$this->MStoreCard_Modal->add_in_member_wallet_mdl($last_tran_id,$txn_amount,$txn_date,$txn_date_time,$cust_no,$txn_status1);

				$this->session->set_flashdata('flashSuccess','balance Added Successfull!');
				redirect(base_url('wallet_recharge'),'refresh');
			endforeach;
		}
		else
		{
			// echo "lklkl";
		}
                /* $result=$_POST;
                $para['txn_for']=$cust_no;
                $para['txn_status']=$result['status'];
                $para['txn_id']=$result['txnid'];
                $para['txn_amount']=$result['amount'];
                $para['txn_date_time']=$result['addedon'];
                $para['txn_from']=$result['bankcode'];
                $para['txn_info']=$result['productinfo'];
                $para['payuMoneyId']=$result['payuMoneyId'];
                $para['referance_number']=$result['bank_ref_num'];
                $para['created_on']=date("Y-m-d H:i:s");
                $para['gateway_status']=$result['field9'];  //cancelled by user or other
                $para['txn_date']=date("Y-m-d");
                $para['fromtxn']="Online";
                $param['txn_id']=$this->MStoreCard_Modal->insert_row_data('kisan_transaction',$para);
                $param['txn_amount']=$result['amount'];
                $param['txn_date']=date("Y-m-d");
                $param['txn_date_time']=date("Y-m-d H:i:s");
                $param['txn_UserId']=$cust_no;
                $param['txn_status']='INB';
                $this->MStoreCard_Modal->insert_row_data('kisan_wallet',$param);
                $this->session->set_flashdata('flashSuccess','Successfull Added balance!');
                redirect(base_url('wallet_recharge'),'refresh'); */
     }
     
     public function online_payments_failure($cust_no)
     {         
		$result=$_POST;
		$txn_for=$cust_no;
		$txn_status=$result['status'];
		$txn_id=$result['txnid'];
		$txn_amount=$result['amount'];
		$txn_date_time=$result['addedon'];
		$txn_from=$result['bankcode'];
		$txn_info=$result['productinfo'];
		$payuMoneyId=$result['payuMoneyId'];
		$referance_number=$result['bank_ref_num'];
		$gateway_status=$result['field9'];  //cancelled by user or other
		$txn_date=date("Y-m-d");
		$this->MStoreCard_Modal->insert_payment_status($txn_for,$txn_status,$txn_id,$txn_amount,$txn_date_time,$txn_from,$txn_info,$payuMoneyId,$referance_number,$gateway_status,$txn_date);
		$this->session->set_flashdata('flashSuccess','Add balance Failed');
		redirect('wallet_recharge','refresh');
		/* $result=$_POST;
		$txn_for=$cust_no;
		$txn_status=$result['status'];
		$txn_id=$result['txnid'];
		$txn_amount=$result['amount'];
		$txn_date_time=$result['addedon'];
		$txn_from=$result['bankcode'];
		$txn_info=$result['productinfo'];
		$payuMoneyId=$result['payuMoneyId'];
		$referance_number=$result['bank_ref_num'];
		$gateway_status=$result['field9'];  //cancelled by user or other
		$txn_date=date("Y-m-d");
		$this->MStoreCard_Modal->insert_payment_status($txn_for,$txn_status,$txn_id,$txn_amount,$txn_date_time,$txn_from,$txn_info,$payuMoneyId,$referance_number,$gateway_status,$txn_date);
		$this->session->set_flashdata('flashSuccess','Add balance Failed');
		redirect('wallet_recharge','refresh'); */
     }












/* 	function fetch_royalty_to_admin_in_tbody()
	{
		$user_id=$this->input->post('user_id');
		$voucher_date1=$this->input->post('voucher_date1');
		$voucher_date2=$this->input->post('voucher_date2');
		$data=$this->MStoreGlobal_Modal->fetch_royalty_to_admin_in_tbody_mdl($user_id,$voucher_date1,$voucher_date2);
		echo json_encode($data);
	}
 */
		
}
