<?php
	class TReturns_Car extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('MTransaction');
			$this->load->model('MReturnKendaraan');
			$this->load->model('MData');
		}

		function index()
		{
			$data['dKembali'] = $this->MTransaction->getDKembali();
			$this->load->view('parts/transaction/vtreturns_car',$data);
		}

		function denda($x)
		{
			$a = $this->MTransaction->getDenda($x);
			echo json_encode($a);
		}

		function uKembaliMob()
		{
			$this->MReturnKendaraan->updateKendaraan();
		}

		function getTarif($a)
		{
			echo json_encode($this->MData->getMobilPengembalian($a));
		}
	}
?>