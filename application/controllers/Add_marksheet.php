<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_marksheet extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
    }

	public function save_marksheet()
	{
		//echo "dasdasdasd";
		$student_name=$this->input->post('student_name');

		$student_class=$this->input->post('student_class');

		$roll_no=$this->input->post('roll_no');


		$maths_marks=$this->input->post('maths_marks');

		$phy_marks=$this->input->post('phy_marks');

		$chem_marks=$this->input->post('chem_marks');

		$hindi_marks=$this->input->post('hindi_marks');

		$english_marks=$this->input->post('english_marks');

		$total_ontained_marks=$this->input->post('total_ontained_marks');

		$total_score_percentage=$this->input->post('total_score_percentage');



		$config['upload_path'] = './passport_images/';

		// $config['allowed_types'] = '*';
		$config['allowed_types'] = 'jpeg|jpg|png';

		$config['max_width']  = '1024909';

		$config['max_height']  = '768909';

		$this->load->library('upload', $config); 

		if ( ! $this->upload->do_upload('passport_size_photo'))
		{
			echo "Can't Upload Image";

		}
		else
		{
			$upload_data = $this->upload->data();
			$passport_size_photo=$upload_data['file_name'];

			$data=$this->Add_marksheet_Modal->add_marksheet_do($student_name,$student_class,$roll_no,$maths_marks,$phy_marks,$chem_marks,$hindi_marks,$english_marks,$passport_size_photo,$total_ontained_marks,$total_score_percentage);
			
			echo "Saved";
		} 
			// echo "Saved";
		
		
	}

}
