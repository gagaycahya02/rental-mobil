<?php
	class L_Karyawan extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MData');
		}

		function index()
		{
			$data['karyawan'] = $this->MData->showDataKaryawan();
			$this->load->view('parts/report',$data);
		}
	}
?>