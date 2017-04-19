<?php
	class LMobPengeluaranPerSetoran extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MData');
		}

		function index()
		{
			$this->load->view('parts/laporan/LMobPengeluaranPerSetoran');
		}

		function getSetoran($x,$y)
		{
			echo json_encode($this->MData->getMobSetoran($x,$y));
		}
	}
?>