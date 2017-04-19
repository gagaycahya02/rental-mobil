<?php
	class LService extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("MData");
		}

		function index()
		{
			$data['ser'] = $this->MData->getMobSer();
			$this->load->view('parts/laporan/LService',$data);
		}

		function getMobServ()
		{
			$this->MData->getMobSer();
		}
	}
?>