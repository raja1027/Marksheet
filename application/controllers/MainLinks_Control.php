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

			/* foreach($data['property_details'] as $r):
				echo $ownership=$r->religion;
			endforeach; */
		$this->load->view('next_to_add_property.php',$data);
	}
	
	
	// public function fetch_all_Locality_pagination()
	public function Locality()
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
 
		// $search_all = isset($this->input->post('search_all')) ? $this->input->post('search_all') : '';

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
