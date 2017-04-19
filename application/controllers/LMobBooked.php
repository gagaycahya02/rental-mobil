<?php
	class LMobBooked extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MData');
		}

		function index()
		{
			$data['mob'] = $this->MData->showDataKendaraanBooked();
			$this->load->view('parts/laporan/LMobBooked',$data);
		}
	}
?>