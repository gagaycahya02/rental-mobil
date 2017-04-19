<?php
	class TDeposit_Car extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MData');
			$this->load->model('MTransaction');
		}

		function index()
		{
			$data['setoran'] = $this->MData->getMobSet();
			$this->load->view('parts/transaction/vtdeposit_car',$data);
		}

		function getSetoran($x)
		{
			echo json_encode($this->MData->getMobSetoran());
		}

		function inputSetoran()
		{
			$this->MTransaction->setInputSetoran();
		}
	}
?>