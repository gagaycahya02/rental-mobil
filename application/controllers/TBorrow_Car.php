<?php
	class TBorrow_Car extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("MTransaction");
		}

		function index()
		{
			$data['booData'] = $this->MTransaction->getBooData();
			$data['sop'] = $this->MTransaction->getIdSop();
			$data['mob'] = $this->MTransaction->getPlMob();

			$this->load->view('parts/transaction/vtborrow_car',$data);
		}

		function uPinjamMob()
		{
			$this->MTransaction->setUpdatePinjam();
			redirect('Home');
		}
	}	
?>