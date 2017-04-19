<?php
	class TBooking_Car extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MTransaction');
			$this->load->model("MData");
		}

		function index()
		{
			$data = array(
				'nktp'	=> $this->MData->showDataPlgn(),
				'plMob' => $this->MData->showDataKendaraan(),
				'idSop' => $this->MData->showDataSop()
			);

			$this->load->view('parts/transaction/vtbooking_car',$data);
		}

		function inputBooking()
		{
			$this->MTransaction->setInputBooking();
		}

		function updateMob($x)
		{
			$this->MTransaction->setUpdateMobil($x);
		}

		function kode()
		{
			echo $this->MData->getFakturTransaksiSewa();
		}
	}
?>