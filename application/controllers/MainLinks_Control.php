<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainLinks_Control extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		if(!$this->session->userdata("Global_logged_in"))
		{
			redirect("admin_login");
		}
		$this->load->library("pagination");
    }

	public function admin_home()
	{
		$this->load->view('dashboard.php');
	}
	
	public function Add_Mark_Sheet()
	{
		$this->load->view('Add_Mark_Sheet.php');
	}
	
	public function ResidencialProperty()
	{
		$this->load->view('residencial_property.php');
	}
	
	public function next_to_add_property()
	{
		$prop_id=$this->session->userdata('current_prop_id');
		$data['property_details']=$this->Property_Modal->fetch_property_details_by_id($prop_id);
		$data['location_details']=$this->Location_Modal->get_all_localities_mdl();

		$this->load->view('next_to_add_property.php',$data);
	}
	
	
	// public function fetch_all_Locality_pagination()
	public function Locality()
	{

		$search_all = isset($_POST['search_all']) ? $_POST['search_all'] : NULL;
		
		$config = array();
        $config["base_url"] = base_url() . "Locality";

		$config['total_rows']=$this->Location_Modal->get_locality_count($search_all);

        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        // $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();
		
		$data['search_all']=$search_all;

        // $data['locality_list'] = $this->Location_Modal->get_localities($config["per_page"], $data['page'],$search_all);
        $data['locality_list'] = $this->Location_Modal->fetch_locality_pagination($config["per_page"], $data['page'],$search_all);
		$this->load->view('Locality',$data);
	}
	
	public function admin_logout()
	{
		$this->session->unset_userdata("Global_logged_in");
		redirect('admin_login');
	}
	
	
	
}
