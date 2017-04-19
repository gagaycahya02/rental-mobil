<?php
	class TServices_Car extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MData');
			$this->load->model('MTransaction');
		}

		function index()
		{
			$data['mobil'] = $this->MData->showDataKend();
			$data['jServices'] = $this->MData->showDataJServices();
			$this->load->view('parts/transaction/vtservices_car',$data);
		}

		function insertServices()
		{
			$this->MTransaction->setInputServices();
			redirect('Home');
		}
	}
?>