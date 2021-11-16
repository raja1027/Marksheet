<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_marksheet_global extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
    }

	public function students_list()
	{

		$search_all = isset($_POST['search_all']) ? $_POST['search_all'] : NULL;
		$short_by = isset($_POST['short_by']) ? $_POST['short_by'] : 'ASC';
		$short_field = isset($_POST['short_field']) ? $_POST['short_field'] : 'stud_name';
		
		$config = array();
        $config["base_url"] = base_url() . "students_list";

		$config['total_rows']=$this->Open_marksheet_Modal->fetch_getstudents_count($search_all,$short_by,$short_field);

        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        // $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();
		
		$data['search_all']=$search_all;
		$data['short_by']=$short_by;

        // $data['locality_list'] = $this->Location_Modal->get_localities($config["per_page"], $data['page'],$search_all);
        $data['student_list'] = $this->Open_marksheet_Modal->fetch_getstudents($config["per_page"], $data['page'],$search_all,$short_by,$short_field);
		$this->load->view('students_list',$data);
	}

}
