<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musers_login_signup_Control extends CI_Controller {

	public function __construct()
	{
        parent:: __construct();
		header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Origin, Content-Type");
        $json          =  file_get_contents('php://input');
        $this->input   =  json_decode($json,true);
    }
 

	function chk_user_send_otp_signup()
	{
	   
		$user_mobile=$this->input['user_mobile'];
		
		$data_chk=$this->Adminsave_user_signup_Modal->chk_user_send_otp_signup_mdl($user_mobile);
		if(!empty($data_chk))
		{
			$data_final['all_data']="";
			$data_final['status']='1';
			$data_final['message']='Data Found!';
			$data_final['sent_otp']="";
			
			echo json_encode($data_final);
		}
		else
		{
			$otp_generate=rand(500000,999999);
			$data_final['all_data']=$data_chk;
			$data_final['status']='0';
			$data_final['sent_otp']=$otp_generate;
			$data_final['message']='New Registration & OTP Sent!';
			
			echo json_encode($data_final);

			$message="Your OTP for soswholesaler app is ".$otp_generate.".Powered by https://wholesaler.com .";
			$number=$user_mobile;
			$url = 'http://panel.msgclub.net/sendhttp.php';
			$customer = 'SOSBZR'; //user id
			$key = '442498';  //user password
			$request = $url.'?user='.$customer.'&password='.$key.'&mobiles='.urlencode($number).'&message='.urlencode($message).'&sender=SOSBZR&ignoreNdnc=4';
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $request);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$response = curl_exec($ch);
			curl_close($ch);
			//print_r($response);
			
		}

	}



	function save_user_signup()
	{
	    // header('Access-Control-Allow-Origin: *'); 
		$user_name=$this->input['user_name'];
		$user_mobile=$this->input['user_mobile'];
		$user_mail=$this->input['user_mail'];
		$user_address=$this->input['user_address'];
		$user_pass=$this->input['user_pass'];
		
		/* $data_chk=$this->Adminsave_user_signup_Modal->check_existing_mobile_user_signup_mdl($user_mobile);
		if(!empty($data_chk))
		{ */
			$data_final_chk=$this->Adminsave_user_signup_Modal->save_user_signup_mdl($user_name,$user_mobile,$user_mail,$user_address,$user_pass);
			if(!empty($data_final_chk))
			{
				$data_final['status']='1';
				$data_final['message']='Data Has Been Saved!';
				
				echo json_encode($data_final);
			}
			else
			{
				$data_final['status']='0';
				$data_final['message']='Data Not Found!';
				
				echo json_encode($data_final);
			}
		// }

	}




	function check_user_login()
	{
	    // header('Access-Control-Allow-Origin: *'); 
		header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: Origin, Content-Type");
        $json          =  file_get_contents('php://input');
        $this->input   =  json_decode($json,true);
		$user_mobile=$this->input['user_mobile'];
		$user_pass=$this->input['user_pass'];
		$data_chk=$this->Adminsave_user_signup_Modal->check_user_login_mdl($user_mobile,$user_pass);
		if(!empty($data_chk))
		{
			$data_final['all_data']=$data_chk;
			$data_final['status']='1';
			$data_final['message']='Data Found!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']="";
			$data_final['status']='0';
			$data_final['message']='Data Not Found!';
			
			echo json_encode($data_final);
		}
	}
	



	function fetch_muser_profile()
	{
	    // header('Access-Control-Allow-Origin: *'); 
		$muser_id=$this->input['muser_id'];
		$data_chk=$this->Adminsave_user_signup_Modal->fetch_muser_profile_mdl($muser_id);
		if(!empty($data_chk))
		{
			$data_final['all_data']=$data_chk;
			$data_final['status']='1';
			$data_final['message']='Data Found!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']="";
			$data_final['status']='0';
			$data_final['message']='Data Not Found!';
			
			echo json_encode($data_final);
		}
	}
	
	
 
	
	

	
	
	

	
	 
	function chk_user_send_otp_forget_pass()
	{
	    // header('Access-Control-Allow-Origin: *'); 
		$user_mobile=$this->input['user_mobile'];
		
		$data_chk=$this->Adminsave_user_signup_Modal->chk_user_send_otp_signup_mdl($user_mobile);
		if(!empty($data_chk))
		{
			$otp_generate=rand(500000,999999);
			$data_final['all_data']=$data_chk;
			$data_final['status']='1';
			$data_final['sent_otp']=$otp_generate;
			$data_final['message']='User Found & OTP Sent!';
			
			echo json_encode($data_final);

			$message="Your OTP for soswholesaler app is ".$otp_generate.".Powered by https://wholesaler.com .";
			$number=$user_mobile;
			$url = 'http://panel.msgclub.net/sendhttp.php';
			$customer = 'SOSBZR'; //user id
			$key = '442498';  //user password
			$request = $url.'?user='.$customer.'&password='.$key.'&mobiles='.urlencode($number).'&message='.urlencode($message).'&sender=SOSBZR&ignoreNdnc=4';
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $request);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$response = curl_exec($ch);
			curl_close($ch);
		}
		else
		{
			$data_final['all_data']="";
			$data_final['status']='0';
			$data_final['message']='User Not Found!';
			$data_final['sent_otp']="";
			
			echo json_encode($data_final);
		}

	}

 

	function update_muser_password()
	{
	    // header('Access-Control-Allow-Origin: *'); 
		$muser_id=$this->input['muser_id'];
		$user_pass=$this->input['user_pass'];
		$data_chk=$this->Adminsave_user_signup_Modal->update_muser_password_mdl($muser_id,$user_pass);
		if(!empty($data_chk))
		{
			$data_final['all_data']=$data_chk;
			$data_final['status']='1';
			$data_final['message']='Password Updated!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']="";
			$data_final['status']='0';
			$data_final['message']='Password not Updated Try Again..';
			
			echo json_encode($data_final);
		}
	}
	
 
	
	function update_muser_acc_details()
	{
	    // header('Access-Control-Allow-Origin: *'); 
		$muser_id=$this->input['muser_id'];
		$muser_name=$this->input['muser_name'];
		$muser_email=$this->input['muser_email'];
		$muser_address=$this->input['muser_address'];
		$muser_pass=$this->input['muser_pass'];
		$data_chk=$this->Adminsave_user_signup_Modal->update_muser_acc_details_mdl($muser_id,$muser_name,$muser_email,$muser_address,$user_pass);
		if(!empty($data_chk))
		{
			$data_final['all_data']=$data_chk;
			$data_final['status']='1';
			$data_final['message']='Account Updated!';
			
			echo json_encode($data_final);
		}
		else
		{
			$data_final['all_data']="";
			$data_final['status']='0';
			$data_final['message']='Account not Updated Try Again..';
			
			echo json_encode($data_final);
		}
	}
	

	

}




