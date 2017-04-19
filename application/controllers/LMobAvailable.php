<?php
	class LMobAvailable extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MData');
		}

		function index()
		{
			$data['mob'] = $this->MData->showDataKendaraan();
			$this->load->view('parts/laporan/LMobAvailable',$data);
		}
	}
?>