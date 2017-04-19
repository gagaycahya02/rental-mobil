<?php
	// Login Class
	class Login extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			// Load model
			$this->load->model("M_Data");

			if($this->session->userdata('logged_in') == TRUE)
			{
				redirect("Home");
			}
		}

		// Login Page
		public function index()
		{
			$this->load->view('v_login');
			//echo "a";
		}

		function subLoginClick()
		{
			if($this->input->post('subLogin'))
			{
				$this->M_Data->checkUserData();
				
				//echo "ok";
			}else
			{	
				//echo "error";
				redirect($this);
			}
		}
	}
?>