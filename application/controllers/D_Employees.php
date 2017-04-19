<?php
	class D_Employees extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("M_Data");
			$this->load->model("MKaryawan");
			$this->load->model("MData");
		}

		function index()
		{
			$data['karyawan'] = $this->M_Data->getKaryawan();
			$this->load->view('parts/data/vd_employees',$data);
		}

		function inpKaryawan()
		{
			$this->MKaryawan->setInsertKaryawan();
		}

		function updaKaryawan()
		{
			$this->MKaryawan->setUpdateKaryawan();
		}

		function delKaryawan($x)
		{
			$this->MKaryawan->setDeleteKaryawan($x);
		}
	}
?>