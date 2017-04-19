<?php
	class LMobPengeluaranPerServices extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MData');
		}

		function index()
		{
			$this->load->view('parts/laporan/LMobPengeluaranPerServices');
		}

		function getMobPengeluaran($x,$y)
		{
			echo json_encode($this->MData->getMobPengeluaranService($x,$y));
		}
	}
?>