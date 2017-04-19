<?php
	class Booking extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MTransaction');
			$this->load->model("MData");
		}

		function index()
		{
			$data['nktp'] = $this->MData->showDataPlgn();
			$data['plMob'] = $this->MData->showDataKendaraan();
			$data['idSop'] = $this->MData->showDataSop();
			$data['test'] = $this->MData->getKdPemilik();
 
			$this->load->view('parts/transaction/vtbooking_car',$data);
		}

		function inputBooking()
		{
			$this->MTransaction->setInputBooking();
			redirect('Home');
		}

		function t()
		{
			echo $this->MData->getFakturTransaksiSewa();
		}
	}
?>