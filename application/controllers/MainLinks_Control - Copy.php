<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainLinks_Control extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		if($this->session->userdata("Global_logged_in"))
		{
			redirect("MainLinks_Control/admin_home");
		}
		$this->load->library("pagination");
    }

	public function admin_home()
	{
		$this->load->view('dashboard.php');
	}

	public function Locality()
	{
		$this->load->view('Locality.php');
	}
	
	public function City()
	{
		$this->load->view('City.php');
	}
	
	
	public function fetch_all_Locality_pagination()
	{

		/* $config['base_url'] = site_url('MainLinks_Control/fetch_all_Locality_pagination');

		$config['total_rows']=$this->Location_Modal->get_locality_count();

	    //$config['total_rows'] = $this->db->count_all('circular');

        $config['per_page'] = "10";

        $config["uri_segment"] = 3;

        $choice = $config["total_rows"]/$config["per_page"];

        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination

		$config['cur_tag_open'] = '<a href="'.base_url().$this->uri->uri_string().'">';

		$config['cur_tag_close'] = '</a>';

        $config['full_tag_open'] = '<ul class="pagination">';

        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = true;

        $config['last_link'] = true;

        $config['first_tag_open'] = '<li class="page-item">';

        $config['first_tag_close'] = '</li>';

        $config['prev_link'] = '«';

        $config['prev_tag_open'] = '<li class="prev page-item">';

        $config['prev_tag_close'] = '</li>';

        $config['next_link'] = '»';

        $config['next_tag_open'] = '<li class="page-item">';

        $config['next_tag_close'] = '</li>';

        $config['last_tag_open'] = '<li class="page-item">';

        $config['last_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active page-item"><a href="#">';

        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';

        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['locality_list'] = $this->Location_Modal->fetch_locality_pagination($config["per_page"], $data['page'], NULL);

        $data['pagination'] = $this->pagination->create_links();

		$this->load->view('Locality',$data); */

 
 
		$config = array();
        $config["base_url"] = base_url() . "fetch_all_Locality_pagination";

		$config['total_rows']=$this->Location_Modal->get_locality_count();

        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['locality_list'] = $this->Location_Modal->get_localities($config["per_page"], $page);
		$this->load->view('Locality',$data);
	}
	
	
	
	function MStore_control_login()
	{
		$comp_name=$this->input->post('comp_name');
		$u_pass=$this->input->post('u_pass');
		
		$chk=array();
		$chk['login_check_result']=$this->MStoreLogin_Modal->check_Mstore_login($comp_name,$u_pass);
		
		if($chk['login_check_result']==TRUE)
		{
			foreach($chk['login_check_result'] as $r):
				$login_user_id=$r->user_id;
				$depo_store_cat=$r->depo_store_cat;
				
				$this->session->set_userdata("MStorelogged_in",$login_user_id);
				if($depo_store_cat==2)
				{
				}
				else
				{
					$this->session->set_userdata("MStorelogged_in_depo",$depo_store_cat);
				}
				
				$loginid= $this->session->userdata('MStorelogged_in');
				
				echo $loginid;
				redirect('MStoreDash_Control/mstore_panel_dashboard');
			endforeach;
		}
		else
		{
			$this->session->set_flashdata('flashSuccess', 'Invalid User Name or Password Please try again!');
			$this->load->view('Store_module/store_login');
		}
	}
	
}
