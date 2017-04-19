<?php
	class D_Car extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("MData");
			$this->load->model("MKendaraan");
		}

		function index() 
		{
			$data['car'] = $this->MData->showDataMbl();
			$this->load->view('parts/data/vd_car',$data);
		}

		function showKendaraan($id)
		{
			$x = $this->MKendaraan->getKendaraan($id);
			echo json_encode($x);
		}

		function delKendaraan($y)
		{
			$x = $this->MKendaraan->setDeleteKendaraan($y);
		}	

		function inpKendaraan()
		{
			$y = $this->MKendaraan->setInputKendaraan();
		}

		function updaKendaraan()
		{
			$y = $this->MKendaraan->setUpdateKendaraan();
		}

		function showServices()
		{
			$this->MData->showDJServices();
		}
	}
?>