<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStoreLocation_Control extends CI_Controller {

	public function __construct()
	{

        parent:: __construct();

    }




	public function save_store_state_location()
	{
		$state_name=$this->input->post('state_name');
		$state_code=$this->input->post('state_code');
		$state_note=$this->input->post('state_note');
		
		$this->MStoreLocation_Modal->save_store_statelocation_do($state_name,$state_code,$state_note);
		$this->session->set_flashdata('flashSuccess', 'State Data has been Saved');
		//$this->load->view('Store_module/Masters/Location/location_states');
		redirect("MStorelinks_Control/location_states");
	}
	
	
	
	public function fetch_store_state_location()
	{
		$config['base_url'] = site_url('MStoreLocation_Control/fetch_store_state_location');

		//$config['total_rows']=$this->MStoreLocation_Modal->fetch_store_state_location($cookie_id);
		
		$config['total_rows']=$this->MStoreLocation_Modal->fetch_store_state_location();
	    //$config['total_rows'] = $this->db->count_all('circular');
        $config['per_page'] = "12";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);
        // integrate bootstrap pagination

		$config['cur_tag_open'] = '<a href="'.base_url().$this->uri->uri_string().'">';
		$config['cur_tag_close'] = '</a>';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        // get circularlist

        $data['state_list'] = $this->MStoreLocation_Modal->fetch_store_state_location_search($config["per_page"], $data['page'], NULL);

		//$data['header_navigation']=$this->Admin_model->get_navigation($cookie_id);

        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('Store_module/Masters/Location/location_states',$data);
	}
	
	
	
	public function fetch_search_store_state_location()
	{
		$search_state=$this->input->post('search_state');
		$config['base_url'] = site_url('MStoreLocation_Control/fetch_searched_store_state_location');

		//$config['total_rows']=$this->MStoreLocation_Modal->fetch_store_state_location($cookie_id);
		
		$config['total_rows']=$this->MStoreLocation_Modal->fetch_searched_store_state_location($search_state);
	    
		
		//$config['total_rows'] = $this->db->count_all('circular');
        $config['per_page'] = "12";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);
        // integrate bootstrap pagination

		$config['cur_tag_open'] = '<a href="'.base_url().$this->uri->uri_string().'">';
		$config['cur_tag_close'] = '</a>';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = true;
		$config['last_link'] = true;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        // get circularlist

        $data['state_list'] = $this->MStoreLocation_Modal->fetch_store_state_location_search($config["per_page"], $data['page'], NULL);

		//$data['header_navigation']=$this->Admin_model->get_navigation($cookie_id);

        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('Store_module/Masters/Location/location_states',$data);
	}
}
