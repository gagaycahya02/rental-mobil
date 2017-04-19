<?php
	class LStatusMobil extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MData');
		}

		function index()
		{
			$data['stsmob'] = $this->MData->getDataStatus();
			$this->load->view('parts/laporan/LStatusMobil',$data);
		}
	}
?>