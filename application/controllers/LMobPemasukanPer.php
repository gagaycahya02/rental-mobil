<?php
	class LMobPemasukanPer extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MData');
		}

		function index()
		{
			$this->load->view('parts/laporan/LMobPemasukanPer');
		}

		function getMobPemasukan($x,$y)
		{
			echo json_encode($this->MData->getMobPemasukan($x,$y));
		}
	}
?>