<?php
	// Home Class
	class Home extends CI_Controller
	{
		// Home Constructor
		public function __construct()
		{
			// Call CI_Controller constructor
			parent::__construct();
			$this->load->model("MData");

			if($this->session->userdata("logged_in") == FALSE)
			{
				redirect("Login");
			}

			$this->load->library('user_agent');
		}

		// Home Page
		public function index()
		{
			// Call v_home
			$this->load->view('v_home');
		}

		function logout()
		{
			$x = session_destroy();

			if($x == TRUE)
			{
				redirect("Login");
			}
		}

		function getSession()
		{
			$tuser = $this->session->typeuser;
			echo json_encode($tuser);
		}

		function uMobOtomatis()
		{
			$this->MData->updateMobilOtomatis();
		}

		function uMobOtomatisService()
		{
			$this->MData->updateMobilOtomatisService();
		}
	}
?>