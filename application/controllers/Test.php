<?php
	class Test extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("MData");
			$this->load->model("MKendaraan");
		}

		function index()
		{
			$this->load->view('Test');
		}

		function showServices()
		{
			echo json_encode($this->MData->showDJServices());
		}
	}
?>