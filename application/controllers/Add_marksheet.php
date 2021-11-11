<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_marksheet extends CI_Controller
{
	public function __construct()
	{
        parent:: __construct();
		// if(!$this->session->userdata("Global_logged_in"))
		// {
			// redirect("Login_Control/admin_login");
		// }
    }

	function save_marksheet()
	{
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
			// $data=$this->Property_Modal->update_property_no_img_do($ownership,$location,$phone,$exphone,$pincode,$paddress,$cost,$bhk,$furnishing,$floornumbers,$food,$religion,$agent,$propertycategory,$propertytype,$handleby,$occupation,$bcondition,$facing,$areasize,$security_amt,$majority,$yesno,$chk1,$aboutproperty,$datevacant,$chk_mark_alloted,$dateallot,$dateexpectvac,$checked_aminities,$prop_id);

		}
		else
		{
			$upload_data = $this->upload->data();
			$file_property=$upload_data['file_name'];

			// $data=$this->Property_Modal->update_property_do($ownership,$location,$phone,$exphone,$pincode,$paddress,$cost,$bhk,$furnishing,$floornumbers,$food,$religion,$agent,$propertycategory,$propertytype,$handleby,$occupation,$bcondition,$facing,$areasize,$security_amt,$majority,$yesno,$chk1,$aboutproperty,$datevacant,$chk_mark_alloted,$dateallot,$dateexpectvac,$checked_aminities,$prop_id,$file_property);
			
			// if($data=='1')
			// {
				
			// }
		}
		
	}

}
