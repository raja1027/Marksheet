<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_marksheet extends CI_Controller
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

	public function getstudents()
	{

		$search_all = isset($_POST['search_all']) ? $_POST['search_all'] : NULL;

		$config = array();
        $config["base_url"] = base_url() . "getstudents";

		$config['total_rows']=$this->Add_marksheet_Modal->fetch_getstudents_count($search_all);

        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();
		
		$data['search_all']=$search_all;

        $data['student_list'] = $this->Add_marksheet_Modal->fetch_getstudents($config["per_page"], $data['page'],$search_all);
		$this->load->view('getstudents',$data);
	}

	public function getstudents_param()
	{

		// echo $stud_name =  $this->uri->segment(2);
		$stud_name =  $this->uri->segment(2);
		$class =  $this->uri->segment(3);
		$roll_no =  $this->uri->segment(4);
		$total_score_percentage =  $this->uri->segment(5);

		$search_all = isset($_POST['search_all']) ? $_POST['search_all'] : NULL;

		$config = array();
        $config["base_url"] = base_url() . "getstudents";

		$config['total_rows']=$this->Add_marksheet_Modal->fetch_getstudents_count_param($search_all,$stud_name,$class,$roll_no,$total_score_percentage);

        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();
		
		$data['search_all']=$search_all;

        $data['student_list'] = $this->Add_marksheet_Modal->fetch_getstudents_param($config["per_page"], $data['page'],$search_all,$stud_name,$class,$roll_no,$total_score_percentage);
		
		// echo json_encode($data);
		
		$this->load->view('getstudents',$data);
	}

	public function getstudents_param2()
	{

		$stud_name=isset($_GET['stud_name']) ? $_GET['stud_name'] : '';
		$class=isset($_GET['class']) ? $_GET['class'] : '';
		$roll_no=isset($_GET['roll_no']) ? $_GET['roll_no'] : '';
		$total_score_percentage=isset($_GET['total_score_percentage']) ? $_GET['total_score_percentage'] : '';
		
		// $stud_name=$this->input->get('stud_name');
		// $class=$this->input->get('class');
		// $roll_no=$this->input->get('roll_no');
		// $total_score_percentage=$this->input->get('total_score_percentage');




		// echo $stud_name =  $this->uri->segment(2);
		// $stud_name =  $this->uri->segment(2);
		// $class =  $this->uri->segment(3);
		// $roll_no =  $this->uri->segment(4);
		// $total_score_percentage =  $this->uri->segment(5);

		$search_all = isset($_POST['search_all']) ? $_POST['search_all'] : NULL;

		$config = array();
        $config["base_url"] = base_url() . "getstudents";

		$config['total_rows']=$this->Add_marksheet_Modal->fetch_getstudents_count_param($search_all,$stud_name,$class,$roll_no,$total_score_percentage);

        $config["per_page"] = 10;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();
		
		$data['search_all']=$search_all;

        $data['student_list'] = $this->Add_marksheet_Modal->fetch_getstudents_param($config["per_page"], $data['page'],$search_all,$stud_name,$class,$roll_no,$total_score_percentage);
		
		// echo json_encode($data);
		
		$this->load->view('getstudents',$data);
	}

}
